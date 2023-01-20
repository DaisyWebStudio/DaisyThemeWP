const body = document.querySelector('body')

body.style.opacity = '0'

window.onload = function () {
  let preloader = document.querySelector('#preloader')
  preloader.style.display = 'none'
  body.classList.remove('disable-scroll')
  body.style.opacity = '1'
}