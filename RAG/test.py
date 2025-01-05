import tkinter as tk
from tkinter import messagebox
import requests
import json

# Hàm gửi câu hỏi đến API và hiển thị câu trả lời
def send_question():
    question = question_entry.get().strip()
    if not question:
        messagebox.showwarning("Cảnh báo", "Vui lòng nhập câu hỏi!")
        return

    try:
        # Gửi yêu cầu đến API
        response = requests.post(
            url="https://openrouter.ai/api/v1/chat/completions",
            headers={
                "Authorization": "Bearer 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",
                "HTTP-Referer": "localhost",  # Optional. URL cho xếp hạng.
                "X-Title": "localhost",  # Optional. Tiêu đề cho xếp hạng.
            },
            data=json.dumps({
                "model": "google/gemma-2-9b-it:free",  # Model được chọn.
                "messages": [{"role": "user", "content": question}]
            })
        )

        # Xử lý phản hồi
        if response.status_code == 200:
            response_data = response.json()
            print("Phản hồi từ API:", response_data)  # In ra JSON phản hồi để kiểm tra
            answer = response_data.get("choices", [{}])[0].get("message", {}).get("content", "Không tìm thấy câu trả lời.")
            answer_label.config(text=f"Câu trả lời: {answer}")
        else:
            # Hiển thị lỗi nếu phản hồi không thành công
            messagebox.showerror("Lỗi", f"Mã lỗi: {response.status_code}\n{response.text}")
    except Exception as e:
        # Hiển thị thông báo lỗi nếu có ngoại lệ
        messagebox.showerror("Lỗi", f"Đã xảy ra lỗi: {str(e)}")

# Tạo cửa sổ giao diện
root = tk.Tk()
root.title("Hỏi & Đáp API")
root.geometry("600x400")

# Nhãn và ô nhập câu hỏi
tk.Label(root, text="Nhập câu hỏi của bạn:", font=("Arial", 14)).pack(pady=10)
question_entry = tk.Entry(root, font=("Arial", 14), width=50)
question_entry.pack(pady=5)

# Nút gửi câu hỏi
send_button = tk.Button(root, text="Gửi", font=("Arial", 14), command=send_question)
send_button.pack(pady=10)

# Nhãn hiển thị câu trả lời
answer_label = tk.Label(root, text="Câu trả lời sẽ hiển thị ở đây.", font=("Arial", 14), wraplength=550, justify="left", bg="white", relief="solid", anchor="nw", width=60, height=10)
answer_label.pack(pady=20)

# Chạy giao diện
root.mainloop()
