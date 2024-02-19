/**
 * Services.
 */

$(document).ready(function () {
  if ($(window).width() < 768) {
    $(".services-slider").slick({});
  } else {
    let target = $(".services-slider");

    if (target.hasClass("slick-initialized")) {
      console.log("tengo el poder de la clase");
      target.unslick();
    }
  }
  
});


/**
 * Team Slider.
 */
$(".team-slider").slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      },
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
      },
    },
  ],
});

/**
 * Team Popup.
 */
$(".team-member").click(function () {
  let name = $(this).data("name");
  let position = $(this).data("position");
  let description = $(this).data("description");
  let imageSrc = $(this).find("img").attr("src");

  $(".popup-content img").attr("src", imageSrc);
  $(".popup-content h3").text(name);
  $(".popup-content .position").text(position);
  $(".popup-content .description").text(description);

  $(".popup").fadeIn();
});

$(".close-icon").click(function () {
  $(".popup").fadeOut();
});

/**
 * Reveal Text About Us on Scroll.
 */
gsap.registerPlugin(ScrollTrigger);

if ($("#about-text").length) {
  let typeSplit;

  function runSplit() {
    typeSplit = new SplitType(".split-word", {
      types: "lines, words",
    });
    $(".word").append("<div class='line-mask'></div>");
    createAnimation();
  }

  runSplit();
  function createAnimation() {
    let allMasks = $(".word")
      .map(function () {
        return $(this).find(".line-mask");
      })
      .get();

    let tl = gsap.timeline({
      scrollTrigger: {
        trigger: ".split-word",
        start: "top center",
        end: "bottom center",
        scrub: 1,
        scroller: window.innerWidth > 1024 ? "#about-text" : window,
      },
    });

    tl.to(allMasks, {
      width: "0%",
      duration: 1,
      stagger: 0.5,
    });
  }
}

/**
 * Widen Image Resources.
 */
// const growTl = gsap.timeline({
//   scrollTrigger: {
//     trigger: "#grow",
//     scrub: 1.5,
//     start: "top center",
//     end: "+=400",
//     ease: "power1.out",
//   },
// });
// growTl.to("#grow", {
//   duration: 1,
//   scale: 1,
// });

/**
 * Slider Testimonials.
 */
$(".testimonials-slider").slick({
  infinite: true,
});
/**
 * Slider Home.
 */
$(".services-slider").slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
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
  const body = document.querySelector("body");

  /** Events. */
  const events = () => {
    console.log("Load main.js file!");
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
