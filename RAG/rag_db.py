import mysql.connector
import json
import requests
import re

from decimal import Decimal

def get_users_from_db():
    """
    Lấy thông tin người dùng từ bảng `users` trong cơ sở dữ liệu.
    """
    try:
        cursor.execute("SELECT id, name, GPA, role, desired_job FROM users")
        users = cursor.fetchall()
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
    """
    Lấy danh sách các khóa học từ bảng `khoa_hoc`.
    """
    try:
        cursor.execute("SELECT id, ten FROM khoa_hoc")
        courses = cursor.fetchall()
        return {course[1]: course[0] for course in courses}
    except Exception as e:
        print(f"Đã xảy ra lỗi khi lấy dữ liệu từ bảng `khoa_hoc`: {str(e)}")
        return {}

def generate_prompt(users):
    """
    Tạo prompt để gửi đến LLM.
    """
    # Lấy danh sách khóa học từ DB
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
    {{
        \"user_id\": user_id,
        \"course_ids\": [course_ids]
    }}
    ]"""
    return prompt

def fetch_courses_from_llm(prompt):
    """
    Gửi prompt đến LLM và nhận lại danh sách khóa học phù hợp.
    """
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

        print(f"Trạng thái API: {response.status_code}")
        print(f"Nội dung phản hồi: {response.text}")

        if response.status_code == 200:
            response_data = response.text

            # Tìm JSON được bao quanh bởi dấu ```json
            match = re.search(r"```json(.*?)```", response_data, re.S)
            if match:
                json_content = match.group(1).strip()

                # Làm sạch JSON: loại bỏ \n và các ký tự escape
                cleaned_json_content = json_content.replace("\\n", "").replace("\\\"", "\"").strip()

                try:
                    # Lưu nội dung phản hồi vào file JSON
                    with open("response_data.json", "w", encoding="utf-8") as file:
                        json.dump(json.loads(cleaned_json_content), file, indent=4, ensure_ascii=False)

                    # Trả về nội dung JSON đã giải mã
                    return json.loads(cleaned_json_content)
                except json.JSONDecodeError as e:
                    print(f"Lỗi JSONDecodeError: {str(e)}")
                    print(f"Nội dung JSON không hợp lệ: {cleaned_json_content}")
                    return []
            else:
                print("Không tìm thấy JSON trong phản hồi.")
                return []
        else:
            print(f"Lỗi API: Mã lỗi {response.status_code}, Thông báo: {response.text}")
            return []
    except Exception as e:
        print(f"Đã xảy ra lỗi khi gọi LLM: {str(e)}")
        return []


def insert_courses_to_db(course_data):
    """
    Chèn danh sách khóa học vào bảng `user_khoa_hoc`.
    """
    try:
        for user in course_data:
            user_id = user["user_id"]
            course_ids = user["course_ids"]

            for course_id in course_ids:
                print(f"Đang chèn: user_id={user_id}, course_id={course_id}")
                cursor.execute(
                    "INSERT INTO user_khoa_hoc (user_id, khoa_hoc_id, created_at, updated_at) VALUES (%s, %s, NOW(), NOW())",
                    (user_id, course_id)
                )
        conn.commit()
        print("Dữ liệu đã được chèn vào bảng `user_khoa_hoc`.")
    except Exception as e:
        print(f"Đã xảy ra lỗi khi chèn dữ liệu: {str(e)}")

if __name__ == "__main__":
    # Kết nối cơ sở dữ liệu MySQL
    conn = mysql.connector.connect(
        host="localhost",
        user="root",          # Tên người dùng MySQL của bạn
        password="",          # Mật khẩu của bạn (nếu không có thì để trống)
        database="htkdtm"     # Tên cơ sở dữ liệu của bạn
    )
    cursor = conn.cursor()

    # Bước 1: Lấy danh sách người dùng từ DB
    users = get_users_from_db()

    # Bước 2: Tạo prompt cho LLM
    prompt = generate_prompt(users)

    # Bước 3: Gửi prompt đến LLM để nhận danh sách khóa học phù hợp
    course_data = fetch_courses_from_llm(prompt)

    # Bước 4: Chèn dữ liệu vào bảng `user_khoa_hoc`
    insert_courses_to_db(course_data)

    # Đóng kết nối
    conn.close()