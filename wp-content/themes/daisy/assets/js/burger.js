let burgerMenu = document.querySelector('.burger-menu')
let burgerWrapper = document.querySelector('.burger-menu__wrapper')
let burgerBtn = document.querySelector('.burger')
let burgerClose = document.querySelector('.burger-menu__close')
let body = document.querySelector('body')

burgerBtn.addEventListener('click', () => {
  burgerMenu.classList.add('burger-active')
  burgerWrapper.classList.add('burger-content-move')
  body.classList.add('disable-scroll')
})

burgerClose.addEventListener('click', () => {
  burgerMenu.classList.remove('burger-active')
  burgerWrapper.classList.remove('burger-content-move')
  body.classList.remove('disable-scroll')
})