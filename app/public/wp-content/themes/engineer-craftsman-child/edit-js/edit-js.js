$(document).ready(function () {
  $(".counter").counterUp({
    delay: 1,
    time: 700,
  });
});

var swiperHero = new Swiper(".swiper-hero", {
  loop: true,
  freeMode: true,
  // grabCursor: true,
  effect: "fade",
  slidesPerView: 1,
  loop: true,
  autoplay: {
    delay: 3500,
    // disableOnInteraction: false,
    // pauseOnMouseEnter: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  speed: 2000,
});

// // Disable Swiper on hover for mobile devices
// const swiperContainer = document.querySelector(".swiper-hero");

// // Detect touch and hover events
// swiperContainer.addEventListener("mouseenter", () => {
//   if (!isMobile()) {
//     swiper.autoplay.stop();
//   }
// });

// swiperContainer.addEventListener("mouseleave", () => {
//   if (!isMobile()) {
//     swiper.autoplay.start();
//   }
// });

// swiperContainer.addEventListener("touchstart", () => {
//   swiper.autoplay.stop();
// });

// swiperContainer.addEventListener("touchend", () => {
//   swiper.autoplay.start();
// });

// // Utility function to detect mobile devices
// function isMobile() {
//   return /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
// }

var swiper = new Swiper(".swiper-testi", {
  loop: true,
  grabCursor: true,
  slidesPerView: 3,
  loop: true,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  speed: 2000,
  breakpoints: {
    // when window width is >= 320px
    300: {
      slidesPerView: 1,
    },
    400: {
      slidesPerView: 1,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".swiper-single", {
  loop: true,
  grabCursor: true,
  slidesPerView: 1,
  loop: true,
  autoplay: {
    delay: 3000,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".single-swiper-btn-next",
    prevEl: ".single-swiper-btn-prev",
  },
  speed: 2000,
});

const header = document.querySelector("header");
const times = header.querySelector(".times");
const bars = header.querySelector(".bars");

bars.addEventListener("click", (e) => {
  header.classList.add("show");
});
times.addEventListener("click", (e) => {
  header.classList.remove("show");
});

window.addEventListener("scroll", (e) => {
  if (scrollY > 0) {
    header.classList.add("fixed");
  } else {
    header.classList.remove("fixed");
  }
});

var scrollToTopBtn = document.querySelector(".scrollToTopBtn");
var rootElement = document.documentElement;

function handleScroll() {
  var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;
  if (rootElement.scrollTop / scrollTotal > 0.01) {
    scrollToTopBtn.classList.add("showBtn");
  } else {
    scrollToTopBtn.classList.remove("showBtn");
  }
}

function scrollToTop() {
  rootElement.scrollTo({
    top: 0,
    behavior: "smooth",
  });
}
scrollToTopBtn.addEventListener("click", scrollToTop);
document.addEventListener("scroll", handleScroll);

const lightbox = GLightbox({
  touchNavigation: true,
  loop: true,
  autoplayVideos: true,
  zoomable: true,
  draggable: true,
  touchNavigation: true,
});

const swiperSlideContents = document.querySelectorAll(".swiper-slide-content");
const heroBtns = document.querySelectorAll(".btnn");

heroBtns.forEach((button) => {
  button.addEventListener("mouseover", () => {
    swiperHero.autoplay.stop();
  });
  button.addEventListener("mouseout", () => {
    swiperHero.autoplay.start();
  });
});
