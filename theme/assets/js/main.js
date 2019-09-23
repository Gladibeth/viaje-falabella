$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open');
    $('body').toggleClass('fixed');

  })
})

$('.dropdown-toggle').click(function () {
  if ($(document).scrollTop() <= 70 && ($(window).width() >= 0)) {
    $('.navbar-fixed-js').removeClass('fixed-height')
  } else {
    $('.navbar-fixed-js').addClass('fixed-height')
  }
})


var URLactual = window.location;

// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >= 0)) {
    $('.navbar-fixed-js').addClass('fixed');
    $('.nav-link').addClass('fixed-color');
    $('.main-nav__search').addClass('main-nav__search--scroll');
    $('.dropdown-menu').addClass('dropdown-menu--scroll');
    $('.dropdown-item').addClass('dropdown-item--scroll');
    $('.main-nav__mail').addClass('main-nav__mail--scroll');
    $("#site1").addClass('display_none');
    $("#site2").addClass('display_none');
    $("#site3").addClass('display_none');
    $("#site4").addClass('display_none');
    $("#site_1").addClass('display_block');
    $("#site_2").addClass('display_block');
    $("#site_3").addClass('display_block');
    $("#site_4").addClass('display_block');
    $("#iso").addClass('display_none');
    $("#iso_green").addClass('display_block');
    // $("#iso").addClass('img-size').attr('src', URLactual + '/wp-content/themes/theme/assets/img/logo-b.png').removeClass('scroll-up');
    // $("#site1").addClass('img-size').attr('src', URLactual + '/wp-content/themes/theme/assets/img/icons/site1.png').removeClass('scroll-up');
    // $("#site2").addClass('img-size').attr('src', URLactual + '/wp-content/themes/theme/assets/img/icons/site2.png').removeClass('scroll-up');
    // $("#site3").addClass('img-size').attr('src', URLactual + '/wp-content/themes/theme/assets/img/icons/site3.png').removeClass('scroll-up');
    // $("#site4").addClass('img-size').attr('src', URLactual + '/wp-content/themes/theme/assets/img/icons/site4.png').removeClass('scroll-up');

  } else {
    $('.navbar-fixed-js').removeClass('fixed');
    $('.nav-link').removeClass('fixed-color');
    $('.main-nav__search').removeClass('main-nav__search--scroll');
    $('.dropdown-menu').removeClass('dropdown-menu--scroll');
    $('.dropdown-item').removeClass('dropdown-item--scroll');
    $('.main-nav__mail').removeClass('main-nav__mail--scroll');
    $("#site1").removeClass('display_none');
    $("#site2").removeClass('display_none');
    $("#site3").removeClass('display_none');
    $("#site4").removeClass('display_none');
    $("#site_1").removeClass('display_block');
    $("#site_2").removeClass('display_block');
    $("#site_3").removeClass('display_block');
    $("#site_4").removeClass('display_block');
    $("#iso").removeClass('display_none');
    $("#iso_green").removeClass('display_block');
    // $("#iso").removeClass('img-size').attr('src', URLactual + '/wp-content/themes/theme/assets/img/logo.png').addClass('scroll-up');
    // $("#site1").addClass('img-size').attr('src', URLactual + '/wp-content/themes/theme/assets/img/icons/Icono europa-01.svg').addClass('scroll-up');
    // $("#site2").addClass('img-size').attr('src', URLactual + '/wp-content/themes/theme/assets/img/icons/Icono caribe-01.svg').addClass('scroll-up');
    // $("#site3").addClass('img-size').attr('src', URLactual + '/wp-content/themes/theme/assets/img/icons/Icono turquia-01.svg').addClass('scroll-up');
    // $("#site4").addClass('img-size').attr('src', URLactual + '/wp-content/themes/theme/assets/img/icons/Icono resto del mundo-01.svg').addClass('scroll-up');

  }
});

