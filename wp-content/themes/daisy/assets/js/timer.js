try {
let date = new Date('Jan 29 2023 19:00:00')

function counts() {
  let nowDate = new Date()
  let gap = date - nowDate

  let days = Math.floor(gap / 1000 / 60 / 60 / 24)
  let hours = Math.floor(gap / 1000 / 60 / 60) % 24
  let minutes = Math.floor(gap / 1000 / 60) % 60
  let second = Math.floor(gap / 1000) % 60

  if (gap < 0) {
    document.querySelector('.timer').innerText = ''
  } else {
    document.querySelector('#days').innerText = days
    document.querySelector('#hours').innerText = hours
    document.querySelector('#minutes').innerText = minutes
    document.querySelector('#second').innerText = second
  }
}

counts()

setInterval(counts, 1000)

} catch {}
try {
let dateCount1 = new Date('Jan 27 2023 14:00:00')

function countsBlock1() {
  let nowDate = new Date()
  let gap = dateCount1 - nowDate

  let days = Math.floor(gap / 1000 / 60 / 60 / 24)
  let hours = Math.floor(gap / 1000 / 60 / 60) % 24
  let minutes = Math.floor(gap / 1000 / 60) % 60
  let second = Math.floor(gap / 1000) % 60

  if (gap < 0) {
    document.querySelector('.timer-count-1').innerText = ''
  } else {
    document.querySelector('#count-days-1').innerText = days
    document.querySelector('#count-hours-1').innerText = hours
    document.querySelector('#count-minutes-1').innerText = minutes
    document.querySelector('#count-second-1').innerText = second
  }

}

countsBlock1()

setInterval(countsBlock1, 1000)
} catch {}

try {
const timer = document.querySelectorAll('.counter__card');
timer.forEach((i) => {
  let taimerWrap = i.querySelector('.timer-count-2');
  let date = taimerWrap.dataset.date;
  console.log(date);
  console.log(taimerWrap);
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
// let dateCount2 = new Date('Jan 24 2024 14:00:00')

// function countsBlock2() {
//   let nowDate = new Date()
//   let gap = dateCount2 - nowDate

//   let days = Math.floor(gap / 1000 / 60 / 60 / 24)
//   let hours = Math.floor(gap / 1000 / 60 / 60) % 24
//   let minutes = Math.floor(gap / 1000 / 60) % 60
//   let second = Math.floor(gap / 1000) % 60

//   if (gap < 0) {
//     document.querySelector('.timer-count-2').innerText = ''
//   } else {
//     document.querySelector('#count-days-2').innerText = days
//     document.querySelector('#count-hours-2').innerText = hours
//     document.querySelector('#count-minutes-2').innerText = minutes
//     document.querySelector('#count-second-2').innerText = second
//   }

// }

// countsBlock2();

// setInterval(countsBlock2, 1000)
} catch {}