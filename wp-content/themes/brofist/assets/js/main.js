$('.signIn').on('click', function () {
    window.open('https://admin.brofist.partners/partner/login', '_blank');
});

$('.signUp').on('click', function () {
    window.open('https://admin.brofist.partners/partner/register', '_blank');
});

$(".scroll-img").on("click", function () {
    window.open('https://admin.brofist.partners/partner/register', '_blank');
    // $(".signUp_popup").fadeIn();
    // $("body").addClass("hidden-b");
    // $("html, body").animate(
    //     {
    //         scrollTop: $(".brands-wrap").offset().top,
    //     },
    //     1500
    // );
});

$(".welcome-text .btn, .offer-wrap .btn, .brands-wrap .btn").on(
    "click",
    function () {
        window.open('https://admin.brofist.partners/partner/register', '_blank');
        // $(".signUp_popup").fadeIn();
        // $("body").addClass("hidden-b");
        // $("html, body").animate(
        //     {
        //         scrollTop: $(".form-wrap").offset().top,
        //     },
        //     1500
        // );
    }
);


$(window).load(function () {
    var swiper = new Swiper(".swiper-container.two", {
        pagination: ".swiper-pagination",
        nextButton: ".swiper-button-next",
        prevButton: ".swiper-button-prev",
        paginationClickable: true,
        effect: "coverflow",
        loop: true,
        centeredSlides: true,
        slidesPerView: 3.05,

        coverflow: {
            rotate: 0,
            stretch: 100,
            depth: 150,
            modifier: 1.2,
            slideShadows: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            500: {
                slidesPerView: 1.3,
            },
            768: {
                slidesPerView: 1.5,
            },
            992: {
                slidesPerView: 2,
            },
            1400: {
                slidesPerView: 3.01,
            },
        },
    });
});

var sections = $("section"),
    nav = $("nav"),
    nav_height = nav.outerHeight();

$(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll > 0) {
        $(".navigation-wrap").addClass("bg-shap");
        $(".welcome-wrap").addClass("pt");
    }
    if (scroll < 100) {
        $(".navigation-wrap").removeClass("bg-shap");
        $(".welcome-wrap").removeClass("pt");
    }
});

$("nav a , .footer-menu .menu a").on("click", function () {
    var $el = $(this),
        id = $el.attr("href");

    $("html, body").animate(
        {
            scrollTop: $(id).offset().top - nav_height,
        },
        500
    );

    $("nav .menu li").removeClass("active");
    $(this).parent().addClass("active");

    $(".m-lines").removeClass("on");
    $("nav").removeClass("open");

    return false;
});


