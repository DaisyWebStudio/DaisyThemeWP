// swiperSlider start
try {
  var swiper = new Swiper(".bannerSwiper", {
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: false,
    // loop: true,
  });
} catch {

}
// swiperSlider end
const advantagesSwiper = new Swiper('.advantages-swiper', {

  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,

  pagination: {
    el: '.advantages-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.advantages-navigation-next',
    prevEl: '.advantages-navigation-prev',
  },

  breakpoints: {
    // when window width is >= 320px
    564: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    762: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    // when window width is >= 480px
    992: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 2,
      spaceBetween: 30
    }
  }

});



const gallerySwiper = new Swiper('.gallery-swiper', {

  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,

  pagination: {
    el: '.gallery-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.gallery-navigation-next',
    prevEl: '.gallery-navigation-prev',
  },

  breakpoints: {
    // when window width is >= 320px
    564: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    762: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    // when window width is >= 480px
    992: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 3,
      spaceBetween: 30
    }
  }

});



const counterSwiper = new Swiper('.counter-swiper', {

  slidesPerView: 1,
  spaceBetween: 30,
  loop: false,

  pagination: {
    el: '.counter-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.counter-navigation-next',
    prevEl: '.counter-navigation-prev',
  },

  breakpoints: {
    // when window width is >= 320px
    564: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    762: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    992: {
      slidesPerView: 1,
      spaceBetween: 30
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 1,
      spaceBetween: 30
    }
  }

});


const reviewsSwiper = new Swiper('.reviews-swiper', {

  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,

  pagination: {
    el: '.reviews-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.reviews-navigation-next',
    prevEl: '.reviews-navigation-prev',
  },

  breakpoints: {
    // when window width is >= 320px
    564: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    762: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    992: {
      slidesPerView: 1,
      spaceBetween: 30
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 3,
      spaceBetween: 30
    }
  }

});



const informationSwiper = new Swiper('.information-swiper', {

  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,

  pagination: {
    el: '.information-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.information-navigation-next',
    prevEl: '.information-navigation-prev',
  },

  breakpoints: {
    // when window width is >= 320px
    564: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    762: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    992: {
      slidesPerView: 1,
      spaceBetween: 30
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 1,
      spaceBetween: 30
    }
  }

});



const informationContentSwiper = new Swiper('.information-content-swiper', {

  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,

  pagination: {
    el: '.reviews-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.reviews-navigation-next',
    prevEl: '.reviews-navigation-prev',
  },

  breakpoints: {
    // when window width is >= 320px
    564: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    762: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    992: {
      slidesPerView: 1,
      spaceBetween: 30
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 1,
      spaceBetween: 30
    }
  }

});