@extends('admin.layouts.templates.tnt2')

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
                        <h3 class="card-title">Thống tin sinh viên</h3> <!-- Thay "Quick Example" thành "Edit khóa học" -->
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('user.update', ['id' => $user->id]) }}">
                        @csrf
                        {{-- @method('POST') --}}
                        <div class="card-body">
                        <div class="form-group">
                            <label for="GPA">GPA</label>
                            <input type="text" name="GPA" class="form-control" value="{{ old('GPA', $user->GPA) }}">
                            @error('GPA')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        {{-- <div class="form-group">
                            <label for="academic_year">Năm học</label>
                            <input type="text" name="academic_year" class="form-control" value="{{ old('academic_year', $user->academic_year) }}">
                            @error('academic_year')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}
                    
                        <div class="form-group">
                            <label for="coding_ability">Khả năng code</label>
                            <select name="coding_ability" class="form-control">
                                @for($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}" {{ old('coding_ability', $user->coding_ability) == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                            @error('coding_ability')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="foreign_language">Ngoại ngữ</label>
                            <select name="foreign_language" class="form-control">
                                @for($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}" {{ old('foreign_language', $user->foreign_language) == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                            @error('foreign_language')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="communication">Giao tiếp</label>
                            <select name="communication" class="form-control">
                                @for($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}" {{ old('communication', $user->communication) == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                            @error('communication')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="desired_job">Công việc mong muốn</label>
                            <input type="text" name="desired_job" class="form-control" value="{{ old('desired_job', $user->desired_job) }}">
                            @error('desired_job')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                    
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
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
