// const tabsBtn = document.querySelectorAll('.tabs__btn')
// const tabsMenuBtn = document.querySelectorAll('.tabs-menu__btn')
// const tabsPanel = document.querySelectorAll('.tabs__panel')
// const tabsList = document.querySelectorAll('.tabs__list')

// tabsList.forEach(el => {
//   let children = el.children
//   children[0].classList.add('tabs__btn--active')
// })

// for (let i = 0; i < tabsBtn.length; i++) {

//   tabsBtn[i].addEventListener('click', e => {

//     let tabsCurrent = e.target.parentElement.children

//     for (let t = 0; t < tabsCurrent.length; t++) {
//       tabsCurrent[t].classList.remove('tabs__btn--active')
//     }

//     e.target.classList.add('tabs__btn--active')


//     let panelCurrent = e.target.closest('.tabs').nextElementSibling.children
//     for (let p = 0; p < panelCurrent.length; p++) {
//       panelCurrent[p].classList.remove('tabs__panel--active')
//     }

//     tabsPanel[i].classList.add('tabs__panel--active')

//   })

// }



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

const formTabs = document.querySelector('.popup-form__tabs')
const formTabsBtn = document.querySelectorAll('.popup-form__tabs-btn')

formTabs.children[0].classList.add('form-tabs__btn--active')

formTabsBtn.forEach(tab => {
  tab.addEventListener('click', e => {
    formTabsBtn.forEach(tab => {
      tab.classList.remove('form-tabs__btn--active')
    })
    e.target.classList.add('form-tabs__btn--active')
  })
})

formTabsBtn.forEach(tab => {
  tab.addEventListener('click', e => {
    let target = e.target
    let path = target.dataset.btnpopup

    document.querySelectorAll('.popup-form__tab-block').forEach(el => {
      el.classList.remove('popup-form__tab-block--active')
    })

    document.querySelector(`[data-blockpopup="${path}"]`).classList.add('popup-form__tab-block--active')
  })
})

// tabs information -- start
const informationNavWrapperArrow = document.querySelector('.information__nav-wrapper');
const informationTabs = document.querySelectorAll('.information__tab');
const informationItems = document.querySelectorAll('.information__item');

informationTabs.forEach((btn, index) => {
  btn.classList.add('hidden');
  if (index == 0) {
    btn.classList.remove('hidden');
    btn.closest('.information__item').classList.add('information__item_active');
  }

  btn.addEventListener('click', (e) => {
    let target = e.target;
    let parent = target.closest('.information__item');
    informationTabs.forEach(el => {
      el.classList.remove('hidden');
      informationNavWrapperArrow.classList.add('open');
      parent.classList.add('information__item_active');
    })

    if (!target.classList.contains('information__tab_active')) {
      informationTabs.forEach((elem, i) => {
        elem.classList.add('hidden');
      })
      informationItems.forEach((el) => {
        el.classList.remove('information__item_active');
      })
      informationNavWrapperArrow.classList.remove('open');

    }
    btn.classList.remove('hidden');
    parent.classList.add('information__item_active');
    console.log(parent);

  })
})
// tabs information -- end