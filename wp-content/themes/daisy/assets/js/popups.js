const booking = document.querySelector('.top-nav__booking')
const body = document.querySelector('body')
const popup = document.querySelector('.popup')
const close = document.querySelector('.popup__close')
const popupBody = document.querySelector('.popup__body')

booking.addEventListener('click', () => {
  popup.classList.add('open-popup')
  disableScroll()
})

close.addEventListener('click', () => {
  popup.classList.remove('open-popup')
  enableScroll()
})

document.addEventListener('click', (e) => {
  if(e.target == popupBody) {
    popup.classList.remove('open-popup')
    enableScroll()
  }
})

function disableScroll () {
  let paddingOffset = window.innerWidth - document.body.offsetWidth + 'px'
  body.classList.add('disable-scroll')
  document.body.style.paddingRight = paddingOffset
}

function enableScroll () {
  body.classList.remove('disable-scroll')
  document.body.style.paddingRight = 0
}