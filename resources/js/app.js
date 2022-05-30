require('./bootstrap');

// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

// init Swiper:
const swiper = new Swiper('#header-slide', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 0,
    direction: 'horizontal',
    loop: true,
    grabCursor: true,
    lazy: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },

    // Navigation
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        480: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
    },
});

const swiperComments = new Swiper("#comments", {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 0,
    direction: 'horizontal',
    loop: true,
    grabCursor: true,
    lazy: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },
    breakpoints: {
        480: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
    },
});

const swiperPartners = new Swiper("#partners", {
    slidesPerView: 2,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
    breakpoints: {
        640: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 6,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 8,
          spaceBetween: 50,
        },
      },
});