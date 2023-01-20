document.querySelectorAll('.drop-down').forEach(function (dropDownWrapper) {
  
  const dropDownButton = dropDownWrapper.querySelector('.drop-down__header')
  const dropDownMenu = dropDownWrapper.querySelector('.drop-down__menu')
  const dropDownItem = dropDownMenu.querySelectorAll('.drop-down__item')
  const dropDownCurrent = dropDownWrapper.querySelector('.drop-down__current')

  dropDownButton.addEventListener('click', function (e) {
    dropDownMenu.classList.toggle('drop-down-active')
    this.classList.toggle('drop-down-button-active')
  })

  dropDownItem.forEach(function (item) {
    item.addEventListener('click', function (e) {
      e.stopPropagation()
      dropDownCurrent.innerHTML = this.innerHTML
      dropDownMenu.classList.remove('drop-down-active')
      dropDownButton.classList.remove('drop-down-button-active')
    })
  })

  document.addEventListener('click', function (e) {
    if(e.target !== dropDownButton) {
      dropDownButton.classList.remove('drop-down-button-active')
      dropDownMenu.classList.remove('drop-down-active')
    }
  })

  document.addEventListener ('keydown', function (e) {
    if(e.key === 'Tab' || e.key === 'Escape') {
      dropDownButton.classList.remove('drop-down-button-active')
      dropDownMenu.classList.remove('drop-down-active')
    }
  })

})