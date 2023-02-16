<?php
/**
 * Template name: Шаблон для обзора верстки
 */
            get_header();
         ?>

    <!-- preloader ---- start-->
    <!-- <div class="preloader" id="preloader">
      <div class="preloader__loader"> 
        <div class="loadingio-spinner-spinner-8m1zhy3a12k">
          <div class="ldio-xajq8zux2ye">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- preloader ---- end-->
    <div class="popup-form"> 
      <div class="popup-form__body">
        <div class="popup-form__content"> 
          <button class="popup-form__close">
            <div class="icon-wrapper-16"><i class="fa-solid fa-xmark"></i></div>
          </button>
          <div class="popup-form__tabs">
            <button class="popup-form__tabs-btn" data-btnpopup="call-us">Позвоните нам</button>
            <div class="popup-form__tabs-line"></div>
            <button class="popup-form__tabs-btn" data-btnpopup="call-order">Закажите звонок</button>
            <div class="popup-form__tabs-line"></div>
            <button class="popup-form__tabs-btn" data-btnpopup="write-us">Напишите нам</button>
          </div>
          <div class="call-us popup-form__tab-block popup-form__tab-block--active" data-blockpopup="call-us">
            <div class="call-us__description">
               Время приема звонков: 08:00 - 20:00 по московскому времени</div>
            <button class="call-us__number button"> 
              <div class="icon-wrapper-14"><i class="fa-solid fa-phone"></i></div><span>+7 (999) 999-99-99</span>
            </button>
            <div class="call-us__btn-block"> 
              <button class="call-us__btn-left button-border">
                <div class="icon-wrapper-14"><i class="fa-brands fa-telegram"></i></div><span>Подробнее</span>
              </button>
              <button class="call-us__btn-right button-border">
                <div class="icon-wrapper-14"><i class="fa-brands fa-whatsapp"></i></div><span>Подробнее</span>
              </button>
            </div>
          </div>
          <div class="call-order popup-form__tab-block" data-blockpopup="call-order">
            <form class="call-order__form form">
              <input class="form__item form__input" type="text" placeholder="Имя">
              <input class="form__item form__input" type="tel" placeholder="+7 (...)-...-.. ..">
              <button class="call-us__number button form__item">Заказать звонок</button>
            </form>
            <div class="call-us__btn-block"> 
              <button class="call-us__btn-left button-border">
                <div class="icon-wrapper-14"><i class="fa-brands fa-telegram"></i></div><span>Подробнее</span>
              </button>
              <button class="call-us__btn-right button-border">
                <div class="icon-wrapper-14"><i class="fa-brands fa-whatsapp"></i></div><span>Подробнее</span>
              </button>
            </div>
          </div>
          <div class="write-us popup-form__tab-block" data-blockpopup="write-us">
            <form class="call-order__form form">
              <input class="form__item form__input" type="text" placeholder="Имя">
              <input class="form__item form__input" type="email" placeholder="Электронная почта">
              <textarea class="form__item form__textarea" placeholder="Комментарий"></textarea>
              <button class="call-us__number button form__item">Заказать звонок</button>
            </form>
            <div class="call-us__btn-block"> 
              <button class="call-us__btn-left button-border">
                <div class="icon-wrapper-14"><i class="fa-brands fa-telegram"></i></div><span>Подробнее</span>
              </button>
              <button class="call-us__btn-right button-border">
                <div class="icon-wrapper-14"><i class="fa-brands fa-whatsapp"></i></div><span>Подробнее</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- popup-coocie ---- start-->
    <div class="popup-coocie">
      <div class="popup-coocie__body">
        <div class="popup-coocie__wrapper"> 
          <div class="popup-coocie__container"> 
            <div class="popup-coocie__content">
              <button class="popup-coocie__close"> 
                <div class="icon-wrapper-16"><i class="fa-solid fa-xmark"></i></div>
              </button>
              <div class="popup-coocie__name">
                <div class="icon-wrapper-24"><i class="fa-solid fa-heart"></i></div>
                <h3 class="item-title">До мероприятия осталось</h3>
              </div>
              <div class="timer-count timer-count-3">
                <div class="timer-count__item"><span id="count-days-3"></span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                <div class="timer-count__item"><span id="count-hours-3"></span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                <div class="timer-count__item"><span id="count-minutes-3"></span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                <div class="timer-count__item"><span id="count-second-3"></span></div>
              </div>
              <button class="popup-coocie__btn button">
                <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
              </button>
              <button class="popup-coocie__close-side">
                <div class="icon-wrapper-24"><i class="fa-solid fa-xmark"></i></div>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- popup-coocie ---- start-->
    <!-- popup ---- start -->
    <div class="popup"> 
      <div class="popup__body">
        <div class="popup__content">
          <button class="popup__close">
            <div class="icon-wrapper-16"><i class="fa-solid fa-xmark"></i></div>
          </button>
          <div class="popup__wrapper">
            <div class="popup__banner">
              <div class="swiper popup-swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="popup__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="popup__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="popup__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="popup__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                  </div>
                </div>
                <div class="pagination popup-pagination"></div>
              </div>
            </div>
            <h2 class="title popup__title">Заголовок</h2>
            <p class="text popup__text">
               В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст В отличии от lorem ipsum, текст рыба на русскоотличии от lorem</p>
            <div class="popup__list-block">
              <ul class="list-ul popup__list">
                <li class="list-ul__item">Маркерованный список</li>
                <li class="list-ul__item">Маркерованный список</li>
                <li class="list-ul__item">Маркерованный список</li>
                <li class="list-ul__item">Маркерованный список</li>
              </ul>
              <ol class="list-ol popup__list">
                <li class="list-ol__item">Нумерованный список</li>
                <li class="list-ol__item">Нумерованный список</li>
                <li class="list-ol__item">Нумерованный список</li>
                <li class="list-ol__item">Нумерованный список</li>
              </ol>
            </div>
            <q class="quote popup__quote" cite="">Заметка / Цитата / Важный момент!</q>
          </div>
        </div>
      </div>
    </div>
    <!-- popup ---- end -->
    <!-- burger-menu -- start-->
    <div class="burger-menu"> 
      <div class="burger-menu__wrapper"> 
        <div class="burger-menu__content"> 
          <div class="burger-menu__header"> 
            <div class="burger-menu__logo"> <img src="<?php echo bloginfo('template_url');?>/assets/img/logo-white.svg" alt="logo"></div>
            <button class="burger-menu__close"> 
              <div class="icon-wrapper-24"> <i class="fa-solid fa-xmark"></i></div>
            </button>
          </div>
          <div class="burger-menu__body">
            <div class="burger-menu__wrapper-content">
              <div class="burger-menu__section">
                <div class="burger-menu__search search"> 
                  <input class="search__input" type="serach" placeholder="Найти">
                  <button class="search__btn">
                    <div class="icon-wrapper-16"><i class="fa-solid fa-magnifying-glass"></i></div>
                  </button>
                </div>
                <div class="burger-menu__navigation navigation">
                  <ul class="navigation__list">
                    <li class="navigation__item">
                      <div class="navigation__link">
                        <div class="icon-wrapper-16"> <i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                      </div>
                      <div class="animation icon-wrapper-16"> <i class="fa-solid fa-angle-right"> </i></div>
                    </li>
                    <li class="navigation__item">
                      <div class="navigation__link">
                        <div class="icon-wrapper-16"> <i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                      </div>
                      <div class="animation icon-wrapper-16"> <i class="fa-solid fa-angle-right"> </i></div>
                    </li>
                    <li class="navigation__item">
                      <div class="navigation__link">
                        <div class="icon-wrapper-16"> <i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                      </div>
                      <div class="animation icon-wrapper-16"> <i class="fa-solid fa-angle-right"> </i></div>
                    </li>
                    <li class="navigation__item">
                      <div class="navigation__link">
                        <div class="icon-wrapper-16"> <i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                      </div>
                      <div class="animation icon-wrapper-16"> <i class="fa-solid fa-angle-right"> </i></div>
                    </li>
                    <li class="navigation__item">
                      <div class="navigation__link">
                        <div class="icon-wrapper-16"> <i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                      </div>
                      <div class="animation icon-wrapper-16"> <i class="fa-solid fa-angle-right"> </i></div>
                    </li>
                  </ul>
                </div>
                <div class="burger-menu__info info">
                  <div class="info__item">
                    <div class="icon-wrapper-16"> <i class="fa-solid fa-clock"></i></div>10:00 - 19:00
                  </div>
                  <div class="info__item">
                    <div class="icon-wrapper-16"> <i class="fa-solid fa-location-dot"></i></div>Адрес
                  </div>
                  <div class="info__item">
                    <div class="icon-wrapper-16"> <i class="fa-solid fa-phone"></i></div>+7 (999) 999-99-99
                  </div>
                </div>
                <div class="burger-menu__text">
                   В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст</div>
                <div class="burger-menu__social">
                  <div class="contacts__social"><a href="#"> 
                      <div class="icon-wrapper-24"><i class="fa-brands fa-telegram"></i></div></a><a href="#"> 
                      <div class="icon-wrapper-24"><i class="fa-brands fa-facebook"></i></div></a><a href="#"> 
                      <div class="icon-wrapper-24"><i class="fa-brands fa-vk"></i></div></a><a href="#"> 
                      <div class="icon-wrapper-24"><i class="fa-brands fa-square-youtube"></i></div></a><a href="#"> 
                      <div class="icon-wrapper-24"><i class="fa-brands fa-square-instagram"></i></div></a><a href="#"> 
                      <div class="icon-wrapper-24"><i class="fa-brands fa-square-whatsapp"></i></div></a></div>
                </div>
                <button class="burger-menu__button button"><i class="fa-solid fa-circle-info"></i>Подробнее</button>
              </div>
              <div class="burger-menu__footer">
                <div class="burger-menu__use"> 
                  <div class="top-info__item"> 
                    <div class="top-info__themes"> 
                      <div class="icon-wrapper-14"><i class="fa-solid fa-moon"></i></div><span>Тёмная</span>
                    </div>
                  </div>
                  <div class="top-info__item"> 
                    <div class="drop-down">
                      <ul class="drop-down__menu drop-down__menu-right drop-down-burger-money">
                        <li class="drop-down__item">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-dollar-sign"> </i></div>Доллар
                        </li>
                        <li class="drop-down__item">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-ruble-sign"> </i></div>Рубль
                        </li>
                        <li class="drop-down__item">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-yen-sign"> </i></div>Иена
                        </li>
                      </ul>
                      <div class="drop-down__header"><span class="drop-down__current">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-dollar-sign"></i></div>Валюта</span></div>
                    </div>
                  </div>
                  <div class="top-info__item"> 
                    <div class="drop-down">
                      <div class="drop-down__header">
                        <div class="icon-wrapper-14"><i class="fa-solid fa-globe"></i></div><span class="drop-down__current">Язык</span>
                      </div>
                      <ul class="drop-down__menu drop-down__menu-right drop-down-burger-leng">
                        <li class="drop-down__item">Eng</li>
                        <li class="drop-down__item">Рус</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="burger-menu__copyright">
                   © 2022</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- burger-menu -- end-->
    <!-- header ---- start -->
    <header class="header" id="top">
      <div class="header__container container-settings">
        <div class="header__wrapper">
          <!-- top-news -- start -->
          <div class="header__item">
            <div class="top-news">
              <div class="top-news__info">
                <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><span>Срочная новость / акция</span>
              </div>
              <div class="top-news__timer timer">
                <div class="timer__item"><span id="days"></span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                <div class="timer__item"><span id="hours"></span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                <div class="timer__item"><span id="minutes"></span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                <div class="timer__item"><span id="second"></span></div>
              </div><a class="top-news__link" href="#">
                <div class="icon-wrapper-14"><i class="fa-solid fa-circle-question"></i></div><span>Подробнее</span></a>
            </div>
          </div>
          <!-- top-news -- end -->
          <!-- top-info -- start -->
          <div class="header__item">
            <div class="top-info"> 
              <div class="top-info__side"> 
                <div class="top-info__item"> 
                  <div class="drop-down">
                    <div class="drop-down__header">
                      <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div><span class="drop-down__current">Адрес</span>
                    </div>
                    <ul class="drop-down__menu drop-down__menu-left">
                      <li class="drop-down__item point-ev-none">Москва</li>
                      <li class="drop-down__item point-ev-none">Новосибирск</li>
                      <li class="drop-down__item point-ev-none">Ачинск</li>
                    </ul>
                  </div>
                </div>
                <div class="top-info__item"> 
                  <div class="drop-down">
                    <div class="drop-down__header">
                      <div class="icon-wrapper-14"><i class="fa-solid fa-phone"></i></div><span class="drop-down__current">Телефон</span>
                    </div>
                    <ul class="drop-down__menu drop-down__menu-left">
                      <li class="drop-down__item point-ev-none">+7 (953) 805-58-54</li>
                      <li class="drop-down__item point-ev-none">+7 (953) 805-58-54</li>
                      <li class="drop-down__item point-ev-none">+7 (953) 805-58-54</li>
                    </ul>
                  </div>
                </div>
                <div class="top-info__item"> 
                  <div class="drop-down">
                    <div class="drop-down__header">
                      <div class="icon-wrapper-14"><i class="fa-solid fa-clock"></i></div><span class="drop-down__current">Время работы</span>
                    </div>
                    <ul class="drop-down__menu drop-down__menu-left">
                      <li class="drop-down__item point-ev-none">Пн-Пт - 09:00 до 19:00</li>
                      <li class="drop-down__item point-ev-none">Сб - 11:00 до 19:00</li>
                      <li class="drop-down__item point-ev-none">Вс - выходной</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="top-info__side">
                <div class="top-info__item"> 
                  <div class="top-info__themes">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-moon"></i></div><span>Тёмная</span>
                  </div>
                </div>
                <div class="top-info__item"> 
                  <div class="drop-down">
                    <div class="drop-down__header"><span class="drop-down__current">
                        <div class="icon-wrapper-14"><i class="fa-solid fa-dollar-sign"></i></div>Валюта</span></div>
                    <ul class="drop-down__menu drop-down__menu-right">
                      <li class="drop-down__item">
                        <div class="icon-wrapper-14"><i class="fa-solid fa-dollar-sign"> </i></div>Доллар
                      </li>
                      <li class="drop-down__item">
                        <div class="icon-wrapper-14"><i class="fa-solid fa-ruble-sign"> </i></div>Рубль
                      </li>
                      <li class="drop-down__item">
                        <div class="icon-wrapper-14"><i class="fa-solid fa-yen-sign"> </i></div>Иена
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="top-info__item"> 
                  <div class="drop-down">
                    <div class="drop-down__header">
                      <div class="icon-wrapper-14"><i class="fa-solid fa-globe"></i></div><span class="drop-down__current">Язык</span>
                    </div>
                    <ul class="drop-down__menu drop-down__menu-right">
                      <li class="drop-down__item">English</li>
                      <li class="drop-down__item">Русский</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- top-info -- end -->
          <!-- top-nav -- start-->
          <div class="header__item"> 
            <div class="top-nav"> <a class="top-nav__logo" href="#"><img src="<?php echo bloginfo('template_url');?>/assets/img/logo.svg" alt="logo"></a>
              <ul class="top-nav__menu">
                <li class="top-nav__link"><a href="#main">Главная</a></li>
                <li class="top-nav__link"><a href="#portfolio">Портфолио</a></li>
                <li class="top-nav__link"><a href="#aboutus">О нас</a></li>
                <li class="top-nav__link"><a href="#services">Сервис</a></li>
                <li class="top-nav__link"><a href="#contacts">Контакты</a></li>
                <li class="top-nav__link"><a href="#vacation">Вакансии</a></li>
              </ul>
              <button class="top-nav__booking">
                <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div><span>Нажми меня</span>
              </button>
              <div class="top-nav__use">
                <!--! none-use -- x-->
                <!-- button.top-nav__btn-->
                <!--   i.fa-solid.fa-magnifying-glass-->
                <!-- button.top-nav__btn-->
                <!--   i.fa-regular.fa-user-->
                <!--! none-use -- x-->
                <button class="top-nav__btn burger">
                  <div class="icon-wrapper-24"><i class="fa-solid fa-bars"></i></div>
                </button>
              </div>
            </div>
          </div>
          <!-- top-nav -- end -->
        </div>
      </div>
    </header>
    <!-- header ---- end -->
    <!-- banner ---- start -->
    <section class="banner"> 
      <div class="banner__container">
        <div class="banner__wrapper">
          <div class="swiper bannerSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <video class="banner__video" loop="loop" preload="auto" muted autoplay>
                  <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                </video><img class="banner__img" src="<?php echo bloginfo('template_url');?>/assets/img/Hiro.png" alt="">
                <!-- banner__block -- start-->
                <div class="banner__block">
                  <div class="banner__content">
                    <h1 class="banner__title">
                       Торговое предложение</h1>
                    <p class="banner__desc">
                       Несколько слов об организации, которые её охарактеризовывают любой макет непонятным смыслом </p>
                    <button class="banner__button button"><i class="fa-solid fa-fire"></i>Подробнее</button>
                  </div>
                  <div class="banner__icon"> <i class="fa-solid fa-circle-play banner__icon__img"></i></div>
                </div>
                <!-- banner__block -- end-->
              </div>
              <div class="swiper-slide">
                <video class="banner__video" loop="loop" preload="auto" muted autoplay>
                  <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                </video><img class="banner__img" src="<?php echo bloginfo('template_url');?>/assets/img/Hiro.png" alt="">
                <!-- banner__block -- start-->
                <div class="banner__block">
                  <div class="banner__content">
                    <h1 class="banner__title">
                       Торговое предложение 2</h1>
                    <p class="banner__desc">
                       Несколько слов об организации, которые её охарактеризовывают любой макет непонятным смыслом </p>
                    <button class="banner__button button"><i class="fa-solid fa-fire"></i>Подробнее 2</button>
                  </div>
                  <div class="banner__icon"> <i class="fa-solid fa-circle-play banner__icon__img"></i></div>
                </div>
                <!-- banner__block -- end-->
              </div>
              <div class="swiper-slide">
                <video class="banner__video" loop="loop" preload="auto" muted>
                  <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                </video><img class="banner__img" src="<?php echo bloginfo('template_url');?>/assets/img/Hiro.png" alt="">
                <!-- banner__block -- start-->
                <div class="banner__block">
                  <div class="banner__content">
                    <h1 class="banner__title">
                       Торговое предложение 3</h1>
                    <p class="banner__desc">
                       Несколько слов об организации, которые её охарактеризовывают любой макет непонятным смыслом </p>
                    <button class="banner__button button"><i class="fa-solid fa-fire"></i>Подробнее 3</button>
                  </div>
                  <div class="banner__icon"> <i class="fa-solid fa-circle-play banner__icon__img"></i></div>
                </div>
                <!-- banner__block -- end-->
              </div>
              <div class="swiper-slide">
                <video class="banner__video" loop="loop" preload="auto" muted>
                  <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                </video><img class="banner__img" src="<?php echo bloginfo('template_url');?>/assets/img/Hiro.png" alt="">
                <!-- banner__block -- start-->
                <div class="banner__block">
                  <div class="banner__content">
                    <h1 class="banner__title">
                       Торговое предложение 4</h1>
                    <p class="banner__desc">
                       Несколько слов об организации, которые её охарактеризовывают любой макет непонятным смыслом </p>
                    <button class="banner__button button"><i class="fa-solid fa-fire"></i>Подробнее 4</button>
                  </div>
                  <div class="banner__icon"> <i class="fa-solid fa-circle-play banner__icon__img"></i></div>
                </div>
                <!-- banner__block -- end-->
              </div>
            </div>
            <div class="banner-navigation">
              <div class="slider-navigation__body slider-navigation__body__horizontal">
                <button class="slider-navigation-prew banner-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                <div class="pagination swiper-pagination"></div>
                <button class="slider-navigation-next banner-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- banner ---- end -->
    <!--about us ---- start -->
    <section class="about-us" id="aboutus"><img class="about-us__img" src="<?php echo bloginfo('template_url');?>/assets/img/Hiro.png" alt="">
      <div class="about-us__container">
        <div class="about-us__wrapper">
          <!-- header-block -- start -->
          <header class="header-block">
            <h2 class="header-block__title title">О нас</h2>
            <button class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><span>Подробнее</span>
            </button>
          </header>
          <!-- header-block -- end -->
          <!-- tabs-block -- start -->
          <div class="tabs">
            <div class="tabs__wrapper">
              <div class="tabs__header" aria-expanded="false"> 
                <div class="tabs__header-item">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                </div>
                <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
              </div>
              <div class="tabs__list" aria-hidden="true">
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
              </div>
            </div>
          </div>
          <!-- tabs-block -- end-->
          <div class="about-us_body">
            <!-- tab-item -- start-->
            <div class="swiper about-us-Swiper tabs__panel tabs__panel--active">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="about-us__block">
                    <div class="about-us__block__content"> 
                      <div class="about-us__block__content__group">
                        <h3 class="about-us__title">
                           Заголовок</h3>
                        <ul class="about-us__list"> 
                          <li class="about-us__item">
                             Несколько слов об организации, которые её охарактеризовывают </li>
                          <li class="about-us__item">
                             Наполнит любой макет непонятным смыслом и придаст</li>
                        </ul>
                      </div>
                      <div class="about-us__social">
                        <div class="about-us__social__group"><i class="fa-brands fa-telegram about-us__social__icon"></i><i class="fa-brands fa-vk about-us__social__icon"></i><i class="fa-brands fa-square-facebook about-us__social__icon"></i><i class="fa-brands fa-square-youtube about-us__social__icon"></i><i class="fa-brands fa-square-instagram about-us__social__icon"></i><i class="fa-brands fa-square-whatsapp about-us__social__icon"></i></div>
                        <button class="about-us__button button"><i class="fa-solid fa-fire"></i>Подробнее</button>
                      </div>
                    </div>
                    <div class="about-us__block__other about-us__block__other_radius">
                      <div class="swiper about-us-other-Swiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <video class="about-us__video" loop="loop" preload="auto" muted controls>
                              <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                            </video><i class="fa-solid fa-circle-play about-us__icon__img"></i>
                          </div>
                          <div class="swiper-slide">
                            <video class="about-us__video" loop="loop" preload="auto" muted controls>
                              <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                            </video><i class="fa-solid fa-circle-play about-us__icon__img"></i>
                          </div>
                          <div class="swiper-slide">
                            <video class="about-us__video" loop="loop" preload="auto" muted controls>
                              <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                            </video><i class="fa-solid fa-circle-play about-us__icon__img"></i>
                          </div>
                          <div class="swiper-slide">
                            <video class="about-us__video" loop="loop" preload="auto" muted controls>
                              <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                            </video><i class="fa-solid fa-circle-play about-us__icon__img"></i>
                          </div>
                        </div>
                        <div class="swiper-pagination slider-navigation__body__vertical"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="about-us__block">
                    <div class="about-us__block__content"> 
                      <div class="about-us__block__content__group">
                        <h3 class="about-us__title">
                           Заголовок2</h3>
                        <ul class="about-us__list"> 
                          <li class="about-us__item">
                             Несколько слов об организации, которые её охарактеризовывают </li>
                          <li class="about-us__item">
                             Наполнит любой макет непонятным смыслом и придаст</li>
                        </ul>
                      </div>
                      <div class="about-us__social">
                        <div class="about-us__social__group"><i class="fa-brands fa-telegram about-us__social__icon"></i><i class="fa-brands fa-vk about-us__social__icon"></i><i class="fa-brands fa-square-facebook about-us__social__icon"></i><i class="fa-brands fa-square-youtube about-us__social__icon"></i><i class="fa-brands fa-square-instagram about-us__social__icon"></i><i class="fa-brands fa-square-whatsapp about-us__social__icon"></i></div>
                        <button class="about-us__button button"><i class="fa-solid fa-fire"></i>Подробнее2</button>
                      </div>
                    </div>
                    <div class="about-us__block__other about-us__block__other_radius">
                      <div class="swiper about-us-other-Swiper2">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide"><img class="about-us__other__img" src="<?php echo bloginfo('template_url');?>/assets/img/bg-image.png" alt=""></div>
                          <div class="swiper-slide"><img class="about-us__other__img" src="<?php echo bloginfo('template_url');?>/assets/img/bg-image.png" alt=""></div>
                          <div class="swiper-slide"><img class="about-us__other__img" src="<?php echo bloginfo('template_url');?>/assets/img/bg-image.png" alt=""></div>
                          <div class="swiper-slide"><img class="about-us__other__img" src="<?php echo bloginfo('template_url');?>/assets/img/bg-image.png" alt=""></div>
                        </div>
                        <div class="swiper-pagination slider-navigation__body__vertical"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="about-us__block">
                    <div class="about-us__block__content about-us__block__content_width">
                      <div class="about-us__block__content__group">
                        <h3 class="about-us__title">
                           Заголовок3</h3>
                        <ul class="about-us__list"> 
                          <li class="about-us__item">
                             Несколько слов об организации, которые её охарактеризовывают </li>
                          <li class="about-us__item">
                             Наполнит любой макет непонятным смыслом и придаст</li>
                        </ul>
                      </div>
                      <div class="about-us__social">
                        <div class="about-us__social__group"><i class="fa-brands fa-telegram about-us__social__icon"></i><i class="fa-brands fa-vk about-us__social__icon"></i><i class="fa-brands fa-square-facebook about-us__social__icon"></i><i class="fa-brands fa-square-youtube about-us__social__icon"></i><i class="fa-brands fa-square-instagram about-us__social__icon"></i><i class="fa-brands fa-square-whatsapp about-us__social__icon"></i></div>
                        <button class="about-us__button button"><i class="fa-solid fa-fire"></i>Подробнее3</button>
                      </div>
                    </div>
                    <div class="about-us__block__other about-us__block__other_forms about-us__block__other_width">
                      <div class="about-us__form form">
                        <h3 class="form__title">
                           Заголовок формы. <br>Призыв к действию</h3>
                        <p class="form__description">Мы вам перезвоним</p>
                        <form class="form__block" action="">
                          <input class="form__input form__item" type="text" placeholder="Имя">
                          <input class="form__input form__item" type="tel" placeholder="+7 (...)...-...-...">
                          <textarea class="form__textarea form__item" placeholder="Комментарий"></textarea>
                          <button class="form__button button form__item" type="submit"><i class="fa-solid fa-square-arrow-up-right"></i>Отправить</button>
                          <label class="form__checkbox form__item">
                            <input type="checkbox">Согласие ссылка на обработку персональных данных
                          </label>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="about-us-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew about-us-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination swiper-pagination"></div>
                  <button class="slider-navigation-next about-us-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item -- end-->
            <!-- tab-item -- start-->
            <div class="swiper about-us-Swiper tabs__panel">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="about-us__block">
                    <div class="about-us__block__content"> 
                      <div class="about-us__block__content__group">
                        <h3 class="about-us__title">
                           Заголовок</h3>
                        <ul class="about-us__list"> 
                          <li class="about-us__item">
                             Несколько слов об организации, которые её охарактеризовывают </li>
                          <li class="about-us__item">
                             Наполнит любой макет непонятным смыслом и придаст</li>
                        </ul>
                      </div>
                      <div class="about-us__social">
                        <div class="about-us__social__group"><i class="fa-brands fa-telegram about-us__social__icon"></i><i class="fa-brands fa-vk about-us__social__icon"></i><i class="fa-brands fa-square-facebook about-us__social__icon"></i><i class="fa-brands fa-square-youtube about-us__social__icon"></i><i class="fa-brands fa-square-instagram about-us__social__icon"></i><i class="fa-brands fa-square-whatsapp about-us__social__icon"></i></div>
                        <button class="about-us__button button"><i class="fa-solid fa-fire"></i>Подробнее</button>
                      </div>
                    </div>
                    <div class="about-us__block__other about-us__block__other_radius">
                      <div class="swiper about-us-other-Swiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <video class="about-us__video" loop="loop" preload="auto" muted controls>
                              <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                            </video><i class="fa-solid fa-circle-play about-us__icon__img"></i>
                          </div>
                          <div class="swiper-slide">
                            <video class="about-us__video" loop="loop" preload="auto" muted controls>
                              <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                            </video><i class="fa-solid fa-circle-play about-us__icon__img"></i>
                          </div>
                          <div class="swiper-slide">
                            <video class="about-us__video" loop="loop" preload="auto" muted controls>
                              <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                            </video><i class="fa-solid fa-circle-play about-us__icon__img"></i>
                          </div>
                          <div class="swiper-slide">
                            <video class="about-us__video" loop="loop" preload="auto" muted controls>
                              <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                            </video><i class="fa-solid fa-circle-play about-us__icon__img"></i>
                          </div>
                        </div>
                        <div class="swiper-pagination slider-navigation__body__vertical"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="about-us__block">
                    <div class="about-us__block__content"> 
                      <div class="about-us__block__content__group">
                        <h3 class="about-us__title">
                           Заголовок2</h3>
                        <ul class="about-us__list"> 
                          <li class="about-us__item">
                             Несколько слов об организации, которые её охарактеризовывают </li>
                          <li class="about-us__item">
                             Наполнит любой макет непонятным смыслом и придаст</li>
                        </ul>
                      </div>
                      <div class="about-us__social">
                        <div class="about-us__social__group"><i class="fa-brands fa-telegram about-us__social__icon"></i><i class="fa-brands fa-vk about-us__social__icon"></i><i class="fa-brands fa-square-facebook about-us__social__icon"></i><i class="fa-brands fa-square-youtube about-us__social__icon"></i><i class="fa-brands fa-square-instagram about-us__social__icon"></i><i class="fa-brands fa-square-whatsapp about-us__social__icon"></i></div>
                        <button class="about-us__button button"><i class="fa-solid fa-fire"></i>Подробнее2</button>
                      </div>
                    </div>
                    <div class="about-us__block__other about-us__block__other_radius">
                      <div class="swiper about-us-other-Swiper2">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide"><img class="about-us__other__img" src="<?php echo bloginfo('template_url');?>/assets/img/bg-image.png" alt=""></div>
                          <div class="swiper-slide"><img class="about-us__other__img" src="<?php echo bloginfo('template_url');?>/assets/img/bg-image.png" alt=""></div>
                          <div class="swiper-slide"><img class="about-us__other__img" src="<?php echo bloginfo('template_url');?>/assets/img/bg-image.png" alt=""></div>
                          <div class="swiper-slide"><img class="about-us__other__img" src="<?php echo bloginfo('template_url');?>/assets/img/bg-image.png" alt=""></div>
                        </div>
                        <div class="swiper-pagination slider-navigation__body__vertical"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="about-us__block">
                    <div class="about-us__block__content about-us__block__content_width">
                      <div class="about-us__block__content__group">
                        <h3 class="about-us__title">
                           Заголовок3</h3>
                        <ul class="about-us__list"> 
                          <li class="about-us__item">
                             Несколько слов об организации, которые её охарактеризовывают </li>
                          <li class="about-us__item">
                             Наполнит любой макет непонятным смыслом и придаст</li>
                        </ul>
                      </div>
                      <div class="about-us__social">
                        <div class="about-us__social__group"><i class="fa-brands fa-telegram about-us__social__icon"></i><i class="fa-brands fa-vk about-us__social__icon"></i><i class="fa-brands fa-square-facebook about-us__social__icon"></i><i class="fa-brands fa-square-youtube about-us__social__icon"></i><i class="fa-brands fa-square-instagram about-us__social__icon"></i><i class="fa-brands fa-square-whatsapp about-us__social__icon"></i></div>
                        <button class="about-us__button button"><i class="fa-solid fa-fire"></i>Подробнее3</button>
                      </div>
                    </div>
                    <div class="about-us__block__other about-us__block__other_forms about-us__block__other_width">
                      <div class="about-us__form form">
                        <h3 class="form__title">
                           Заголовок формы. Призыв к действию</h3>
                        <p class="form__description">Мы вам перезвоним</p>
                        <form class="form__block" action="">
                          <input class="form__input form__item" type="text" placeholder="Имя">
                          <input class="form__input form__item" type="tel" placeholder="+7 (...)...-...-...">
                          <textarea class="form__textarea form__item" placeholder="Комментарий"></textarea>
                          <button class="form__button button form__item" type="submit"><i class="fa-solid fa-square-arrow-up-right"></i>Отправить</button>
                          <label class="form__checkbox form__item">
                            <input type="checkbox">Согласие ссылка на обработку персональных данных
                          </label>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="about-us-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew about-us-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination swiper-pagination"></div>
                  <button class="slider-navigation-next about-us-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item -- end-->
            <!-- tab-item -- start-->
            <div class="swiper about-us-Swiper tabs__panel">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="about-us__block">
                    <div class="about-us__block__content"> 
                      <div class="about-us__block__content__group">
                        <h3 class="about-us__title">
                           Заголовок</h3>
                        <ul class="about-us__list"> 
                          <li class="about-us__item">
                             Несколько слов об организации, которые её охарактеризовывают </li>
                          <li class="about-us__item">
                             Наполнит любой макет непонятным смыслом и придаст</li>
                        </ul>
                      </div>
                      <div class="about-us__social">
                        <div class="about-us__social__group"><i class="fa-brands fa-telegram about-us__social__icon"></i><i class="fa-brands fa-vk about-us__social__icon"></i><i class="fa-brands fa-square-facebook about-us__social__icon"></i><i class="fa-brands fa-square-youtube about-us__social__icon"></i><i class="fa-brands fa-square-instagram about-us__social__icon"></i><i class="fa-brands fa-square-whatsapp about-us__social__icon"></i></div>
                        <button class="about-us__button button"><i class="fa-solid fa-fire"></i>Подробнее</button>
                      </div>
                    </div>
                    <div class="about-us__block__other about-us__block__other_radius">
                      <div class="swiper about-us-other-Swiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <video class="about-us__video" loop="loop" preload="auto" muted controls>
                              <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                            </video><i class="fa-solid fa-circle-play about-us__icon__img"></i>
                          </div>
                          <div class="swiper-slide">
                            <video class="about-us__video" loop="loop" preload="auto" muted controls>
                              <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                            </video><i class="fa-solid fa-circle-play about-us__icon__img"></i>
                          </div>
                          <div class="swiper-slide">
                            <video class="about-us__video" loop="loop" preload="auto" muted controls>
                              <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                            </video><i class="fa-solid fa-circle-play about-us__icon__img"></i>
                          </div>
                          <div class="swiper-slide">
                            <video class="about-us__video" loop="loop" preload="auto" muted controls>
                              <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                            </video><i class="fa-solid fa-circle-play about-us__icon__img"></i>
                          </div>
                        </div>
                        <div class="swiper-pagination slider-navigation__body__vertical"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="about-us__block">
                    <div class="about-us__block__content"> 
                      <div class="about-us__block__content__group">
                        <h3 class="about-us__title">
                           Заголовок2</h3>
                        <ul class="about-us__list"> 
                          <li class="about-us__item">
                             Несколько слов об организации, которые её охарактеризовывают </li>
                          <li class="about-us__item">
                             Наполнит любой макет непонятным смыслом и придаст</li>
                        </ul>
                      </div>
                      <div class="about-us__social">
                        <div class="about-us__social__group"><i class="fa-brands fa-telegram about-us__social__icon"></i><i class="fa-brands fa-vk about-us__social__icon"></i><i class="fa-brands fa-square-facebook about-us__social__icon"></i><i class="fa-brands fa-square-youtube about-us__social__icon"></i><i class="fa-brands fa-square-instagram about-us__social__icon"></i><i class="fa-brands fa-square-whatsapp about-us__social__icon"></i></div>
                        <button class="about-us__button button"><i class="fa-solid fa-fire"></i>Подробнее2</button>
                      </div>
                    </div>
                    <div class="about-us__block__other about-us__block__other_radius">
                      <div class="swiper about-us-other-Swiper2">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide"><img class="about-us__other__img" src="<?php echo bloginfo('template_url');?>/assets/img/bg-image.png" alt=""></div>
                          <div class="swiper-slide"><img class="about-us__other__img" src="<?php echo bloginfo('template_url');?>/assets/img/bg-image.png" alt=""></div>
                          <div class="swiper-slide"><img class="about-us__other__img" src="<?php echo bloginfo('template_url');?>/assets/img/bg-image.png" alt=""></div>
                          <div class="swiper-slide"><img class="about-us__other__img" src="<?php echo bloginfo('template_url');?>/assets/img/bg-image.png" alt=""></div>
                        </div>
                        <div class="swiper-pagination slider-navigation__body__vertical"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="about-us__block">
                    <div class="about-us__block__content about-us__block__content_width"> 
                      <div class="about-us__block__content__group">
                        <h3 class="about-us__title">
                           Заголовок3</h3>
                        <ul class="about-us__list"> 
                          <li class="about-us__item">
                             Несколько слов об организации, которые её охарактеризовывают </li>
                          <li class="about-us__item">
                             Наполнит любой макет непонятным смыслом и придаст</li>
                        </ul>
                      </div>
                      <div class="about-us__social">
                        <div class="about-us__social__group"><i class="fa-brands fa-telegram about-us__social__icon"></i><i class="fa-brands fa-vk about-us__social__icon"></i><i class="fa-brands fa-square-facebook about-us__social__icon"></i><i class="fa-brands fa-square-youtube about-us__social__icon"></i><i class="fa-brands fa-square-instagram about-us__social__icon"></i><i class="fa-brands fa-square-whatsapp about-us__social__icon"></i></div>
                        <button class="about-us__button button"><i class="fa-solid fa-fire"></i>Подробнее3</button>
                      </div>
                    </div>
                    <div class="about-us__block__other about-us__block__other_forms about-us__block__other_width">
                      <div class="about-us__form form">
                        <h3 class="form__title">
                           Заголовок формы. Призыв к действию</h3>
                        <p class="form__description">Мы вам перезвоним</p>
                        <form class="form__block" action="">
                          <input class="form__input form__item" type="text" placeholder="Имя">
                          <input class="form__input form__item" type="tel" placeholder="+7 (...)...-...-...">
                          <textarea class="form__textarea form__item" placeholder="Комментарий"></textarea>
                          <button class="form__button button form__item" type="submit"><i class="fa-solid fa-square-arrow-up-right"></i>Отправить</button>
                          <label class="form__checkbox form__item">
                            <input type="checkbox">Согласие ссылка на обработку персональных данных
                          </label>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="about-us-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew about-us-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination swiper-pagination"></div>
                  <button class="slider-navigation-next about-us-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item -- end-->
          </div>
        </div>
      </div>
    </section>
    <!--about us ---- end-->
    <!-- advantages ---- start -->
    <section class="advantages"> 
      <div class="advantages__container"> 
        <div class="advantages__wrapper"> 
          <!-- header-block -- start -->
          <header class="header-block">
            <h2 class="header-block__title title">Преимущества</h2>
            <button class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><span>Подробнее</span>
            </button>
          </header>
          <!-- header-block -- end -->
          <!-- tabs-block -- start -->
          <div class="tabs">
            <div class="tabs__wrapper">
              <div class="tabs__header" aria-expanded="false"> 
                <div class="tabs__header-item">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                </div>
                <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
              </div>
              <div class="tabs__list" aria-hidden="true">
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="mail">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Почта
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="requisites">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Реквизиты
                </button>
              </div>
            </div>
          </div>
          <!-- tabs-block -- end-->
          <!-- body-block -- start-->
          <div class="advantages__body">
            <!-- tab-item-->
            <div class="swiper advantages-swiper tabs__panel tabs__panel--active">
              <div class="swiper-wrapper advantages__swiper">
                <div class="swiper-slide">
                  <div class="advantages__card"> 
                    <div class="advantages__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/card.png" alt="card"></div>
                    <div class="advantages__content">
                      <div class="advantages__content-body">
                        <div class="advantages__header"> 
                          <div class="advantages__title"> 
                            <h3 class="item-title">Преимущество1</h3>
                          </div>
                          <div class="advantages__rating"><span class="item-title">5</span>
                            <div class="icon-wrapper-24"><i class="fa-solid fa-star"> </i></div>
                          </div>
                        </div>
                        <div class="advantages__description">В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст</div>
                      </div>
                      <div class="advantages__footer">
                        <button class="advantages__btn"> 
                          <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                        </button>
                        <div class="advantages__data">
                          <time>22.10.2022</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="advantages__card"> 
                    <div class="advantages__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/card.png" alt="card"></div>
                    <div class="advantages__content">
                      <div class="advantages__content-body">
                        <div class="advantages__header"> 
                          <div class="advantages__title"> 
                            <h3 class="item-title">Преимущество1</h3>
                          </div>
                          <div class="advantages__rating"><span class="item-title">5</span>
                            <div class="icon-wrapper-24"><i class="fa-solid fa-star"> </i></div>
                          </div>
                        </div>
                        <div class="advantages__description">В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст</div>
                      </div>
                      <div class="advantages__footer">
                        <button class="advantages__btn"> 
                          <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                        </button>
                        <div class="advantages__data">
                          <time>22.10.2022</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="advantages__card"> 
                    <div class="advantages__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/card.png" alt="card"></div>
                    <div class="advantages__content">
                      <div class="advantages__content-body">
                        <div class="advantages__header"> 
                          <div class="advantages__title"> 
                            <h3 class="item-title">Преимущество1</h3>
                          </div>
                          <div class="advantages__rating"><span class="item-title">5</span>
                            <div class="icon-wrapper-24"><i class="fa-solid fa-star"> </i></div>
                          </div>
                        </div>
                        <div class="advantages__description">В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст</div>
                      </div>
                      <div class="advantages__footer">
                        <button class="advantages__btn"> 
                          <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                        </button>
                        <div class="advantages__data">
                          <time>22.10.2022</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="advantages-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew advantages-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination advantages-pagination"></div>
                  <button class="slider-navigation-next advantages-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper advantages-swiper tabs__panel">
              <div class="swiper-wrapper advantages__swiper">
                <div class="swiper-slide">
                  <div class="advantages__card"> 
                    <div class="advantages__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/card.png" alt="card"></div>
                    <div class="advantages__content"> 
                      <div class="advantages__header"> 
                        <div class="advantages__title"> 
                          <h3 class="item-title">Преимущество2</h3>
                        </div>
                        <div class="advantages__rating"><span class="item-title">5</span>
                          <div class="icon-wrapper-24"><i class="fa-solid fa-star"> </i></div>
                        </div>
                      </div>
                      <div class="advantages__description">В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст</div>
                      <div class="advantages__footer">
                        <button class="advantages__btn"> 
                          <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                        </button>
                        <div class="advantages__data">
                          <time>22.10.2022</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="advantages__card"> 
                    <div class="advantages__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/card.png" alt="card"></div>
                    <div class="advantages__content"> 
                      <div class="advantages__header"> 
                        <div class="advantages__title"> 
                          <h3 class="item-title">Преимущество2</h3>
                        </div>
                        <div class="advantages__rating"><span class="item-title">5</span>
                          <div class="icon-wrapper-24"><i class="fa-solid fa-star"> </i></div>
                        </div>
                      </div>
                      <div class="advantages__description">В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст</div>
                      <div class="advantages__footer">
                        <button class="advantages__btn"> 
                          <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                        </button>
                        <div class="advantages__data">
                          <time>22.10.2022</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="advantages__card"> 
                    <div class="advantages__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/card.png" alt="card"></div>
                    <div class="advantages__content"> 
                      <div class="advantages__header"> 
                        <div class="advantages__title"> 
                          <h3 class="item-title">Преимущество2</h3>
                        </div>
                        <div class="advantages__rating"><span class="item-title">5</span>
                          <div class="icon-wrapper-24"><i class="fa-solid fa-star"> </i></div>
                        </div>
                      </div>
                      <div class="advantages__description">В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст</div>
                      <div class="advantages__footer">
                        <button class="advantages__btn"> 
                          <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                        </button>
                        <div class="advantages__data">
                          <time>22.10.2022</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="advantages-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew advantages-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination advantages-pagination"></div>
                  <button class="slider-navigation-next advantages-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper advantages-swiper tabs__panel">
              <div class="swiper-wrapper advantages__swiper">
                <div class="swiper-slide">
                  <div class="advantages__card"> 
                    <div class="advantages__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/card.png" alt="card"></div>
                    <div class="advantages__content"> 
                      <div class="advantages__header"> 
                        <div class="advantages__title"> 
                          <h3 class="item-title">Преимущество3</h3>
                        </div>
                        <div class="advantages__rating"><span class="item-title">5</span>
                          <div class="icon-wrapper-24"><i class="fa-solid fa-star"> </i></div>
                        </div>
                      </div>
                      <div class="advantages__description">В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст</div>
                      <div class="advantages__footer">
                        <button class="advantages__btn"> 
                          <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                        </button>
                        <div class="advantages__data">
                          <time>22.10.2022</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="advantages__card"> 
                    <div class="advantages__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/card.png" alt="card"></div>
                    <div class="advantages__content"> 
                      <div class="advantages__header"> 
                        <div class="advantages__title"> 
                          <h3 class="item-title">Преимущество3</h3>
                        </div>
                        <div class="advantages__rating"><span class="item-title">5</span>
                          <div class="icon-wrapper-24"><i class="fa-solid fa-star"> </i></div>
                        </div>
                      </div>
                      <div class="advantages__description">В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст</div>
                      <div class="advantages__footer">
                        <button class="advantages__btn"> 
                          <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                        </button>
                        <div class="advantages__data">
                          <time>22.10.2022</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="advantages__card"> 
                    <div class="advantages__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/card.png" alt="card"></div>
                    <div class="advantages__content"> 
                      <div class="advantages__header"> 
                        <div class="advantages__title"> 
                          <h3 class="item-title">Преимущество3</h3>
                        </div>
                        <div class="advantages__rating"><span class="item-title">5</span>
                          <div class="icon-wrapper-24"><i class="fa-solid fa-star"> </i></div>
                        </div>
                      </div>
                      <div class="advantages__description">В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст</div>
                      <div class="advantages__footer">
                        <button class="advantages__btn"> 
                          <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                        </button>
                        <div class="advantages__data">
                          <time>22.10.2022</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="advantages-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew advantages-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination advantages-pagination"></div>
                  <button class="slider-navigation-next advantages-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- body-block -- end-->
        </div>
      </div>
    </section>
    <!-- advantages ---- end -->
    <!-- gallery ---- start -->
    <section class="gallery">
      <div class="gallery__container"> 
        <div class="gallery__wrapper"> 
          <!-- header-block -- start -->
          <header class="header-block">
            <h2 class="header-block__title title">Галерея</h2>
            <button class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><span>Подробнее</span>
            </button>
          </header>
          <!-- header-block -- end -->
          <!-- tabs-block -- start -->
          <div class="tabs">
            <div class="tabs__wrapper">
              <div class="tabs__header" aria-expanded="false"> 
                <div class="tabs__header-item">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                </div>
                <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
              </div>
              <div class="tabs__list" aria-hidden="true">
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="details">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Детали
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="reviews">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Отзывы
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="documents">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Документы
                </button>
              </div>
            </div>
          </div>
          <!-- tabs-block -- end-->
          <!-- gallery -- start-->
          <div class="gallery__body">
            <!-- tab-item-->
            <div class="swiper gallery-swiper tabs__panel tabs__panel--active">
              <div class="swiper-wrapper gallery__swiper">
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fancybox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fancybox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fancybox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew gallery-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination gallery-pagination"></div>
                  <button class="slider-navigation-next gallery-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper gallery-swiper tabs__panel">
              <div class="swiper-wrapper gallery__swiper">
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fancybox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fancybox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fancybox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew gallery-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination gallery-pagination"></div>
                  <button class="slider-navigation-next gallery-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper gallery-swiper tabs__panel">
              <div class="swiper-wrapper gallery__swiper">
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fancybox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fancybox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fancybox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew gallery-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination gallery-pagination"></div>
                  <button class="slider-navigation-next gallery-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper gallery-swiper tabs__panel">
              <div class="swiper-wrapper gallery__swiper">
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fancybox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fancybox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fancybox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew gallery-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination gallery-pagination"></div>
                  <button class="slider-navigation-next gallery-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- gallery -- end-->
        </div>
      </div>
    </section>
    <!-- gallery ---- end -->
    <!-- counter ---- start -->
    <section class="counter"> 
      <div class="counter__container"> 
        <div class="counter__wrapper">
          <!-- header-block -- start -->
          <header class="header-block">
            <h2 class="header-block__title title">Счетчик</h2>
            <button class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><span>Подробнее</span>
            </button>
          </header>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <div class="tabs">
            <div class="tabs__wrapper">
              <div class="tabs__header" aria-expanded="false"> 
                <div class="tabs__header-item">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                </div>
                <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
              </div>
              <div class="tabs__list" aria-hidden="true">
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
              </div>
            </div>
          </div>
          <!-- tabs-block -- end-->
          <!-- body-block -- start-->
          <div class="counter__body">
            <!-- tab-item-->
            <div class="swiper counter-swiper tabs__panel tabs__panel--active">
              <div class="swiper-wrapper counter__swiper">
                <div class="swiper-slide">
                  <div class="counter__card"> 
                    <div class="counter__name">
                      <div class="icon-wrapper-24"><i class="fa-solid fa-heart"></i></div>
                      <h3 class="item-title">До мероприятия осталось</h3>
                    </div>
                    <div class="counter__timer timer-count timer-count-2">
                      <div class="timer-count__item"><span id="count-days-2"></span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                      <div class="timer-count__item"><span id="count-hours-2"></span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                      <div class="timer-count__item"><span id="count-minutes-2"></span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                      <div class="timer-count__item"><span id="count-second-2"></span></div>
                    </div>
                    <button class="counter__btn button">
                      <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div>Подробнее
                    </button>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="counter__card"> 
                    <div class="counter__name">
                      <div class="icon-wrapper-24"><i class="fa-solid fa-heart"></i></div>
                      <h3>До мероприятия осталось</h3>
                    </div>
                    <div class="timer-count timer-count-1">
                      <div class="timer-count__item"><span id="count-days-1"></span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                      <div class="timer-count__item"><span id="count-hours-1"></span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                      <div class="timer-count__item"><span id="count-minutes-1"></span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                      <div class="timer-count__item"><span id="count-second-1"></span></div>
                    </div>
                    <button class="counter__btn button">
                      <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div>Подробнее
                    </button>
                  </div>
                </div>
              </div>
              <div class="counter-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew counter-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination counter-pagination"></div>
                  <button class="slider-navigation-next counter-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper counter-swiper tabs__panel">
              <div class="swiper-wrapper counter__swiper">
                <div class="swiper-slide">
                  <h1>Пример для примера - 1</h1>
                </div>
                <div class="swiper-slide">
                  <h1>Пример для примера - 2</h1>
                </div>
              </div>
              <div class="counter-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew counter-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination counter-pagination"></div>
                  <button class="slider-navigation-next counter-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper counter-swiper tabs__panel">
              <div class="swiper-wrapper counter__swiper">
                <div class="swiper-slide">
                  <h1>Пример для примера - 1</h1>
                </div>
                <div class="swiper-slide">
                  <h1>Пример для примера - 2</h1>
                </div>
              </div>
              <div class="counter-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew counter-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination counter-pagination"></div>
                  <button class="slider-navigation-next counter-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper counter-swiper tabs__panel">
              <div class="swiper-wrapper counter__swiper">
                <div class="swiper-slide">
                  <h1>Пример для примера - 1</h1>
                </div>
                <div class="swiper-slide">
                  <h1>Пример для примера - 2</h1>
                </div>
              </div>
              <div class="counter-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew counter-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination counter-pagination"></div>
                  <button class="slider-navigation-next counter-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- body-block -- end-->
        </div>
      </div>
    </section>
    <!-- counter ---- end-->
    <!-- reviews ---- start -->
    <section class="reviews">
      <div class="reviews__container"> 
        <div class="reviews__wrapper">
          <!-- header-block -- start -->
          <header class="header-block">
            <h2 class="header-block__title title">Отзывы</h2>
            <button class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><span>Подробнее</span>
            </button>
          </header>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <div class="tabs">
            <div class="tabs__wrapper">
              <div class="tabs__header" aria-expanded="false"> 
                <div class="tabs__header-item">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                </div>
                <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
              </div>
              <div class="tabs__list" aria-hidden="true">
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
              </div>
            </div>
          </div>
          <!-- tabs-block -- end-->
          <!-- body-block -- start-->
          <div class="reviews__body">
            <!-- tab-item-->
            <div class="swiper reviews-swiper tabs__panel tabs__panel--active">
              <div class="swiper-wrapper reviews__swiper">
                <div class="swiper-slide">
                  <div class="reviews__card"> 
                    <div class="reviews__header"> 
                      <div class="reviews__header-left">
                        <h3 class="reviews__title item-title">Иван Иванов</h3>
                        <div class="reviews__rating"> 
                          <div class="reviews__stars">
                            <div class="star"> 
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="star"> 
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="star"> 
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="star"> 
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="star"> 
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="reviews__header-right"> <img src="<?php echo bloginfo('template_url');?>/assets/img/reviews-user-1.png" alt="user"></div>
                    </div>
                    <div class="reviews__description">
                       Следует отметить, что начало повседневной работы по формированию позиции, в своём классическом представлении, допускает внедрение направлений прогрессивного развития</div>
                    <div class="reviews__footer"> 
                      <button class="reviews__button">Читать далее</button>
                      <div class="reviews__date">05.02.2023</div>
                    </div>
                  </div>
                </div>
                <!-- tab-item-->
                <div class="swiper-slide">
                  <div class="reviews__card"> 
                    <div class="reviews__header"> 
                      <div class="reviews__header-left">
                        <h3 class="reviews__title item-title">Анна Васильева</h3>
                        <div class="reviews__rating"> 
                          <div class="reviews__stars">
                            <div class="star"> 
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="star"> 
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="star"> 
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="star"> 
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="star"> 
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="reviews__header-right"> <img src="<?php echo bloginfo('template_url');?>/assets/img/reviews-user-2.png" alt="user"></div>
                    </div>
                    <div class="reviews__description">
                       Картельные сговоры не допускают ситуации, при которой сторонники тоталитаризма в науке, которые представляют собой яркий пример континентально-европейского типа политической культуры...</div>
                    <div class="reviews__footer"> 
                      <button class="reviews__button">Читать далее</button>
                      <div class="reviews__date">05.02.2023</div>
                    </div>
                  </div>
                </div>
                <!-- tab-item-->
                <div class="swiper-slide">
                  <div class="reviews__card"> 
                    <div class="reviews__header"> 
                      <div class="reviews__header-left">
                        <h3 class="reviews__title item-title">Магомед Дзыбов</h3>
                        <div class="reviews__rating"> 
                          <div class="reviews__stars">
                            <div class="star"> 
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="star"> 
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="star"> 
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="star"> 
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="star"> 
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="reviews__header-right"> <img src="<?php echo bloginfo('template_url');?>/assets/img/reviews-user-3.png" alt="user"></div>
                    </div>
                    <div class="reviews__description">
                       Учитывая ключевые сценарии поведения, реализация намеченных плановых заданий создаёт предпосылки для позиций, занимаемых участниками в отношении поставленных задач</div>
                    <div class="reviews__footer"> 
                      <button class="reviews__button">Читать далее</button>
                      <div class="reviews__date">05.02.2023</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="reviews-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew reviews-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination reviews-pagination"></div>
                  <button class="slider-navigation-next reviews-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <div class="swiper reviews-swiper tabs__panel">
              <div class="swiper-wrapper reviews__swiper">
                <div class="swiper-slide"><span>slide 4</span></div>
                <div class="swiper-slide"><span>slide 5</span></div>
                <div class="swiper-slide"><span>slide 6</span></div>
              </div>
              <div class="reviews-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew reviews-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination reviews-pagination"></div>
                  <button class="slider-navigation-next reviews-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <div class="swiper reviews-swiper tabs__panel">
              <div class="swiper-wrapper reviews__swiper">
                <div class="swiper-slide"><span>slide 7</span></div>
                <div class="swiper-slide"><span>slide 8</span></div>
                <div class="swiper-slide"><span>slide 9</span></div>
              </div>
              <div class="reviews-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew reviews-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination reviews-pagination"></div>
                  <button class="slider-navigation-next reviews-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- body-block -- end-->
        </div>
      </div>
    </section>
    <!-- reviews ---- end-->
    <!-- reviews ---- start -->
    <section class="information">
      <div class="information__container"> 
        <div class="information__wrapper">
          <!-- header-block -- start -->
          <header class="header-block">
            <h2 class="header-block__title title">Дополнительная информация</h2>
            <button class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><span>Подробнее</span>
            </button>
          </header>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <div class="tabs">
            <div class="tabs__wrapper">
              <div class="tabs__header" aria-expanded="false"> 
                <div class="tabs__header-item">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                </div>
                <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
              </div>
              <div class="tabs__list" aria-hidden="true">
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
              </div>
            </div>
          </div>
          <!-- tabs-block -- end-->
          <!-- body-block -- start-->
          <div class="information__body">
            <!-- tab-item-->
            <div class="swiper information-swiper tabs__panel tabs__panel--active">
              <div class="swiper-wrapper information__swiper">
                <div class="swiper-slide">
                  <div class="information__block">
                    <div class="information__scroll-wrapper information__nav-wrapper">
                      <div class="information__nav">
                        <ul class="information__list">
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="one">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="two">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Пункт меню</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="three">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Смотреть еще</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="one">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="two">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Пункт меню</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="three">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Смотреть еще</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="four">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="five">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Пункт меню</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="six">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Смотреть еще</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="seven">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="eight">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Пункт меню</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="nine">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Смотреть еще</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="ten">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="test">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="test">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="test">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="test">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="test">
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="information__scroll-wrapper">
                      <!-- information-content -- start-->
                      <div class="information__content" data-info-target="one">
                        <div class="swiper information-content-swiper">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <div class="information__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                            </div>
                            <div class="swiper-slide">
                              <div class="information__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                            </div>
                            <div class="swiper-slide">
                              <div class="information__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                            </div>
                            <div class="swiper-slide">
                              <div class="information__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                            </div>
                          </div>
                          <div class="pagination information-content-pagination"></div>
                        </div>
                        <h3 class="information__title item-title">Заголовок H3-1</h3>
                        <div class="information__description">
                           По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.</div>
                        <button class="information__button button"><i class="fa-solid fa-circle-dot"></i>Подробнее</button>
                      </div>
                      <!-- information-content -- end-->
                      <!-- information-content -- start-->
                      <div class="information__content hidden" data-info-target="two">
                        <div class="swiper information-content-swiper">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <div class="information__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                            </div>
                            <div class="swiper-slide">
                              <div class="information__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                            </div>
                            <div class="swiper-slide">
                              <div class="information__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                            </div>
                            <div class="swiper-slide">
                              <div class="information__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                            </div>
                          </div>
                          <div class="pagination information-content-pagination"></div>
                        </div>
                        <h3 class="information__title item-title">Заголовок H3-2</h3>
                        <div class="information__description">
                           По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.</div>
                        <button class="information__button button"><i class="fa-solid fa-circle-dot"></i>Подробнее</button>
                      </div>
                      <!-- information-content -- end-->
                      <!-- information-content -- start-->
                      <div class="information__content hidden" data-info-target="three">
                        <div class="swiper information-content-swiper">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <div class="information__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                            </div>
                            <div class="swiper-slide">
                              <div class="information__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                            </div>
                            <div class="swiper-slide">
                              <div class="information__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                            </div>
                            <div class="swiper-slide">
                              <div class="information__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                            </div>
                          </div>
                          <div class="pagination information-content-pagination"></div>
                        </div>
                        <h3 class="information__title item-title">Заголовок H3-3</h3>
                        <div class="information__description">
                           По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.</div>
                        <button class="information__button button"><i class="fa-solid fa-circle-dot"></i>Подробнее</button>
                      </div>
                      <!-- information-content -- end-->
                    </div>
                  </div>
                </div>
                <div class="swiper-slide"><span>slide 2</span></div>
                <div class="swiper-slide"><span>slide 3</span></div>
              </div>
              <div class="information-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew information-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination information-pagination"></div>
                  <button class="slider-navigation-next information-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper information-swiper tabs__panel">
              <div class="swiper-wrapper information__swiper">
                <div class="swiper-slide"><span>slide 1</span></div>
                <div class="swiper-slide"><span>slide 2</span></div>
                <div class="swiper-slide"><span>slide 3</span></div>
              </div>
              <div class="information-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew information-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination information-pagination"></div>
                  <button class="slider-navigation-next information-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper information-swiper tabs__panel">
              <div class="swiper-wrapper information__swiper">
                <div class="swiper-slide"><span>slide 1</span></div>
                <div class="swiper-slide"><span>slide 2</span></div>
                <div class="swiper-slide"><span>slide 3</span></div>
              </div>
              <div class="information-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew information-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination information-pagination"></div>
                  <button class="slider-navigation-next information-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper information-swiper tabs__panel">
              <div class="swiper-wrapper information__swiper">
                <div class="swiper-slide"><span>slide 1</span></div>
                <div class="swiper-slide"><span>slide 2</span></div>
                <div class="swiper-slide"><span>slide 3</span></div>
              </div>
              <div class="information-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew information-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination information-pagination"></div>
                  <button class="slider-navigation-next information-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- body-block -- end-->
        </div>
      </div>
    </section>
    <!-- reviews ---- end-->
    <!-- menu ---- start -->
    <section class="menu">
      <div class="menu__container"> 
        <div class="menu__wrapper">
          <!-- header-block -- start -->
          <header class="header-block">
            <h2 class="header-block__title title">Меню</h2>
            <button class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><span>Подробнее</span>
            </button>
          </header>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <div class="tabs">
            <div class="tabs__wrapper">
              <div class="tabs__header" aria-expanded="false"> 
                <div class="tabs__header-item">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                </div>
                <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
              </div>
              <div class="tabs__list" aria-hidden="true">
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
              </div>
            </div>
          </div>
          <!-- tabs-block -- end-->
          <!-- body-block -- start-->
          <div class="menu__body">
            <!-- tab-item-->
            <div class="swiper menu-swiper tabs__panel tabs__panel--active">
              <div class="swiper-wrapper menu__swiper">
                <div class="swiper-slide">
                  <div class="menu__block"> 
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="menu__block"> 
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="menu__block"> 
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="menu-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew menu-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination menu-pagination"></div>
                  <button class="slider-navigation-next menu-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper menu-swiper tabs__panel">
              <div class="swiper-wrapper menu__swiper">
                <div class="swiper-slide">
                  <div class="menu__block"> 
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="menu__block"> 
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="menu__block"> 
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="menu-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew menu-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination menu-pagination"></div>
                  <button class="slider-navigation-next menu-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper menu-swiper tabs__panel">
              <div class="swiper-wrapper menu__swiper">
                <div class="swiper-slide">
                  <div class="menu__block"> 
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="menu__block"> 
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="menu__block"> 
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                    <div class="menu__card"> 
                      <div class="menu__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/menu-img.png" alt="menu"></div>
                      <div class="menu__content"> 
                        <div class="menu__header"> 
                          <h4 class="menu__title small__title">Заголовок</h4>
                          <div class="menu__price">100 р</div>
                        </div>
                        <div class="menu__description"></div>В отличии от lorem ipsum
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="menu-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew menu-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination menu-pagination"></div>
                  <button class="slider-navigation-next menu-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- body-block -- end-->
        </div>
      </div>
    </section>
    <!-- menu ---- end-->
    <!-- feedback ---- start -->
    <section class="feedback">
      <div class="feedback__container">
        <div class="feedback__wrapper">
          <!-- header-block -- start -->
          <header class="header-block">
            <h2 class="header-block__title title">Обратная связь</h2>
            <button class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><span>Подробнее</span>
            </button>
          </header>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <div class="tabs">
            <div class="tabs__wrapper">
              <div class="tabs__header" aria-expanded="false"> 
                <div class="tabs__header-item">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                </div>
                <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
              </div>
              <div class="tabs__list" aria-hidden="true">
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
              </div>
            </div>
          </div>
          <!-- tabs-block -- end-->
          <!-- feedback__block -- start-->
          <div class="feedback__body">
            <!-- tab-item-->
            <div class="swiper feedback-swiper tabs__panel tabs__panel--active">
              <div class="swiper-wrapper feedback__swiper">
                <div class="swiper-slide">
                  <div class="feedback__block">
                    <div class="feedback__form form">
                      <div class="form__header">
                        <h4 class="form__title">Заголовок формы. Призыв к действию
                        </h4><span class="form__description">Мы вам перезвоним</span>
                      </div>
                      <form class="form__block" action="">
                        <input class="form__input form__item" type="text" placeholder="Имя">
                        <input class="form__input form__item" type="tel" placeholder="+7 (...)...-...-...">
                        <textarea class="form__textarea form__item" placeholder="Комментарий"></textarea>
                        <button class="form__button button form__item" type="submit"><i class="fa-solid fa-square-arrow-up-right"></i>Отправить</button>
                        <label class="form__checkbox form__item">
                          <input type="checkbox">Согласие ссылка на обработку персональных данных
                        </label>
                      </form>
                    </div>
                    <div class="swiper feedback-content-swiper feedback__slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="feedback__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/feedback-img.png" alt="feedback"></div>
                        </div>
                        <div class="swiper-slide">
                          <div class="feedback__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/feedback-img.png" alt="feedback"></div>
                        </div>
                        <div class="swiper-slide">
                          <div class="feedback__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/feedback-img.png" alt="feedback"></div>
                        </div>
                      </div>
                      <div class="pagination feedback-content-pagination"></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="feedback__block">
                    <div class="feedback__form form">
                      <div class="form__header">
                        <h4 class="form__title">Заголовок формы. Призыв к действию</h4><span class="form__description">Мы вам перезвоним</span>
                      </div>
                      <form class="form__block" action="">
                        <input class="form__input form__item" type="text" placeholder="Имя">
                        <input class="form__input form__item" type="tel" placeholder="+7 (...)...-...-...">
                        <textarea class="form__textarea form__item" placeholder="Комментарий"></textarea>
                        <button class="form__button button form__item" type="submit"><i class="fa-solid fa-square-arrow-up-right"></i>Отправить</button>
                        <label class="form__checkbox form__item">
                          <input type="checkbox">Согласие ссылка на обработку персональных данных
                        </label>
                      </form>
                    </div>
                    <div class="feedback__slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="feedback__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/feedback-img.png" alt="feedback"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="feedback__block">
                    <div class="feedback__form form">
                      <div class="form__header">
                        <h4 class="form__title">Заголовок формы. Призыв к действию</h4><span class="form__description">Мы вам перезвоним</span>
                      </div>
                      <form class="form__block" action="">
                        <input class="form__input form__item" type="text" placeholder="Имя">
                        <input class="form__input form__item" type="tel" placeholder="+7 (...)...-...-...">
                        <textarea class="form__textarea form__item" placeholder="Комментарий"></textarea>
                        <button class="form__button button form__item" type="submit"><i class="fa-solid fa-square-arrow-up-right"></i>Отправить</button>
                        <label class="form__checkbox form__item">
                          <input type="checkbox">Согласие ссылка на обработку персональных данных
                        </label>
                      </form>
                    </div>
                    <div class="feedback__slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="feedback__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/feedback-img.png" alt="feedback"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="feedback-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew feedback-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination feedback-pagination"></div>
                  <button class="slider-navigation-next feedback-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper feedback-swiper tabs__panel">
              <div class="swiper-wrapper feedback__swiper">
                <div class="swiper-slide">
                  <div class="feedback__block">
                    <div class="feedback__form form">
                      <div class="form__header">
                        <h4 class="form__title">Заголовок формы. Призыв к действию</h4><span class="form__description">Мы вам перезвоним</span>
                      </div>
                      <form class="form__block" action="">
                        <input class="form__input form__item" type="text" placeholder="Имя">
                        <input class="form__input form__item" type="tel" placeholder="+7 (...)...-...-...">
                        <textarea class="form__textarea form__item" placeholder="Комментарий"></textarea>
                        <button class="form__button button form__item" type="submit"><i class="fa-solid fa-square-arrow-up-right"></i>Отправить</button>
                        <label class="form__checkbox form__item">
                          <input type="checkbox">Согласие ссылка на обработку персональных данных
                        </label>
                      </form>
                    </div>
                    <div class="feedback__slider vertical-slider">
                      <div class="feedback__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/feedback-img.png" alt="feedback"></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="feedback__block">
                    <div class="feedback__form form">
                      <div class="form__header">
                        <h4 class="form__title">Заголовок формы. Призыв к действию</h4><span class="form__description">Мы вам перезвоним</span>
                      </div>
                      <form class="form__block" action="">
                        <input class="form__input form__item" type="text" placeholder="Имя">
                        <input class="form__input form__item" type="tel" placeholder="+7 (...)...-...-...">
                        <textarea class="form__textarea form__item" placeholder="Комментарий"></textarea>
                        <button class="form__button button form__item" type="submit"><i class="fa-solid fa-square-arrow-up-right"></i>Отправить</button>
                        <label class="form__checkbox form__item">
                          <input type="checkbox">Согласие ссылка на обработку персональных данных
                        </label>
                      </form>
                    </div>
                    <div class="feedback__slider vertical-slider">
                      <div class="feedback__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/feedback-img.png" alt="feedback"></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="feedback__block">
                    <div class="feedback__form form">
                      <div class="form__header">
                        <h4 class="form__title">Заголовок формы. Призыв к действию</h4><span class="form__description">Мы вам перезвоним</span>
                      </div>
                      <form class="form__block" action="">
                        <input class="form__input form__item" type="text" placeholder="Имя">
                        <input class="form__input form__item" type="tel" placeholder="+7 (...)...-...-...">
                        <textarea class="form__textarea form__item" placeholder="Комментарий"></textarea>
                        <button class="form__button button form__item" type="submit"><i class="fa-solid fa-square-arrow-up-right"></i>Отправить</button>
                        <label class="form__checkbox form__item">
                          <input type="checkbox">Согласие ссылка на обработку персональных данных
                        </label>
                      </form>
                    </div>
                    <div class="feedback__slider vertical-slider">
                      <div class="feedback__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/feedback-img.png" alt="feedback"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="feedback-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew feedback-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination feedback-pagination"></div>
                  <button class="slider-navigation-next feedback-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper feedback-swiper tabs__panel">
              <div class="swiper-wrapper feedback__swiper">
                <div class="swiper-slide">
                  <div class="feedback__block">
                    <div class="feedback__form form">
                      <div class="form__header">
                        <h4 class="form__title">Заголовок формы. Призыв к действию</h4><span class="form__description">Мы вам перезвоним</span>
                      </div>
                      <form class="form__block" action="">
                        <input class="form__input form__item" type="text" placeholder="Имя">
                        <input class="form__input form__item" type="tel" placeholder="+7 (...)...-...-...">
                        <textarea class="form__textarea form__item" placeholder="Комментарий"></textarea>
                        <button class="form__button button form__item" type="submit"><i class="fa-solid fa-square-arrow-up-right"></i>Отправить</button>
                        <label class="form__checkbox form__item">
                          <input type="checkbox">Согласие ссылка на обработку персональных данных
                        </label>
                      </form>
                    </div>
                    <div class="feedback__slider vertical-slider">
                      <div class="feedback__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/feedback-img.png" alt="feedback"></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="feedback__block">
                    <div class="feedback__form form">
                      <div class="form__header">
                        <h4 class="form__title">Заголовок формы. Призыв к действию</h4><span class="form__description">Мы вам перезвоним</span>
                      </div>
                      <form class="form__block" action="">
                        <input class="form__input form__item" type="text" placeholder="Имя">
                        <input class="form__input form__item" type="tel" placeholder="+7 (...)...-...-...">
                        <textarea class="form__textarea form__item" placeholder="Комментарий"></textarea>
                        <button class="form__button button form__item" type="submit"><i class="fa-solid fa-square-arrow-up-right"></i>Отправить</button>
                        <label class="form__checkbox form__item">
                          <input type="checkbox">Согласие ссылка на обработку персональных данных
                        </label>
                      </form>
                    </div>
                    <div class="feedback__slider vertical-slider">
                      <div class="feedback__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/feedback-img.png" alt="feedback"></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="feedback__block">
                    <div class="feedback__form form">
                      <div class="form__header">
                        <h4 class="form__title">Заголовок формы. Призыв к действию</h4><span class="form__description">Мы вам перезвоним</span>
                      </div>
                      <form class="form__block" action="">
                        <input class="form__input form__item" type="text" placeholder="Имя">
                        <input class="form__input form__item" type="tel" placeholder="+7 (...)...-...-...">
                        <textarea class="form__textarea form__item" placeholder="Комментарий"></textarea>
                        <button class="form__button button form__item" type="submit"><i class="fa-solid fa-square-arrow-up-right"></i>Отправить</button>
                        <label class="form__checkbox form__item">
                          <input type="checkbox">Согласие ссылка на обработку персональных данных
                        </label>
                      </form>
                    </div>
                    <div class="feedback__slider vertical-slider">
                      <div class="feedback__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/feedback-img.png" alt="feedback"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="feedback-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew feedback-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination feedback-pagination"></div>
                  <button class="slider-navigation-next feedback-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- feedback__block -- end -->
        </div>
      </div>
    </section>
    <!-- feedback ---- end -->
    <!-- numbers ---- start -->
    <section class="numbers">
      <div class="numbers__container">
        <div class="numbers__wrapper">
          <!-- header-block -- start -->
          <header class="header-block">
            <h2 class="header-block__title title">Цифры</h2>
            <button class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><span>Подробнее</span>
            </button>
          </header>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <div class="tabs">
            <div class="tabs__wrapper">
              <div class="tabs__header" aria-expanded="false"> 
                <div class="tabs__header-item">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                </div>
                <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
              </div>
              <div class="tabs__list" aria-hidden="true">
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
              </div>
            </div>
          </div>
          <!-- tabs-block -- end-->
          <!-- numbers__block -- start-->
          <div class="feedback__body">
            <!-- tab-item-->
            <div class="swiper numbers-swiper tabs__panel tabs__panel--active">
              <div class="swiper-wrapper numbers__swiper">
                <div class="swiper-slide">
                  <div class="numbers__card"> 
                    <div class="numbers__header"> <span class="numbers__num title">456</span>
                      <div class="icon-wrapper-40"><i class="fa-solid fa-rocket"></i></div>
                    </div>
                    <div class="numbers__description"> </div>Описание характеристики
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="numbers__card"> 
                    <div class="numbers__header"> <span class="numbers__num title">456</span>
                      <div class="icon-wrapper-40"><i class="fa-solid fa-rocket"></i></div>
                    </div>
                    <div class="numbers__description"> </div>Описание характеристики
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="numbers__card"> 
                    <div class="numbers__header"> <span class="numbers__num title">456</span>
                      <div class="icon-wrapper-40"><i class="fa-solid fa-rocket"></i></div>
                    </div>
                    <div class="numbers__description"> </div>Описание характеристики
                  </div>
                </div>
              </div>
              <div class="numbers-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew numbers-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination numbers-pagination"></div>
                  <button class="slider-navigation-next numbers-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper numbers-swiper tabs__panel">
              <div class="swiper-wrapper numbers__swiper">
                <div class="swiper-slide">
                  <div class="numbers__card"> 
                    <div class="numbers__header"> <span class="numbers__num title">456</span>
                      <div class="icon-wrapper-40"><i class="fa-solid fa-rocket"></i></div>
                    </div>
                    <div class="numbers__description"> </div>Описание характеристики
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="numbers__card"> 
                    <div class="numbers__header"> <span class="numbers__num title">456</span>
                      <div class="icon-wrapper-40"><i class="fa-solid fa-rocket"></i></div>
                    </div>
                    <div class="numbers__description"> </div>Описание характеристики
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="numbers__card"> 
                    <div class="numbers__header"> <span class="numbers__num title">456</span>
                      <div class="icon-wrapper-40"><i class="fa-solid fa-rocket"></i></div>
                    </div>
                    <div class="numbers__description"> </div>Описание характеристики
                  </div>
                </div>
              </div>
              <div class="numbers-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew numbers-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination numbers-pagination"></div>
                  <button class="slider-navigation-next numbers-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper numbers-swiper tabs__panel">
              <div class="swiper-wrapper numbers__swiper">
                <div class="swiper-slide">
                  <div class="numbers__card"> 
                    <div class="numbers__header"> <span class="numbers__num title">456</span>
                      <div class="icon-wrapper-40"><i class="fa-solid fa-rocket"></i></div>
                    </div>
                    <div class="numbers__description"> </div>Описание характеристики
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="numbers__card"> 
                    <div class="numbers__header"> <span class="numbers__num title">456</span>
                      <div class="icon-wrapper-40"><i class="fa-solid fa-rocket"></i></div>
                    </div>
                    <div class="numbers__description"> </div>Описание характеристики
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="numbers__card"> 
                    <div class="numbers__header"> <span class="numbers__num title">456</span>
                      <div class="icon-wrapper-40"><i class="fa-solid fa-rocket"></i></div>
                    </div>
                    <div class="numbers__description"> </div>Описание характеристики
                  </div>
                </div>
              </div>
              <div class="numbers-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew numbers-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination numbers-pagination"></div>
                  <button class="slider-navigation-next numbers-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- numbers ---- end-->
    <!-- products-sidebar ---- start -->
    <div class="product-bar" data-product="name-1">
      <div class="product-bar__wrapper">
        <button class="product-bar__close"> 
          <div class="icon-wrapper-16"> <i class="fa-solid fa-xmark"></i></div>
        </button>
        <div class="product-bar__content"> 
          <div class="product-bar__banner">
            <div class="swiper product-bar-swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="product-bar__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                </div>
                <div class="swiper-slide">
                  <div class="product-bar__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                </div>
                <div class="swiper-slide">
                  <div class="product-bar__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                </div>
                <div class="swiper-slide">
                  <div class="product-bar__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                </div>
              </div>
              <div class="pagination product-bar-pagination"></div>
            </div>
          </div>
          <div class="product-bar__body">
            <div class="product-bar__wrapper-content">
              <div class="product-bar__section">
                <div class="product-bar__tags"> 
                  <div class="tags">
                    <div class="tags__item">
                       Название тега</div>
                    <div class="tags__item">
                       Название</div>
                    <div class="tags__item">
                       Длинный тег</div>
                    <div class="tags__item">
                       Короткий тег</div>
                    <div class="tags__item">
                       Название тега</div>
                    <div class="tags__item">
                       Название</div>
                  </div>
                </div>
                <div class="product-bar__description">
                  <h3 class="product-bar__title item-title">Заголовок описания</h3>
                  <div class="product-bar__text">
                     В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст</div>
                  <ul class="product-bar__list list-ul">
                    <li class="list-ul__item">В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст</li>
                    <li class="list-ul__item">В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст</li>
                    <li class="list-ul__item">В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст</li>
                    <li class="list-ul__item">В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст</li>
                    <li class="list-ul__item">В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст</li>
                    <li class="list-ul__item">В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст</li>
                  </ul>
                </div>
                <div class="product-bar__info"> 
                  <div class="product-bar__info-column">
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                  </div>
                  <div class="product-bar__info-column">
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                  </div>
                </div>
                <div class="product-bar__specifications"> 
                  <div class="specifications"> 
                    <div class="specifications__column"> 
                      <div class="specifications__item"> <span class="specifications__name">Характеристика</span><span class="specifications__type">35</span></div>
                      <div class="specifications__item"> <span class="specifications__name">Характеристика</span><span class="specifications__type">35</span></div>
                    </div>
                    <div class="specifications__column"> 
                      <div class="specifications__item"> <span class="specifications__name">Характеристика</span><span class="specifications__type">35</span></div>
                      <div class="specifications__item"> <span class="specifications__name">Характеристика</span><span class="specifications__type">35</span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-bar__footer">
                <div class="product-bar__price"> 
                  <h3 class="product-bar__price-title item-title">Cтоимость в час: </h3>
                  <div class="product-bar__price-type item-title">1000 ₽</div>
                </div>
                <button class="product-bar__button button">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><span>Купить / Заказать</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="product-bar" data-product="name-2">
      <div class="product-bar__wrapper">
        <div class="product-bar__content"> 
          <div class="product-bar__banner">
            <div class="swiper product-bar-swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="product-bar__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                </div>
                <div class="swiper-slide">
                  <div class="product-bar__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                </div>
                <div class="swiper-slide">
                  <div class="product-bar__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                </div>
                <div class="swiper-slide">
                  <div class="product-bar__img"><img src="<?php echo bloginfo('template_url');?>/assets/img/information-content-img.png" alt="information"></div>
                </div>
              </div>
              <div class="pagination product-bar-pagination"></div>
            </div>
          </div>
          <button class="product-bar__close"> 
            <div class="icon-wrapper-16"> <i class="fa-solid fa-xmark"></i></div>
          </button>
          <div class="product-bar__body">
            <div class="product-bar__wrapper-content">
              <div class="product-bar__section">
                <div class="product-bar__tags"> 
                  <div class="tags">
                    <div class="tags__item">
                       Название тега</div>
                    <div class="tags__item">
                       Название</div>
                    <div class="tags__item">
                       Длинный тег</div>
                    <div class="tags__item">
                       Короткий тег</div>
                    <div class="tags__item">
                       Название тега</div>
                    <div class="tags__item">
                       Название</div>
                  </div>
                </div>
                <div class="product-bar__description">
                  <h3 class="product-bar__title item-title">Заголовок описания</h3>
                  <div class="product-bar__text">
                     В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст</div>
                  <ul class="product-bar__list list-ul">
                    <li class="list-ul__item">В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст</li>
                    <li class="list-ul__item">В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст</li>
                    <li class="list-ul__item">В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст</li>
                    <li class="list-ul__item">В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст</li>
                    <li class="list-ul__item">В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст</li>
                    <li class="list-ul__item">В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст</li>
                  </ul>
                </div>
                <div class="product-bar__info"> 
                  <div class="product-bar__info-column">
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                  </div>
                  <div class="product-bar__info-column">
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                    <div class="product-bar__info-item"> 
                      <div class="icon-wrapper-16"><i class="fa-solid fa-cookie-bite"></i></div><span>Здесь название</span>
                    </div>
                  </div>
                </div>
                <div class="product-bar__specifications"> 
                  <div class="specifications"> 
                    <div class="specifications__column"> 
                      <div class="specifications__item"> <span class="specifications__name">Характеристика</span><span class="specifications__type">35</span></div>
                      <div class="specifications__item"> <span class="specifications__name">Характеристика</span><span class="specifications__type">35</span></div>
                    </div>
                    <div class="specifications__column"> 
                      <div class="specifications__item"> <span class="specifications__name">Характеристика</span><span class="specifications__type">35</span></div>
                      <div class="specifications__item"> <span class="specifications__name">Характеристика</span><span class="specifications__type">35</span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-bar__footer">
                <div class="product-bar__price"> 
                  <h3 class="product-bar__price-title item-title">Cтоимость в час: </h3>
                  <div class="product-bar__price-type item-title">1000 ₽</div>
                </div>
                <button class="product-bar__button button">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><span>Купить / Заказать</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- products-sidebar ---- end-->
    <!-- products ---- start -->
    <section class="products">
      <div class="products__container">
        <div class="products__wrapper">
          <!-- header-block -- start -->
          <header class="header-block">
            <h2 class="header-block__title title">Тарифы / товары</h2>
            <button class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><span>Подробнее</span>
            </button>
          </header>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <div class="tabs">
            <div class="tabs__wrapper">
              <div class="tabs__header" aria-expanded="false"> 
                <div class="tabs__header-item">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                </div>
                <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
              </div>
              <div class="tabs__list" aria-hidden="true">
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
              </div>
            </div>
          </div>
          <!-- tabs-block -- end-->
          <!-- products__block -- start-->
          <div class="products__body">
            <!-- tab-item-->
            <div class="swiper products-swiper tabs__panel tabs__panel--active">
              <div class="swiper-wrapper products__swiper">
                <div class="swiper-slide">
                  <div class="products__card"> 
                    <div class="products__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/products.png" alt="products"></div>
                    <div class="products__content"> 
                      <div class="products__header"> 
                        <h3 class="products__title item-title">Заголовок</h3>
                        <button class="products__like">
                          <div class="icon-wrapper-24"><i class="fa-solid fa-heart"></i></div>
                        </button>
                      </div>
                      <div class="products__description">
                         Описание</div>
                      <ul class="products__parameters-list">
                        <li class="products__parameters-item products__rate-check">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-check"></i></div><span>Что входит в тариф</span>
                        </li>
                        <li class="products__parameters-item products__rate-check">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-check"></i></div><span>Что входит в тариф</span>
                        </li>
                        <li class="products__parameters-item products__rate-check">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-check"></i></div><span>Что входит в тариф</span>
                        </li>
                        <li class="products__parameters-item products__rate-not">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-lock"></i></div><span>Что входит не в тариф</span>
                        </li>
                        <li class="products__parameters-item products__rate-not">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-lock"></i></div><span>Что входит не в тариф</span>
                        </li>
                        <li class="products__parameters-item products__rate-not">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-lock"></i></div><span>Что входит не в тариф</span>
                        </li>
                      </ul>
                      <div class="products__price item-title">1000 р</div>
                      <button class="products__button button" data-btnproduct="name-1">
                        <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="products__card"> 
                    <div class="products__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/products.png" alt="products"></div>
                    <div class="products__content"> 
                      <div class="products__header"> 
                        <h3 class="products__title item-title">Заголовок</h3>
                        <button class="products__like">
                          <div class="icon-wrapper-24"><i class="fa-solid fa-heart"></i></div>
                        </button>
                      </div>
                      <div class="products__description">
                         Описание</div>
                      <ul class="products__parameters-list">
                        <li class="products__parameters-item products__rate-check">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-check"></i></div><span>Что входит в тариф</span>
                        </li>
                        <li class="products__parameters-item products__rate-check">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-check"></i></div><span>Что входит в тариф</span>
                        </li>
                        <li class="products__parameters-item products__rate-check">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-check"></i></div><span>Что входит в тариф</span>
                        </li>
                        <li class="products__parameters-item products__rate-not">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-lock"></i></div><span>Что входит не в тариф</span>
                        </li>
                        <li class="products__parameters-item products__rate-not">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-lock"></i></div><span>Что входит не в тариф</span>
                        </li>
                        <li class="products__parameters-item products__rate-not">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-lock"></i></div><span>Что входит не в тариф</span>
                        </li>
                      </ul>
                      <div class="products__price item-title">1000 р</div>
                      <button class="products__button button" data-btnproduct="name-2">
                        <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="products__card"> 
                    <div class="products__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/products.png" alt="products"></div>
                    <div class="products__content"> 
                      <div class="products__header"> 
                        <h3 class="products__title item-title">Заголовок</h3>
                        <button class="products__like">
                          <div class="icon-wrapper-24"><i class="fa-solid fa-heart"></i></div>
                        </button>
                      </div>
                      <div class="products__description">
                         Описание</div>
                      <ul class="products__parameters-list">
                        <li class="products__parameters-item products__rate-check">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-check"></i></div><span>Что входит в тариф</span>
                        </li>
                        <li class="products__parameters-item products__rate-check">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-check"></i></div><span>Что входит в тариф</span>
                        </li>
                        <li class="products__parameters-item products__rate-check">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-check"></i></div><span>Что входит в тариф</span>
                        </li>
                        <li class="products__parameters-item products__rate-not">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-lock"></i></div><span>Что входит не в тариф</span>
                        </li>
                        <li class="products__parameters-item products__rate-not">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-lock"></i></div><span>Что входит не в тариф</span>
                        </li>
                        <li class="products__parameters-item products__rate-not">
                          <div class="icon-wrapper-16"><i class="fa-solid fa-lock"></i></div><span>Что входит не в тариф</span>
                        </li>
                      </ul>
                      <div class="products__price item-title">1000 р</div>
                      <button class="products__button button">
                        <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="products-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew products-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination products-pagination"></div>
                  <button class="slider-navigation-next products-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper products-swiper tabs__panel">
              <div class="swiper-wrapper products__swiper">
                <div class="swiper-slide">
                  <div class="products__card"> 
                    <div class="products__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/products.png" alt="products"></div>
                    <div class="products__content"> 
                      <div class="products__header"> 
                        <h3 class="products__title item-title">Заголовок</h3>
                        <button class="products__like">
                          <div class="icon-wrapper-24"><i class="fa-solid fa-heart"></i></div>
                        </button>
                      </div>
                      <div class="products__description"> <span>Описание</span>
                        <div class="products__tooltype">
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__left">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__left">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__left">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__left">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__left">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__right">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__right">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__right">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__right">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__right">Подсказка</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <ul class="products__parameters-list">
                        <li class="products__parameters-item"> <span class="products__parameters-name">Размер:</span><span class="products__parameters-type">XS</span></li>
                        <li class="products__parameters-item"> <span class="products__parameters-name">Цвет:</span><span class="products__parameters-type">Gray</span></li>
                        <li class="products__parameters-item"> <span class="products__parameters-name">Мфтериал:</span><span class="products__parameters-type">Хлопок</span></li>
                      </ul>
                      <div class="products__price item-title">1000 р</div>
                      <button class="products__button button">
                        <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="products__card"> 
                    <div class="products__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/products.png" alt="products"></div>
                    <div class="products__content"> 
                      <div class="products__header"> 
                        <h3 class="products__title item-title">Заголовок</h3>
                        <button class="products__like">
                          <div class="icon-wrapper-24"><i class="fa-solid fa-heart"></i></div>
                        </button>
                      </div>
                      <div class="products__description"> <span>Описание</span>
                        <div class="products__tooltype">
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__left">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__left">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__left">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__left">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__left">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__right">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__right">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__right">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__right">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__right">Подсказка</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <ul class="products__parameters-list">
                        <li class="products__parameters-item"> <span class="products__parameters-name">Размер:</span><span class="products__parameters-type">XS</span></li>
                        <li class="products__parameters-item"> <span class="products__parameters-name">Цвет:</span><span class="products__parameters-type">Gray</span></li>
                        <li class="products__parameters-item"> <span class="products__parameters-name">Мфтериал:</span><span class="products__parameters-type">Хлопок</span></li>
                      </ul>
                      <div class="products__price item-title">1000 р</div>
                      <button class="products__button button">
                        <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="products__card"> 
                    <div class="products__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/products.png" alt="products"></div>
                    <div class="products__content"> 
                      <div class="products__header"> 
                        <h3 class="products__title item-title">Заголовок</h3>
                        <button class="products__like">
                          <div class="icon-wrapper-24"><i class="fa-solid fa-heart"></i></div>
                        </button>
                      </div>
                      <div class="products__description"> <span>Описание</span>
                        <div class="products__tooltype">
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__left">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__left">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__left">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__left">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__left">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__right">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__right">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__right">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__right">Подсказка</div>
                            </div>
                          </div>
                          <div class="tooltype">
                            <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="fa-solid fa-music"></i></div>
                              <div class="tooltype__content tooltype__right">Подсказка</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <ul class="products__parameters-list">
                        <li class="products__parameters-item"> <span class="products__parameters-name">Размер:</span><span class="products__parameters-type">XS</span></li>
                        <li class="products__parameters-item"> <span class="products__parameters-name">Цвет:</span><span class="products__parameters-type">Gray</span></li>
                        <li class="products__parameters-item"> <span class="products__parameters-name">Мфтериал:</span><span class="products__parameters-type">Хлопок</span></li>
                      </ul>
                      <div class="products__price item-title">1000 р</div>
                      <button class="products__button button">
                        <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="products-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew products-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination products-pagination"></div>
                  <button class="slider-navigation-next products-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper products-swiper tabs__panel">
              <div class="swiper-wrapper products__swiper">
                <div class="swiper-slide">
                  <div class="products__card"> 
                    <div class="products__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/products.png" alt="products"></div>
                    <div class="products__content"> 
                      <div class="products__header"> 
                        <h3 class="products__title item-title">Заголовок</h3>
                        <button class="products__like">
                          <div class="icon-wrapper-24"><i class="fa-solid fa-heart"></i></div>
                        </button>
                      </div>
                      <div class="products__description">
                         Описание</div>
                      <ul class="products__parameters-list">
                        <li class="products__parameters-item"> <span class="products__parameters-name">Размер:</span><span class="products__parameters-type">XS</span></li>
                        <li class="products__parameters-item"> <span class="products__parameters-name">Цвет:</span><span class="products__parameters-type">Gray</span></li>
                        <li class="products__parameters-item"> <span class="products__parameters-name">Мфтериал:</span><span class="products__parameters-type">Хлопок</span></li>
                      </ul>
                      <div class="products__price item-title">1000 р</div>
                      <button class="products__button button">
                        <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="products__card"> 
                    <div class="products__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/products.png" alt="products"></div>
                    <div class="products__content"> 
                      <div class="products__header"> 
                        <h3 class="products__title item-title">Заголовок</h3>
                        <button class="products__like">
                          <div class="icon-wrapper-24"><i class="fa-solid fa-heart"></i></div>
                        </button>
                      </div>
                      <div class="products__description">
                         Описание</div>
                      <ul class="products__parameters-list">
                        <li class="products__parameters-item"> <span class="products__parameters-name">Размер:</span><span class="products__parameters-type">XS</span></li>
                        <li class="products__parameters-item"> <span class="products__parameters-name">Цвет:</span><span class="products__parameters-type">Gray</span></li>
                        <li class="products__parameters-item"> <span class="products__parameters-name">Мфтериал:</span><span class="products__parameters-type">Хлопок</span></li>
                      </ul>
                      <div class="products__price item-title">1000 р</div>
                      <button class="products__button button">
                        <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="products__card"> 
                    <div class="products__img"> <img src="<?php echo bloginfo('template_url');?>/assets/img/products.png" alt="products"></div>
                    <div class="products__content"> 
                      <div class="products__header"> 
                        <h3 class="products__title item-title">Заголовок</h3>
                        <button class="products__like">
                          <div class="icon-wrapper-24"><i class="fa-solid fa-heart"></i></div>
                        </button>
                      </div>
                      <div class="products__description">
                         Описание</div>
                      <ul class="products__parameters-list">
                        <li class="products__parameters-item"> <span class="products__parameters-name">Размер:</span><span class="products__parameters-type">XS</span></li>
                        <li class="products__parameters-item"> <span class="products__parameters-name">Цвет:</span><span class="products__parameters-type">Gray</span></li>
                        <li class="products__parameters-item"> <span class="products__parameters-name">Мфтериал:</span><span class="products__parameters-type">Хлопок</span></li>
                      </ul>
                      <div class="products__price item-title">1000 р</div>
                      <button class="products__button button">
                        <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="products-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew products-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination products-pagination"></div>
                  <button class="slider-navigation-next products-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- products ---- end-->
    <!-- contacts ---- start -->
    <section class="contacts">
      <div class="contacts__container">
        <div class="contacts__wrapper">
          <!-- header-block -- start -->
          <header class="header-block">
            <h2 class="header-block__title title">Контакты</h2>
            <button class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><span>Подробнее</span>
            </button>
          </header>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <div class="tabs">
            <div class="tabs__wrapper">
              <div class="tabs__header" aria-expanded="false"> 
                <div class="tabs__header-item">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                </div>
                <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
              </div>
              <div class="tabs__list" aria-hidden="true">
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
              </div>
            </div>
          </div>
          <!-- tabs-block -- end-->
          <!-- contacts__block -- start-->
          <div class="contacts__body">
            <!-- tab-item-->
            <div class="swiper contacts-swiper tabs__panel tabs__panel--active">
              <div class="swiper-wrapper contacts__swiper">
                <div class="swiper-slide">
                  <div class="contacts__block" data-contact="name-contact">
                    <div class="contacts__date">
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Адрес</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Телефон</h3>
                        </div><a class="contacts__phone" href="tel: +79999999999">+7 (999) 999 99 99</a>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Эл. Почта</h3>
                        </div><span>mymail.@gmail.com</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Доп. информация</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item contacts__social"><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-telegram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-facebook"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-vk"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-youtube"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-instagram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-whatsapp"></i></div></a></div>
                    </div>
                    <div class="contacts__map">
                      <button class="contacts__map-button">
                        <div class="icon-wrapper-16"><i class="fa-solid fa-arrow-left"></i></div>
                      </button>
                      <div class="map" id="map"></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="contacts__block">
                    <div class="contacts__date">
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Адрес</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Телефон</h3>
                        </div><a class="contacts__phone" href="tel: +79999999999">+7 (999) 999 99 99</a>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Эл. Почта</h3>
                        </div><span>mymail.@gmail.com</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Доп. информация</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item contacts__social"><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-telegram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-facebook"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-vk"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-youtube"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-instagram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-whatsapp"></i></div></a></div>
                    </div>
                    <div class="contacts__map"><img src="<?php echo bloginfo('template_url');?>/assets/img/map.png" alt="map"></div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="contacts__block">
                    <div class="contacts__date">
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Адрес</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Телефон</h3>
                        </div><a class="contacts__phone" href="tel: +79999999999">+7 (999) 999 99 99</a>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Эл. Почта</h3>
                        </div><span>mymail.@gmail.com</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Доп. информация</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item contacts__social"><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-telegram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-facebook"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-vk"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-youtube"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-instagram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-whatsapp"></i></div></a></div>
                    </div>
                    <div class="contacts__map"><img src="<?php echo bloginfo('template_url');?>/assets/img/map.png" alt="map"></div>
                  </div>
                </div>
              </div>
              <div class="contacts-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew contacts-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination contacts-pagination"></div>
                  <button class="slider-navigation-next contacts-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper contacts-swiper tabs__panel">
              <div class="swiper-wrapper contacts__swiper">
                <div class="swiper-slide">
                  <div class="contacts__block">
                    <div class="contacts__date">
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Адрес</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Телефон</h3>
                        </div><a class="contacts__phone" href="tel: +79999999999">+7 (999) 999 99 99</a>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Эл. Почта</h3>
                        </div><span>mymail.@gmail.com</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Доп. информация</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item contacts__social"><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-telegram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-facebook"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-vk"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-youtube"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-instagram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-whatsapp"></i></div></a></div>
                    </div>
                    <div class="contacts__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26247.126109522873!2d82.9192802122261!3d55.03130698272148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10075363ea68c41f!2z0KLQoNCmICLQk9Cw0LvQtdGA0LXRjyDQndC-0LLQvtGB0LjQsdC40YDRgdC6Ig!5e0!3m2!1sru!2sru!4v1674396267300!5m2!1sru!2sru" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="contacts__block">
                    <div class="contacts__date">
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Адрес</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Телефон</h3>
                        </div><a class="contacts__phone" href="tel: +79999999999">+7 (999) 999 99 99</a>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Эл. Почта</h3>
                        </div><span>mymail.@gmail.com</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Доп. информация</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item contacts__social"><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-telegram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-facebook"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-vk"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-youtube"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-instagram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-whatsapp"></i></div></a></div>
                    </div>
                    <div class="contacts__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26247.126109522873!2d82.9192802122261!3d55.03130698272148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10075363ea68c41f!2z0KLQoNCmICLQk9Cw0LvQtdGA0LXRjyDQndC-0LLQvtGB0LjQsdC40YDRgdC6Ig!5e0!3m2!1sru!2sru!4v1674396267300!5m2!1sru!2sru" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="contacts__block">
                    <div class="contacts__date">
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Адрес</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Телефон</h3>
                        </div><a class="contacts__phone" href="tel: +79999999999">+7 (999) 999 99 99</a>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Эл. Почта</h3>
                        </div><span>mymail.@gmail.com</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Доп. информация</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item contacts__social"><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-telegram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-facebook"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-vk"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-youtube"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-instagram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-whatsapp"></i></div></a></div>
                    </div>
                    <div class="contacts__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26247.126109522873!2d82.9192802122261!3d55.03130698272148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10075363ea68c41f!2z0KLQoNCmICLQk9Cw0LvQtdGA0LXRjyDQndC-0LLQvtGB0LjQsdC40YDRgdC6Ig!5e0!3m2!1sru!2sru!4v1674396267300!5m2!1sru!2sru" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                  </div>
                </div>
              </div>
              <div class="contacts-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew contacts-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination contacts-pagination"></div>
                  <button class="slider-navigation-next contacts-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper contacts-swiper tabs__panel">
              <div class="swiper-wrapper contacts__swiper">
                <div class="swiper-slide">
                  <div class="contacts__block">
                    <div class="contacts__date">
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Адрес</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Телефон</h3>
                        </div><a class="contacts__phone" href="tel: +79999999999">+7 (999) 999 99 99</a>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Эл. Почта</h3>
                        </div><span>mymail.@gmail.com</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Доп. информация</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item contacts__social"><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-telegram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-facebook"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-vk"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-youtube"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-instagram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-whatsapp"></i></div></a></div>
                    </div>
                    <div class="contacts__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26247.126109522873!2d82.9192802122261!3d55.03130698272148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10075363ea68c41f!2z0KLQoNCmICLQk9Cw0LvQtdGA0LXRjyDQndC-0LLQvtGB0LjQsdC40YDRgdC6Ig!5e0!3m2!1sru!2sru!4v1674396267300!5m2!1sru!2sru" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="contacts__block">
                    <div class="contacts__date">
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Адрес</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Телефон</h3>
                        </div><a class="contacts__phone" href="tel: +79999999999">+7 (999) 999 99 99</a>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Эл. Почта</h3>
                        </div><span>mymail.@gmail.com</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Доп. информация</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item contacts__social"><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-telegram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-facebook"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-vk"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-youtube"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-instagram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-whatsapp"></i></div></a></div>
                    </div>
                    <div class="contacts__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26247.126109522873!2d82.9192802122261!3d55.03130698272148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10075363ea68c41f!2z0KLQoNCmICLQk9Cw0LvQtdGA0LXRjyDQndC-0LLQvtGB0LjQsdC40YDRgdC6Ig!5e0!3m2!1sru!2sru!4v1674396267300!5m2!1sru!2sru" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="contacts__block">
                    <div class="contacts__date">
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Адрес</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Телефон</h3>
                        </div><a class="contacts__phone" href="tel: +79999999999">+7 (999) 999 99 99</a>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Эл. Почта</h3>
                        </div><span>mymail.@gmail.com</span>
                      </div>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Доп. информация</h3>
                        </div><span>В отличии от lorem ipsum, текст рыба на русском языке</span>
                      </div>
                      <div class="contacts__item contacts__social"><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-telegram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-facebook"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-vk"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-youtube"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-instagram"></i></div></a><a href="#"> 
                          <div class="icon-wrapper-24"><i class="fa-brands fa-square-whatsapp"></i></div></a></div>
                    </div>
                    <div class="contacts__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26247.126109522873!2d82.9192802122261!3d55.03130698272148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10075363ea68c41f!2z0KLQoNCmICLQk9Cw0LvQtdGA0LXRjyDQndC-0LLQvtGB0LjQsdC40YDRgdC6Ig!5e0!3m2!1sru!2sru!4v1674396267300!5m2!1sru!2sru" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                  </div>
                </div>
              </div>
              <div class="contacts-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew contacts-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination contacts-pagination"></div>
                  <button class="slider-navigation-next contacts-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- contacts__block -- end -->
        </div>
      </div>
    </section>
    <!-- contacts ---- end -->
    <!-- faq ---- start -->
    <section class="faq">
      <div class="faq__container">
        <div class="faq__wrapper">
          <!-- header-block -- start -->
          <header class="header-block">
            <h2 class="header-block__title title">Вопрос - ответ</h2>
            <button class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><span>Подробнее</span>
            </button>
          </header>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <div class="tabs">
            <div class="tabs__wrapper">
              <div class="tabs__header" aria-expanded="false"> 
                <div class="tabs__header-item">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                </div>
                <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
              </div>
              <div class="tabs__list" aria-hidden="true">
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                </button>
              </div>
            </div>
          </div>
          <!-- tabs-block -- end-->
          <!-- faq__block -- start-->
          <div class="faq__body">
            <!-- tab-item-->
            <div class="swiper faq-swiper tabs__panel tabs__panel--active">
              <div class="swiper-wrapper faq__swiper">
                <div class="swiper-slide">
                  <div class="faq__accordion-block">
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item">
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="faq__accordion-block faq__accordion-block-992">
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item">
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="faq__accordion-block faq__accordion-block-768">
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item">
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="faq__accordion-block">
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="faq-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew faq-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination faq-pagination"></div>
                  <button class="slider-navigation-next faq-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper faq-swiper tabs__panel">
              <div class="swiper-wrapper faq__swiper">
                <div class="swiper-slide">
                  <div class="faq__accordion-block">
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="faq__accordion-block">
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="faq-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew faq-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination faq-pagination"></div>
                  <button class="slider-navigation-next faq-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <!-- tab-item-->
            <div class="swiper faq-swiper tabs__panel">
              <div class="swiper-wrapper faq__swiper">
                <div class="swiper-slide">
                  <div class="faq__accordion-block">
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="faq__accordion-block">
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <ul class="faq__accordion accordion">
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="accordion__item"> 
                        <button class="accordion__control" aria-expanded="false"> 
                          <div class="accordion__title"> 
                            <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                          </div>
                          <div class="accordion__arrow">
                            <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
                          </div>
                        </button>
                        <div class="accordion__content" aria-hidden="true">
                          <div class="accordion__content-header"> 
                            <h3 class="item-title">Преимущество</h3>
                            <div class="accordion__rating"><span class="item-title">5</span>
                              <div class="icon-wrapper-24"><i class="fa-solid fa-star"></i></div>
                            </div>
                          </div>
                          <div class="accordion__description"></div>В отличии от lorem ipsum, текст рыба на русском языке. Наполнит любой макет непонятным смыслом и придаст вид макету.Наполнит любой макет непонятным смыслом и придаст
                          <div class="accordion__footer">
                            <button class="accordion__btn"> 
                              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                            </button>
                            <div class="accordion__data">
                              <time>22.10.2022</time>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="faq-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew faq-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination faq-pagination"></div>
                  <button class="slider-navigation-next faq-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- faq__block -- end-->
        </div>
      </div>
    </section>
    <!-- faq ---- end-->
    <!-- footer ---- start -->
    <section class="footer"> 
      <div class="footer__container"> 
        <div class="footer__wrapper"> 
          <!-- header-block -- start -->
          <header class="header-block">
            <h2 class="header-block__title title">Футер</h2>
            <button class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><span>Подробнее</span>
            </button>
          </header>
          <!-- header-block -- end-->
          <!-- body-block -- start-->
          <div class="footer__body"> 
            <div class="footer__info">
              <div class="footer__info-top">
                <div class="footer__logo"><img src="<?php echo bloginfo('template_url');?>/assets/img/logo.svg" alt="logo"></div>
                <div class="footer__info-description">
                   В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макетВ отличии от lorem ipsum, текст рыба на русском языке </div>
              </div>
              <div class="footer__info-bot">
                <div class="footer__info-date info">
                  <div class="info__item">
                    <div class="icon-wrapper-16"> <i class="fa-solid fa-clock"></i></div><span>10:00 - 19:00</span>
                  </div>
                  <div class="info__item">
                    <div class="icon-wrapper-16"> <i class="fa-solid fa-location-dot"></i></div><span>Адрес</span>
                  </div>
                  <div class="info__item">
                    <div class="icon-wrapper-16"> <i class="fa-solid fa-phone"></i></div><span>+7 (999) 999-99-99</span>
                  </div>
                </div>
                <button class="footer__info-button">
                  <div class="icon-wrapper-14"> <i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                </button>
              </div>
            </div>
            <div class="footer__nav"> 
              <ul class="footer__nav-list">
                <h3 class="footer__nav-title item-title">Заголовок</h3>
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Пункт меню</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Смотреть еще</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
              </ul>
            </div>
            <div class="footer__form form">
              <div class="form__header">
                <h3 class="form__title item-title">Заголовок формы. Призыв к действию
                </h3>
                <div class="form__description">Мы вам перезвоним</div>
                <form class="form__block" action="">
                  <input class="form__input form__item" type="text" placeholder="Имя">
                  <input class="form__input form__item" type="tel" placeholder="+7 (...)...-...-...">
                  <textarea class="form__textarea form__item" placeholder="Комментарий"></textarea>
                  <button class="form__button button form__item" type="submit"><i class="fa-solid fa-square-arrow-up-right"></i>Отправить</button>
                  <label class="form__checkbox form__item">
                    <input type="checkbox">Согласие ссылка на обработку персональных данных
                  </label>
                </form>
              </div>
            </div>
            <div class="footer__map">
              <div class="map" id="footer-map"></div>
            </div>
          </div>
          <div class="footer__bottom"> 
            <div class="footer__copyright">© 2022</div>
            <div class="contacts__social"><a href="#"> 
                <div class="icon-wrapper-24"><i class="fa-brands fa-telegram"></i></div></a><a href="#"> 
                <div class="icon-wrapper-24"><i class="fa-brands fa-facebook"></i></div></a><a href="#"> 
                <div class="icon-wrapper-24"><i class="fa-brands fa-vk"></i></div></a><a href="#"> 
                <div class="icon-wrapper-24"><i class="fa-brands fa-square-youtube"></i></div></a><a href="#"> 
                <div class="icon-wrapper-24"><i class="fa-brands fa-square-instagram"></i></div></a><a href="#"> 
                <div class="icon-wrapper-24"><i class="fa-brands fa-square-whatsapp"></i></div></a></div>
          </div>
          <!-- body-block -- end-->
        </div>
      </div>
    </section>
    <!-- footer ---- end-->
<?php
        get_footer();