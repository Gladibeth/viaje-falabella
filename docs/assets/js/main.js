$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })
})




// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >= 768)) {
    $('.navbar-fixed-js').addClass('fixed');
    $('.nav-link').addClass('fixed-color');
    $('.main-nav__search').addClass('main-nav__search--scroll');
    $('.dropdown-menu').addClass('dropdown-menu--scroll');
    $('.dropdown-item').addClass('dropdown-item--scroll');
    $('.main-nav__mail').addClass('main-nav__mail--scroll');
    $("#iso").addClass('img-size').attr('src', 'assets/img/logo-b.png').removeClass('scroll-up');
    $("#site1").addClass('img-size').attr('src', 'assets/img/icons/site1.png').removeClass('scroll-up');
    $("#site2").addClass('img-size').attr('src', 'assets/img/icons/site2.png').removeClass('scroll-up');
    $("#site3").addClass('img-size').attr('src', 'assets/img/icons/site3.png').removeClass('scroll-up');
    $("#site4").addClass('img-size').attr('src', 'assets/img/icons/site4.png').removeClass('scroll-up');

  } else {
    $('.navbar-fixed-js').removeClass('fixed');
    $('.nav-link').removeClass('fixed-color');
    $('.main-nav__search').removeClass('main-nav__search--scroll');
    $('.dropdown-menu').removeClass('dropdown-menu--scroll');
    $('.dropdown-item').removeClass('dropdown-item--scroll');
    $('.main-nav__mail').removeClass('main-nav__mail--scroll');
    $("#iso").removeClass('img-size').attr('src', 'assets/img/logo.png').addClass('scroll-up');
    $("#site1").addClass('img-size').attr('src', 'assets/img/icons/Icono europa-01.svg').addClass('scroll-up');
    $("#site2").addClass('img-size').attr('src', 'assets/img/icons/Icono caribe-01.svg').addClass('scroll-up');
    $("#site3").addClass('img-size').attr('src', 'assets/img/icons/Icono turquia-01.svg').addClass('scroll-up');
    $("#site4").addClass('img-size').attr('src', 'assets/img/icons/Icono resto del mundo-01.svg').addClass('scroll-up');

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
        dots: false,
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