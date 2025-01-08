<!DOCTYPE html>
<html lang="en">

<head>

    @include('user.layouts.partials.header_script')

</head>

<body id="home-page" class="">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TMHCC9Q" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    {{-- <div id="cta-conversion" class="hide-cta">
        <div class="cta-head d-flex align-items-center pb-1">
            <img class="avatar pr-3"
                src="https://lh3.googleusercontent.com/wY7EXFYzetnVzmJXKov1yeEkYtckKbHkXTRUIzMOo3bXzCHRMYD4rQT7gNaIqLbDn79NwB3CYwmfcVngrhQWMioCb6Z-pYlYwsnoZm4=w0"
                alt="">
            <h4 id="cta-support-footer">Tư vấn miễn phí tại đây ! </h4>
            <i class="fas fa-chevron-down cta-icon"></i>
        </div>
        <div class="cta-body">
            <ul>
                <li>Xem lộ trình học 2025 <a target="_blank" href="https://unitop.edu.vn">tại đây</a></li>
                <li>Nhận quà tặng miễn phí <a target="_blank"
                        href="https://email.unitop.vn?utm_source=unitop.vn&utm_medium=popup">tại đây</a></li>
                <li>Có cơ hội nhận ưu đãi lên đến 2.500.000đ <a target="_blank" href="https://unitop.edu.vn">tại đây</a>
                </li>
            </ul>
            <div class="cta-link">
                <div class="hotline p-1">Tư vấn miễn phí: <a href="tel:0988859692" class="tel">09888.59.692</a></div>
                <a href="https://m.me/unitop.edu.vn" class="btn btn-primary" target="_blank">Inbox Facebook</a>
                <a href="tel:0988859692" class="btn btn-danger">Gọi ngay</a>
            </div>

        </div>
    </div> --}}


    <div id="warpper">
        <div id="header">
            <div id="top-header" class="d-none d-md-block">
                <div class="container ">
                    <div class="row">
                        
                    </div>

                </div>
            </div>
            <!-- end header-top 
             -->
            <div id="middle-header" class="">
                <div class="container">
                    <div class="row">
                      
                    </div>

                </div>
            </div>
        </div>
        <!-- end header  -->
        <nav class="d-none d-md-block w-100">
            <div class="container ">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        {{-- <a class="nav-logo" href="http://unitop.vn">
                            <img src="images/logo.png">
                        </a> --}}



                        <!--Main menu -->
                        {{-- <ul class="" id="main-menu">
                            <li><a href="https://unitop.vn">Trang chủ</a></li>
                            <li><a href="https://unitop.edu.vn" target="_blank">Bắt đầu</a></li>
                            <li><a href="history">Đang học</a></li>
                            <li><a href="members">Học viên</a></li>
                            <li><a href="reviews">Ý kiến học viên</a></li>
                            <li><a href="https://email.unitop.vn?utm_source=unitop.vn&utm_medium=menu"
                                    target="_blank">Miễn phí</a></li>
                            <li><a href="https://www.youtube.com/phancuong100" target="_blank">Youtube</a></li>
                        </ul> --}}


                        {{-- <ul id="account">
                            <a id="cta-login" href="https://unitop.vn/login">Đăng nhập</a>
                        </ul> --}}
                        <ul id="account">
                            @if(auth()->check() && auth()->user()->role == 2)
                                <!-- Nếu người dùng đã đăng nhập và có role = 1, hiển thị tên người dùng -->
                                <li><a id="cta-login" href="#">{{ auth()->user()->name }}</a></li>
                                {{-- <li>Xin chào, </li> --}}
                            @else
                                <!-- Nếu chưa đăng nhập hoặc role khác 1, hiển thị nút đăng nhập -->
                                <li><a id="cta-login" href="{{route("login")}}">Đăng nhập</a></li>
                            @endif


                    </div>
                </div>

            </div>

        </nav>
        @yield('content')
       
        <!-- end content -->
        <div id="footer">

            <!-- Sidebar fixed contact buttons -->
            <style>
                .contact-sidebar {
                    display: flex;
                    flex-direction: column;
                    position: fixed;
                    right: 0;
                    transform: translateY(-50%);
                    top: 50vh;
                    padding: 15px;
                    gap: 10px;
                }

                .contact-sidebar a {
                    display: block;
                }

                .contact-sidebar a.zalo {
                    background: #fff;
                    border-radius: 5px;
                }

                .contact-sidebar img {
                    max-width: 38px;
                    height: auto;
                }

                .contact-sidebar a:hover {
                    box-shadow: 0 0 0 1px #dcdcdc;
                }
            </style>
            {{-- <div class="contact-sidebar">
                <a href="https://m.me/unitopdotvn" target="_blank" title="Chat ngay!" class="contact-button messenger">
                    <img src="images/mess-icon.png" alt="Hỗ trợ Messenger Unitop">
                </a>
                <a href="https://zalo.me/0988859692" target="_blank" title="Chat ngay!" class="contact-button zalo">
                    <!--<img src="public/assets/images/img-cta/zalo-icon.png" alt="Hỗ trợ Zalo Unitop" />-->
                </a>
                <!--<a href="tel:0988859692" class="contact-button call" title="Gọi ngay!">-->
                <!--  <img src="public/assets/images/img-cta/phone-icon.png" alt="Hỗ trợ Gọi điện Unitop" />-->
                <!--</a>-->
            </div> --}}
            <!-- end contact-sidebar -->

            {{-- <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <div class="box-head">
                                <h3>Về chúng tôi</h3>
                            </div>
                            <div class="box-body pr-5">
                                <p>
                                    Unitop.vn là hệ thống đào tạo lập trình web online theo lộ trình từng bước. Hệ thống
                                    phát triển từ tháng 6/2017 đến nay đã có trên 3.724 người theo học và đạt kết quả
                                    tốt.
                                </p>
                                <p>
                                    Địa chỉ: Vinhome SmartCity, Tây Mỗ, Nam Từ Liêm, Hà Nội <br>
                                    <!--Giấy phép ĐKKD số: 0107601701 <br> Ngày cấp: 21/10/2016. <br> Nơi cấp: Sở kế hoạch và đầu tư thành phố Hà Nội<br>-->
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="box-head">
                                <h3>Hỗ trợ</h3>
                            </div>
                            <div class="box-body">
                                <ul class="" id="footer-menu">
                                    <li><a href="gioi-thieu.html">Giới thiệu</a></li>
                                    <li><a href="http://unitop.com.vn" target="_blank">Blog lập trình</a></li>
                                </ul> <!--<ul id="footer-menu">-->
                                <!--    <li><a href="">Giới thiệu</a></li>-->
                                <!--    <li><a href="">Lộ trình học</a></li>-->
                                <!--    <li><a href="">Blog</a></li>-->
                                <!--    <li><a href="">Hình thức thanh toán</a></li>-->
                                <!--    <li><a href="">Ý kiến học viên</a></li>-->
                                <!--</ul>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="box">
                            <div class="box-head">
                                <h3>Theo dõi</h3>
                            </div>
                            <div class="box-body">
                                <ul id="list-social-footer">
                                    <li>
                                        <i class="fab fa-facebook-f"></i>
                                        <a target="_blank" href="https://facebook.com/unitop.vn">Facebook</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-youtube"></i>
                                        <a target="_blank" href="https://youtube.com/phancuong100">Youtube</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div> 
        {{-- <!-- end footer  -->
        {{-- <div id="copyright">
            <div class="container">
                <div class="col-12">
                    <p class="text-center">Copyright © 2017-2025 | All rights reserved Unitop.vn</p>
                </div>
            </div>
        </div> --}} 
    </div>
    <!-- end warpper -->
    <div id="container-respon-menu">
        <div id="scroll-respon-menu">
            <div id="respon-head">
                <a id="logo-responsive" href="">
                    <img src="images/logo.png" alt="">
                </a>
            </div>
            <div class="part-head">Hệ thống</div>
            <ul class="" id="respon-menu">
                <li><a href="https://unitop.vn/">Trang chủ</a></li>
                <li><a href="gioi-thieu.html">Về Unitop</a></li>
                <li><a href="https://dev.unitop.vn">Lộ trình học</a></li>
                <li><a href="history" target="_blank">Đang học</a></li>
                <li><a href="members">Học viên</a></li>
                <li><a href="reviews" target="_blank">Ý kiến học viên</a></li>
                <li><a href="http://unitop.com.vn" target="_blank">Blog</a></li>
                <li><a href="support">Tư vấn miễn phí</a></li>
            </ul>
            <div class="part-head">Tài khoản</div>
            <ul id="account-menu">
                <li><a href="https://unitop.vn/login">Đăng nhập</a></li>
                <li><a href="https://unitop.vn/register">Đăng ký</a></li>


            </ul>
            <small id="respon-copyright" class="text-muted">Copyright © 2017-2020 Unitop.vn</small>
        </div>

        <i id="close-menu" class="fas fa-times"></i>
    </div>
    <div id="mask-content"></div>
    <div id="btn-top">
        <img src="{{asset('user/images/icon-to-top.png')}}" alt="">
    </div>
    <style>
        .notice {
            background-color: #f4c150;
            text-align: center;
            padding: .3em;
            font-weight: 500;
            position: fixed;
            bottom: 0px;
            width: 100%;
            font-size: 13px;
        }

        .notice-badge {
            display: inline-block;
            vertical-align: middle;
            border-radius: 4px;
            padding: 1px 8px;
            font-size: .7em;
            line-height: 1.5em;
            font-weight: 600;
            background: #f45f20;
            color: #fff;
            margin-right: 5px;
            margin-bottom: 2px;
            text-transform: uppercase;
        }

        .notice-cta {
            padding-left: 5px;
            font-weight: 500;
            padding-right: 1.25em;
            white-space: nowrap;
            color: #07d;
        }

        .notice-content a {
            color: #29303b;
        }
    </style>
    <!--<div class="notice">-->
    <!--    <span class="notice-badge">Miễn phí</span>-->
    <!--    <span class="notice-content"><a  href="https://unitop.com.vn/free?utm_source=unitop.vn&utm_medium=footer" target="_blank">Nhận kinh nghiệm, lộ trình học web đi làm lương 8-30tr/tháng sau 3-5 tháng năm 2025</a></span>-->
    <!--    <a class="notice-cta" href="https://unitop.com.vn/free?utm_source=unitop.vn&utm_medium=footer" target="_blank" rel="noopener">-->
    <!--        Xem ngay→-->
    <!--    </a>-->
    <!--</div>-->
    <!--end notice-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="js/jquery-3.3.1.slim.min.js"></script> -->

    
    @include('user.layouts.partials.footer_script')



</body>

</html>