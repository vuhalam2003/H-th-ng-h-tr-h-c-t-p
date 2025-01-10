from flask import Flask, request, jsonify
import mysql.connector
import json
import requests
import re
from decimal import Decimal
from gevent.pywsgi import WSGIServer


app = Flask(__name__)

def connect_db():
    """Kết nối cơ sở dữ liệu MySQL."""
    return mysql.connector.connect(
        host="localhost",
        user="root",          # Thay bằng thông tin của bạn
        password="",          # Thay bằng thông tin của bạn
        database="htkdtm"     # Tên cơ sở dữ liệu
    )

def get_users_from_db(user_ids):
    """Lấy thông tin người dùng từ bảng `users` theo danh sách user_id."""
    try:
        conn = connect_db()
        cursor = conn.cursor()
        query = "SELECT id, name, GPA, role, desired_job FROM users WHERE id IN (%s)" % ','.join(['%s'] * len(user_ids))
        cursor.execute(query, tuple(user_ids))
        users = cursor.fetchall()
        cursor.close()
        conn.close()

        users_list = []
        for user in users:
            users_list.append({
                "id": user[0],
                "name": user[1],
                "GPA": float(user[2]) if isinstance(user[2], Decimal) else user[2],
                "role": user[3],
                "desired_job": user[4]
            })
        return users_list
    except Exception as e:
        print(f"Đã xảy ra lỗi khi lấy dữ liệu từ DB: {str(e)}")
        return []

def get_courses_from_db():
    """Lấy danh sách các khóa học từ bảng `khoa_hoc`."""
    try:
        conn = connect_db()
        cursor = conn.cursor()
        cursor.execute("SELECT id, ten FROM khoa_hoc")
        courses = cursor.fetchall()
        cursor.close()
        conn.close()

        return {course[1]: course[0] for course in courses}
    except Exception as e:
        print(f"Đã xảy ra lỗi khi lấy dữ liệu từ bảng `khoa_hoc`: {str(e)}")
        return {}

def generate_prompt(users):
    """Tạo prompt để gửi đến LLM."""
    courses = get_courses_from_db()
    prompt = f"""Context:
Người dùng:
{json.dumps(users, indent=4)}

Khóa học:
{json.dumps(list(courses.keys()), indent=4)}

Question:
    Dựa trên thông tin trong context, hãy trả về một file JSON danh sách các khóa học phù hợp cho từng user. 
    Mỗi user nên có ít nhất một khóa học, dựa trên:
    - desired_job, hãy đưa ra khóa học phù hợp với vị trí công việc mong muốn này
    - chỉ dựa vào danh sách khóa học có trong bảng khoa_hoc
    - mỗi người ít nhất 5 khóa học
    - course_id là dạng số nguyên như ở trong bảng khoa_hoc
    - không trả về bất cứ thông tin nào khác ngoài JSON
    Chỉ trả về kết quả dưới dạng JSON như sau, không giải thích, không phân tích:
    [
    {{"user_id": user_id, "course_ids": [course_ids]}}
    ]"""
    return prompt

def fetch_courses_from_llm(prompt):
    """Gửi prompt đến LLM và nhận lại danh sách khóa học phù hợp."""
    try:
        response = requests.post(
            url="https://openrouter.ai/api/v1/chat/completions",
            headers={
                "Authorization": "Bearer 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",
                "HTTP-Referer": "localhost",
                "X-Title": "localhost"
            },
            data=json.dumps({
                "model": "meta-llama/llama-3.1-405b-instruct:free",
                "messages": [{"role": "user", "content": prompt}]
            })
        )

        if response.status_code == 200:
            response_data = response.text
            match = re.search(r"```json(.*?)```", response_data, re.S)
            if match:
                json_content = match.group(1).strip()
                cleaned_json_content = json_content.replace("\\n", "").replace("\\\"", "\"").strip()
                return json.loads(cleaned_json_content)
        return []
    except Exception as e:
        print(f"Đã xảy ra lỗi khi gọi LLM: {str(e)}")
        return []

def insert_courses_to_db(course_data):
    """Chèn danh sách khóa học vào bảng `user_khoa_hoc`."""
    try:
        conn = connect_db()
        cursor = conn.cursor()
        for user in course_data:
            user_id = user["user_id"]
            course_ids = user["course_ids"]
            for course_id in course_ids:
                cursor.execute(
                    "INSERT INTO user_khoa_hoc (user_id, khoa_hoc_id, goi_y, created_at, updated_at) VALUES (%s, %s, %s, NOW(), NOW())",
                    (user_id, course_id, 1)
                )
        conn.commit()
        cursor.close()
        conn.close()
    except Exception as e:
        print(f"Đã xảy ra lỗi khi chèn dữ liệu: {str(e)}")

@app.route('/update_courses', methods=['POST'])
def update_courses():
    """API để xử lý khi cập nhật `desired_job`."""
    user_ids = request.json.get("user_ids", [])
    if not user_ids:
        return jsonify({"error": "user_ids không được để trống"}), 400

    users = get_users_from_db(user_ids)
    prompt = generate_prompt(users)
    course_data = fetch_courses_from_llm(prompt)
    insert_courses_to_db(course_data)

    return jsonify({"message": "Đã xử lý thành công."}), 200

if __name__ == "__main__":
    http_server = WSGIServer(("127.0.0.1", 5000), app)
    http_server.serve_forever()
