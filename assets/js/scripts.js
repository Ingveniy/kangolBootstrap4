$(document).ready(function() {
  // Scroll Event
  $(window).on("scroll", function() {
    /* Display Scrol to Top Button */
    if (!$(".scroll-top1").hasClass("fixed")) {
      scrollTopBtnAppear();
    }

    /* Sticky Navigation Menu */
  });

  scrollTopAnimation();

  // Slider settings
  $(".slides").on("setPosition", function() {
    $(this)
      .find(".slick-slide")
      .height("auto");
    var slickTrack = $(this).find(".slick-track");
    var slickTrackHeight = $(slickTrack).height();
    $(this)
      .find(".slick-slide")
      .css("height", slickTrackHeight + "px");
  });
  $(".slick-slider").slick({
    dots: false,
    arrows: true,
    nextArrow:
      '<div class="slider__arrow-right w-slider-arrow-right"><img src="./images/slider-arrow-right.svg"></div>',
    prevArrow:
      '<div class="slider__arrow-left w-slider-arrow-left"><img src="./images/slider-arrow-left.svg"></div>',
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
          infinite: false,
          arrows: true,
          dots: false
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 497,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  // city shop selector
  $(".cities__item-link").on("click", function() {
    $(".address-selector__city-title").html($(this).html());
  });
  $(".product-card").hover(
    function() {
      $(this)
        .find(".product-card__colors-container")
        .css({ opacity: 1, display: "flex" });
    },
    function() {
      $(this)
        .find(".product-card__colors-container")
        .css({ opacity: 0, display: "none" });
    }
  );
  // search block
  $(".search-block-toogle").on("click", function() {
    const search = $(".header__search-box");
    // check toggle block
    if (search.hasClass("searchOpen")) {
      // close search block
      search.toggleClass("searchOpen");
      $(".header__search-box").animate(
        {
          opacity: 0,
          left: "0px"
        },
        600,
        () => search.removeClass("searchOpen")
      );
    } else {
      let left = "-80px";
      const width = $(window).width();
      console.log(width, "width");

      if (1200 > width) left = "-140px";
      if (992 > width) left = "-220px";
      console.log(left, "left");

      search.addClass("searchOpen");
      $(".header__search-box").animate({
        opacity: 1,
        left: left
      });
    }
  });

  // banner arrow move
  $(".first-banner__button").hover(
    function() {
      $(".button_arrow").animate({
        left: "20px"
      });
    },
    function() {
      $(".button_arrow").animate({
        left: "0px"
      });
    }
  );
  // footer arrow move
  $(".top-footer__distributor-button").hover(
    function() {
      $(".button_arrow").animate({
        left: "20px"
      });
    },
    function() {
      $(".button_arrow").animate({
        left: "0px"
      });
    }
  );

  // Modal login

  $(".toAuth").on("click", () => {
    $('.m-forgot').css({ display: "none" });
    $('.m-register').css({ display: "none" });
    $(".m-auth").css({ display: "block" });
  });
  $(".toRegister").on("click", () => {
    $('.m-forgot').css({ display: "none" });
    $('.m-register').css({ display: "block" });
    $(".m-auth").css({ display: "none" });
  });
  $(".toForgot").on("click", () => {
    $('.m-forgot').css({ display: "block" });
    $('.m-register').css({ display: "none" });
    $(".m-auth").css({ display: "none" });
  });

});

function scrollTopBtnAppear() {
  // This will be triggered at the bottom of code with window scroll event
  var windowTop = $(window).scrollTop(),
    scrollTop = $(".scroll-top1");

  if (windowTop >= 200) {
    scrollTop.addClass("fixed");
  } else {
    scrollTop.removeClass("fixed");
  }
}

function scrollTopAnimation() {
  $(".scroll-top1 , .scroll-top2").on("click", function(e) {
    $("html, body").animate(
      {
        scrollTop: 0
      },
      1200
    );
    e.preventDefault();
  });
}