$(window).load(function () {

    $(".faq_list li").first().addClass("open");

    $(".brands-wrap .slider")
        .children()
        .each(function (index) {
            $(this).attr("data-position", index);
        });

    $(".brands-wrap .slider").owlCarousel({
        center: true,
        dots: false,
        loop: true,
        margin: 0,
        nav: true,
        mouseDrag: false,
        smartSpeed: 600,
        responsive: {
            0: {
                items: 3,
                nav: false,
            },
            992: {
                items: 7,
            },
        },
    });

    $(".center").next().addClass("near");
    $(".center").prev().addClass("near");

    $(".center").nextAll().eq(1).addClass("next");
    $(".slider .center").prevAll().eq(1).addClass("next");

    $(".center").nextAll().eq(2).addClass("last");
    $(".center").prevAll().eq(2).addClass("last");

    $(".center").nextAll().eq(3).addClass("lastest");
    $(".center").prevAll().eq(3).addClass("lastest");


    $(document).on("click", ".brands-wrap .slider .item", function () {
        $(".brands-wrap .slider").trigger("to.owl.carousel", [
            $(this).data("position"),
        ]);

        var link = $(this).find('.link').html();
        var markets = $(this).find('.img-wrap').html();
        var payment = $(this).find('.payment-options').html();
        var license = $(this).find('.license').html();

        $('.brands-wrap .brand-info .item .website-link').html(link);
        $('.brands-wrap .brand-info .item .img-wrap').html(markets);
        $('.brands-wrap .brand-info .item .payment-text').html(payment);
        $('.brands-wrap .brand-info .item .license-text').html(license);
    });


    $(".slider .center").next().addClass("near");
    $(".slider .center").prev().addClass("near");

    $(".slider .center").nextAll().eq(1).addClass("next");
    $(".slider .center").prevAll().eq(1).addClass("next");

    $(".slider .center").nextAll().eq(2).addClass("last");
    $(".slider .center").prevAll().eq(2).addClass("last");

    $(".slider .center").nextAll().eq(3).addClass("lastest");
    $(".slider .center").prevAll().eq(3).addClass("lastest");


    $(document).on(
        "click",
        ".hangOut-wrap .slider ,.brands-wrap .slider",
        function () {
            $(this).find(".owl-item").removeClass("near");
            $(this).find(".owl-item").removeClass("next");
            $(this).find(".owl-item").removeClass("last");
            $(this).find(".owl-item").removeClass("lastest");

            $(this).find(".center").next().addClass("near");
            $(this).find(".center").prev().addClass("near");

            $(this).find(".center").nextAll().eq(1).addClass("next");
            $(this).find(".center").prevAll().eq(1).addClass("next");

            $(this).find(".center").nextAll().eq(2).addClass("last");
            $(this).find(".center").prevAll().eq(2).addClass("last");

            $(this).find(".center").nextAll().eq(3).addClass("lastest");
            $(this).find(".center").prevAll().eq(3).addClass("lastest");
        }
    );

    $(".hangOut-wrap .slider .center .item  ,.brands-wrap .slider .center").trigger("click");

    function trigger() {
        $(".hangOut-wrap .slider .center .item  ,.brands-wrap .slider .center").trigger("click");
    }

    var resizeTimerr;
    $(window).on("resize", function (e) {

        resizeTimerr = setTimeout(function () {

            trigger();
        }, 250);
    });


    $(".owl-prev").html('<i class="fas fa-chevron-left"></i>');
    $(".owl-next").html('<i class="fas fa-chevron-right"></i>');
});


var resizeTimer;

function resizee() {
    clearTimeout(resizeTimer);

    resizeTimer = setTimeout(function () {
        var checkWidth = $(window).width();
        var owlPost = $(".offer-wrap .item-wrap");
        if (checkWidth > 767) {
            if (typeof owlPost.data("owl.carousel") != "undefined") {
                owlPost.data("owl.carousel").destroy();
            }
            owlPost.removeClass("owl-carousel");
        } else if (checkWidth < 768) {
            owlPost.addClass("owl-carousel");
            owlPost.owlCarousel({
                dots: true,
                loop: true,
                margin: 24,
                nav: false,
                items: 1,
            });
        }
    }, 250);
};

$(document).ready(function () {
    resizee();
});


$(window).resize(function () {
    resizee();
});


$(".whats-new-wrap .slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    dots: true,
    smartSpeed: 600,
    items: 1,
});

$(".reviews-wrap .slider").owlCarousel({
    dots: true,
    loop: true,
    margin: 24,
    nav: true,
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        768: {
            items: 2,
        },
        1024: {
            items: 3,
        },
        1400: {
            items: 4,
            margin: 24,
        },
    },
});


$(".our-partners .slider").owlCarousel({
    dots: true,
    loop: true,
    margin: 24,
    nav: true,
    responsive: {
        0: {
            items: 1,
            dots: true,
        },
        992: {
            items: 5,
        },
        1400: {
            items: 6,
        },
    },
});


init3D();

