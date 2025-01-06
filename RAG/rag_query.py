import os
import numpy as np
from sentence_transformers import SentenceTransformer
from pinecone import Pinecone
import requests
import json

os.environ['PINECONE_API_KEY'] = "pcsk_227kYr_9np2QvPFmRmZD7UkWeUEs6fEfxYom68oXtuZRafV2enbSdzUo2rcQe2y8uVdFT9"

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

# Hàm xử lý câu hỏi và trả về câu trả lời
def process_question(question):
    if not question:
        return "Câu hỏi không được để trống."

    try:
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
            return answer
        else:
            return f"Lỗi API: Mã lỗi {response.status_code}, Thông báo: {response.text}"
    except Exception as e:
        return f"Đã xảy ra lỗi: {str(e)}"

# Ví dụ sử dụng dịch vụ
if __name__ == "__main__":
    while True:
        user_question = input("Nhập câu hỏi của bạn (hoặc gõ 'exit' để thoát): ")
        if user_question.lower() == 'exit':
            break
        response = process_question(user_question)
        print(f"Trợ lý: {response}\n")
