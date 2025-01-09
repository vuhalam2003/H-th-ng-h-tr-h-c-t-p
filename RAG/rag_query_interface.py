import os
import numpy as np
from sentence_transformers import SentenceTransformer
from pinecone import Pinecone
import tkinter as tk
from tkinter import messagebox, scrolledtext
import requests
import json

os.environ['PINECONE_API_KEY'] = "pcsk_2HE9W8_GjEWT4BPBgoS9sBxm919xY6kT7MgKgjiMDUgCBtBzgrnjuK5RN5jYDJuv6FPsT6"

# Load model SentenceTransformer
model = SentenceTransformer('all-MiniLM-L6-v2')

# Kết nối với Pinecone
api_key = os.environ.get('PINECONE_API_KEY')
pc = Pinecone(api_key=api_key)
index_name = "huggingface-embed"
index = pc.Index(index_name)

# Hàm truy vấn DB và lấy context phù hợp
def get_relevant_context(question, top_k=5):
    # Tạo embedding cho câu hỏi
    question_embedding = model.encode(question).tolist()
    # Truy vấn Pinecone
    results = index.query(vector=question_embedding, top_k=top_k, include_metadata=True)
    # Trích xuất context
    context = [match['metadata']['text'] for match in results['matches']]
    return "\n".join(context)

# Hàm gửi câu hỏi và context đến API
def send_question():
    question = question_entry.get().strip()
    if not question:
        messagebox.showwarning("Cảnh báo", "Vui lòng nhập câu hỏi!")
        return

    try:
        # Thêm câu hỏi vào khung chat
        chat_history.insert(tk.END, f"Bạn: {question}\n", 'user')
        chat_history.see(tk.END)

        # Truy vấn DB để lấy context
        context = get_relevant_context(question)

        # Gộp câu hỏi và context
        prompt = f"Context:\n{context}\n\nQuestion: {question}\nAnswer:"

        # Gửi yêu cầu đến API
        response = requests.post(
            url="https://openrouter.ai/api/v1/chat/completions",
            headers={
                "Authorization": "Bearer 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",
                "HTTP-Referer": "localhost",
                "X-Title": "localhost",
            },
            data=json.dumps({
                "model": "meta-llama/llama-3.1-405b-instruct:free",
                "messages": [{"role": "user", "content": prompt}]
            })
        )

        # Xử lý phản hồi
        if response.status_code == 200:
            response_data = response.json()
            print("Phản hồi từ API:", response_data)
            answer = response_data.get("choices", [{}])[0].get("message", {}).get("content", "Không tìm thấy câu trả lời.")
            
            # Thêm câu trả lời vào khung chat
            chat_history.insert(tk.END, f"Trợ lý: {answer}\n", 'assistant')
            chat_history.see(tk.END)
        else:
            messagebox.showerror("Lỗi", f"Mã lỗi: {response.status_code}\n{response.text}")
    except Exception as e:
        messagebox.showerror("Lỗi", f"Đã xảy ra lỗi: {str(e)}")

# Tạo giao diện người dùng
root = tk.Tk()
root.title("Hỏi & Đáp API")
root.geometry("600x500")

# Khung hiển thị lịch sử chat
chat_history = scrolledtext.ScrolledText(root, font=("Arial", 12), wrap=tk.WORD, state='normal', height=20, width=70)
chat_history.pack(pady=10)

# Định nghĩa các thẻ (tags) để đổi màu văn bản
chat_history.tag_config('user', foreground='blue', font=("Arial", 12, "bold"))
chat_history.tag_config('assistant', foreground='green', font=("Arial", 12, "italic"))

# Nhãn và ô nhập câu hỏi
question_entry = tk.Entry(root, font=("Arial", 14), width=50)
question_entry.pack(pady=5)

# Nút gửi câu hỏi
send_button = tk.Button(root, text="Gửi", font=("Arial", 14), command=send_question)
send_button.pack(pady=10)

# Chạy giao diện
root.mainloop()