function init3D() {
    var $workItem = $("section");

    $workItem.each(function () {
        $(this).data("xPos", $(this).offset().left);
        $(this).data("yPos", $(this).offset().top);
        $(this).data("itemWidth", $(this).width());
        $(this).data("itemHeight", $(this).height());
        $(this).data("imgOuter", $(this).find(".work__item-img-outer"));
    });

    $workItem.mousemove(function (e) {
        var xPos = $(this).data("xPos");
        var yPos = $(this).data("yPos");
        var mouseX = e.pageX;
        var mouseY = e.pageY;
        var left = mouseX - xPos;
        var top = mouseY - yPos;
        var origin = "center center -300";
        var xPerc =
            ((left - $(this).data("itemWidth") / 2) / $(this).data("itemWidth")) *
            50;
        var yPerc =
            ((top - $(this).data("itemHeight") / 2) / $(this).data("itemHeight")) *
            50;

        TweenMax.to($(this).data("imgOuter"), 2, {
            rotationX: 0.1 * yPerc,
            rotationY: -0.1 * xPerc,
            transformOrigin: origin,
            ease: Expo.easeOut,
        });
    });
}


wow = new WOW({
    animateClass: "animated",
    offset: 300,
    callback: function (box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">");
    },
});
wow.init();


$(".faq_list li .title").on("click", function () {
    $(this).parent().toggleClass("open");
    $(this).parent().find(".description-faq").slideToggle();
});


$(".active-lang-wrap").on("click", function () {
    $(this).parent().toggleClass('open')
});

$(".subNavigation .lang").on("click", function () {
    var lang = $(this).html();

    $(".active-lang").html(lang);
});


$(window).scroll(function () {
    if (!$(".faq-fixImg .faq").length) return;

    var fixtop = $(".faq-fixImg .faq").offset().top - 150;
    var fixbottom = $(".faq-fixImg").height() + ($(".faq-fixImg").offset().top - 150) - $(".fixImg .img").height();
    var fixbottomTop = $(".faq-fixImg").height() - $(".fixImg .img").height() + 160;
    var scroll = $(window).scrollTop();

    if ($(".faq_list li").length > 0) {
        if (scroll >= fixtop && scroll <= fixbottom) {
            $(".fixImg .img").css({
                position: "fixed",
                top: "150" + "px",
            });
        }

        if (scroll < fixtop) {
            $(".fixImg .img").css({
                position: "static",
            });
        }

        if (scroll >= fixbottom) {
            $(".fixImg .img").css({
                position: "absolute",
                top: fixbottomTop + "px",
            });
        }
    } else {
        $(".fixImg .img").css({
            position: "static",
        });
    }
});


// $(document).on("click", ".signUp", function () {
//     $(".signUp_popup").fadeIn();
//     $("body").addClass("hidden-b");
// });
//
// $(document).on("click", ".signIn", function () {
//     $(".signIn_popup").fadeIn();
//     $("body").addClass("hidden-b");
// });

$(document).on("click", ".close-popup , .info_signin_popup .btn", function () {
    $(".popup").fadeOut();
    $("body").removeClass("hidden-b");
});

$(document).on("click", ".close-popup , .info_reset_popup .btn", function () {
    $(".popup").fadeOut();
    $("body").removeClass("hidden-b");
});

$(".menu-toggle").on("click", function () {
    $(".menu-toggle .m-lines").toggleClass("on");
    $("header .innerWrap nav").toggleClass("open");
});


function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

$("input[name*='acceptance-1']").attr("readonly");
// $("*[name*='" + key + "']").addClass('error');

document.addEventListener('wpcf7invalid', function (event) {
    $('.wpcf7-response-output').addClass('hidden');
    $('.error-message').addClass('show');


    var input = $('.wpcf7-validates-as-required');
    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var is_email = re.test(input.val());

    if ($('.wpcf7-validates-as-required').val() < 1 || !is_email) {
        $('.wpcf7-validates-as-required').addClass('error');
    } else {
        $('.wpcf7-validates-as-required').removeClass('error');
    }
}, false);

