(function ($) {
  "use strict";
  // scroll up button
  var csf_exists = $('#csf_exists').val();

  if( csf_exists == 'true' ){
    let calcScrollValue = () => {
      let scrollProgress = document.getElementById("progress");
      let progressValue = document.getElementById("progress-value");
      let pos = document.documentElement.scrollTop;
      let calcHeight =
        document.documentElement.scrollHeight -
        document.documentElement.clientHeight;
      let scrollValue = Math.round((pos * 100) / calcHeight);
      if (pos > 100) {
        scrollProgress.style.display = "grid";
      } else {
        scrollProgress.style.display = "none";
      }
      scrollProgress.addEventListener("click", () => {
        document.documentElement.scrollTop = 0;
      });
      scrollProgress.style.background = `conic-gradient(#dea057 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
    };
    window.onscroll = calcScrollValue;
    window.onload = calcScrollValue;
  }

  var countLenght = $(".progress-item").length;
  setTimeout(() => {
    for (var i = 0; i < countLenght; i++) {
      var indexNum = i + 2;
      var percentValue = $("#progress" + indexNum).attr("percent");
      $("#progress" + indexNum)
        .find("#blue" + indexNum)
        .animate({ "stroke-dashoffset": 198 * percentValue }, 2000);
    }
  }, 1600);

  jQuery(window).on("load", function () {
    $(".egns-preloader").delay(1600).fadeOut("slow");
  });
  // niceSelect
  $("select").niceSelect();

  $('.nice-select').after('<div class="clearfix"></div>');
  $('.blog-widget-item .wp-block-latest-posts__list').after('<div class="clearfix"></div>');
  
  // Remove Section Margin
  $(".elementor").parents(".sec-mar").removeClass("sec-mar");

  jQuery(window).on("load", function () {
    new WOW().init();
    window.wow = new WOW({
      boxClass: "wow",
      animateClass: "animated",
      offset: 0,
      mobile: true,
      live: true,
      offset: 100,
    });
    window.wow.init();
  });
  // sticky header

  window.addEventListener("scroll", function () {
    const header = document.querySelector(
      "header.style-1, header.style-2, header.style-3,header.style-4,header.style-5"
    );
    header.classList.toggle("sticky", window.scrollY > 0);
  });

  // mobile-search-area

  $(".search-btn").on("click", function () {
    $(".mobile-search").addClass("slide");
  });

  $(".search-cross-btn").on("click", function () {
    $(".mobile-search").removeClass("slide");
  });


  // mobile-menu

  $(".mobile-menu-btn").on("click", function () {
    $(".main-nav").addClass("show-menu");
  });

  $(".menu-close-btn").on("click", function () {
    $(".main-nav").removeClass("show-menu");
  });

  // mobile-drop-down

  $(".main-nav .bi").on("click", function (event) {
    var $fl = $(this);
    $(this).parent().siblings().find(".sub-menu").slideUp();
    $(this).parent().siblings().find(".bi").addClass("bi-chevron-down");
    if ($fl.hasClass("bi-chevron-down")) {
      $fl.removeClass("bi-chevron-down").addClass("bi-chevron-up");
    } else {
      $fl.removeClass("bi-chevron-up").addClass("bi-chevron-down");
    }
    $fl.next(".sub-menu").slideToggle();
  });

  // Menu Toggle button sidebar
  var toggleIcon = document.querySelectorAll(".sidebar-btn");
  var closeIcon = document.querySelectorAll(".cross-icon");
  var searchWrap = document.querySelectorAll(".menu-toggle-btn-full-shape");

  toggleIcon.forEach((element) => {
    element.addEventListener("click", () => {
      document.querySelectorAll(".menu-toggle-btn-full-shape").forEach((el) => {
        el.classList.add("show-sidebar");
      });
    });
  });
  closeIcon.forEach((element) => {
    element.addEventListener("click", () => {
      document.querySelectorAll(".menu-toggle-btn-full-shape").forEach((el) => {
        el.classList.remove("show-sidebar");
      });
    });
  });

  window.onclick = function (event) {
    // Menu Toggle button sidebar
    searchWrap.forEach((el) => {
      if (event.target === el) {
        el.classList.remove("show-sidebar");
      }
    });
  };

  // banner2
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    autoplay: true,
    watchSlidesProgress: true,
  });

  var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    autoplay: true,
    effect: "fade",
    navigation: {
      nextEl: ".banner2-next",
      prevEl: ".banner2-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });

  var swiper = new Swiper(".banner3-slider", {
    slidesPerView: 1,
    speed: 1200,
    spaceBetween: 15,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    autoplay: true,
    loop: true,
    roundLengths: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: "true",
    },
    navigation: {
      nextEl: ".banner3-prev",
      prevEl: ".banner3-next",
    },
  });

  // service-slider1
  var swiper = new Swiper(".attorney-slider", {
    slidesPerView: 1,
    speed: 1200,
    spaceBetween: 15,
    // autoplay: true,
    loop: true,
    roundLengths: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: "true",
    },
    navigation: {
      nextEl: ".service-prev1",
      prevEl: ".service-next1",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        navigation: false,
      },
      576: {
        slidesPerView: 2,
        navigation: false,
      },
      768: {
        slidesPerView: 2,
        navigation: false,
      },
      992: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
    },
  });

  var slickopts = {
    slidesToShow: 2,
    slidesToScroll: 2,
    autoplay: 1000,
    spaceBetween: 20,
    rows: 2, // Removes the linear order. Would expect card 5 to be on next row, not stacked in groups.
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 776,
        settings: {
          slidesToShow: 2,
          rows: 2, // This doesn't appear to work in responsive (Mac/Chrome)
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          rows: 2, // This doesn't appear to work in responsive (Mac/Chrome)
        },
      },
    ],
  };

  $(".slick-wrapper").slick(slickopts);


  // blog-slider1
  var swiper = new Swiper(".blog-slider1", {
    slidesPerView: 1,
    speed: 1200,
    spaceBetween: 15,
    // autoplay: true,
    loop: true,
    roundLengths: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: "true",
    },
    navigation: {
      nextEl: ".service-prev1",
      prevEl: ".service-next1",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        navigation: false,
      },
      576: {
        slidesPerView: 2,
        navigation: false,
      },
      768: {
        slidesPerView: 2,
        navigation: false,
      },
      992: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 3,
      },
    },
  });
  // blog-slider2
  var swiper = new Swiper(".blog-slider2", {
    slidesPerView: 1,
    speed: 1200,
    spaceBetween: 15,
    // autoplay: true,
    loop: true,
    roundLengths: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: "true",
    },
    navigation: {
      nextEl: ".blog2-next",
      prevEl: ".blog2-prev",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        navigation: false,
      },
      576: {
        slidesPerView: 1,
        navigation: false,
      },
      768: {
        slidesPerView: 2,
        navigation: false,
      },
      992: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 2,
      },
    },
  });

  // service-slider1
  var swiper = new Swiper(".practice3-slider", {
    slidesPerView: 1,
    speed: 1200,
    spaceBetween: 25,
    autoplay: true,
    loop: true,
    roundLengths: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: "true",
    },
    navigation: {
      nextEl: ".service-prev1",
      prevEl: ".service-next1",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        navigation: false,
      },
      576: {
        slidesPerView: 2,
        navigation: false,
      },
      768: {
        slidesPerView: 2,
        navigation: false,
      },
      992: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 3,
      },
    },
  });

  // testimonial-slider
  new Swiper(".testi1-slider", {
    slidesPerView: 1,
    speed: 1200,
    autoplay: true,
    spaceBetween: 25,
    loop: true,
    roundLengths: true,
    navigation: {
      nextEl: ".testi-prev1",
      prevEl: ".testi-next1",
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
      },
      480: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1,
      },
      992: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 2,
      },
    },
  });

  // testimonial3-slider

  new Swiper(".testi3-slider", {
    slidesPerView: 1,
    speed: 1200,
    autoplay: true,
    effect: "fade",
    crossFade: "true",
    spaceBetween: 25,
    autoplay: "true",
    loop: true,
    roundLengths: true,
    navigation: {
      nextEl: ".testi3-prev",
      prevEl: ".testi3-next",
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
      },
      480: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1,
      },
      992: {
        slidesPerView: 1,
      },
      1200: {
        slidesPerView: 1,
      },
    },
  });

  // casestudy2-slider
  var swiper = new Swiper(".casestudy2-slider", {
    slidesPerView: 1,
    speed: 1200,
    spaceBetween: 2,
    autoplay: true,
    loop: true,
    roundLengths: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: "true",
    },
    navigation: {
      nextEl: ".case2-prev",
      prevEl: ".case2-next",
    },
    breakpoints: {
      280: {
        slidesPerView: 1,
        navigation: false,
      },
      576: {
        slidesPerView: 1,
        navigation: false,
      },
      768: {
        slidesPerView: 2,
        navigation: false,
      },
      992: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
    },
  });

  // blog-standard-slider
  var swiper = new Swiper(".comnt-slider", {
    slidesPerView: 1,
    speed: 1200,
    spaceBetween: 15,
    autoplay: true,
    loop: true,
    roundLengths: true,
    parallax: true,
    pagination: false,
    navigation: {
      nextEl: ".comment-prev",
      prevEl: ".comment-next",
    },
  });


  // Blog Archive Gallery Slider
  //blog-archive-slider
  $('.blog-archive-slider').each(function( i ) {
  var mySwiper = new Swiper($('.blog-archive-slider')[i], {
          slidesPerView: 1,
          speed: 1000,
          spaceBetween: 24,
          loop: true,
          roundLengths: true,
          autoplay: {
            delay: 1500,
          },
          navigation: {
              nextEl: ".custom-swiper-next",
              prevEl: ".custom-swiper-prev",
          },
      });
  });


  // password-hide and show
  const togglePassword = document.querySelector("#togglePassword");
  const password = document.querySelector("#password");

  if (togglePassword) {
    togglePassword.addEventListener("click", function (e) {
      // toggle the type attribute
      const type =
        password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);
      // toggle the eye / eye slash icon
      this.classList.toggle("bi-eye");
    });
  }

  // isotop
  var $grid = $(".grid").isotope({
    // options
  });
  // filter items on button click
  $(".filter-button-group").on("click", "button", function () {
    var filterValue = $(this).attr("data-filter");
    $grid.isotope({ filter: filterValue });
  });


  $(".intro-single").each(function () {
    $(this).isInViewport(function (status) {
      if (status === "entered") {
        for (
          var i = 0;
          i < document.querySelectorAll(".odometer").length;
          i++
        ) {
          var el = document.querySelectorAll(".odometer")[i];
          el.innerHTML = el.getAttribute("data-odometer-final");
        }
      }
    });
  });

  // lawyer-counter
  $(".lawyer-counter-single").each(function () {
    $(this).isInViewport(function (status) {
      if (status === "entered") {
        for (
          var i = 0;
          i < document.querySelectorAll(".odometer").length;
          i++
        ) {
          var el = document.querySelectorAll(".odometer")[i];
          el.innerHTML = el.getAttribute("data-odometer-final");
        }
      }
    });
  });


// Magnific Popup video
$('.popup-youtube').magnificPopup({
  type: 'iframe'
});

var countLenght = $(".progress-item").length;
  setTimeout(() => {
    for (var i = 0; i < countLenght; i++) {
      var indexNum = i + 2;
      var percentValue = $("#progress" + indexNum).attr("data-progress");
      $("#progress" + indexNum)
        .find("#blue" + indexNum)
        .animate({ "stroke-dashoffset": 198 * percentValue }, 2000);
    }
  }, 1600);


  $(".popup-youtube").magnificPopup({
      type: "iframe",
  });

}(jQuery));