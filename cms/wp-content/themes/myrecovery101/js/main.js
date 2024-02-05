
$('.testimonials-slider').slick({
  infinite: true,
});
/**
 * Slider Home.
 */
$('.services-slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});

/**
 * Copyright Year.
 */
const currentDate = new Date();
const currentYear = currentDate.getFullYear();
const textYear = document.getElementById("year");
textYear.innerHTML = currentYear;
/**
 * JS using Revealing Module Pattern.
 */

const App = (() => {
  /** DOM Elements. */
  const body = document.querySelector('body');

  /** Events. */
  const events = () => {
    console.log('Load main.js file!');
  };

  return {
    /** Initialize the events. */
    init: () => {
      events();
    },
  };
})();

/** Initialize the App. */
App.init();
