// Function that actually builds the swiper 
try{
  const buildSwiperSlider = sliderElm => {
      const sliderIdentifier = sliderElm.dataset.show;
      return new Swiper(`#${sliderElm.id}`, {
       
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
  
    pagination: {
      el: '.pagination',
      clickable: true,
    },
  
    navigation: {
      nextEl: '.slider-navigation-next',
      prevEl: '.slider-navigation-prev',
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
  
  const allSliders = document.querySelectorAll('.much-swiper');
  
  allSliders.forEach(slider => buildSwiperSlider(slider));
  } catch {}


    try {
        const timer = document.querySelectorAll('.counter__card');
        timer.forEach((i) => {
          let taimerWrap = i.querySelector('.timer-count-2');
          let date = taimerWrap.dataset.date;
          let dateCount2 = new Date(date);
        
        function countsBlock2() {
          let nowDate = new Date()
          let gap = dateCount2 - nowDate
        
          let days = Math.floor(gap / 1000 / 60 / 60 / 24)
          let hours = Math.floor(gap / 1000 / 60 / 60) % 24
          let minutes = Math.floor(gap / 1000 / 60) % 60
          let second = Math.floor(gap / 1000) % 60
        
          if (gap < 0) {
            taimerWrap.innerText = ''
          } else {
            taimerWrap.querySelector('#count-days-2').innerText = days
            taimerWrap.querySelector('#count-hours-2').innerText = hours
            taimerWrap.querySelector('#count-minutes-2').innerText = minutes
            taimerWrap.querySelector('#count-second-2').innerText = second
          }
        
        }
        
        countsBlock2();
        
        setInterval(countsBlock2, 1000)
        })
        } catch {}

        try {
          function countsBlock() {
            const timer = document.querySelector('.top-news');
            let taimerWrap = timer.querySelector('.timer-count');
            let date = taimerWrap.dataset.date;
            let dateCount = new Date(date);
            let nowDate = new Date();
            let gap = dateCount - nowDate;
          
            let days = Math.floor(gap / 1000 / 60 / 60 / 24);
            let hours = Math.floor(gap / 1000 / 60 / 60) % 24;
            let minutes = Math.floor(gap / 1000 / 60) % 60;
            let second = Math.floor(gap / 1000) % 60;

            if (gap < 0) {
              taimerWrap.innerText = ''
            } else {
              taimerWrap.querySelector('#count-days').innerText = days
              taimerWrap.querySelector('#count-hours').innerText = hours
              taimerWrap.querySelector('#count-minutes').innerText = minutes
              taimerWrap.querySelector('#count-second').innerText = second
            }
          }
          countsBlock();
        
          setInterval(countsBlock, 1000)
          
          } catch {}

        try{
          const section = document.querySelectorAll('section');
          section.forEach((i) => {
            const tabsBtn = i.querySelectorAll('.tabs__btn');
          const tabsMenuBtn = i.querySelectorAll('.tabs-menu__btn');
          const tabsPanel = i.querySelectorAll('.tabs__panel');
          const tabsList = i.querySelectorAll('.tabs__list');
          
          tabsList.forEach(el => {
            let children = el.children
            children[0].classList.add('tabs__btn--active')
          })
            i.querySelector('.tabs__panel').classList.add('tabs__panel--active');
          
          
          for (let i = 0; i < tabsBtn.length; i++) {
          
            tabsBtn[i].addEventListener('click', e => {
          
              let tabsCurrent = e.target.parentElement.children
          
              for (let t = 0; t < tabsCurrent.length; t++) {
                tabsCurrent[t].classList.remove('tabs__btn--active')
              }
          
              e.target.classList.add('tabs__btn--active')
          
          
              let panelCurrent = e.target.closest('.tabs').nextElementSibling.children
              for (let p = 0; p < panelCurrent.length; p++) {
                panelCurrent[p].classList.remove('tabs__panel--active')
              }
          
              tabsPanel[i].classList.add('tabs__panel--active')
          
            })
          
          }
          })
          
          
          
          
          // tabs-media-accordion
          
          const mediaTabs = document.querySelectorAll('.tabs')
          
          mediaTabs.forEach(el => {
            el.addEventListener('click', e => {
              const self = e.currentTarget
              const header = self.querySelector('.tabs__header')
              const list = self.querySelector('.tabs__list')
              self.classList.toggle('open-tabs')
          
              const btn = self.querySelectorAll('.tabs__btn')
          
              btn.forEach(el => {
                el.addEventListener('click', e => {
                  let target = e.target
                  let headerText = self.querySelector('.tabs__header-item span')
                  headerText.innerText = target.innerText
                })
              })
          
              if (self.classList.contains('open-tabs')) {
                header.setAttribute('aria-expanded', true)
                list.setAttribute('aria-hidden', false)
                list.style.maxHeight = list.scrollHeight + 'px'
              } else {
                header.setAttribute('aria-expanded', false)
                header.setAttribute('aria-hidden', true)
                list.style.maxHeight = null
              }
            })
          })

          } catch {}
          try{
            // tabs information -- start
      const informationBlock = document.querySelectorAll('.information__block');
      informationBlock.forEach((block) => {
        const tabs = block.querySelectorAll('.information__tab'),
        tabsContent = block.querySelectorAll('.information__content'),
        tabsParent = block.querySelector('.information__list');
        function hideTabContent() {
        
            tabsContent.forEach(item => {
                item.classList.add('hidden');
            });
            tabs.forEach(item => {
              item.closest('.information__item').classList.remove('information__item_active');
          });
        
        }
        
        function showTabContent(i = 0) {
            tabsContent[i].classList.remove('hidden');
            tabs[i].closest('.information__item').classList.add('information__item_active');
        }
        
        hideTabContent();
        showTabContent();
        tabsParent.addEventListener('click', function(event) {
            const target = event.target;
            if(target && target.classList.contains('information__tab')) {
                tabs.forEach((item, i) => {
                    if (target == item) {
                        console.log(item);
                        hideTabContent();
                        showTabContent(i);
                    }
                });
            }
        });
      })

// tabs information -- end
            } catch {}