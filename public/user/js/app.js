document.addEventListener('contextmenu', function (e) {
    // e.preventDefault();
});
// document.addEventListener('keydown', function(e) {
//     if (e.ctrlKey || e.metaKey) {
//         // Ngăn chặn việc sử dụng Ctrl+C (Windows) hoặc Command+C (Mac)
//         e.preventDefault();
//     }
// });

$(document).ready(function() {
    
    //CTA
    // alert('OK');
    $('.cta-head').click(function() {
        $('#cta-conversion').toggleClass('hide-cta').addClass('close-cta');
        $(this).children('.cta-icon').toggleClass('fa-chevron-up fa-chevron-down');
        // alert('OK');
    });
    

    $(window).scroll(function() {
        //$('#course').offset().top
        if ($('#course').length ) {
            // Do something
            // console.log("ok");
            if ($(this).scrollTop() >= $('#course').offset().top) {
             if (!$('#cta-conversion').hasClass('close-cta')) {
                    $('#cta-conversion').stop().addClass('show-cta').removeClass('hide-cta');
                }
            } else {
                $('#cta-conversion').stop().addClass('hide-cta').removeClass('show-cta');
            }
        }
        
        // console.log(course_top);
        
    });
    
    // $('img').lazyload();
     if ($(window).width() > 1024) {
         var offset_top_nav = $('nav').offset().top;

         $(window).scroll(function () {
             if($(this).scrollTop() > offset_top_nav){
                 $('nav').addClass('position-fixed');
                 $('.nav-logo').css('display','block')
             }else{
                 $('nav').removeClass('position-fixed');
                 $('.nav-logo').css('display','none')
             }
                // if($(this).scrollTop() > offset_top_info_order && $(this).scrollTop() < (footer_reg_course_to_top - height_info_order)){
                //     $('.info-order').addClass('position-fixed');
                //     $('.info-order').removeClass('position-absolute');
                // }
                // else{
                //      $('.info-order').removeClass('position-fixed');
                // }


                console.log("nav:"+offset_top_nav);
            });
            
    }
    

        
        
        // var content_height = $('#intro-body').height();
        // var sidebar_height = $('#reg-course .info-order').height();
        // console.log(content_height);
        // if (content_height > sidebar_height) {

        //     // $('.info-order').height(content_height);
        //     var offset_top_info_order = $('.info-order').offset().top;
        //     var offset_top_footer = $('#footer-wp').offset().top;
        //     var info_order_height = $('.info-order').outerHeight(true);
        //     var distance = offset_top_footer - info_order_height;

        //     $(window).scroll(function () {
        //         if ($(this).scrollTop() > offset_top_info_order && $(this).scrollTop() < distance) {
        //             $('.info-order').addClass('fixed');
        //             $('.info-order').removeClass('absolute');
        //         } else {
        //             $('.info-order').removeClass('fixed');
        //             $('.info-order').addClass('absolute');
        //         }
        //         if ($(this).scrollTop() < offset_top_info_order) {
        //             $('.info-order').removeClass('absolute fixed');
        //         }


        //         console.log($(this).scrollTop() + '-' + distance);
        //     });

//            var content_height = $('#content').height();
//            $(window).scroll(function () {
//                if ($(this).scrollTop() > (content_height - 100)) {
//                    $('.info-order').removeClass('fixed');
//                    $('.info-order').addClass('absolute');
//                } else {
//                    $('.info-order').removeClass('absolute');
//                }
//            });
    //     }
    // }


    $("#nav-respon").click(function() {
        $('body').addClass("open-respon-menu");

    });


    $("#close-menu").click(function() {
        hide_respon();
    });
    $("#mask-content").click(function() {
        hide_respon();
    });

    function hide_respon() {
        // alert("OK");
        $('body').removeClass("open-respon-menu");
        // $("#close-menu").hide();
    }


    // Table of content 
    // $("ul.table-of-content li:first-child").addClass("open-lecture");
    // $("li.current-lecture").addClass('open-lecture');
    // $("li.current-lecture").parents('li').css("background-color", "red");
    $("li.current-lecture").parents('li').addClass('open-lecture');
    $("li.current-lecture").parents('ul.list-lecture').slideDown();

    // var to = $('#show-lecture .current-lecture').offset().top - 100;
    // $('#show-lecture .outline-body').animate({ scrollTop: to }, 800);

    $("ul.table-of-content .part-info").click(function() {
        $(this).next().stop().slideToggle();
        $(this).parent().toggleClass("open-lecture");
    });


    //Tab content 
    // $("#nav-tab .nav-item").first().addClass("active");
    $("#nav-tabContent .tab-pane").first().addClass("show active");
    // Back top
    $(window).scroll(function() {
        if ($(this).scrollTop() != 0) {
            $('#btn-top').stop().fadeIn(100);
        } else {
            $('#btn-top').stop().fadeOut(100);
        }
    });
    $('#btn-top').click(function() {
        $('body,html').stop().animate({ scrollTop: 0 }, 800);
    });

    // Show lecture 
    $("#btn-toggle-outline").click(function() {
        // $("#content").toggleClass("open-outline");
    })

    //View more reivews
    $('#sm_more_reviews').click(function() {
        $('.see-more').hide();
        $('.fa-circle-o-notch').css('visibility', 'visible');
        var url = $(this).attr('data-url');

        $.ajax({
            url: url,
            data: '',
            method: 'POST',
            dataType: 'text',
            success: function(data) {
                setTimeout(function() {
                    $('#reviews .list-text-reviews').html(data);
                    // Xá»¬ LĂ SHOW MORE
                    var numChar = 250;
                    var moretext = "&nbsp;...Xem thĂªm";
                    var lesstext = "&nbsp;RĂºt gá»n";

                    $('.info-reviews p').each(function() {
                        var content = $(this).html();
                        if (content.length > numChar) {
                            var c = content.substr(0, numChar);
                            var h = content.substr(numChar, content.length - numChar);
                            var html = c + '<span class="morecontent"><span>' + h + '</span><a href="" class="morelink">' + moretext + '</a></span>';
                            $(this).html(html);
                        }
                    });

                    $(".morelink").click(function() {
                        if ($(this).hasClass("less")) {
                            $(this).removeClass("less");
                            $(this).html(moretext);
                        } else {
                            $(this).addClass("less");
                            $(this).html(lesstext);
                        }
                        $(this).prev().toggle();
                        return false;
                    });
                    //                    $('#comment-wp .list-item').after("<span class='fa fa-circle-o-notch fa-spin fa-3x fa-fw'></span>");
                }, 500);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
        return false;
    });

    // reviews  
    $('#sm-review').submit(function() {
        var url = $(this).attr('data-url');
        var rate = $('input[name=rate]:checked').val();
        var detail = $('#detail').val();
        var course_id = $('#course-id').val();
        var data_send = { rate: rate, detail: detail, course_id: course_id };
        $.ajax({
            url: url,
            data: data_send,
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                if (rate > 0) {
                    if (detail.length <= 2) {
                        alert(data['mess_character']);
                    } else {
                        $('#cancel-review').css('display', 'none');
                        $('#sm-review').css('display', 'none');
                        $('#success-review').css('display', 'block');

                        $('.point-wp .title').text(data['point']);
                        for ($i = 1; $i < 6; $i++) {
                            $("#rate-" + $i + " .ratings-gauge-fill").css('width', data[$i] + "%");
                            $("#rate-" + $i + " .ratings-percent").text(data[$i] + "%");
                        }
                        $('#sm_review #detail').val("");
                        //$('.reviews-wp .list-item').prepend(data['result']);
                    }
                } else {
                    alert(data['mess_star']);
                }

            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
        return false;
    });

    $('#sm-edit-review').submit(function() {
        var url = $(this).attr('data-url');
        var rate = $('input[name=rate]:checked').val();
        var detail = $('#detail').val();
        var course_id = $('#course-id').val();
        var data_send = { rate: rate, detail: detail, course_id: course_id };
        $.ajax({
            url: url,
            data: data_send,
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                if (detail.length <= 2) {
                    alert(data['mess']);
                } else {
                    $('#cancel-review').css('display', 'none');
                    $('#sm_edit-review').css('display', 'none');
                    $('#success-review').css('display', 'block');
                    $('.point-wp .title').text(data['point']);
                    //                    var txt_detail = '"' + data.rate + '"' + '<i class="fa fa-star" aria-hidden="true"></i>';
                    //                    $('.reviews-wp .list-item #item-id-' + data.user_id + ' .info-member .created-at span').text(txt_detail);
                    for ($i = 1; $i < 6; $i++) {
                        $("#rate-" + $i + " .ratings-gauge-fill").css('width', data[$i] + "%");
                        $("#rate-" + $i + " .ratings-percent").text(data[$i] + "%");
                    }
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
        return false;
    });

    // RATING  
    // CHANGE REVIEW
    $('#btn-change').click(function() {
        $('#change-review').css('display', 'none');
        $('#cancel-review, #sm-edit-review').css('display', 'block');
    });

    // CANCEL
    $('#btn-cancel').click(function() {
        $('#sm-edit-review, #cancel-review').css('display', 'none');
        $('#change-review').css('display', 'block');
    });

    //  RATING
     $('#rating-wp').rating();
    // alert("OK");
    $("ul.list-faq .faq-head").click(function () {
        $(this).next().stop().slideToggle();
        $(this).parent().toggleClass("open-faq");
    });
    


});