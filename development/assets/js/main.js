$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open');
    $('body').toggleClass('fixed');

  })
})


$('.dropdown-toggle1').click(function () {
  $('.navbar-fixed-js').toggleClass('fixed-height')
  $('.navbar-fixed-js').removeClass('fixed-height--two')
})


$('.dropdown-toggle2').click(function () {
  $('.navbar-fixed-js').toggleClass('fixed-height--two')
  $('.navbar-fixed-js').removeClass('fixed-height')
})


$('.nav-link-active').click(function () {
  $('.nav-link-active').removeClass('active');
  $(this).toggleClass('active');
})


$(".main-articles__img").hover(
  function () {
    $(this).find('.main-articles__item .mask').addClass('d-none');
  },
  function () {
    $(this).find(".main-articles__item .mask").removeClass('d-none');
  }
);


var URLactual = window.location;


$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >= 0)) {
    $('.navbar-fixed-js').addClass('fixed');
    $('.nav-link').addClass('fixed-color');
    $('.main-nav__search').addClass('main-nav__search--scroll');
    $('.dropdown-menu').addClass('dropdown-menu--scroll');
    $('.dropdown-item').addClass('dropdown-item--scroll');
    $('.main-nav__mail').addClass('main-nav__mail--scroll');
    $(".dropdown-item img").addClass('icon-nav-color');
    // $("#site2").addClass('display_none');
    // $("#site3").addClass('display_none');
    // $("#site4").addClass('display_none');
    // $("#site_1").addClass('display_block');
    // $("#site_2").addClass('display_block');
    // $("#site_3").addClass('display_block');
    // $("#site_4").addClass('display_block');
    // $("#site_5").addClass('display_block');
    // $("#site_6").addClass('display_block');
    $("#iso").addClass('display_none');
    $("#iso_green").addClass('display_block');
    $('.searchButton').addClass('searchButton--scroll');
    $('.searchInput').addClass('searchInput--scroll');
    $('.searchBox').addClass('searchBox--scroll');
    $('.searchBox').addClass('searchBox--scroll');
    $('.hamburger-inner').addClass('js-hamburger');
    $('.search-wrapper input').addClass('icon-scroll');
    $('.search-wrapper i').addClass('icon-scroll');

  } else {
    $('.navbar-fixed-js').removeClass('fixed');
    $('.nav-link').removeClass('fixed-color');
    $('.main-nav__search').removeClass('main-nav__search--scroll');
    $('.dropdown-menu').removeClass('dropdown-menu--scroll');
    $('.dropdown-item').removeClass('dropdown-item--scroll');
    $('.main-nav__mail').removeClass('main-nav__mail--scroll');
    $(".dropdown-item img").removeClass('icon-nav-color');
    // $("#site2").removeClass('display_none');
    // $("#site3").removeClass('display_none');
    // $("#site4").removeClass('display_none');
    // $("#site_1").removeClass('display_block');
    // $("#site_2").removeClass('display_block');
    // $("#site_3").removeClass('display_block');
    // $("#site_4").removeClass('display_block');
    // $("#site_5").removeClass('display_block');
    // $("#site_6").removeClass('display_block');
    $("#iso").removeClass('display_none');
    $("#iso_green").removeClass('display_block');
    $('.searchButton').removeClass('searchButton--scroll');
    $('.searchInput').addClass('searchInput--scroll');
    $('.hamburger-inner').removeClass('js-hamburger');
    $('.search-wrapper input').removeClass('icon-scroll');
    $('.search-wrapper i').removeClass('icon-scroll');
  }
});

$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >= 991)) {
    $(".dropdown-item img").addClass('icon-nav-color');

  } else {
    $(".dropdown-item img").removeClass('icon-nav-color');
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
    $('html').css('overflow', 'hidden ');


  } else {
    $(this).removeClass("is-active")
    if ($(document).scrollTop() <= 70 && ($(window).width() >= 0)) {
      $('.navbar-fixed-js').removeClass('fixed');
      $('.hamburger-inner').removeClass('js-hamburger');
      $("#iso").removeClass('display_none');
      $('#iso_green').removeClass('display_block')
      $('.nav-link').removeClass('fixed-color');
      $('html').css('overflow', 'hidden auto');


    }
  }
});






// $('.comment').click(function () {
//   var id = $(this).attr('id');
//   alert(id)
// })


$('i.visible').on('click', function () {
  $('.main-post__form--description').toggleClass('p-opacity')
})


// buscador
var searchWrapper = document.querySelector('.search-wrapper'),
  searchInput = document.querySelector('.search-input');

document.addEventListener('click', function (e) {
  if (~e.target.className.indexOf('search')) {
    searchWrapper.classList.add('focused');
    searchInput.focus();
  } else {
    searchWrapper.classList.remove('focused');
  }
});


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

// Loader

