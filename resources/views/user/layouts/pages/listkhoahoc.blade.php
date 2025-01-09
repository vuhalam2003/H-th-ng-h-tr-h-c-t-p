@extends('user.layouts.templates.templates')

@section('content')
    <div id="content">

        <style>
            form {
                margin: 0px auto;
            }

            .gift-free {
                background: #0d161b;
                color: #fff;
            }
        </style>
        <style>
            .warning>div {
                padding: 30px;
                border-radius: 10px;
                background: rgba(255, 199, 0, .1);
            }

            .warning h4 {
                font-size: 20px;
                margin: 1rem 0;
            }

            .warning p {
                margin-bottom: 1rem;
            }


            /* Custom pagination styles */
            .pagination1 a {
                color: black;
                float: left;
                padding: 8px 16px;
                text-decoration: none;
                transition: background-color .3s;
            }

            /* Style the active/current link */
            .pagination1 a.active {
                background-color: dodgerblue;
                color: white;
            }

            /* Add a grey background color on mouse-over */
            .pagination1 a:hover:not(.active) {
                background-color: #ddd;
            }
            .pagination1{
                display: flex;
                justify-content: center
            }
        </style>


        <section id="course" class="bg-f8">

            <div class="container">
                <div class="box">
                    <div class="row justify-content-center">
                        <div class="box-head col-md-8 text-center">
                            <h2>Danh sách khóa học</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <form method="GET" action="{{ route('searchKhoaHoc') }}" class="container mt-4">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="ten" class="form-label">Tên khóa học:</label>
                                    <input type="text" name="ten" id="ten" class="form-control"
                                        value="{{ request()->input('ten') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="nganh" class="form-label">Ngành:</label>
                                    <select name="nganh" id="nganh" class="form-control">
                                        <option value="">Chọn ngành</option>
                                        <option value="Công nghệ thông tin"
                                            {{ request()->input('nganh') == 'Công nghệ thông tin' ? 'selected' : '' }}>Công
                                            nghệ thông tin</option>
                                        <option value="Điện tử viễn thông"
                                            {{ request()->input('nganh') == 'Điện tử viễn thông' ? 'selected' : '' }}>Điện
                                            tử viễn thông</option>
                                        <option value="Kinh tế"
                                            {{ request()->input('nganh') == 'Kinh tế' ? 'selected' : '' }}>Kinh tế</option>
                                        <option value="Xây dựng"
                                            {{ request()->input('nganh') == 'Xây dựng' ? 'selected' : '' }}>Xây dựng
                                        </option>
                                        <option value="Y học" {{ request()->input('nganh') == 'Y học' ? 'selected' : '' }}>
                                            Y học</option>
                                        <option value="Dược học"
                                            {{ request()->input('nganh') == 'Dược học' ? 'selected' : '' }}>Dược học
                                        </option>
                                        <option value="Quản trị kinh doanh"
                                            {{ request()->input('nganh') == 'Quản trị kinh doanh' ? 'selected' : '' }}>Quản
                                            trị kinh doanh</option>
                                        <option value="Ngân hàng"
                                            {{ request()->input('nganh') == 'Ngân hàng' ? 'selected' : '' }}>Ngân hàng
                                        </option>
                                        <option value="Marketing"
                                            {{ request()->input('nganh') == 'Marketing' ? 'selected' : '' }}>Marketing
                                        </option>
                                        <option value="Luật" {{ request()->input('nganh') == 'Luật' ? 'selected' : '' }}>
                                            Luật</option>
                                        <option value="Hóa học"
                                            {{ request()->input('nganh') == 'Hóa học' ? 'selected' : '' }}>Hóa học</option>
                                        <option value="Sinh học"
                                            {{ request()->input('nganh') == 'Sinh học' ? 'selected' : '' }}>Sinh học
                                        </option>
                                        <option value="Vật lý"
                                            {{ request()->input('nganh') == 'Vật lý' ? 'selected' : '' }}>Vật lý</option>
                                        <option value="Nhân văn"
                                            {{ request()->input('nganh') == 'Nhân văn' ? 'selected' : '' }}>Nhân văn
                                        </option>
                                        <option value="Ngoại ngữ"
                                            {{ request()->input('nganh') == 'Ngoại ngữ' ? 'selected' : '' }}>Ngoại ngữ
                                        </option>
                                        <option value="Giáo dục"
                                            {{ request()->input('nganh') == 'Giáo dục' ? 'selected' : '' }}>Giáo dục
                                        </option>
                                        <option value="Nông nghiệp"
                                            {{ request()->input('nganh') == 'Nông nghiệp' ? 'selected' : '' }}>Nông nghiệp
                                        </option>
                                        <option value="Du lịch"
                                            {{ request()->input('nganh') == 'Du lịch' ? 'selected' : '' }}>Du lịch</option>
                                        <option value="Thiết kế đồ họa"
                                            {{ request()->input('nganh') == 'Thiết kế đồ họa' ? 'selected' : '' }}>Thiết kế
                                            đồ họa</option>
                                        <option value="Phim ảnh và truyền hình"
                                            {{ request()->input('nganh') == 'Phim ảnh và truyền hình' ? 'selected' : '' }}>
                                            Phim ảnh và truyền hình</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                        </form>
                    </div>

                    <div class="box-body">
                        <ul id="list-course" class="row">
                            @foreach ($khoaHocs as $khoaHoc)
                                <li class="col-sm-6 col-md-4 col-lg-3 ">
                                    <div class="course-item">
                                        <a href="{{ route('khoa_hoc.detail', ['khoaHoc' => $khoaHoc->id]) }}">

                                            <img class="img-fluid" loading="lazy"
                                                src="{{ asset('storage/' . $khoaHoc->anh) }}">

                                        </a>
                                        <div class="course-info">
                                            <h3>
                                                <a href="{{ route('khoa_hoc.detail', ['khoaHoc' => $khoaHoc->id]) }}"
                                                    title=""
                                                    class="course-title">
                                                    {{ $khoaHoc->ten }}
                                                </a>
                                            </h3>
                                            <a href="" class="mentor">
                                                {{ $khoaHoc->ten_nguoi_tao }}</a>
                                            <div class="rate">
                                                {{-- <div class="show-star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="num-vote">(166)</span>
                                        </div> --}}


                                            </div>
                                            <small class="text-muted">{{$khoaHoc->users->count()}} người đang học</small>
                                            <div class="info-price">
                                                <!--<span class="old-price text-mute">1.286.000đ</span>-->
                                                <!--<span class="course-price">599.000đ</span>-->
                                            </div>
                                            <div class="info-price">
                                                <!--<span class="old-price text-mute">1.286.000đ</span>-->
                                                <!--<span class="course-price">599.000đ</span>-->
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end course item  -->
                                </li>
                            @endforeach



                        </ul>

                    </div>

                    <div class="pagination1">
                        <a href="{{ $khoaHocs->previousPageUrl() }}">&laquo;</a>
                        @for ($i = 1; $i <= $khoaHocs->lastPage(); $i++)
                            <a href="{{ $khoaHocs->url($i) }}" class="{{ $i == $khoaHocs->currentPage() ? 'active' : '' }}">{{ $i }}</a>
                        @endfor
                        <a href="{{ $khoaHocs->nextPageUrl() }}">&raquo;</a>
                    </div>
                    



                </div>

            </div>




        </section>



    </div>
@endsection
