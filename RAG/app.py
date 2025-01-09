from flask import Flask, request, jsonify
from flask_cors import CORS
import os
import json
import requests
from sentence_transformers import SentenceTransformer
from pinecone import Pinecone
from gevent.pywsgi import WSGIServer


app = Flask(__name__)

@app.route('/')
def home():
    return "Ứng dụng Flask đang chạy thành công!"
# Cấu hình API key và môi trường
os.environ['PINECONE_API_KEY'] = "pcsk_2HE9W8_GjEWT4BPBgoS9sBxm919xY6kT7MgKgjiMDUgCBtBzgrnjuK5RN5jYDJuv6FPsT6"

# Tải model và kết nối Pinecone
model = SentenceTransformer('all-MiniLM-L6-v2')
pc = Pinecone(api_key=os.environ.get('PINECONE_API_KEY'))
index_name = "huggingface-embed"
index = pc.Index(index_name)

# Hàm truy vấn DB và lấy context phù hợp
def get_relevant_context(question, top_k=5):
    question_embedding = model.encode(question).tolist()
    results = index.query(vector=question_embedding, top_k=top_k, include_metadata=True)
    context = [match['metadata']['text'] for match in results['matches']]
    return "\n".join(context)

# Hàm xử lý câu hỏi và trả về câu trả lời
def process_question(question):
    if not question:
        return "Câu hỏi không được để trống."

    try:
        context = get_relevant_context(question)
        prompt = f"Context:\n{context}\n\nQuestion: {question}\nAnswer:"

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

        if response.status_code == 200:
            response_data = response.json()
            answer = response_data.get("choices", [{}])[0].get("message", {}).get("content", "Không tìm thấy câu trả lời.")
            return answer
        else:
            return f"Lỗi API: Mã lỗi {response.status_code}, Thông báo: {response.text}"
    except Exception as e:
        return f"Đã xảy ra lỗi: {str(e)}"

# Khởi tạo Flask app
app = Flask(__name__)
CORS(app)  # Hỗ trợ CORS để gọi API từ frontend

@app.route('/ask', methods=['POST'])
def ask_question():
    try:
        # Lấy câu hỏi từ yêu cầu POST
        data = request.json
        question = data.get("question", "")
        
        if not question:
            return jsonify({"error": "Câu hỏi không được để trống."}), 400

        # Xử lý câu hỏi
        answer = process_question(question)
        return jsonify({"answer": answer})
    except Exception as e:
        return jsonify({"error": str(e)}), 500

# Chạy ứng dụng
if __name__ == "__main__":
    http_server = WSGIServer(("127.0.0.1", 8000), app)
    http_server.serve_forever()