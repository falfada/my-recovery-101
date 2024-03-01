$(document).ready(function () {
  /**
   * Animation.
   */
  let animationTl = gsap.timeline({
    defaults: { ease: "power4.inOut", duration: 2 },
  });
  animationTl.to(".anim-up-h1", {
    "clip-path": "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)",
    opacity: 1,
    y: 0,
    duration: 2.2,
  });
  /**
   * Services Desktop.
   */
  function updateServiceDetails(title, description, link) {
    const serviceTitle = document.getElementById("service-title");
    const serviceDescription = document.getElementById("service-description");
    const serviceLink = document.getElementById("link-service-details");

    serviceTitle.innerHTML = title;
    serviceDescription.innerHTML = description;

    if (link) {
      serviceLink.href = link;
      serviceLink.classList.add(
        "button",
        "circle",
        "uppercase",
        "fw-semibold",
        "mt-24"
      );
      serviceLink.innerHTML = "<span>LEARN MORE</span>";
    } else {
      serviceLink.href = "#";
      serviceLink.classList.remove(
        "button",
        "circle",
        "uppercase",
        "fw-semibold",
        "mt-24"
      );
      serviceLink.innerHTML = "";
    }

    const serviceDetails = document.getElementById("service-details");
    serviceDetails.style.opacity = 1;
  }

  function handleServiceColumnHover() {
    document
      .querySelectorAll(".services-page-slider > div")
      .forEach((column) => {
        column.classList.remove("active");
      });

    this.classList.add("active");

    const title =
      this.querySelector(".service-image").getAttribute("data-title");
    const description =
      this.querySelector(".service-image").getAttribute("data-description");
    const link = this.querySelector(".service-image").getAttribute("data-link");

    updateServiceDetails(title, description, link);
  }

  function handleHashChange() {
    const hash = window.location.hash;
    if (hash) {
      const serviceId = hash.substring(1);
      const service = document.getElementById(serviceId);
      if (service) {
        const title = service
          .querySelector(".service-image")
          .getAttribute("data-title");
        const description = service
          .querySelector(".service-image")
          .getAttribute("data-description");
        const link = service
          .querySelector(".service-image")
          .getAttribute("data-link");

        updateServiceDetails(title, description, link);

        document
          .querySelectorAll(".services-page-slider > div")
          .forEach((column) => {
            column.classList.remove("active");
          });
        service.classList.add("active");
      }
    }
  }

  window.addEventListener("hashchange", handleHashChange);

  const serviceColumns = document.querySelectorAll(
    ".services-page-slider > div"
  );
  serviceColumns.forEach(function (column) {
    column.addEventListener("mouseenter", handleServiceColumnHover);
  });

  handleHashChange();

  /**
   * Community Slider.
   */
  const communitySlider = document.querySelector(".community-slider");
  let communitySliderWidth = communitySlider.offsetWidth;
  let amountToScroll = communitySliderWidth - window.innerWidth;

  const tween = gsap.to(communitySlider, {
    x: -amountToScroll,
    duration: 3,
    ease: "none",
  });

  ScrollTrigger.create({
    trigger: ".community-slider-wrapper",
    start: "top 20%",
    end: "+=" + amountToScroll,
    pin: true,
    animation: tween,
    scrub: 1,
  });
  /**
   * Community Weekly Calendar.
   */
  const currentDayIndex = new Date().getDay();

  const daysOfWeek = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];

  const currentDayID = daysOfWeek[currentDayIndex];

  const currentDayColumn = document.getElementById(currentDayID);
  currentDayColumn.classList.add("currentDay");
  /**
   * Categories Resources.
   */
  const categories = document.querySelectorAll(".category");

  categories.forEach(function (category) {
    category.addEventListener("click", function () {
      categories.forEach(function (c) {
        c.classList.remove("active");
      });

      category.classList.add("active");
    });
  });

  /**
   * Form Input.
   */
  $("#fileInput").change(function () {
    let parentContainer = $(this).parent();
    let labelForFile = parentContainer.siblings("label");
    let textToDisplay = $("#fileInput")[0].files[0].name;
    let newParagraph = `<p class="fileName">${textToDisplay}</p>`;
    labelForFile.after(newParagraph);
  });

  /**
   * Services Mobile.
   */

  if ($(window).width() < 1400) {
    $(".services-page-slider").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 1,
          },
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
          },
        },
      ],
    });
  } else {
    let target = $(".services-page-slider");
    if (target.hasClass("slick-initialized")) {
      target.slick("unslick");
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
const growTl = gsap.timeline({
  scrollTrigger: {
    trigger: "#grow",
    scrub: 1.5,
    start: "top center",
    end: "+=400",
    ease: "power1.out",
  },
});
growTl.to("#grow", {
  duration: 1,
  scale: 1,
});

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