$(".hamburger").on("click", function () {
  if (!$(this).hasClass("is-active")) {
    $(this).addClass("is-active")
    $('.navbar-fixed-js').addClass('fixed');
    $('.hamburger-inner').addClass('js-hamburger');
    $("#iso").addClass('display_none');
    $('#iso_green').addClass('display_block')
    $('.nav-link').addClass('fixed-color');
  } else {
    $(this).removeClass("is-active")
    if ($(document).scrollTop() <= 70 && ($(window).width() >= 0)) {
      $('.navbar-fixed-js').removeClass('fixed');
      $('.hamburger-inner').removeClass('js-hamburger');
      $("#iso").removeClass('display_none');
      $('#iso_green').removeClass('display_block')
      $('.nav-link').removeClass('fixed-color');

    }
  }
});

$('.main-slider__img').click(function () {
  var img = $('.slick-active').next().find('.main-banner__img img').attr('src');
  $('.main-slider__img--active').attr('src', img);

  var text = $('.slick-active').next().find('.main-banner__title p').text();
  $('.main-slider__title').text(text);
  var text = $('.slick-active').next().find('.main-banner__number span').text();
  $('.main-slider__number span').text(text);
})

$('.main-banner__content').slick({
  infinite: true,
  autoplay: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: false,
  responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 1000
      }
    }
  ]
});

$('.main-destiny__content').slick({
  centerMode: true,
  centerPadding: '60px',
  arrows: true,
  slidesToShow: 1,
  responsive: [{
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});


$(document).on('ready', function () {
  var slide = $('.slider-single');
  var slideTotal = slide.length - 1;
  var slideCurrent = -1;

  function slideInitial() {
    slide.addClass('proactivede');
    setTimeout(function () {
      slideRight();
    }, 500);
  }

  function slideRight() {
    if (slideCurrent < slideTotal) {
      slideCurrent++;
    } else {
      slideCurrent = 0;
    }

    if (slideCurrent > 0) {
      var preactiveSlide = slide.eq(slideCurrent - 1);
    } else {
      var preactiveSlide = slide.eq(slideTotal);
    }
    var activeSlide = slide.eq(slideCurrent);
    if (slideCurrent < slideTotal) {
      var proactiveSlide = slide.eq(slideCurrent + 1);
    } else {
      var proactiveSlide = slide.eq(0);

    }

    slide.each(function () {
      var thisSlide = $(this);
      if (thisSlide.hasClass('preactivede')) {
        thisSlide.removeClass('preactivede preactive active proactive').addClass('proactivede');
      }
      if (thisSlide.hasClass('preactive')) {
        thisSlide.removeClass('preactive active proactive proactivede').addClass('preactivede');
      }
    });
    preactiveSlide.removeClass('preactivede active proactive proactivede').addClass('preactive');
    activeSlide.removeClass('preactivede preactive proactive proactivede').addClass('active');
    proactiveSlide.removeClass('preactivede preactive active proactivede').addClass('proactive');
  }

  function slideLeft() {
    if (slideCurrent > 0) {
      slideCurrent--;
    } else {
      slideCurrent = slideTotal;
    }

    if (slideCurrent < slideTotal) {
      var proactiveSlide = slide.eq(slideCurrent + 1);
    } else {
      var proactiveSlide = slide.eq(0);
    }
    var activeSlide = slide.eq(slideCurrent);
    if (slideCurrent > 0) {
      var preactiveSlide = slide.eq(slideCurrent - 1);
    } else {
      var preactiveSlide = slide.eq(slideTotal);
    }
    slide.each(function () {
      var thisSlide = $(this);
      if (thisSlide.hasClass('proactivede')) {
        thisSlide.removeClass('preactive active proactive proactivede').addClass('preactivede');
      }
      if (thisSlide.hasClass('proactive')) {
        thisSlide.removeClass('preactivede preactive active proactive').addClass('proactivede');
      }
    });
    preactiveSlide.removeClass('preactivede active proactive proactivede').addClass('preactive');
    activeSlide.removeClass('preactivede preactive proactive proactivede').addClass('active');
    proactiveSlide.removeClass('preactivede preactive active proactivede').addClass('proactive');
  }
  var left = $('.slider-left');
  var right = $('.slider-right');
  left.on('click', function () {
    slideLeft();
  });
  right.on('click', function () {
    slideRight();
  });
  slideInitial();
});


$('.variable-width').slick({
  dots: false,
  arrows: false,
  autoplay: true,
  infinite: true,
  speed: 300,
  slidesToShow: 2,
  centerMode: true,
  variableWidth: true
});