try {
const bannerSwiper = document.querySelector('.bannerSwiper');
const bannerVideo = document.querySelectorAll('.banner__video');
const bannerIconImg = document.querySelectorAll('.banner__icon__img');

bannerSwiper.addEventListener('click', function (event) {
  let target = event.target;

  if (target.classList.contains('banner__icon__img')) {
    const parent = target.closest('.swiper-slide');
    const video = parent.querySelector('.banner__video');
    video.play();
    video.volume = 0;
  } else {
    bannerVideo.forEach((e) => {
      e.pause();
    })
  }
  // else if (target.classList.contains('кнопка отключения')){
  //   const parent = target.closest('.swiper-slide');
  //   const video = parent.querySelector('.banner__video');
  //   video.pause();
  // } 
});
} catch {}
