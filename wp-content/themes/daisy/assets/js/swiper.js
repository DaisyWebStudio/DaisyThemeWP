// swiperSlider start
try {
  const bannerSwiper = new Swiper(".bannerSwiper", {
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: '.banner-navigation-next',
      prevEl: '.banner-navigation-prev',
    },
    // autoplay: true,
    // loop: true,
  });
} catch { }

try {
  const aboutUsSwiper = new Swiper(".about-us-Swiper", {
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: '.about-us-navigation-next',
      prevEl: '.about-us-navigation-prev',
    },
    // autoplay: true,
    // loop: true,
  });

  const aboutUsOtherSwiper = new Swiper(".about-us-other-Swiper", {
    direction: "horizontal",
    mousewheel: true,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      577: {
        direction: "vertical",
        // mousewheel: true,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        // autoplay: true,
        // loop: true,
        // nested: true,
        // observer: true,
        // observeParents: true,
        // observeSlideChildren: true,
      },
    },
  });

  const aboutUsOtherSwiper2 = new Swiper(".about-us-other-Swiper2", {
    direction: "horizontal",
    mousewheel: true,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    // autoplay: true,
    // loop: true,
    // nested: true,
    // observer: true,
    // observeParents: true,
    // observeSlideChildren: true,
    // slidesPerView: "auto",
    breakpoints: {
      577: {
        direction: "vertical",
        spaceBetween: 10,
        // mousewheel: true,
      },

    },
  });
} catch { }



try {

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
      576: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20
      },

      992: {
        slidesPerView: 3,
        spaceBetween: 30
      }
    }

  });

} catch { }



try {

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
      576: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 30
      },
    }

  });

} catch { }



try {

  const counterSwiper = new Swiper('.counter-swiper', {

    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,

    pagination: {
      el: '.counter-pagination',
      clickable: true,
    },

    navigation: {
      nextEl: '.counter-navigation-next',
      prevEl: '.counter-navigation-prev',
    },

    breakpoints: {
      576: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      992: {
        slidesPerView: 1,
        spaceBetween: 30
      },
    }

  });

} catch { }



try {

  const reviewsSwiper = new Swiper('.reviews-swiper', {

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
      576: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      992: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 30
      },
    }

  });

} catch { }



try {

  const informationSwiper = new Swiper('.information-swiper', {

    slidesPerView: 1,
    spaceBetween: 30,
    allowTouchMove: false,
    noSwiping: true,

    pagination: {
      el: '.information-pagination',
      clickable: true,
    },

    navigation: {
      nextEl: '.information-navigation-next',
      prevEl: '.information-navigation-prev',
    },

  });

  const informationContentSwiper = new Swiper('.information-content-swiper', {

    slidesPerView: 1,
    loop: true,
    direction: 'vertical',

    pagination: {
      el: '.information-content-pagination',
      clickable: true,
    },

  });

} catch { }



try {

  const menuSwiper = new Swiper('.menu-swiper', {

    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,

    pagination: {
      el: '.menu-pagination',
      clickable: true,
    },

    navigation: {
      nextEl: '.menu-navigation-next',
      prevEl: '.menu-navigation-prev',
    },

    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 30
      },
    }

  });

} catch { }



try {

  const feedbackSwiper = new Swiper('.feedback-swiper', {

    slidesPerView: 1,
    allowTouchMove: false,
    noSwiping: false,
    loop: true,
  
    pagination: {
      el: '.feedback-pagination',
      clickable: true,
    },
  
    navigation: {
      nextEl: '.feedback-navigation-next',
      prevEl: '.feedback-navigation-prev',
    },
  
  });
  const feedbackContentSwiper = new Swiper('.feedback-content-swiper', {
  
    slidesPerView: 1,
    loop: true,
    // direction: 'vertical',
  
    pagination: {
      el: '.feedback-content-pagination',
      clickable: true,
    },
  
  });

} catch {}



try {

  const numbersSwiper = new Swiper('.numbers-swiper', {

    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
  
    pagination: {
      el: '.numbers-pagination',
      clickable: true,
    },
  
    navigation: {
      nextEl: '.numbers-navigation-next',
      prevEl: '.numbers-navigation-prev',
    },

    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 30
      },
    }
  
  });

} catch {}



try {

  const productsSwiper = new Swiper('.products-swiper', {

    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
  
    pagination: {
      el: '.products-pagination',
      clickable: true,
    },
  
    navigation: {
      nextEl: '.products-navigation-next',
      prevEl: '.products-navigation-prev',
    },

    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 30
      },
    }
  
  });

} catch {}



try {

  const contactsSwiper = new Swiper('.contacts-swiper', {

    slidesPerView: 1,
    spaceBetween: 30,
    allowTouchMove: false,
    noSwiping: false,
    loop: true,
  
    pagination: {
      el: '.contacts-pagination',
      clickable: true,
    },
  
    navigation: {
      nextEl: '.contacts-navigation-next',
      prevEl: '.contacts-navigation-prev',
    },
  
  });

} catch {}



try {

  const faqSwiper = new Swiper('.faq-swiper', {

    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
  
    pagination: {
      el: '.faq-pagination',
      clickable: true,
    },
  
    navigation: {
      nextEl: '.faq-navigation-next',
      prevEl: '.faq-navigation-prev',
    },
  
  });

} catch {}



const popupSwiper = new Swiper('.popup-swiper', {

  slidesPerView: 1,
  spaceBetween: 30,
  direction: 'vertical',
  loop: true,

  pagination: {
    el: '.popup-pagination',
    clickable: true,
  },

});



const productBarSwiper = new Swiper('.product-bar-swiper', {

  slidesPerView: 1,
  spaceBetween: 30,
  direction: 'vertical',
  loop: true,

  pagination: {
    el: '.product-bar-pagination',
    clickable: true,
  },

});