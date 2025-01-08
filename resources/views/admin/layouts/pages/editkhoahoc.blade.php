@extends('admin.layouts.templates.templates')

@section('content')
<section class="content">
    @if(session('success'))
    <div class="alert alert-success"  id="success-message">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger"  id="error-message">
        {{ session('error') }}
    </div>
@endif
<script>
    // Ẩn thông báo sau 4 giây
    setTimeout(function() {
        var successMessage = document.getElementById('success-message');
        var errorMessage = document.getElementById('error-message');
        
        if (successMessage) {
            successMessage.style.display = 'none';
        }
        
        if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    }, 4000); // 4000 ms = 4 giây
</script>
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit khóa học</h3> <!-- Thay "Quick Example" thành "Edit khóa học" -->
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('khoa_hoc.update', $khoaHoc->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Dùng PUT vì đây là yêu cầu cập nhật -->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="ten">Tên khóa học</label>
                                <input type="text" class="form-control" name="ten" id="ten" placeholder="Tên khóa học" value="{{ old('ten', $khoaHoc->ten) }}">
                            </div>
                            <div class="form-group">
                                <label for="mo_ta">Mô tả ngắn</label>
                                <textarea class="form-control" name="mo_ta" maxlength="500" id="mo_ta">{{ old('noi_dung', $khoaHoc->mo_ta) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="anh">Ảnh</label>
                                <input type="file" class="form-control" name="anh" id="anh">
                                <!-- Hiển thị ảnh hiện tại nếu có -->
                                @if($khoaHoc->anh)
                                    <img id="image-preview" src="{{ asset('storage/' . $khoaHoc->anh) }}" alt="Ảnh khóa học" width="100" class="mt-2">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="duong_link_youtube">Đường dẫn Youtube</label>
                                <input type="text" class="form-control" name="duong_link_youtube" id="duong_link_youtube" placeholder="Đường dẫn Youtube" value="{{ old('duong_link_youtube', $khoaHoc->duong_link_youtube) }}">
                            </div>
                            <div class="form-group">
                                <label for="noi_dung">Ngành</label>
                                <select name="nganh" id="nganh" class="form-control">
                                    <option value="Công nghệ thông tin" {{ old('nganh', $khoaHoc->nganh) == 'Công nghệ thông tin' ? 'selected' : '' }}>Công nghệ thông tin</option>
                                    <option value="Điện tử viễn thông" {{ old('nganh', $khoaHoc->nganh) == 'Điện tử viễn thông' ? 'selected' : '' }}>Điện tử viễn thông</option>
                                    <option value="Kinh tế" {{ old('nganh', $khoaHoc->nganh) == 'Kinh tế' ? 'selected' : '' }}>Kinh tế</option>
                                    <option value="Xây dựng" {{ old('nganh', $khoaHoc->nganh) == 'Xây dựng' ? 'selected' : '' }}>Xây dựng</option>
                                    <option value="Y học" {{ old('nganh', $khoaHoc->nganh) == 'Y học' ? 'selected' : '' }}>Y học</option>
                                    <option value="Dược học" {{ old('nganh', $khoaHoc->nganh) == 'Dược học' ? 'selected' : '' }}>Dược học</option>
                                    <option value="Quản trị kinh doanh" {{ old('nganh', $khoaHoc->nganh) == 'Quản trị kinh doanh' ? 'selected' : '' }}>Quản trị kinh doanh</option>
                                    <option value="Ngân hàng" {{ old('nganh', $khoaHoc->nganh) == 'Ngân hàng' ? 'selected' : '' }}>Ngân hàng</option>
                                    <option value="Marketing" {{ old('nganh', $khoaHoc->nganh) == 'Marketing' ? 'selected' : '' }}>Marketing</option>
                                    <option value="Luật" {{ old('nganh', $khoaHoc->nganh) == 'Luật' ? 'selected' : '' }}>Luật</option>
                                    <option value="Hóa học" {{ old('nganh', $khoaHoc->nganh) == 'Hóa học' ? 'selected' : '' }}>Hóa học</option>
                                    <option value="Sinh học" {{ old('nganh', $khoaHoc->nganh) == 'Sinh học' ? 'selected' : '' }}>Sinh học</option>
                                    <option value="Vật lý" {{ old('nganh', $khoaHoc->nganh) == 'Vật lý' ? 'selected' : '' }}>Vật lý</option>
                                    <option value="Nhân văn" {{ old('nganh', $khoaHoc->nganh) == 'Nhân văn' ? 'selected' : '' }}>Nhân văn</option>
                                    <option value="Ngoại ngữ" {{ old('nganh', $khoaHoc->nganh) == 'Ngoại ngữ' ? 'selected' : '' }}>Ngoại ngữ</option>
                                    <option value="Giáo dục" {{ old('nganh', $khoaHoc->nganh) == 'Giáo dục' ? 'selected' : '' }}>Giáo dục</option>
                                    <option value="Nông nghiệp" {{ old('nganh', $khoaHoc->nganh) == 'Nông nghiệp' ? 'selected' : '' }}>Nông nghiệp</option>
                                    <option value="Du lịch" {{ old('nganh', $khoaHoc->nganh) == 'Du lịch' ? 'selected' : '' }}>Du lịch</option>
                                    <option value="Thiết kế đồ họa" {{ old('nganh', $khoaHoc->nganh) == 'Thiết kế đồ họa' ? 'selected' : '' }}>Thiết kế đồ họa</option>
                                    <option value="Phim ảnh và truyền hình" {{ old('nganh', $khoaHoc->nganh) == 'Phim ảnh và truyền hình' ? 'selected' : '' }}>Phim ảnh và truyền hình</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="noi_dung">Nội dung</label>
                                <textarea class="form-control" name="noi_dung" id="noi_dung">{{ old('noi_dung', $khoaHoc->noi_dung) }}</textarea>
                            </div>
                            
                            
                            
                            <div class="form-group">
                                <label for="ten">Tên người tạo</label>
                                <input type="text" class="form-control" name="ten_nguoi_tao" id="ten_nguoi_tao" placeholder="Tên người tạo" value="{{ old('ten', $khoaHoc->ten_nguoi_tao) }}">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Lưu chỉnh sửa</button> <!-- Thay "Submit" thành "Lưu chỉnh sửa" -->
                        </div>
                    </form>
                </div>
                <!-- /.card -->

                <!-- general form elements -->

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</section>

@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#anh').change(function(event) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image-preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(event.target.files[0]);
            });
        });
    </script>
@endpush
