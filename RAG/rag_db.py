import json
import requests
import re
import gevent
from gevent.pywsgi import WSGIServer
from flask import Flask, request, jsonify
import mysql.connector
import time
import google.generativeai as genai
from google.generativeai import GenerationConfig


genai.configure(api_key="AIzaSyCQw-HzZhaIHPkKQ9mPXsx7yLCfLTUbkaQ")


# Tạo danh sách khóa học tĩnh
COURSES = [
    {"id": 1, "name": "Cấu trúc dữ liệu và giải thuật"},
    {"id": 2, "name": "An toàn bảo mật thông tin"},
    {"id": 3, "name": "Hệ điều hành"},
    {"id": 4, "name": "Lập trình Java"},
    {"id": 5, "name": "Kiến trúc máy tính"},
    {"id": 6, "name": "Nhập môn học máy và khai phá dữ liệu"},
    {"id": 7, "name": "Mạng máy tính"},
    {"id": 8, "name": "Lập trình hướng đối tượng"},
    {"id": 9, "name": "Phân tích thiết kế hệ thống"},
    {"id": 10, "name": "Toán rời rạc"},
    {"id": 11, "name": "Lập trình C++"},
    {"id": 12, "name": "Cơ sở dữ liệu"},
    {"id": 13, "name": "Lập trình mạng"},
    {"id": 14, "name": "Lập trình nhúng"},
    {"id": 15, "name": "Quản trị dự án CNTT"}
]

app = Flask(__name__)

# Kết nối cơ sở dữ liệu MySQL
conn = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="htkdtm"
)
cursor = conn.cursor()

def generate_prompt(user_id, desired_job):
    """
    Tạo prompt để gửi đến LLM.
    """
    user_context = {"user_id": user_id, "desired_job": desired_job}
    course_names = [course["name"] for course in COURSES]

    prompt = f"""Context:
User:
{json.dumps(user_context, indent=4)}

Courses:
{json.dumps(course_names, indent=4)}

Question:
    Dựa trên thông tin trong context, hãy trả về một danh sách các khóa học phù hợp cho user dựa trên công việc mong muốn. 
    - Phản hồi càng ngắn càng tốt
    - Chỉ dựa vào danh sách khóa học có trong mục "Courses"
    - course_id phải nằm ở dạng số nguyên
    - Kết quả phải có dạng JSON:
    {{"user_id": user_id, "course_ids": [course_ids]}}
"""
    return prompt

def fetch_courses_from_llm(prompt):
    """
    Gửi prompt đến Google Generative AI và nhận lại danh sách khóa học phù hợp.
    """
    while True:
        try:
            # Sử dụng mô hình cụ thể để tạo nội dung
            model = genai.GenerativeModel("gemini-1.5-flash")  # Thay thế bằng mô hình bạn muốn
            response = model.generate_content(prompt)

            if response and hasattr(response, 'text'):
                response_text = response.text
                print(f"Phản hồi từ service: {response_text}")

                # Tìm JSON được bao quanh bởi dấu ```json
                match = re.search(r"```json(.*?)```", response_text, re.S)
                if match:
                    json_content = match.group(1).strip()

                    # Làm sạch JSON: loại bỏ \n và các ký tự escape
                    cleaned_json_content = json_content.replace("\\n", "").replace("\\\"", "\"").strip()

                    # Trả về nội dung JSON đã giải mã
                    return json.loads(cleaned_json_content)
                else:
                    print(f"Không tìm thấy JSON trong phản hồi. Nội dung: {response_text}")
            else:
                print("Phản hồi từ service không hợp lệ hoặc rỗng.")
        except Exception as e:
            print(f"Đã xảy ra lỗi khi gọi Google Generative AI: {str(e)}")

        print("Thử lại...")
        time.sleep(1)

def insert_courses_to_db(user_id, course_ids):
    """
    Chèn danh sách khóa học vào bảng `user_khoa_hoc`.
    """
    try:
        # Chuyển đổi ID khóa học thành các bản ghi SQL
        records = [(user_id, course_id, 1) for course_id in course_ids]

        # Chèn hàng loạt vào cơ sở dữ liệu
        cursor.executemany(
            "INSERT INTO user_khoa_hoc (user_id, khoa_hoc_id, goi_y, created_at, updated_at) VALUES (%s, %s, %s, NOW(), NOW())",
            records
        )
        conn.commit()
        print(f"Đã chèn thành công {len(records)} bản ghi.")
    except Exception as e:
        print(f"Đã xảy ra lỗi khi chèn dữ liệu: {str(e)}")

@app.route('/recommend_courses', methods=['POST'])
def recommend_courses():
    """
    API để gợi ý khóa học cho user dựa trên công việc mong muốn.
    """
    data = request.json
    user_id = data.get("user_id")
    desired_job = data.get("desired_job")

    if not user_id or not desired_job:
        return jsonify({"error": "user_id và desired_job là bắt buộc."}), 400

    # Tạo prompt và lấy danh sách khóa học từ LLM
    prompt = generate_prompt(user_id, desired_job)
    course_data = fetch_courses_from_llm(prompt)

    if course_data:
        insert_courses_to_db(course_data["user_id"], course_data["course_ids"])
        return jsonify({"message": "Khóa học đã được gợi ý thành công.", "data": course_data})
    else:
        return jsonify({"error": "Không thể gợi ý khóa học."}), 500

if __name__ == '__main__':
    http_server = WSGIServer(("0.0.0.0", 5000), app)
    print("Service is running on http://0.0.0.0:5000")
    http_server.serve_forever()
