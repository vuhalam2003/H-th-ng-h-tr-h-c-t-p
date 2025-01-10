from flask import Flask, request, jsonify
from flask_cors import CORS
import os
import json
import requests
from sentence_transformers import SentenceTransformer
from pinecone import Pinecone
from gevent.pywsgi import WSGIServer
import google.generativeai as genai

# Cấu hình API key và môi trường
os.environ['PINECONE_API_KEY'] = "pcsk_3r4guQ_EjFGTwXJknMDeF2aVa8vaERaa76jaoVLtaxzUeHzTAF7EoqYJuVXe42ZPXGUyya"
genai.configure(api_key="AIzaSyCQw-HzZhaIHPkKQ9mPXsx7yLCfLTUbkaQ")


# Tải model và kết nối Pinecone
model = SentenceTransformer('all-MiniLM-L6-v2')
pc = Pinecone(api_key=os.environ.get('PINECONE_API_KEY'))
index_name = "huggingface-embed"
index = pc.Index(index_name)

# Hàm tạo prompt giống với cách bên file dưới
def generate_prompt(context, question):
    """
    Tạo prompt cho trợ lý học tập dựa trên ngữ cảnh và câu hỏi.
    """
    prompt = f"""Ngữ cảnh:
{context}

Câu hỏi:
{question}
Câu trả lời:"""
    return prompt
gen_model = genai.GenerativeModel(model_name="gemini-1.5-flash", system_instruction= "Bạn là một trợ lý hỗ trợ học tập cho sinh viên khoa học máy tính")
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
        # Lấy ngữ cảnh liên quan từ Pinecone
        context = get_relevant_context(question)

        # Tạo prompt dựa trên ngữ cảnh và câu hỏi
        prompt = generate_prompt(context, question)

        # Gửi prompt đến Google Generative AI
        response = gen_model.generate_content(prompt)

        # Lấy câu trả lời từ response
        if response and hasattr(response, 'text'):
            return response.text.strip()
        else:
            return "Không tìm thấy câu trả lời."
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
