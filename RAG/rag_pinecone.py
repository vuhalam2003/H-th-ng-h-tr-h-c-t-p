import os
import faiss
import numpy as np
from sentence_transformers import SentenceTransformer
from pdfplumber import open as pdf_open
import pdfplumber
from key import OPENROUTER_KEY, PINECONE_KEY

os.environ['PINECONE_API_KEY'] = "pcsk_227kYr_9np2QvPFmRmZD7UkWeUEs6fEfxYom68oXtuZRafV2enbSdzUo2rcQe2y8uVdFT9"

import os
from pinecone import Pinecone
from sentence_transformers import SentenceTransformer

# 1. Khởi tạo Pinecone
api_key = os.environ.get('PINECONE_API_KEY')

# configure client
pc = Pinecone(api_key=api_key)

from pinecone import ServerlessSpec

cloud = os.environ.get('PINECONE_CLOUD') or 'aws'
region = os.environ.get('PINECONE_REGION') or 'us-east-1'

spec = ServerlessSpec(cloud=cloud, region=region)

# 2. Kết nối hoặc tạo index
index_name = "huggingface-embed"

# Kiểm tra xem index đã tồn tại chưa
import time

existing_indexes = [
    index_info["name"] for index_info in pc.list_indexes()
]

# check if index already exists (it shouldn't if this is first time)
if index_name not in existing_indexes:
    # if does not exist, create index
    pc.create_index(
        index_name,
        dimension=384,  # dimensionality of minilm
        metric='dotproduct',
        spec=spec
    )
    # wait for index to be initialized
    while not pc.describe_index(index_name).status['ready']:
        time.sleep(1)

# connect to index
index = pc.Index(index_name)
time.sleep(1)
# view index stats
print(index.describe_index_stats())

from sentence_transformers import SentenceTransformer
import torch

device = 'cuda' if torch.cuda.is_available() else 'cpu'

model = SentenceTransformer('sentence-transformers/all-MiniLM-L6-v2', device=device)

def extract_text_from_pdf(pdf_path):
    """
    Trích xuất văn bản từ file PDF.
    :param pdf_path: Đường dẫn tới file PDF.
    :return: Chuỗi văn bản đã trích xuất.
    """
    text = ""
    with pdfplumber.open(pdf_path) as pdf:
        for page in pdf.pages:
            page_text = page.extract_text()
            if page_text:
                text += page_text + "\n"
    return text.strip()

def chunk_text(text, chunk_size=500):
    """
    Chia văn bản thành các đoạn nhỏ (chunk) để tạo embeddings.
    :param text: Chuỗi văn bản đầu vào.
    :param chunk_size: Số lượng từ tối đa cho mỗi đoạn.
    :return: Danh sách các đoạn văn bản.
    """
    words = text.split()
    return [" ".join(words[i:i + chunk_size]) for i in range(0, len(words), chunk_size)]

def upsert_pdf_to_pinecone(pdf_folder, index):
    """
    Trích xuất dữ liệu từ tất cả file PDF trong thư mục, tạo embeddings và upsert vào Pinecone.
    Chỉ thêm dữ liệu mới nếu chưa tồn tại trong Pinecone.
    :param pdf_folder: Thư mục chứa các file PDF.
    :param index: Đối tượng Pinecone Index.
    """
    for pdf_file in os.listdir(pdf_folder):
        if pdf_file.endswith(".pdf"):
            pdf_path = os.path.join(pdf_folder, pdf_file)
            print(f"Đang xử lý file: {pdf_file}...")

            # Trích xuất văn bản từ PDF
            text = extract_text_from_pdf(pdf_path)
            if not text:
                print(f"File {pdf_file} không chứa văn bản.")
                continue

            # Chia văn bản thành các đoạn nhỏ
            chunks = chunk_text(text)

            # Tạo embeddings cho các đoạn văn bản
            embeddings = model.encode(chunks)

            # Chuẩn bị dữ liệu để kiểm tra và thêm vào Pinecone
            data_to_upsert = []
            for i, chunk in enumerate(chunks):
                chunk_id = f"{pdf_file}-{i}"

                # Kiểm tra xem ID đã tồn tại trong Pinecone hay chưa
                existing = index.fetch(ids=[chunk_id])  # Lấy thông tin từ Pinecone với ID cụ thể
                if chunk_id in existing['vectors']:
                    print(f"Chunk ID {chunk_id} đã tồn tại, bỏ qua.")
                    continue

                # Nếu chưa tồn tại, thêm vào danh sách cần upsert
                data_to_upsert.append({
                    "id": chunk_id,
                    "values": embeddings[i].tolist(),
                    "metadata": {"text": chunk, "source": pdf_file}
                })

            # Thêm dữ liệu vào Pinecone nếu có dữ liệu mới
            if data_to_upsert:
                index.upsert(vectors=data_to_upsert)
                print(f"Đã thêm {len(data_to_upsert)} đoạn văn bản từ {pdf_file} vào Pinecone.")
            else:
                print(f"Không có dữ liệu mới từ {pdf_file} để thêm vào Pinecone.")


# 5. Gọi hàm để xử lý dữ liệu
pdf_folder = "E:\\PLP\\Personalized-Learning-Path\\RAG\\pdf"  # Thay bằng đường dẫn của bạn
upsert_pdf_to_pinecone(pdf_folder, index)

print("Hoàn tất việc thêm dữ liệu PDF vào Pinecone.")