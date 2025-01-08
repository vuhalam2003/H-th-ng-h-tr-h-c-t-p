@extends('admin.layouts.templates.templates')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('khoa_hoc.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="ten">Tên khóa học</label>
                                    <input type="text" class="form-control" name="ten" id="ten"
                                        placeholder="Tên khóa học">
                                </div>
                                <div class="form-group">
                                  <label for="mo_ta">Mô tả ngắn</label>
                                  <textarea class="form-control" maxlength="255" id="mo_ta" name="mo_ta" ></textarea>
                              </div>
                                <div class="form-group">
                                    <label for="anh">Ảnh</label>
                                    <input type="file" class="form-control" name="anh" id="anh">
                                </div>
                                <div class="form-group">
                                    <label for="duong_link_youtube">Đường dẫn Youtube</label>
                                    <input type="text" class="form-control" name="duong_link_youtube"
                                        id="duong_link_youtube" placeholder="Đường dẫn Youtube">
                                </div>
                                <div class="form-group">
                                  <label for="noi_dung">Ngành</label>
                                  <select name="nganh" id="nganh" class="form-control">
                                    <option value="1">Công nghệ thông tin</option>
                                    <option value="2">Điện tử viễn thông</option>
                                    <option value="3">Kinh tế</option>
                                    <option value="4">Xây dựng</option>
                                    <option value="5">Y học</option>
                                    <option value="6">Dược học</option>
                                    <option value="7">Quản trị kinh doanh</option>
                                    <option value="8">Ngân hàng</option>
                                    <option value="9">Marketing</option>
                                    <option value="10">Luật</option>
                                    <option value="11">Hóa học</option>
                                    <option value="12">Sinh học</option>
                                    <option value="13">Vật lý</option>
                                    <option value="14">Nhân văn</option>
                                    <option value="15">Ngoại ngữ</option>
                                    <option value="16">Giáo dục</option>
                                    <option value="17">Nông nghiệp</option>
                                    <option value="18">Du lịch</option>
                                    <option value="19">Thiết kế đồ họa</option>
                                    <option value="20">Phim ảnh và truyền hình</option>
                                </select>
                                <div class="form-group">
                                    <label for="noi_dung">Nội dung</label>
                                    <textarea class="form-control" name="noi_dung" id="noi_dung"></textarea>
                                </div>
                                
                              </div>
                               
                              
                                <div class="form-group">
                                  <label for="ten">Tên người tạo</label>
                                  <input type="text" class="form-control" name="ten_nguoi_tao" id="ten_nguoi_tao"
                                      placeholder="Tên người tạo">
                              </div>
                                {{-- <div class="form-group">
                  <!-- <label for="customFile">Custom File</label> -->

                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">th (1).jfif</label>
                  </div>
                </div> --}}
                                {{-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div> --}}
                                {{-- <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Kích hoạt</label>
                </div> --}}
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" fdprocessedid="arq5q">Submit</button>
                            </div>
                        </form>
                        {{-- <div class="card-body">
              <div id="actions" class="row">
                <div class="col-lg-6">
                  <div class="btn-group w-100">
                    <span class="btn btn-success col fileinput-button">
                      <i class="fas fa-plus"></i>
                      <span>Add files</span>
                    </span>
                    <button type="submit" class="btn btn-primary col start">
                      <i class="fas fa-upload"></i>
                      <span>Start upload</span>
                    </button>
                    <button type="reset" class="btn btn-warning col cancel">
                      <i class="fas fa-times-circle"></i>
                      <span>Cancel upload</span>
                    </button>
                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                  <div class="fileupload-process w-100">
                    <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                      <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="table table-striped files" id="previews">
                <div id="template" class="row mt-2">
                  <div class="col-auto">
                      <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                  </div>
                  <div class="col d-flex align-items-center">
                      <p class="mb-0">
                        <span class="lead" data-dz-name></span>
                        (<span data-dz-size></span>)
                      </p>
                      <strong class="error text-danger" data-dz-errormessage></strong>
                  </div>
                  <div class="col-4 d-flex align-items-center">
                      <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                      </div>
                  </div>
                  <div class="col-auto d-flex align-items-center">
                    <div class="btn-group">
                      <button class="btn btn-primary start">
                        <i class="fas fa-upload"></i>
                        <span>Start</span>
                      </button>
                      <button data-dz-remove class="btn btn-warning cancel">
                        <i class="fas fa-times-circle"></i>
                        <span>Cancel</span>
                      </button>
                      <button data-dz-remove class="btn btn-danger delete">
                        <i class="fas fa-trash"></i>
                        <span>Delete</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
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
        console.log('Dashboard loaded.');
    </script>
@endpush
