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
// document.querySelectorAll('.advantages-swiper').forEach((i) => {
  
// })
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

// Function that actually builds the swiper 
try{
const buildSwiperSlider = sliderElm => {
    const sliderIdentifier = sliderElm.dataset.show;
    return new Swiper(`#${sliderElm.id}`, {
     
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
      slidesPerView: sliderIdentifier,
      spaceBetween: 30
    }
  }
    });
}

const allSliders = document.querySelectorAll('.advantages-swiper');

allSliders.forEach(slider => buildSwiperSlider(slider));
} catch {}

// const advantagesSwiper = new Swiper('.advantages-swiper', {

//   slidesPerView: 1,
//   spaceBetween: 30,
//   loop: true,

//   pagination: {
//     el: '.advantages-pagination',
//     clickable: true,
//   },

//   navigation: {
//     nextEl: '.advantages-navigation-next',
//     prevEl: '.advantages-navigation-prev',
//   },

//   breakpoints: {
//     // when window width is >= 320px
//     564: {
//       slidesPerView: 1,
//       spaceBetween: 20
//     },
//     762: {
//       slidesPerView: 2,
//       spaceBetween: 20
//     },
//     // when window width is >= 480px
//     992: {
//       slidesPerView: 2,
//       spaceBetween: 30
//     },
//     // when window width is >= 640px
//     1024: {
//       slidesPerView: 2,
//       spaceBetween: 30
//     }
//   }

// });



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