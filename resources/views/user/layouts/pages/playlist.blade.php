<!doctype html>
<html lang="en">


<!-- Mirrored from unitop.vn/history by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Dec 2024 05:53:07 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="https://unitop.vn/">

    <!-- Sử dụng asset() trong Laravel với public/ trước asset/ -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="{{ asset('public/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/fonts/fontawesome/css/all.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap&amp;subset=vietnamese"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/owlcarousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('public/assets/js/jquery/min/ratting.css') }}" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="public/assets/css/style.css"> -->

    <link rel="stylesheet" href="{{ asset('public/assets/css/lecture.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">

    <!-- Google Tag Manager -->
    <script
        src="https://connect.facebook.net/signals/config/3624842844435025?v=2.9.179&amp;r=stable&amp;domain=unitop.vn&amp;hme=b8122d5d96cd6f542162ba4f497489972d1ebe228d24c39d34f560e30ae932ce&amp;ex_m=70%2C122%2C107%2C111%2C61%2C4%2C100%2C69%2C16%2C97%2C89%2C51%2C54%2C173%2C176%2C188%2C184%2C185%2C187%2C29%2C101%2C53%2C77%2C186%2C168%2C171%2C181%2C182%2C189%2C132%2C41%2C191%2C192%2C34%2C144%2C15%2C50%2C197%2C196%2C134%2C18%2C40%2C1%2C43%2C65%2C66%2C67%2C71%2C93%2C17%2C14%2C96%2C92%2C91%2C108%2C52%2C110%2C39%2C109%2C30%2C94%2C26%2C169%2C172%2C141%2C86%2C56%2C84%2C33%2C73%2C0%2C95%2C32%2C28%2C82%2C83%2C88%2C47%2C46%2C87%2C37%2C11%2C12%2C13%2C6%2C7%2C25%2C22%2C23%2C57%2C62%2C64%2C75%2C102%2C27%2C76%2C9%2C8%2C80%2C48%2C21%2C104%2C103%2C105%2C98%2C10%2C20%2C3%2C38%2C74%2C19%2C5%2C90%2C81%2C44%2C35%2C85%2C2%2C36%2C63%2C42%2C106%2C45%2C79%2C68%2C112%2C60%2C59%2C31%2C99%2C58%2C55%2C49%2C78%2C72%2C24%2C113"
        async=""></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script type="text/javascript" async=""
        src="https://www.googletagmanager.com/gtag/destination?id=AW-614392906&amp;l=dataLayer&amp;cx=c&amp;gtm=45He4cc1v813035186za200">
    </script>
    <script type="text/javascript" async=""
        src="https://www.googletagmanager.com/gtag/destination?id=AW-708545853&amp;l=dataLayer&amp;cx=c&amp;gtm=45He4cc1v813035186za200">
    </script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async=""
        src="https://www.googletagmanager.com/gtag/js?id=G-HPG5VX3J7K&amp;l=dataLayer&amp;cx=c&amp;gtm=45He4cc1v813035186za200">
    </script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-TMHCC9Q"></script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TMHCC9Q');
    </script>
    <!-- End Google Tag Manager -->

    <title>Unitop Ver2 - Lecture</title>
</head>

<body class="lecture-page">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TMHCC9Q" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="wrapper">
        <div id="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="d-flex">
                            {{-- <a href="" id="logo">
                                <img src="public/assets/images/logo.png" alt="">
                            </a> --}}
                            <div id="course-name" class="d-flex">
                                <!-- <i class="fas fa-chalkboard-teacher"></i> -->
                                <h1 class="lecture-name">
                                    {{ $videos[0]['snippet']['title'] }}
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-none d-lg-block">
                        <div class="d-flex justify-content-between">
                            <div id="time-spend">
                                <i class="fas fa-running"></i>
                                <small id="go-percent">Bạn hãy cố gắng hoàn thành bài
                                    học này nhé</small>
                                {{-- <small class="text-success">(83.97%)</small> --}}

                            </div>
                            <div id="info-user">
                                <img src="assets/images/avatar.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header  -->
        <div id="content" class="open-outline">
            <div class="container-fluid">
                <div class="row">
                    <div id="show-video" class="pb-4">
                        <form action="">
                            <input type="hidden" id="next_video"
                                value="https://unitop.vn/course/laravel-pro/lecture/1001">
                            <input type="hidden" id="course_id" value="24">
                            <input type="hidden" id="lecture_id" value="983">
                            <input type="hidden" id="video_code" value="MTE2Nw==">
                        </form>
                        <div class="embed-responsive embed-responsive-16by9" id="play-video">


                            <iframe id="video-player" class="embed-responsive-item"
                                src="https://www.youtube-nocookie.com/embed/{{ $videos[0]['snippet']['resourceId']['videoId'] }}?modestbranding=1&rel=0"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>


                        <div id="info-course">
    <nav id="tab-large" class="d-none d-lg-block">
        <div id="rag-service" style="margin-top: 20px; padding: 20px; border: 1px solid #ddd; border-radius: 5px; background-color: #f4f4f9;">
            <h3 style="text-align: center; color: #4a4a8c;">Trợ lý AI - Hỏi đáp</h3>
            <div style="margin-bottom: 10px;">
                <textarea id="user-question" placeholder="Nhập câu hỏi của bạn..." 
                          style="width: 100%; height: 80px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
            </div>
            <button id="submit-question" style="padding: 10px 20px; background-color: #4a4a8c; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Gửi câu hỏi
            </button>
            <div id="conversation-area" style="margin-top: 20px; max-height: 400px; overflow-y: auto; padding: 10px; background-color: #fff; border-radius: 5px;">
                <!-- Nội dung đối đáp sẽ được thêm tại đây -->
            </div>
        </div>
    </nav>
</div>
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script>
    document.getElementById('submit-question').addEventListener('click', async () => {
        const question = document.getElementById('user-question').value.trim();
        const conversationArea = document.getElementById('conversation-area');

        if (!question) {
            alert('Vui lòng nhập câu hỏi!');
            return;
        }

        // Hiển thị câu hỏi của người dùng
        const userMessage = document.createElement('div');
        userMessage.className = 'user-message';
        userMessage.textContent = question;
        userMessage.style.color = '#4a4a8c';
        userMessage.style.background = '#e6e6ff';
        userMessage.style.padding = '10px';
        userMessage.style.borderRadius = '5px';
        userMessage.style.marginBottom = '10px';
        conversationArea.appendChild(userMessage);

        document.getElementById('user-question').value = ''; // Xóa ô nhập liệu

        // Tạo tin nhắn "Đang xử lý"
        const aiMessage = document.createElement('div');
        aiMessage.className = 'ai-message';
        aiMessage.textContent = "Đang xử lý câu hỏi...";
        aiMessage.style.color = '#4a4a8c';
        aiMessage.style.background = '#f4f4f9';
        aiMessage.style.padding = '10px';
        aiMessage.style.borderRadius = '5px';
        aiMessage.style.marginBottom = '10px';
        conversationArea.appendChild(aiMessage);

        conversationArea.scrollTop = conversationArea.scrollHeight; // Cuộn xuống cuối

        try {
            const response = await fetch('http://127.0.0.1:8000/ask', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ question }),
            });

            if (response.ok) {
                const data = await response.json();
                const markdownResponse = document.createElement('div');
                markdownResponse.className = 'ai-message';
                markdownResponse.innerHTML = marked.parse(data.answer || "Không tìm thấy câu trả lời.");
                markdownResponse.style.color = '#333';
                markdownResponse.style.background = '#f9f9f9';
                markdownResponse.style.padding = '10px';
                markdownResponse.style.borderRadius = '5px';
                markdownResponse.style.marginBottom = '10px';
                aiMessage.remove(); // Xóa tin nhắn "Đang xử lý"
                conversationArea.appendChild(markdownResponse);
            } else {
                aiMessage.textContent = "Lỗi: Không thể xử lý câu hỏi. Vui lòng thử lại!";
            }
        } catch (error) {
            aiMessage.textContent = "Lỗi kết nối. Vui lòng kiểm tra mạng!";
            console.error(error);
        }

        conversationArea.scrollTop = conversationArea.scrollHeight; // Cuộn xuống cuối
    });
