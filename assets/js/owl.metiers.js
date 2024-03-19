
jQuery(document).ready(function ($) { 

    $('.owl1-carousel').owlCarousel({
      loop: true,
      autoplay: true,
      margin: 20,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      nav: true,
      dots: true,
      dotsEach: true,
      autoplayHoverPause: true,
      navText: [
        "<span class='chevron-left'></span>",
        "<span class='chevron-right'></span>"
      ],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
   
  });