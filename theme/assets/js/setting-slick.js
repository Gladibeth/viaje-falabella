$(document).ready(function () {
  $(".single-item").slick({
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 500,
    infinite: true,
    cssEase: 'linear',
    fade: true,
    arrows: false,
    dots: true,
    responsive: [{
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false

      }
    }]
  });

  $('.team-carousel').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          autoplay: true,
          autoplaySpeed: 1000
        }
      }
    ]
  });

  $('.project-carousel').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          autoplay: true,
          autoplaySpeed: 1000
        }
      }
    ]
  });
});

var time = 2;
var $bar,
  $slick,
  isPause,
  tick,
  percentTime;

$slick = $('.slider-nav__banner');
$slick.slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: '.slider-for__banner',
  dots: false,
  arrows: false,
  focusOnSelect: true,
  autoplay: false,
  responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
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
        arrows: true,
        autoplay: false,
        autoplaySpeed: 1000
      }
    },

  ]
});



$('.slider-for__banner').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav__banner',

});
// $('.slider-nav__banner').slick({
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   asNavFor: '.slider-for__banner',
//   dots: true,
//   arrows: false,
//   focusOnSelect: true,
//   responsive: [{
//       breakpoint: 1200,
//       settings: {
//         slidesToShow: 4,
//         slidesToScroll: 1,
//         infinite: true,
//         dots: true
//       }
//     },
//     {
//       breakpoint: 900,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     },
//     {
//       breakpoint: 600,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         dots: false,
//         autoplay: false,
//         autoplaySpeed: 1000
//       }
//     },

//   ]
// });




$bar = $('.slider-progress .progress');

function startProgressbar() {
  resetProgressbar();
  percentTime = 0;
  isPause = false;
  tick = setInterval(interval, 30);
}

function interval() {
  if (isPause === false) {
    percentTime += 1 / (time + 0.1);
    $bar.css({
      width: percentTime + "%"
    });
    if (percentTime >= 100) {
      $slick.slick('slickNext');
      startProgressbar();
    }
  }
}

function resetProgressbar() {
  $bar.css({
    width: 0 + '%'
  });
  clearTimeout(tick);
}


$('.slider-nav__banner').click(function () {
  resetProgressbar();
  startProgressbar();
})
startProgressbar();