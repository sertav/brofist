// $(window).resize(function(){
  //     $('body').css('padding-bottom', $('footer').height() + 32);  
  // });
  
  // $(document).on("click","",function() {
    
    // });  
    
 

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
  var cur_pos = $(this).scrollTop();

  sections.each(function () {
    var top = $(this).offset().top - nav_height,
      bottom = top + $(this).outerHeight();

    if (cur_pos >= top && cur_pos <= bottom) {
      nav.find("a").parent().removeClass("active");
      sections.removeClass("active");

      $(this).parent().addClass("active");
      nav
        .find('a[href="#' + $(this).attr("id") + '"]')
        .parent()
        .addClass("active");
    }
  });
});

nav.find("a").on("click", function () {
  var $el = $(this),
    id = $el.attr("href");

  $("html, body").animate(
    {
      scrollTop: $(id).offset().top - nav_height,
    },
    500
  );

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
        items: 1,
      },  
      600: {
        items: 3,
      },  
      1000: {
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
  });  











  $(".hangOut-wrap .slider").owlCarousel({
    center: true,
    dots: true,
    loop: true,
    margin: 0,
    nav: true,
    mouseDrag: false,
    smartSpeed: 600,
    responsive: {
      0: {
        items: 1,
      },  
      600: {
        items: 3,
      },  
      1000: {
        items: 5,
      },  
    },  
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

var resizeTimer;
$(window).on("resize", function (e) {
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
    trigger();
  }, 250);
});

 

  $(".owl-prev").html('<i class="fas fa-chevron-left"></i>');  
  $(".owl-next").html('<i class="fas fa-chevron-right"></i>');
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
  var $workItem = $("html");

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
      150;
    var yPerc =
      ((top - $(this).data("itemHeight") / 2) / $(this).data("itemHeight")) *
      150;

    TweenMax.to($(this).data("imgOuter"), 2, {
      rotationX: 0.1 * yPerc,
      rotationY: -0.1 * xPerc,
      transformOrigin: origin,
      ease: Expo.easeOut,
    });
  });
}


$(".brands-wrap .show_more").on("click", function () {
  $(this).parent().find(".description").toggleClass("open");

  if ($(".brands-wrap .description").hasClass("open")) {
    $(this).html("Less");
    $(".brands-wrap .show_more").addClass("open");
  } else {
    $(this).html("More");
    $(".brands-wrap .show_more").removeClass("open");
  }
});

$(".scroll-img").on("click", function () {
  $("html, body").animate(
    {
      scrollTop: $(".brands-wrap").offset().top,
    },
    1500
  );
});

$(".welcome-text .btn, .offer-wrap .btn").on(
  "click",
  function () {
    $("html, body").animate(
      {
        scrollTop: $(".form-wrap").offset().top,
      },
      1500
    );
  }
);



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

      var fixtop = $(".faq-fixImg .faq").offset().top - 80;
      var fixbottom = $(".faq-fixImg").height() + ($(".faq-fixImg").offset().top - 80) - $(".fixImg .img").height();
      var fixbottomTop = $(".faq-fixImg").height() - $(".fixImg .img").height() + 160;
      var scroll = $(window).scrollTop();

      if ($(".faq_list li").length > 0) {
        if (scroll >= fixtop && scroll <= fixbottom) {
          $(".fixImg .img").css({
            position: "fixed",
            top: "80" + "px",
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


    $(document).on("click", ".signUp", function () {
      $(".signUp_popup").fadeIn();
      $("body").addClass("hidden-b");
    });

    $(document).on("click", ".signIn", function () {
      $(".signIn_popup").fadeIn();
      $("body").addClass("hidden-b");
    });

    $(document).on("click", ".close-popup , .info_signin_popup .btn", function () {
      $(".popup").fadeOut();
      $("body").removeClass("hidden-b");
    });

    $(".menu-toggle").on("click", function () {
      $(".menu-toggle .m-lines").toggleClass("on");
      $("header .innerWrap nav").toggleClass("open");
    });