</script>

                            </nav>
                            <div class="tab-content d-none d-lg-block" id="nav-tabContent">
                                <div class="tab-pane fade" id="nav-large-1" role="tabpanel">
                                    {{-- <div class="info">
                                        <div class="info-head">
                                            <h3>Lịch sử học tập</h3>
                                        </div>
                                        <div class="info-body">
                                            <!-- <small class="d-block">Ngày bắt đầu: <strong>15/01/2020</strong></small> -->
                                            <!--<aside class="bg-light p-3 rounded">-->
                                            <!--    <small class="d-block">Bạn đã học: <strong>406 ngày</strong></small>-->
                                            <!--    <small class="d-block">Mục tiêu hoàn thành: <strong>29/02/2024</strong></small>-->
                                            <!--    <small class="d-block">Còn lại: <strong>297 ngày</strong></small>-->
                                            <!--    <small class="text-muted">Chú ý: Bạn cần tập trung hoàn thành chương trình sớm để đi làm sớm. Nếu học hết thời gian mục tiêu vẫn chưa xong bạn được gia hạn học miễn phí cho đến khi hoàn thành!</small>-->
                                            <!--</aside>-->




                                            <p class="pt-3">Danh sách 5 bài học gần nhất, giúp bạn xem lại bất kỳ lúc
                                                nào</p>
                                            <div class="table-responsive">
                                                <table class="table table-sm table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Lúc</th>
                                                            <th scope="col">Bài học</th>
                                                            <th scope="col">Hành động</th>
                                                            <th scope="col">Cách đây</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>01:12:03 22/12/2024</td>
                                                            <td>Giới thiệu tổng quan Phan Văn Cương và Laravel Pro</td>
                                                            <td>
                                                                <!-- <button type="button" class="btn btn-primary btn-sm">Small button</button> -->
                                                                <a href="course/laravel-pro/lecture/983"
                                                                    class="btn btn-primary btn-sm">Xem lại</a>

                                                            </td>
                                                            <td class="text-muted">1 phút trước</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>01:12:48 22/12/2024</td>
                                                            <td>Giới thiệu tổng quan Phan Văn Cương và Laravel Pro</td>
                                                            <td>
                                                                <!-- <button type="button" class="btn btn-primary btn-sm">Small button</button> -->
                                                                <a href="course/laravel-pro/lecture/983"
                                                                    class="btn btn-primary btn-sm">Xem lại</a>

                                                            </td>
                                                            <td class="text-muted">1 phút trước</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>01:12:43 22/12/2024</td>
                                                            <td>Giới thiệu tổng quan Phan Văn Cương và Laravel Pro</td>
                                                            <td>
                                                                <!-- <button type="button" class="btn btn-primary btn-sm">Small button</button> -->
                                                                <a href="course/laravel-pro/lecture/983"
                                                                    class="btn btn-primary btn-sm">Xem lại</a>

                                                            </td>
                                                            <td class="text-muted">1 phút trước</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>01:12:39 22/12/2024</td>
                                                            <td>Giới thiệu tổng quan Phan Văn Cương và Laravel Pro</td>
                                                            <td>
                                                                <!-- <button type="button" class="btn btn-primary btn-sm">Small button</button> -->
                                                                <a href="course/laravel-pro/lecture/983"
                                                                    class="btn btn-primary btn-sm">Xem lại</a>

                                                            </td>
                                                            <td class="text-muted">1 phút trước</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>01:12:34 22/12/2024</td>
                                                            <td>Giới thiệu tổng quan Phan Văn Cương và Laravel Pro</td>
                                                            <td>
                                                                <!-- <button type="button" class="btn btn-primary btn-sm">Small button</button> -->
                                                                <a href="course/laravel-pro/lecture/983"
                                                                    class="btn btn-primary btn-sm">Xem lại</a>

                                                            </td>
                                                            <td class="text-muted">1 phút trước</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div> --}}

                                </div>
                                {{-- <div class="tab-pane fade active show" id="nav-large-2" role="tabpanel">
                                    <div class="info">
                                        <div class="info-head">
                                            <h3>Tài liệu khóa học</h3>
                                        </div>
                                        <div class="info-body">
                                            <p><strong>1. <a href="http://bit.ly/3fs0fPo" target="_blank">Giao diện
                                                        phần 21: Ứng dụng giỏ hàng</a>&nbsp;</strong></p>

                                            <p><strong>2. <a
                                                        href="http://github.com/unitopvn/laravelpro--project__themeadmin"
                                                        target="_blank">Giao diện admin đồ án website bán
                                                        hàng</a></strong></p>

                                            <p><strong>3. <a href="http://bit.ly/3dLSGCc" target="_blank">Biểu mẫu lên
                                                        kế hoạch xây dựng dự án</a></strong></p>

                                            <p><strong>4. <a href="http://bit.ly/2MJ1v6T" target="_blank">Theme đồ án
                                                        Ismart</a></strong></p>

                                            <p><strong>5.&nbsp;<a
                                                        href="https://docs.google.com/spreadsheets/d/1mcuAALajszneQj7UJ-jlzVHHCx3wEGT8JyAeNRAUkR0/edit?usp=sharing"
                                                        target="_blank">Bảng biểu gợi ý module project cuối
                                                        khóa</a></strong></p>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- <div class="tab-pane fade" id="nav-large-3" role="tabpanel">
                                    <div class="info">
                                        <div class="info-head">
                                            <h3>Tài liệu khóa học</h3>
                                        </div>
                                        <div class="info-body">
                                            <p><strong>1. <a href="http://bit.ly/3fs0fPo" target="_blank">Giao diện phần 21: Ứng dụng giỏ h&agrave;ng</a>&nbsp;</strong></p>

<p><strong>2. <a href="http://github.com/unitopvn/laravelpro--project__themeadmin" target="_blank">Giao diện admin đồ &aacute;n website b&aacute;n h&agrave;ng</a></strong></p>

<p><strong>3. <a href="http://bit.ly/3dLSGCc" target="_blank">Biểu mẫu l&ecirc;n kế hoạch x&acirc;y dựng dự &aacute;n</a></strong></p>

<p><strong>4. <a href="http://bit.ly/2MJ1v6T" target="_blank">Theme đồ &aacute;n Ismart</a></strong></p>

<p><strong>5.&nbsp;<a href="https://docs.google.com/spreadsheets/d/1mcuAALajszneQj7UJ-jlzVHHCx3wEGT8JyAeNRAUkR0/edit?usp=sharing" target="_blank">Bảng biểu gợi &yacute; module project cuối kh&oacute;a</a></strong></p>
                                        </div>
                                    </div>

                                </div> -->
                                {{-- <div class="tab-pane fade" id="nav-large-4" role="tabpanel">
                                    <div class="info">
                                        <div class="info-head">
                                            <h3>Cảm nhận về khóa học</h3>
                                        </div>
                                        <div class="info-body">
                                            <!-- <small>Đang cập nhật</small> -->
                                            <div id="widget-rating">
                                                <p>Chào bạn, Tôi Cương đây! Vậy là đã qua một thời gian bạn sinh hoạt
                                                    học tập tại hệ thống Untiop.vn. Tôi rất hi vọng bạn dành vài phút
                                                    viết những chia sẻ của mình về môi trường học tập tại Untiop nói
                                                    chung và chất lượng khóa học này nói riêng.
                                                </p>
                                                <p>Đây là cách để bạn nhìn lại một chặng đường đã qua với việc chinh
                                                    phục nghề lập trình web và qua đó những ý kiến của bạn sẽ giúp cho
                                                    những người đang bế tắc mong muốn nhập học có thêm góc nhìn toàn
                                                    diện hơn về chương trình học tại Unitop!</p>
                                                <strong>Gợi ý</strong>
                                                <ul class="">
                                                    <li>+ Khóa học đã giúp bạn đạt được những kỹ năng quan trọng gì
                                                        trong quá trình lập trình web?</li>
                                                    <li>+ Trong quá trình học bạn được hỗ trợ như nào? Có tốt không?
                                                    </li>
                                                    <li>+ Bạn có muốn đề xuất khóa học này đến những người đang bế tắc
                                                        không?</li>
                                                    <li>+ Bạn có gửi lời chúc gì đến Phan Văn Cương và Unitop không?
                                                    </li>

                                                    <li>...</li>

                                                </ul>
                                                <!-- <h3 class="widget-title">Đánh giá</h3> -->
                                                <p id="change-review" class="text-info">Bạn đã bình luận trước đó. Bạn
                                                    có muốn <span id="btn-change">thay đổi ?</span></p>
                                                <p id="cancel-review"><span id="btn-cancel">Hủy thay đổi ?</span></p>
                                                <p id="success-review" class="text-success">Cập nhật đánh giá thành
                                                    công!</p>
                                                <form action="https://unitop.vn/course/Index/edit_review"
                                                    data-url="https://unitop.vn/course/Index/edit_review"
                                                    id="sm-edit-review" name="f-review" method="post"
                                                    accept-charset="utf-8">
                                                    <div class="widget-detail">
                                                        <div id="rating-wp">
                                                            <input type="radio" name="rate" class="rating"
                                                                value="1" style="display: none;"><input
                                                                type="radio" name="rate" class="rating"
                                                                value="2" style="display: none;"><input
                                                                type="radio" name="rate" class="rating"
                                                                value="3" style="display: none;"><input
                                                                type="radio" name="rate" class="rating"
                                                                value="4" style="display: none;"><input
                                                                type="radio" name="rate" class="rating"
                                                                checked="checked" value="5"
                                                                style="display: none;">
                                                            <div class="stars"><a class="star fullStar"
                                                                    title="1"></a><a class="star fullStar"
                                                                    title="2"></a><a class="star fullStar"
                                                                    title="3"></a><a class="star fullStar"
                                                                    title="4"></a><a class="star fullStar"
                                                                    title="5"></a></div>
                                                        </div>
                                                        <small class="text-danger">Vote tại đây!</small>
                                                        <!-- <textarea name="detail" id="detail" rows="10" placeholder="Nội dung bình luận">hay quá ạ</textarea> -->
                                                        <input type="hidden" name="course_id" id="course-id"
                                                            value="24">
                                                        <div class="form-group">
                                                            <label for="detail">Viết cảm nhận:</label>
                                                            <textarea type="text" class="form-control" id="detail" name="detail"
                                                                placeholder="Bạn cảm thấy khóa học thế nào?">hay quá ạ</textarea>
                                                        </div>
                                                        <input type="submit" name="sm-edit-send"
                                                            class="btn btn-primary" id="sm-edit-send"
                                                            value="Cập nhật">

                                                    </div>
                                                </form>
                                                <div class="rate-wp w-75 py-3">
                                                    <div class="point-wp">
                                                        <h3 class="title">
                                                            4.9 </h3>
                                                        <p class="desc">Đánh giá trung bình</p>
                                                    </div>
                                                    <div class="ratings-wp">
                                                        <ul class="list-item">
                                                            <li class="clearfix" id="rate-1">
                                                                <div class="ratings-gauge">
                                                                    <div class="ratings-gauge-bg"><span
                                                                            class="ratings-gauge-fill"
                                                                            style="width:0%"></span></div>
                                                                </div>
                                                                <div class="ratings-star"><span>1 <i
                                                                            class="fa fa-star"
                                                                            aria-hidden="true"></i></span></div>
                                                                <div class="ratings-percent">0%</div>
                                                            </li>
                                                            <li class="clearfix" id="rate-2">
                                                                <div class="ratings-gauge">
                                                                    <div class="ratings-gauge-bg"><span
                                                                            class="ratings-gauge-fill"
                                                                            style="width:0%"></span></div>
                                                                </div>
                                                                <div class="ratings-star"><span>2 <i
                                                                            class="fa fa-star"
                                                                            aria-hidden="true"></i></span></div>
                                                                <div class="ratings-percent">0%</div>
                                                            </li>
                                                            <li class="clearfix" id="rate-3">
                                                                <div class="ratings-gauge">
                                                                    <div class="ratings-gauge-bg"><span
                                                                            class="ratings-gauge-fill"
                                                                            style="width:0%"></span></div>
                                                                </div>
                                                                <div class="ratings-star"><span>3 <i
                                                                            class="fa fa-star"
                                                                            aria-hidden="true"></i></span></div>
                                                                <div class="ratings-percent">0%</div>
                                                            </li>
                                                            <li class="clearfix" id="rate-4">
                                                                <div class="ratings-gauge">
                                                                    <div class="ratings-gauge-bg"><span
                                                                            class="ratings-gauge-fill"
                                                                            style="width:15%"></span></div>
                                                                </div>
                                                                <div class="ratings-star"><span>4 <i
                                                                            class="fa fa-star"
                                                                            aria-hidden="true"></i></span></div>
                                                                <div class="ratings-percent">15%</div>
                                                            </li>
                                                            <li class="clearfix" id="rate-5">
                                                                <div class="ratings-gauge">
                                                                    <div class="ratings-gauge-bg"><span
                                                                            class="ratings-gauge-fill"
                                                                            style="width:85%"></span></div>
                                                                </div>
                                                                <div class="ratings-star"><span>5 <i
                                                                            class="fa fa-star"
                                                                            aria-hidden="true"></i></span></div>
                                                                <div class="ratings-percent">85%</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info reviews-course">
                                                <div class="info-head">
                                                    <h4>Những cảm nhận khác về khóa học</h4>
                                                </div>
                                                <div class="info-body">
                                                    <ul class="list-text-reviews row no-gutters">
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Nguyễn Viết An</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 21 giờ trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Mình sinh năm 2002, mình đã biết đến khóa học của
                                                                    thầy khá sớm nhưng mình lại chưa có duyên để học mà
                                                                    vô tình chạy theo xu thế để học reactjs và rồi sau
                                                                    khi bị hiện thực giáng ra một cái tát thì mình đã
                                                                    quyết định học thêm php để có thể kiếm một công việc
                                                                    đúng với ngành nghề của mình và tiện thể làm đồ án
                                                                    ra trường luôn, hiện tại thì mình đã có công việc là
                                                                    làm laravel và vuejs thế là việc học reactjs của
                                                                    mình cũng không hề phí công sức, mình rất biết ơn
                                                                    thầy Cương vì đã tạo ra khóa học này, chúc cho thầy
                                                                    mọi điều tốt đẹp và truyền lại được kiến thức lập
                                                                    trình cho thật nhiều người hơn nữa. </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Nguyễn Võ Thanh</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 6 tháng trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Mình biết đến khoá học của Thầy Cương vào năm 2 Đại
                                                                    học (2021-2022). Lúc đấy mình không thể code cũng
                                                                    như không biết cách debug được do mình không hiểu
                                                                    được logic xử lý và tư duy code như thế nào. Khoá
                                                                    học đầu tiên mình đăng ký là khoá PHP Master của
                                                                    Thầy, Khi làm đồ án cuối khoá dưới sự hướng dẫn của
                                                                    Thầy mình tiến bộ lên và dần dần có những tu duy
                                                                    code, logic hơn. Sau khi khi mình học xong khoá PHP
                                                                    và nắm được những kiến thức trong khoá học, mình có
                                                                    thể học sang những ngôn ngữ khác như C#, Java ....
                                                                    nhanh và nắm chắc kiến thức những ngôn ngữ này hơn
                                                                    hơn. Nhận thấy được sự tiến bộ của bản thân, mình
                                                                    đăng ký học thêm khoá Laravel cũng do thầy dạy, ở
                                                                    khoá này mình tiếp cận đến những kiến thức thực tế,
                                                                    cốt lỗi của Laravel và nhanh chóng hiểu được và làm
                                                                    ra sản phẩm rất nhanh và chuyên nghiệm. Xin cảm ơn
                                                                    Thầy và Unitop đã có những khoá học hữu ích, giúp
                                                                    chúng em tiếp cận được những kiến thức mà ở trường
                                                                    lớp khó mà biết đến được. </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Vương Quốc Hùng</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 11 tháng
                                                                    trước</div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Quá hay, quá chi tiết, quá cụ thể, tính ứng dụng
                                                                    cao, những kiến thức và kinh nghiệm mà theo tôi sẽ
                                                                    ít người chia sẻ với bạn. Many thanks thầy Cương
                                                                    from the bottom of my heart.
                                                                    Chúc Thầy và gia đình nhiều sức khỏe, hạnh phúc và
                                                                    thành đạt. </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Hieubkav</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 1 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Mình vô cùng cảm ơn thầy ! Trước khoá học mình bị
                                                                    hỏng kiến thức nặng về lập trình web. Tuy nhiên sau
                                                                    2 khoá Php Master và Laravel Pro mình đã năm rõ được
                                                                    kiến thức . Luận văn vừa qua mình đạt được 9.6 tuy
                                                                    điểm còn khá khiêm tốn nhưng mình tin nếu không có
                                                                    các khoá học của thầy Cương mình khó mà đạt được
                                                                    điểm số này. Đồng thời trong thời gian này mình còn
                                                                    vận dụng được kiến thức đã học làm thêm job
                                                                    freelance và kiếm được 50tr đồng . Mình vô cùng cảm
                                                                    ơn thầy , không biết các bạn khác cảm nhận thế nào
                                                                    nhưng với vài triệu bỏ ra mình thu lại như vậy cũng
                                                                    là khá tốt . Đến đây thôi, nói nữa các bạn lại bảo
                                                                    mình flex </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Lù A Hạnh </span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 1 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Lời đầu tiên thì em xin được nói lời cảm ơn tới Thầy
                                                                    Cương nói riêng và tất cả mọi người trong nhóm học
                                                                    nói chung đã giúp đỡ cũng như đã support em trong
                                                                    quá trình em theo học tại Unitop. Thật sự em cảm
                                                                    thấy Thầy dạy thật sự rất chi tiết, cẩn thận và dễ
                                                                    hiểu, thầy luôn đưa ra những bước để học hiệu quả
                                                                    cho khóa học, bên cạnh đó Thầy luôn dạy cho chúng ta
                                                                    về cách tư duy để xử lý bài toán cụ thể và từng bước
                                                                    từng bước một đến khi ta hoàn thành xong chứ không
                                                                    phải chúng ta học và code theo. Sau mỗi phần thì
                                                                    Thầy Cương luôn có bài tập để chúng ta củng cố lại
                                                                    kiến thức đã học để bắt tay vào làm 1 bài tập cụ thể
                                                                    giúp cho em tư duy những kiến thức đã học vào để bắt
                                                                    tay tự làm nó và sau mỗi bài tập như vậy thì Thầy
                                                                    Cương luôn có video để chữa bài tập và Thầy Cương
                                                                    luôn có những cách rất tối ưu và thông minh để làm
                                                                    bài tập đó, khi xem xong nó giúp em biết được mình
                                                                    cần làm gì để cho bài mình tối ưu hơn . câu nói em
                                                                    khá thích ở Thầy Cương khi bắt đầu vào video chữa
                                                                    bài tập đó là: Bạn phải làm thì bạn mới biết mình
                                                                    yếu kém ở chỗ nào, Về Nội dung chương trình, khi học
                                                                    xong chương trình Unitop thì nó đã cho em được rất
                                                                    nhiều kiến thức với tư duy nâng cao để từ đó em có
                                                                    thể bắt tay vào làm bất kì trang Web nào , Ở khóa
                                                                    học chương trình , cụ thể là Khóa Học LaravelPro này
                                                                    thật sự nó đã giúp em tạo ra một trang Web rất nhanh
                                                                    chóng và dễ dàng. Thật sự em xin được nói lời Cảm Ơn
                                                                    tới Thầy Cương Thêm một lần nữa đã tạo ra 1 khóa học
                                                                    tuyệt vời, em cảm ơn thầy

                                                                </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Vũ Văn Cường</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 1 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Cảm ơn Thầy đã tạo ra khóa học thật tuyệt vời. Từ cơ
                                                                    bản laravel đến chuyên sâu. Cách thầy hướng dẫn tư
                                                                    duy giải quyết vấn đề mạch lạc,gọn gàng từ checklist
                                                                    đến xử lý từng module tác vụ. Đặc biệt phần quyền,
                                                                    thuật toán xử lý thật sự hay.
                                                                    Chúc Thầy Phan Văn Cương thật nhiều sức khỏe và
                                                                    Unitop phát triển vững mạnh! </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Mike</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 1 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Khóa học đầy đủ, chi tiết, liên tục update. Cách
                                                                    tiếp cận khoa học, từ cơ bản đến chuyên sâu; Dù là
                                                                    người đang đi làm hay các bạn sinh viên đều thu được
                                                                    những kiến thức vô cùng bổ ích. Cảm ơn thầy cương
                                                                    rất nhiều! Chúc thầy, đội ngũ quản trị unitop và các
                                                                    bạn học viên thành công, ngày càng phát triển.
                                                                </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Võ Chí Nguyên</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 1 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Đây là một khóa học rất bổ ích và đã giúp mình tiếp
                                                                    cận một Laravel framework đang thịnh hành nhất hiện
                                                                    nay một cách nhanh chóng, khóa học giúp nắm vững
                                                                    những cái kiến thức cốt lõi để tạo ra một website và
                                                                    từ kiến thức thông qua những video đã hướng dẫn giúp
                                                                    mình có thể tiếp thu thêm cái mới mẻ của Laravel như
                                                                    Web Service... dễ dàng hơn.
                                                                    Theo cảm nhận của mình thì tuyệt vời nhất là được
                                                                    cập nhật thêm những kiến thức mới từ khóa học được
                                                                    cập nhật thêm ngày qua ngày, mình thích nhất là phần
                                                                    Phân quyền nâng cao vì giúp cho dự án của mình chặt
                                                                    chẽ hơn, rõ ràng hơn, user chỉ có quyền làm đúng vs
                                                                    vai trò của user đó, giúp quản lý phần Admin tốt
                                                                    nhất có thể. Mấy bạn cứ yên tâm đừng sợ khi gặp khó
                                                                    khăn vì đã có Thầy Cương sẽ hỗ trợ bạn hết mình, tận
                                                                    tâm với vai trò là người dẫn dắt, giúp bạn giải
                                                                    quyết vấn đề đó và nhận xét những cái bạn làm thế
                                                                    nào là hợp lí và khắc phục nó.
                                                                    Qua khóa học này mình có lời cảm ơn đến Thầy Cương
                                                                    người đã tạo ra những cơ hội giúp mình nâng cấp giá
                                                                    trị bản thân và tự tin để tìm kiếm cơ hội việc làm.
                                                                </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Thức Bùi</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 1 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Lời đầu tiên thì em xin được nói lời cảm ơn tới Thầy
                                                                    Cương nói riêng và tất cả mọi người trong nhóm học
                                                                    nói chung đã giúp đỡ cũng như đã support em trong
                                                                    quá trình em theo học tại Unitop, Đối với em thì
                                                                    Unitop là một trong những khóa học em cảm thấy rất
                                                                    tuyệt vời mà em đã học, đầu tiên thì em xin phép nói
                                                                    về cách giảng dậy của Thầy Cương , thật sự em cảm
                                                                    thấy Thầy dạy thật sự rất chi tiết, cẩn thận và dễ
                                                                    hiểu, thầy luôn đưa ra những bước để học hiệu quả
                                                                    cho khóa học, bên cạnh đó Thầy luôn dạy cho chúng ta
                                                                    về cách tư duy để xử lý bài toán cụ thể và từng bước
                                                                    từng bước một đến khi ta hoàn thành xong chứ không
                                                                    phải chúng ta học và code theo. Sau mỗi phần thì
                                                                    Thầy Cương luôn có bài tập để chúng ta củng cố lại
                                                                    kiến thức đã học để bắt tay vào làm 1 bài tập cụ thể
                                                                    giúp cho em tư duy những kiến thức đã học vào để bắt
                                                                    tay tự làm nó và sau mỗi bài tập như vậy thì Thầy
                                                                    Cương luôn có video để chữa bài tập và Thầy Cương
                                                                    luôn có những cách rất tối ưu và thông minh để làm
                                                                    bài tập đó, khi xem xong nó giúp em biết được mình
                                                                    cần làm gì để cho bài mình tối ưu hơn . câu nói em
                                                                    khá thích ở Thầy Cương khi bắt đầu vào video chữa
                                                                    bài tập đó là: Bạn phải làm thì bạn mới biết mình
                                                                    yếu kém ở chỗ nào, Về Nội dung chương trình, khi học
                                                                    xong chương trình Unitop thì nó đã cho em được rất
                                                                    nhiều kiến thức với tư duy nâng cao để từ đó em có
                                                                    thể bắt tay vào làm bất kì trang Web nào , Ở khóa
                                                                    học chương trình , cụ thể là Khóa Học LaravelPro này
                                                                    thật sự nó đã giúp em tạo ra một trang Web rất nhanh
                                                                    chóng và dễ dàng. Thật sự em xin được nói lời Cảm Ơn
                                                                    tới Thầy Cương Thêm một lần nữa đã tạo ra 1 khóa học
                                                                    tuyệt vời như vậy, em chúc Khóa Học Của Thầy Sẽ Có
                                                                    Thêm Nhiều Học Viên Mới và Phát Triển Hơn .
                                                                    P\S: NẾU BẠN LÀ NGƯỜI CÓ ĐỊNH HƯỚNG THEO BACKEND THÌ
                                                                    KHÔNG THỂ KHÔNG BIẾT TỚI Laravel - Framework của PHP
                                                                    - một công cụ phổ biến nhất thế giới, giúp code PHP
                                                                    nhanh chóng so với chỉ sử dụng PHP thuần.
                                                                </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Nguyễn Xuân Trường</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 1 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Đây là một trong những khoá học tuyệt vời nhất mà
                                                                    tôi đã từng học qua, đầu tiên phải nói về cách giảng
                                                                    dạy của Thầy Cương, phải nói là nó quá chi tiết, quá
                                                                    cẩn thận, cách dạy của Thầy rất đặc biệt, thầy không
                                                                    những chỉ cách học sao cho nhanh chóng, mà còn chỉ
                                                                    cách lấy cảm hứng để học, bên cạnh đó thầy dẫn dắt
                                                                    về tư duy, cách thực hiện chứ không phải là nói qua
                                                                    loa rồi gõ phím theo, không phải là cho bài toán rồi
                                                                    bỏ đó.. Sau mỗi bài tập đều có những giải đáp cụ
                                                                    thể, bên cạnh đó còn cho thêm bài tập nâng cao về
                                                                    chủ đề vừa được giải đáp,... Thứ 2 nói về nội dung
                                                                    chương trình, theo cảm nhận riêng của cá nhân thì nó
                                                                    là vừa đủ để xây dựng bất kì trang web nào, tuỳ theo
                                                                    nghiệp vụ mà bạn có thể tư duy thành lời giải với
                                                                    những nội dung, với những bài học đã được dạy trong
                                                                    khoá LaravelPro này... Nếu bạn là một người theo
                                                                    PHP, hay đã trang bị được nó thì sang đến Laravel,
                                                                    mọi việc trở nên rất là nhanh chóng, để mình lấy 1
                                                                    ví dụ: Việc bạn code framework Laravel sau khi học
                                                                    PHP thì nó giống như bạn code Boostrap sau khi học
                                                                    html,css, jquery vậy ... Rất nhanh chóng với những
                                                                    câu lệnh chuẩn Laravel...
                                                                    Đó là những cảm nhận cá nhân của tôi sau khi học
                                                                    khoá học LaravelPro này, một lần nữa, em xin cám ơn
                                                                    Thầy Cương, cám ơn các học viên của Thầy đã hỗ trợ
                                                                    em trong những lúc gặp vấn đề, chúc Thầy và các học
                                                                    viên của Thầy ngày càng phát triển trên con đường
                                                                    lập trình Web này ... </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Trịnh Xuân Đức</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 2 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Là 1 khóa học tuyệt vời giúp ta thay đổi tư duy và
                                                                    cách học. </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Đỗ Lâm Thành Phát</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 2 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Đây là một khóa học tuyệt vời và tâm huyết của thầy
                                                                    và khóa học cũng đã cung cấp đầy đủ những kiến thức
                                                                    vô cùng cần thiết cho học viên nói chung và các bạn
                                                                    theo ngành IT web nói riêng. Em không biết nói gì
                                                                    hơn ngoài lời cảm ơn thầy vì đã đồng hành cùng em
                                                                    trong suốt khóa học. Lời chúc sức khỏe tới thầy. Em
                                                                    cảm ơn thầy rất nhiều. </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Phan Tấn Hiệp</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 2 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Môn này của thầy rất tuyệt vời thầy ạ! Chúc thầy và
                                                                    mọi người nhiều sức khỏe!
                                                                </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Lê Duy Việt</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 3 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Khóa học của thầy rất chất lượng. Truyền cảm hứng.
                                                                    Cảm ơn thầy đã tạo ra khóa học này. </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Sret Ksor</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 3 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Khóa học của thầy rất chất lượng. Truyền cảm hứng.
                                                                    Cảm ơn thầy đã tạo ra khóa học này. </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Đỗ Quang Thịnh</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 3 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Khóa học rất chi tiết đi kèm ví dụ . giúp tăng tốc
                                                                    xây dựng website rất nhiều ,hỗ trợ nhiệt tình khi
                                                                    vướng mắc trong nhóm ( đặc biệt cần thiết trong quá
                                                                    trình ). </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Thiều Thọ Cường </span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 3 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Khóa học của thầy dạy dễ hiểu, người bắt đầu khá dễ
                                                                    học, thầy hỗ trợ nhiệt tình. Trong quá trình học mà
                                                                    thầy có thể chia sẽ thêm các phần service provider,
                                                                    service container để mọi người có thể hiểu hơn về
                                                                    nhiệm vụ 2 phần này nữa thì tuyệt vời. </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Pham Thi My Hanh</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 3 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Quá hay thầy ơi, mấy tháng trước em cứng đầu làm web
                                                                    bằng php thuần, làm rất phê và không tối ưu. Nay
                                                                    xong khóa Laravel này thì tốc độ làm web cực nhanh.
                                                                    Và em có thể làm việc với đội nhóm dùng Laravel. Cảm
                                                                    ơn thầy rất nhiều ạ. </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Khánh</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 3 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Laravel - Framework của PHP - một công cụ phổ biến
                                                                    nhất thế giới, giúp code PHP nhanh chóng so với chỉ
                                                                    sử dụng PHP thuần. Để tiếp cận với Laravel không hề
                                                                    đơn giản, thật là may mắn bởi anh Cương đã tạo ra 1
                                                                    khóa học tuyệt vời, bài giảng được chia nhỏ, phương
                                                                    pháp học tập hay. Không còn khó khăn với việc mò
                                                                    mẫm, khóa học giúp mình nắm được Laravel một cách cơ
                                                                    bản đến nâng cao. Em chân thành cảm ơn anh Cương
                                                                    nhiều!!! </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">PhanTrung</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 3 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Tuyệt vời !!! </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Le Huy Anh</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 4 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Khóa học tuyệt vời , giúp tăng tốc độ code back-end
                                                                    lên rất nhiều </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Huỳnh Quốc Duy</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 4 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Khóa học rất tuyệt vời, khóa học laravel giúp em có
                                                                    thể làm chủ được dự án của minh, tăng tốc độ làm
                                                                    việc lên nhiều lần, rất cần thiết để có thể đi làm.
                                                                    Cảm ơn thầy và Unitop đã tạo ra khóa học rất hưu
                                                                    ích. Hy vọng trong tương lai Unitop có thể ra thêm
                                                                    nhiều khóa học nữa giúp các anh em có thể nâng cao
                                                                    khả năng lập trình. </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Hoàng Công Minh</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 4 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Khóa học này đã giúp em tăng tốc độ code về phía
                                                                    back end hơn rất nhiều. Từ Php thuần xong lên code
                                                                    bằng framework laravel thì quá tuyệt vời. Trước Php
                                                                    thuần code 1 chức năng khá mất thời gian, làm xong
                                                                    đôi khi còn phải fix bug, nhưng khi qua laravel code
                                                                    nhanh hơn, gọn hơn, ít bug hơn, nếu bug cũng dễ fix.
                                                                    Khóa học này sẽ giúp e rất nhiều trong tương lai khi
                                                                    đi xin việc. Cám ơn thầy Cương đã tạo ra khóa học
                                                                    chất lượng và truyền đạt có tâm và nhiệt huyết như
                                                                    vậy. Chúc thầy và Unitop ngày càng phát triển mang
                                                                    đến cho những anh em yêu thích lập trình web nhiều
                                                                    kiến thức bổ ích hơn nữa. </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Nguyễn Việt Thanh</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 4 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Khoá học rất chất lượng. Là một lập trình viên php,
                                                                    bạn không thể không bổ sung cho mình một framwork để
                                                                    tăng hiệu quả trong công việc.Bạn đã thấy các nhà
                                                                    tuyển dụng luôn "truy tìm" những ứng viên php biết
                                                                    về laravel. Bởi nó là một framwork đứng top đầu phổ
                                                                    biến mạnh mẽ và ưa dùng nhất trên thế giới .Vì thế
                                                                    mình đã đi tìm để học framwok này.
                                                                    Thật may mắn thay khi mình đã tìm được một nơi học
                                                                    laravel hoàn toàn chất lượng trên Unitop.Khoá học
                                                                    trên được thầy Phan Văn Cương,một người có nhiều năm
                                                                    kinh nghiệm trong nghề lập trình xây dựng.Thầy giản
                                                                    dạy rất là dễ hiểu và đã chia nhỏ bài học ra từng
                                                                    phần vì thế mình học tới đâu nắm chắc kiến thức đến
                                                                    đấy.Đi kèm những bài học lun có các bài tập nhỏ để
                                                                    bạn hiểu rõ hơn cách dùng như thế nào.không những
                                                                    thế khi gặp những rắc rối mình có thể đăng lên nhóm
                                                                    hỏi đáp, nhóm bài tập.Ở đấy sẽ gặp thầy, gặp những
                                                                    bạn đi trước giúp mình giải quyết vấn đề một cách
                                                                    nhanh nhất không phải mò mẫm, tự tìm lãng phí thời
                                                                    gian.Thầy không chỉ dạy về lập trình không mà thầy
                                                                    luôn chia sẻ điều hay, kiến thức bổ ích trong cuộc
                                                                    sống .Rất cảm ơn Unitop,cảm ơn thầy Cương đã tạo ra
                                                                    một sản phẩm thật sự rất chất lượng cho những lập
                                                                    trình viên chúng em.Hi vọng thầy sẽ tiếp tục cho ra
                                                                    những dự án mới,những video hay truyền đạt kinh
                                                                    nghiệm lập trình dẫn bước mọi người đi đến thành
                                                                    công.Chúc thầy thật nhiều sức khoẻ, luôn đạt mục
                                                                    tiêu với bản thân.Chúc thấy tất cả. </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Phan Vĩnh Khánh</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 4 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Rất tốt. </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Nguyen Xuan Tai</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 4 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Khi học xong php master em đã nhận xét rằng chương
                                                                    trình học của unitop rất cô đọng vì người làm ra nó
                                                                    không đơn giản là người thầy chuyên dạy về lý
                                                                    thuyết, mà là người có kinh nghiệm làm dự án thực tế
                                                                    cho nên tất cả những thứ cần và đủ để thực hiện một
                                                                    dự án hoàn chỉnh đã được đưa ra trọn vẹn trong bộ
                                                                    videos bài giảng. Điều này giúp anh em rút ngắn được
                                                                    thời gian học rất nhiều so với các giáo trình tương
                                                                    tự, Người học nhanh chóng hiểu được nội dung, thực
                                                                    hiện được dự án một cách nhẹ nhàng nhất.
                                                                    Sau khi em học xong php master của thầy. Thầy chưa
                                                                    có khóa học laravel pro em đã lên mạng tìm hiểu, và
                                                                    học một số bài giảng laravel của các trung tâm khác
                                                                    nhưng thấy nó vô cùng mờ mịt và cảm giác rất khó.
                                                                    Khi thầy cho ra lò chương trình laravel, Thật không
                                                                    thể tin nổi thời gian học thực tế của em chỉ trong
                                                                    vòng 3 tuần. Học xong phần Laravel của thầy em cảm
                                                                    thấy hình như thầy sinh ra là để truyền đạt kinh
                                                                    nghiệm làm web, thầy càng làm video càng hay, phần
                                                                    sau chất lượng hơn phần trước rất nhiều.
                                                                    Thầy cố gắng làm thêm nhiều chương trình hơn nữa để
                                                                    anh em có kinh nghiệm tốt khi tham gia vào các Công
                                                                    ty cũng như các dự án thực tế thầy nhé!
                                                                    Chúc thầy luôn khỏe để thực hiện mọi ước mơ của mình
                                                                    một cách hoàn hảo nhất. </div>

                                                            </div>
                                                        </li>
                                                        <li class="col-12">
                                                            <div class="reviews-item">
                                                                <div class="student-info">
                                                                    <span class="fullname">Lê Quang Trung</span>
                                                                </div>
                                                                <div class="show-star">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span class="num-vote">(5/5)</span>
                                                                </div>
                                                                <div class="reviews-date">Reviews vào lúc 4 năm trước
                                                                </div>
                                                                <div class="verifyed">Đã học tại Unitop</div>
                                                                <div class="message">
                                                                    Em thấy khóa học thực sự rất tuyệt vời. Em đã thấy
                                                                    rất nhiều các khóa học online khác nhau Nhưng có lẽ
                                                                    đây là khóa học mang lại cho em nhiều thứ mà các
                                                                    khóa học online khác không có. Trước kia mình học mò
                                                                    mẫm trên mạng nhưng không hiệu quả mất rất nhiều
                                                                    thời gian. Nhưng với khóa học lập trình về laravel
                                                                    này mình đã học với thời gian ngắn nhưng đã hoàn
                                                                    thành chương trình và hiểu bản chất của framework
                                                                    laravel. Chương trìnhcó hệ thống bài giảng vô cùng
                                                                    dễ hiểu, cách giảng tận tình của thầy nên em học rất
                                                                    nhanh và hứng thú. Có vấn đề gì khó khăn là được
                                                                    thầy và các ac đi trước chỉ bảo nên không sợ vấn đề
                                                                    gì. Thầy không chỉ dạy cho chúng em về kiến thức lập
                                                                    trình web mà còn dạy cho chúng em về những kiến thức
                                                                    trong đời sống mà thầy đã từng trải qua. Thật lòng
                                                                    cảm ơn thầy rất nhiều. Chúc thầy ngày càng mạnh khỏe
                                                                    và phát triển hơn nữa hệ thống UNITOP.VN để chúng em
                                                                    có những kiến thức vững chắc nhất và thực hiện tốt
                                                                    nhất những gì mà thầy đã dạy. </div>

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                            <!-- end tabcontent  -->
                            <nav id="tab-small" class="d-block d-lg-none">
                                <!-- d-block d-md-none -->
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="" data-toggle="tab"
                                        href="#nav-small-0" role="tab">Mục lục</a>
                                    <a class="nav-item nav-link" id="" data-toggle="tab"
                                        href="#nav-small-1" role="tab">Lịch sử</a>
                                    <a class="nav-item nav-link" id="" data-toggle="tab"
                                        href="#nav-small-2" role="tab">Tài liệu</a>
                                    <!-- <a class="nav-item nav-link" id="" data-toggle="tab" href="#nav-small-3" role="tab">Phần mềm</a> -->
                                    <!-- <a class="nav-item nav-link" id="" data-toggle="tab" href="#nav-small-4" role="tab">Reviews</a> -->
                                </div>
                            </nav>
                            <div class="tab-content d-block d-lg-none" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-small-0" role="tabpanel">
                                    <div class="info">
                                        <div class="info-head">
                                            <h3>Mục lục</h3>
                                        </div>
                                        <div class="info-body">
                                            <!-- Mục lục  -->
                                            <ul class="table-of-content">
                                                <li class="open-lecture">
                                                    <div class="part-info">
                                                        <div class="part-title">Phần 1: Khởi động</div>
                                                        <!--<span class="part-duration">15 phút</span>-->
                                                        <span class="toggle-lecture"></span>
                                                    </div>

                                                    <ul class="list-lecture" style="display: block;">


                                                        @foreach ($videos as $video)
                                                            <li class="current-lecture">
                                                                <div class="lecture-item">
                                                                    <!-- Dấu tích nếu video đã xem -->
                                                                    <span
                                                                        class="lecture-done lecture-mark far fa-check-circle"></span>

                                                                    <div class="lecture-info">
                                                                        <!-- Tiêu đề của video -->
                                                                        <a href="https://www.youtube.com/watch?v={{ $video['snippet']['resourceId']['videoId'] }}"
                                                                            class="lecture-title">
                                                                            {{ $video['snippet']['title'] }}
                                                                        </a>

                                                                        <div class="lecture-duration">
                                                                            <!-- Hiển thị độ dài video nếu có -->
                                                                            {{-- <span class="far fa-play-circle"></span> --}}



                                                                            {{-- {{ $video->contentDetails->duration }} --}}

                                                                            <span
                                                                                class="lecture-done">lecture-done</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach


                                                    </ul>
                                                </li>


                                            </ul>



                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-small-1" role="tabpanel">
                                    <div class="info">
                                        <div class="info-head">
                                            <h3>Lịch sử học tập</h3>
                                        </div>
                                        <div class="info-body">
                                            <!-- <small class="d-block">Ngày bắt đầu: <strong>15/01/2020</strong></small> -->
                                            <aside class="bg-light p-3 rounded">
                                                <small class="d-block">Bạn đã học: <strong>406 ngày</strong></small>
                                                <small class="d-block">Mục tiêu hoàn thành:
                                                    <strong>29/02/2024</strong></small>
                                                <small class="d-block">Còn lại: <strong>297 ngày</strong></small>
                                                <small class="text-muted">Chú ý: Bạn cần tập trung hoàn thành chương
                                                    trình sớm để đi làm sớm. Nếu học hết thời gian mục tiêu vẫn chưa
                                                    xong bạn được gia hạn học miễn phí cho đến khi hoàn thành!</small>
                                            </aside>

                                            <p>Danh sách 5 bài học gần nhất, giúp bạn xem lại bất kỳ lúc nào</p>
                                            <div class="table-responsive">
                                                <table class="table table-sm table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Lúc</th>
                                                            <th scope="col">Bài học</th>
                                                            <th scope="col">Hành động</th>
                                                            <th scope="col">Cách đây</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>01:12:03 22/12/2024</td>
                                                            <td>Giới thiệu tổng quan Phan Văn Cương và Laravel Pro</td>
                                                            <td>
                                                                <!-- <button type="button" class="btn btn-primary btn-sm">Small button</button> -->
                                                                <a href="course/laravel-pro/lecture/983"
                                                                    class="btn btn-primary btn-sm">Xem lại</a>

                                                            </td>
                                                            <td class="text-muted">1 phút trước</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>01:12:48 22/12/2024</td>
                                                            <td>Giới thiệu tổng quan Phan Văn Cương và Laravel Pro</td>
                                                            <td>
                                                                <!-- <button type="button" class="btn btn-primary btn-sm">Small button</button> -->
                                                                <a href="course/laravel-pro/lecture/983"
                                                                    class="btn btn-primary btn-sm">Xem lại</a>

                                                            </td>
                                                            <td class="text-muted">1 phút trước</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>01:12:43 22/12/2024</td>
                                                            <td>Giới thiệu tổng quan Phan Văn Cương và Laravel Pro</td>
                                                            <td>
                                                                <!-- <button type="button" class="btn btn-primary btn-sm">Small button</button> -->
                                                                <a href="course/laravel-pro/lecture/983"
                                                                    class="btn btn-primary btn-sm">Xem lại</a>

                                                            </td>
                                                            <td class="text-muted">1 phút trước</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>01:12:39 22/12/2024</td>
                                                            <td>Giới thiệu tổng quan Phan Văn Cương và Laravel Pro</td>
                                                            <td>
                                                                <!-- <button type="button" class="btn btn-primary btn-sm">Small button</button> -->
                                                                <a href="course/laravel-pro/lecture/983"
                                                                    class="btn btn-primary btn-sm">Xem lại</a>

                                                            </td>
                                                            <td class="text-muted">1 phút trước</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>01:12:34 22/12/2024</td>
                                                            <td>Giới thiệu tổng quan Phan Văn Cương và Laravel Pro</td>
                                                            <td>
                                                                <!-- <button type="button" class="btn btn-primary btn-sm">Small button</button> -->
                                                                <a href="course/laravel-pro/lecture/983"
                                                                    class="btn btn-primary btn-sm">Xem lại</a>

                                                            </td>
                                                            <td class="text-muted">1 phút trước</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="nav-small-2" role="tabpanel">
                                    <div class="info">
                                        <div class="info-head">
                                            <h3>Tài liệu khóa học</h3>
                                        </div>
                                        <div class="info-body">
                                            <p><strong>1. <a href="http://bit.ly/3fs0fPo" target="_blank">Giao diện
                                                        phần 21: Ứng dụng giỏ hàng</a>&nbsp;</strong></p>

                                            <p><strong>2. <a
                                                        href="http://github.com/unitopvn/laravelpro--project__themeadmin"
                                                        target="_blank">Giao diện admin đồ án website bán
                                                        hàng</a></strong></p>

                                            <p><strong>3. <a href="http://bit.ly/3dLSGCc" target="_blank">Biểu mẫu lên
                                                        kế hoạch xây dựng dự án</a></strong></p>

                                            <p><strong>4. <a href="http://bit.ly/2MJ1v6T" target="_blank">Theme đồ án
                                                        Ismart</a></strong></p>

                                            <p><strong>5.&nbsp;<a
                                                        href="https://docs.google.com/spreadsheets/d/1mcuAALajszneQj7UJ-jlzVHHCx3wEGT8JyAeNRAUkR0/edit?usp=sharing"
                                                        target="_blank">Bảng biểu gợi ý module project cuối
                                                        khóa</a></strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-small-4" role="tabpanel">
                                    <div class="info">
                                        <div class="info-head">
                                            <h3>Reviews</h3>
                                        </div>
                                        <div class="info-body">
                                            <small>Đang cập nhật</small>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end tabcontent  -->
                        </div>
                    </div>
                    <!-- end show video  -->
                    <div id="show-lecture" class="d-none d-lg-block">
                        <div class="outline-head d-flex justify-content-between">
                            <button class="btn" id="btn-toggle-outline" fdprocessedid="zdppm"></button>
                            <h3 class="text-center">MỤC LỤC</h3>
                        </div>
                        <div class="outline-body">
                            <ul class="table-of-content">
                                <li class="open-lecture">
                                    <div class="part-info">
                                        <div class="part-title">Phần 1: Khởi động</div>
                                        <span class="part-duration">8 bài</span>
                                        <span class="toggle-lecture"></span>
                                    </div>

                                    <ul class="list-lecture" style="display: block;">
                                        @foreach ($videos as $video)
                                            {{-- @php
                                        dd($video);
                                        @endphp --}}
                                            <li class="current-lecture">
                                                <div class="lecture-item">
                                                    <!-- Dấu tích nếu video đã xem -->
                                                    <span class="lecture-done lecture-mark far fa-check-circle"></span>

                                                    <div class="lecture-info">
                                                        <!-- Tiêu đề của video -->
                                                        <a href="javascript:void(0);" class="lecture-title video-link"
                                                        data-title="{{ $video['snippet']['title'] }}" data-video-id="{{ $video['snippet']['resourceId']['videoId'] }}">
                                                            {{ $video['snippet']['title'] }}
                                                        </a>

                                                        <div class="lecture-duration">
                                                            <!-- Hiển thị độ dài video nếu có (nếu có thông tin) -->
                                                            {{-- <span class="far fa-play-circle"></span> --}}
                                                            {{-- {{ isset($video['contentDetails']['duration']) ? $video['contentDetails']['duration'] : 'N/A' }} --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach


                                    </ul>

                            </ul>
                        </div>
                    </div>
                    <!-- end lecture  -->

                </div>

            </div>

        </div>
    </div>
    <script type="text/javascript" id="" charset="">
        ! function(b, e, f, g, a, c, d) {
            b.fbq || (a = b.fbq = function() {
                    a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
                }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e
                .createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(
                    c, d))
        }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
        fbq("init", "3624842844435025");
        fbq("track", "PageView");
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=3624842844435025&amp;ev=PageView&amp;noscript=1"></noscript>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script><iframe height="0" width="0"
        style="display: none; visibility: hidden;"></iframe><iframe allow="join-ad-interest-group"
        data-tagging-id="AW-708545853" data-load-time="1734847532413" height="0" width="0"
        src="https://td.doubleclick.net/td/rul/708545853?random=1734847532408&amp;cv=11&amp;fst=1734847532408&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be4cc1v9169861679z8813035186za201zb813035186&amp;gcd=13l3l3l3l1l1&amp;dma=0&amp;tag_exp=101925629~102067555~102067808~102081485~102198178&amp;u_w=1536&amp;u_h=864&amp;url=https%3A%2F%2Funitop.vn%2Fcourse%2Flaravel-pro%2Flecture%2F983&amp;ref=https%3A%2F%2Funitop.vn%2Fmy-course&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Unitop%20Ver2%20-%20Lecture&amp;npa=0&amp;pscdl=noapi&amp;auid=1414677650.1730172386&amp;uaa=x86&amp;uab=64&amp;uafvl=Google%2520Chrome%3B131.0.6778.205%7CChromium%3B131.0.6778.205%7CNot_A%2520Brand%3B24.0.0.0&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1"
        style="display: none; visibility: hidden;"></iframe><iframe allow="join-ad-interest-group"
        data-tagging-id="AW-614392906" data-load-time="1734847532478" height="0" width="0"
        src="https://td.doubleclick.net/td/rul/614392906?random=1734847532470&amp;cv=11&amp;fst=1734847532470&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be4cc1z8813035186za201zb813035186&amp;gcd=13l3l3l3l1l1&amp;dma=0&amp;tag_exp=101925629~102067555~102067808~102081485~102198178&amp;u_w=1536&amp;u_h=864&amp;url=https%3A%2F%2Funitop.vn%2Fcourse%2Flaravel-pro%2Flecture%2F983&amp;ref=https%3A%2F%2Funitop.vn%2Fmy-course&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Unitop%20Ver2%20-%20Lecture&amp;npa=0&amp;pscdl=noapi&amp;auid=1414677650.1730172386&amp;uaa=x86&amp;uab=64&amp;uafvl=Google%2520Chrome%3B131.0.6778.205%7CChromium%3B131.0.6778.205%7CNot_A%2520Brand%3B24.0.0.0&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1"
        style="display: none; visibility: hidden;"></iframe><iframe allow="join-ad-interest-group"
        data-tagging-id="AW-614392906/p5rVCOTG49cBEMrI-6QC" data-load-time="1734847532489" height="0"
        width="0"
        src="https://td.doubleclick.net/td/rul/614392906?random=1734847532483&amp;cv=11&amp;fst=1734847532483&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be4cc1z8813035186za201zb813035186&amp;gcd=13l3l3l3l1l1&amp;dma=0&amp;tag_exp=101925629~102067555~102067808~102081485~102198178&amp;u_w=1536&amp;u_h=864&amp;url=https%3A%2F%2Funitop.vn%2Fcourse%2Flaravel-pro%2Flecture%2F983&amp;ref=https%3A%2F%2Funitop.vn%2Fmy-course&amp;label=p5rVCOTG49cBEMrI-6QC&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Unitop%20Ver2%20-%20Lecture&amp;value=0&amp;bttype=purchase&amp;npa=0&amp;pscdl=noapi&amp;auid=1414677650.1730172386&amp;uaa=x86&amp;uab=64&amp;uafvl=Google%2520Chrome%3B131.0.6778.205%7CChromium%3B131.0.6778.205%7CNot_A%2520Brand%3B24.0.0.0&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1&amp;capi=1&amp;ct_cookie_present=0"
        style="display: none; visibility: hidden;"></iframe>
    <script src="public/assets/js/popper.min.js"></script>
    <script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/assets/owlcarousel/owl.carousel.min.js"></script>
    <script src="public/assets/js/jquery-star-rating-master/min/rating.js" type="text/javascript"></script>

    <script src="public/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            var to = $('#show-lecture .current-lecture').offset().top - 100;
            $('#show-lecture .outline-body').animate({
                scrollTop: to
            }, 800);

            $('.video-link').on('click', function() {
                // Lấy ID video từ data attribute
                var videoId = $(this).data('video-id');
                var videoTitle = $(this).data('title');


                // Cập nhật src của iframe
                $('#video-player').attr('src', 'https://www.youtube-nocookie.com/embed/' + videoId +
                    '?modestbranding=1&rel=0');
                // alert(videoTitle)
                
                $('.lecture-name').text(videoTitle);
            });


        });
    </script>


    <span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span><iframe allow="join-ad-interest-group"
        data-tagging-id="AW-708545853/f4CwCLiz97IBEL2a7tEC" data-load-time="1734847562769" height="0"
        width="0"
        src="https://td.doubleclick.net/td/rul/708545853?random=1734847562738&amp;cv=11&amp;fst=1734847562738&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be4cc1v9169861679z8813035186za201zb813035186&amp;gcd=13l3l3l3l1l1&amp;dma=0&amp;tag_exp=101925629~102067555~102067808~102081485~102198178&amp;u_w=1536&amp;u_h=864&amp;url=https%3A%2F%2Funitop.vn%2Fcourse%2Flaravel-pro%2Flecture%2F983&amp;ref=https%3A%2F%2Funitop.vn%2Fmy-course&amp;label=f4CwCLiz97IBEL2a7tEC&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Unitop%20Ver2%20-%20Lecture&amp;value=50&amp;bttype=purchase&amp;npa=0&amp;pscdl=noapi&amp;auid=1414677650.1730172386&amp;uaa=x86&amp;uab=64&amp;uafvl=Google%2520Chrome%3B131.0.6778.205%7CChromium%3B131.0.6778.205%7CNot_A%2520Brand%3B24.0.0.0&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1&amp;capi=1&amp;ct_cookie_present=0"
        style="display: none; visibility: hidden;"></iframe><span id="PING_IFRAME_FORM_DETECTION"
        style="display: none;"></span>
</body>


<!-- Mirrored from unitop.vn/history by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Dec 2024 05:53:07 GMT -->

</html>