document.addEventListener('wpcf7mailsent', function (event) {
    $('.popup.info_signin_popup').css("display", "block");
    $('.wpcf7-response-output').addClass('hidden');
    $('.popup.info_signin_popup').fadeIn;
}, false);

$('.wpcf7-validates-as-required').on('keyup', function () {
    var $this = $(this),
        val = $this.val();
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

    if (val.length >= 1) {
        $this.removeClass('error');
    } else {
        $this.addClass('error');
    }
});

$(document).ready(function () {
    $("header .innerWrap .language img").css(
        {
            "width" : "14px",
            "height" : "14px"
        }
    );
});

function onSubmit(token) {
    document.getElementById("resetPassword").submit();
    document.getElementById("signUp").submit();
}

$(document).on("click", ".reset-password", function () {
    $(".signIn_popup").fadeOut();
    $(".resetPassword_popup").fadeIn();
    $("body").addClass("hidden-b");
});


// $(function () {
//     $('#signUpReg').on('submit', function (e) {
//         alert(1);
//         $(this).find('input').removeClass('error');
//         e.preventDefault();
//         $.ajax({
//             type: 'post',
//             url: 'https://brofist.partners/wp-content/themes/brofist/api/sign_up.php',
//             data: $('#signUp').serialize(),
//             success: function (response) {
//                 var data = JSON.parse(response)
//                 if (data.errors) {
//                     $.each(data.errors, function (key, value) {
//                         $("*[name*='" + key + "']").addClass('error');
//                         $('.signUp_popup .error-message').fadeIn();
//                     });
//                 }
//                 if (data.status == 201) {
//                     window.open('https://admin.brofist.partners/partner/login');
//                 }
//             }
//         });
//     });
// });



$(function () {
    $('#signUp').on('submit', function (e) {
        $(this).find('input').removeClass('error');
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'https://brofist.partners/wp-content/themes/brofist/api/sign_up.php',
            data: $('#signUp').serialize(),
            success: function (response) {
                var data = JSON.parse(response)
                if (data.errors) {
                    $.each(data.errors, function (key, value) {
                        $("*[name*='" + key + "']").addClass('error');
                        $('.signUp_popup .error-message').fadeIn();
                    });
                }
                if (data.status == 201) {
                    $('.popup.signUp_popup').fadeOut();
                    $('.popup.signup_popup').fadeIn();
                }
            }
        });
    });
});

$(function () {
    $('#resetPassword').on('submit', function (e) {
        $(this).find('input').removeClass('error');
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'https://brofist.partners/wp-content/themes/brofist/api/reset_password.php',
            data: $('#resetPassword').serialize(),
            success: function (response) {
                var data = JSON.parse(response)
                if (data.errors) {
                    $.each(data.errors, function (key, value) {
                        $("*[name*='" + key + "']").addClass('error');
                    });
                }
                if (data.status == 200) {
                    $('.popup.resetPassword_popup').fadeOut();
                    $('.popup.info_reset_popup').fadeIn();
                }
            }
        });
    });
});

$(function () {
    $('#signIn').on('submit', function (e) {

        $(this).find('input').removeClass('error');
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'https://brofist.partners/wp-content/themes/brofist/api/sign_in.php',
            data: $('#signIn').serialize(),
            crossDomain: true,
            xhrFields: {
                withCredentials: true
            },
            headers: new Headers({
                "Content-Type": "application/json; charset=utf-8",
                Accept: "application/json"
            }),
            credentials: "include",
            success: function (response) {
                var data = JSON.parse(response);
                if (data.error) {
                    $('#signIn').find('input').addClass('error');
                    $('#signIn').find('#otp_attempt').removeClass('error');
                    $('.signIn_popup .error-message').fadeIn();
                }

                if (data.status == 201) {
                    window.location.href = "https://admin.brofist.partners/partner/dashboard";
                    // window.open('https://admin.brofist.partners/partner/dashboard', '_blank');
                }
            }
        });
    });
});






