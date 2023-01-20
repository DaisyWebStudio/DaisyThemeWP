const tabsBtn = document.querySelectorAll('.tabs__btn')
const tabsPanel = document.querySelectorAll('.tabs__panel')
const tabsList = document.querySelectorAll('.tabs__list')

tabsList.forEach(el => {
  let children = el.children
  children[0].classList.add('tabs__btn--active')
})

for( let i = 0; i < tabsBtn.length; i++ ) {

  tabsBtn[i].addEventListener('click', e => {

    let tabsCurrent = e.target.parentElement.children

    for( let t = 0; t < tabsCurrent.length; t++ ) {
      tabsCurrent[t].classList.remove('tabs__btn--active')
    }

    e.target.classList.add('tabs__btn--active')


    let panelCurrent = e.target.closest('.tabs').nextElementSibling.children
    for( let p = 0; p < panelCurrent.length; p++ ) {
      panelCurrent[p].classList.remove('tabs__panel--active')
    }
    
    tabsPanel[i].classList.add('tabs__panel--active')

    console.log(tabsPanel[i])
  })
}