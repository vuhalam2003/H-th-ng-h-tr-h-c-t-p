@extends('user.layouts.templates.templates')

@section('content')
    <div id="content">
        <style>
            .notice {
                display: none;
            }
        </style>
        <div class="intro">
            <div id="intro-head">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="course-title">{{$khoaHocs->ten}}</h1>
                            <p class="course-desc">{{$khoaHocs->mo_ta}}</p>
                            <div class="course-more-info">
                                {{-- <div class="show-star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="num-vote">(93 đánh giá)</span>
                                </div> --}}
                                <div class="total_student">{{$khoaHocs->users->count()}} học viên</div>
                                <a href="" class="mentor">{{$khoaHocs->ten_nguoi_tao}}</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 order-md-1" id="reg-course">
                            <div class="info-order">
                                <div class="course-fee">
                                    <span class="new-fee">MIỄN PHÍ HỌC</span>
                                    {{-- <span class="old-fee">2.200.000đ</span> --}}
                                </div>
                                <div id="course-purchase">
                                    <!-- <span class="discount-expiration">Giảm giá còn lại <strong>2 ngày</strong></span> -->
                                    <a class="btn" href="{{ route('khoa_hoc.tham_gia', $khoaHocs->id) }}" title="" id="purchase-submit">Tham gia
                                        </a>
                                    <!--<a href="course/html-css-21-ngay-thanh-thao-xay-dung-giao-dien-web-thuc-te-tu-ban-thiet-ke-photoshop/trial" title="" id="trial">Học thử miễn phí</a>-->
                                    <span class="money-back">Cố gắng hoàn thành nhé</span>
                                    <div id="wp-course-includes">
                                        <b>Bao gồm</b>
                                        <ul id="course-includes">
                                            {{-- @php
    dd($videos);
@endphp --}}
                                            <!--<li>100h học qua bài học ghi hình</li>-->
                                            <li> {{ count($videos) }}</li>
                                            <!--<li>15 file download</li>-->
                                            <li>Hỗ trợ hỏi đáp 8h - 22h mỗi ngày</li>
                                        </ul>
                                    </div>
                                    <div class="sub_youtube mt-3">
                                        <script src="js/platform.js"></script>
                                        <small class="py-1">Chúc các bạn có trải nghiệm , học tập thật tốt nhé</small>
                                        <div class="g-ytsubscribe" data-channelid="UCU48jsqZsguxa4Rs8ZsWxbw"
                                            data-layout="default" data-count="default"></div>
                                    </div>
                                    <p style="font-size: 13px; border: 2px dashed #FF0000; padding: 5px;">Khóa học miễn phí dành cho tất cả các bạn<a style="text-decoration: underline;"
                                            href="https://dev.unitop.vn" target="_blank"></a></p>

                                    <!--                            <div id="sale-submit">
                                                                                    <span id="btn-coupon-dropdown" class="btn">Nhập mã khuyến mãi</span>
                                                    <form action="http://unitop.vn/course/Index/add_coupon" data-url="http://unitop.vn/course/Index/add_coupon" id="sm_coupon" name="f-coupon" method="post" accept-charset="utf-8">
                                                                                    <input type="text" placeholder="Nhập mã khuyến mãi" name="coupon_code" id="coupon-code">
                                                                                    <input type="hidden" name="course_id" id="course-id" value="23">
                                                                                    <input type="submit" value="Gửi" id="coupon-submit">
                                                                                    </form>
                                                                                </div>-->
                                </div>


                            </div>
                        </div>

                        <div class="col-lg-8 order-md-0" id="info-course">

                            {{-- <div class="order-fixed d-block d-lg-none shadow-lg p-2">
                                <!--<i class="fas fa-hand-point-right"></i>-->
                                <span class="new-fee">Hãy tham gia</span>
                                <del class="old-fee small text-mute">2.200.000đ</del>
                                <a href="order/step1?id=7" class="btn" title="" id="">Học ngay</a>
                            </div> --}}


                           
                            <!-- end info  -->
                            
                            <!--end trial-->
                            
                          
                            <div class="info list-style">
                                {!!$khoaHocs->noi_dung!!}

                            </div>
                            <!-- end info  -->
                            
                            <!-- end info  -->
                           
                            <!-- end info  -->
                           

                        </div>
                    </div>
                </div>

            </div>

        </div>


        <!-- end reviews  -->
        {{-- <section id="support-center" class="py-lg-5 py-4">
            <div class="container">
                <div class="box">
                    <div class="box-head">
                        <div class="row">
                            <h3 class="col-12 text-center">Bạn cần tư vấn</h3>
                        </div>

                    </div>
                    <div class="box-body">
                        <ul id="list-support" class="row">
                            <li class="col-md-3">
                                <div class="icon">
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                                <h4 class="support-title">Gọi chúng tôi</h4>
                                <div class="support-more">
                                    Bạn gọi cho chúng tôi để hỏi các câu hỏi của bạn
                                </div>
                                <a href="" class="support-button">Gọi ngay</a>
                            </li>
                            <li class="col-md-3">
                                <div class="icon">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <h4 class="support-title">Live chat</h4>
                                <div class="support-more">
                                    Bạn gọi cho chúng tôi để hỏi các câu hỏi của bạn
                                </div>
                                <a href="" class="support-button">Chat ngay</a>
                            </li>
                            <li class="col-md-3">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <h4 class="support-title">Email cho unitop</h4>
                                <div class="support-more">
                                    Bạn gọi cho chúng tôi để hỏi các câu hỏi của bạn
                                </div>
                                <a href="" class="support-button">Email ngay</a>
                            </li>
                            <li class="col-md-3">
                                <div class="icon">
                                    <i class="far fa-comments"></i>
                                </div>
                                <h4 class="support-title">Ý kiến người đọc</h4>
                                <div class="support-more">
                                    Bạn gọi cho chúng tôi để hỏi các câu hỏi của bạn
                                </div>
                                <a href="" class="support-button">Xem ngay</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end section support  -->
      
        <!--        end faq-->


    </div>
@endsection