$(window).on("load", function (e) {
  setTimeout(function () {
    $('#preloader').fadeOut(250, function () {
      $(this).remove();
    });
    $('.body').css('overflow-y', 'auto');
    $('header').css('z-index', '9');
  });
});


//select
var select = document.getElementById('sucursales');
select.addEventListener('change',
  function(){

    var selectedOption = this.options[select.selectedIndex];
    console.log(selectedOption.value);
    $('.ciudad').removeClass( "js-mostrarCiudad" );
    $('#'+selectedOption.value).addClass( "js-mostrarCiudad" );
    if(selectedOption.value === 'bogota'){
      //oculto el contenido
        $('#chia').addClass( "js-ocultarCiudad" );
        $('#medellin').addClass( "js-ocultarCiudad" );
        $('#cali').addClass( "js-ocultarCiudad" );
        $('#bucaramanga').addClass( "js-ocultarCiudad" );
        $('#barranquilla').addClass( "js-ocultarCiudad" );
        $('#pereira').addClass( "js-ocultarCiudad" );
        $('#manizales').addClass( "js-ocultarCiudad" );
      //oculto el mapa
        $('#mapa-chia').addClass( "js-ocultarCiudad" );
        $('#mapa-medellin').addClass( "js-ocultarCiudad" );
        $('#mapa-cali').addClass( "js-ocultarCiudad" );
        $('#mapa-bucaramanga').addClass( "js-ocultarCiudad" );
        $('#mapa-barranquilla').addClass( "js-ocultarCiudad" );
        $('#mapa-pereira').addClass( "js-ocultarCiudad" );
        $('#mapa-manizales').addClass( "js-ocultarCiudad" );

      //muestro mapa
        $('#mapa-bogota').removeClass( "js-ocultarCiudad" );
    }
    else if(selectedOption.value === 'chia'){
      //oculto el contenido
        $('#bogota').addClass( "js-ocultarCiudad" );
        $('#medellin').addClass( "js-ocultarCiudad" );
        $('#cali').addClass( "js-ocultarCiudad" );
        $('#bucaramanga').addClass( "js-ocultarCiudad" );
        $('#barranquilla').addClass( "js-ocultarCiudad" );
        $('#pereira').addClass( "js-ocultarCiudad" );
        $('#manizales').addClass( "js-ocultarCiudad" );
      //oculto el mapa
        $('#mapa-bogota').addClass( "js-ocultarCiudad" );
        $('#mapa-medellin').addClass( "js-ocultarCiudad" );
        $('#mapa-cali').addClass( "js-ocultarCiudad" );
        $('#mapa-bucaramanga').addClass( "js-ocultarCiudad" );
        $('#mapa-barranquilla').addClass( "js-ocultarCiudad" );
        $('#mapa-pereira').addClass( "js-ocultarCiudad" );
        $('#mapa-manizales').addClass( "js-ocultarCiudad" );
       //muestro mapa
        $('#mapa-chia').removeClass( "js-ocultarCiudad" );
    }
    else if(selectedOption.value === 'medellin'){
       //oculto el contenido
        $('#bogota').addClass( "js-ocultarCiudad" );
        $('#chia').addClass( "js-ocultarCiudad" );
        $('#cali').addClass( "js-ocultarCiudad" );
        $('#bucaramanga').addClass( "js-ocultarCiudad" );
        $('#barranquilla').addClass( "js-ocultarCiudad" );
        $('#pereira').addClass( "js-ocultarCiudad" );
        $('#manizales').addClass( "js-ocultarCiudad" );
      //oculto el mapa
        $('#mapa-bogota').addClass( "js-ocultarCiudad" );
        $('#mapa-chia').addClass( "js-ocultarCiudad" );
        $('#mapa-cali').addClass( "js-ocultarCiudad" );
        $('#mapa-bucaramanga').addClass( "js-ocultarCiudad" );
        $('#mapa-barranquilla').addClass( "js-ocultarCiudad" );
        $('#mapa-pereira').addClass( "js-ocultarCiudad" );
        $('#mapa-manizales').addClass( "js-ocultarCiudad" );
      //muestro mapa
        $('#mapa-medellin').removeClass( "js-ocultarCiudad" );
    }
    else if(selectedOption.value === 'cali'){
      //oculto el contenido
        $('#bogota').addClass( "js-ocultarCiudad" );
        $('#chia').addClass( "js-ocultarCiudad" );
        $('#medellin').addClass( "js-ocultarCiudad" );
        $('#bucaramanga').addClass( "js-ocultarCiudad" );
        $('#barranquilla').addClass( "js-ocultarCiudad" );
        $('#pereira').addClass( "js-ocultarCiudad" );
        $('#manizales').addClass( "js-ocultarCiudad" );
      //oculto el mapa
        $('#mapa-bogota').addClass( "js-ocultarCiudad" );
        $('#mapa-chia').addClass( "js-ocultarCiudad" );
        $('#mapa-medellin').addClass( "js-ocultarCiudad" );
        $('#mapa-bucaramanga').addClass( "js-ocultarCiudad" );
        $('#mapa-barranquilla').addClass( "js-ocultarCiudad" );
        $('#mapa-pereira').addClass( "js-ocultarCiudad" );
        $('#mapa-manizales').addClass( "js-ocultarCiudad" );
      //muestro mapa
        $('#mapa-cali').removeClass( "js-ocultarCiudad" );
    }
    else if(selectedOption.value === 'bucaramanga'){
      //oculto el contenido
        $('#bogota').addClass( "js-ocultarCiudad" );
        $('#chia').addClass( "js-ocultarCiudad" );
        $('#medellin').addClass( "js-ocultarCiudad" );
        $('#cali').addClass( "js-ocultarCiudad" );
        $('#barranquilla').addClass( "js-ocultarCiudad" );
        $('#pereira').addClass( "js-ocultarCiudad" );
        $('#manizales').addClass( "js-ocultarCiudad" );
      //oculto el mapa
        $('#mapa-bogota').addClass( "js-ocultarCiudad" );
        $('#mapa-chia').addClass( "js-ocultarCiudad" );
        $('#mapa-medellin').addClass( "js-ocultarCiudad" );
        $('#mapa-cali').addClass( "js-ocultarCiudad" );
        $('#mapa-barranquilla').addClass( "js-ocultarCiudad" );
        $('#mapa-pereira').addClass( "js-ocultarCiudad" );
        $('#mapa-manizales').addClass( "js-ocultarCiudad" );
       //muestro mapa
        $('#mapa-bucaramanga').removeClass( "js-ocultarCiudad" );
    }

    else if(selectedOption.value === 'barranquilla'){
      //oculto el contenido
        $('#bogota').addClass( "js-ocultarCiudad" );
        $('#chia').addClass( "js-ocultarCiudad" );
        $('#medellin').addClass( "js-ocultarCiudad" );
        $('#cali').addClass( "js-ocultarCiudad" );
        $('#pereira').addClass( "js-ocultarCiudad" );
        $('#manizales').addClass( "js-ocultarCiudad" );
      //oculto el mapa
        $('#mapa-bogota').addClass( "js-ocultarCiudad" );
        $('#mapa-chia').addClass( "js-ocultarCiudad" );
        $('#mapa-medellin').addClass( "js-ocultarCiudad" );
        $('#mapa-cali').addClass( "js-ocultarCiudad" );
        $('#mapa-pereira').addClass( "js-ocultarCiudad" );
        $('#mapa-manizales').addClass( "js-ocultarCiudad" );
       //muestro mapa
        $('#mapa-barranquilla').removeClass( "js-ocultarCiudad" );
    }

    else if(selectedOption.value === 'pereira'){
      //oculto el contenido
        $('#bogota').addClass( "js-ocultarCiudad" );
        $('#chia').addClass( "js-ocultarCiudad" );
        $('#medellin').addClass( "js-ocultarCiudad" );
        $('#cali').addClass( "js-ocultarCiudad" );
        $('#barranquilla').addClass( "js-ocultarCiudad" );
        $('#manizales').addClass( "js-ocultarCiudad" );
      //oculto el mapa
        $('#mapa-bogota').addClass( "js-ocultarCiudad" );
        $('#mapa-chia').addClass( "js-ocultarCiudad" );
        $('#mapa-medellin').addClass( "js-ocultarCiudad" );
        $('#mapa-cali').addClass( "js-ocultarCiudad" );
        $('#mapa-barranquilla').addClass( "js-ocultarCiudad" );
        $('#mapa-pereira').addClass( "js-ocultarCiudad" );
        $('#mapa-manizales').addClass( "js-ocultarCiudad" );
       //muestro mapa
        $('#mapa-pereira').removeClass( "js-ocultarCiudad" );
    }

    else if(selectedOption.value === 'manizales'){
      //oculto el contenido
        $('#bogota').addClass( "js-ocultarCiudad" );
        $('#chia').addClass( "js-ocultarCiudad" );
        $('#medellin').addClass( "js-ocultarCiudad" );
        $('#cali').addClass( "js-ocultarCiudad" );
        $('#barranquilla').addClass( "js-ocultarCiudad" );
        $('#pereira').addClass( "js-ocultarCiudad" );
      //oculto el mapa
        $('#mapa-bogota').addClass( "js-ocultarCiudad" );
        $('#mapa-chia').addClass( "js-ocultarCiudad" );
        $('#mapa-medellin').addClass( "js-ocultarCiudad" );
        $('#mapa-cali').addClass( "js-ocultarCiudad" );
        $('#mapa-barranquilla').addClass( "js-ocultarCiudad" );
        $('#mapa-pereira').addClass( "js-ocultarCiudad" );
       //muestro mapa
        $('#mapa-manizales').removeClass( "js-ocultarCiudad" );
    }
   /*  console.log('#mapa-'+selectedOption.value); */
  });