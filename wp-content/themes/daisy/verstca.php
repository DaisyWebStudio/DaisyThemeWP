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
    <!-- popup ---- start -->
    <div class="popup"> 
      <div class="popup__body"> 
        <div class="popup__content"> 
          <button class="popup__close"><i class="fa-solid fa-xmark"></i></button>
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
          <div class="burger-menu__body" data-simplebar>
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
                  <div class="animation icon-wrapper-16"> <i class="fa-solid fa-angle-right"></i></div>
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
            <div class="burger-menu__social social"> <a class="social__item icon-wrapper-24" href="#"><i class="fa-brands fa-telegram"></i></a><a class="social__item icon-wrapper-24" href="#"><i class="fa-brands fa-telegram"></i></a><a class="social__item icon-wrapper-24" href="#"><i class="fa-brands fa-telegram"></i></a><a class="social__item icon-wrapper-24" href="#"><i class="fa-brands fa-telegram"></i></a><a class="social__item icon-wrapper-24" href="#"><i class="fa-brands fa-telegram"></i></a><a class="social__item icon-wrapper-24" href="#"><i class="fa-brands fa-telegram"></i></a></div>
            <button class="burger-menu__button button"><i class="fa-solid fa-circle-info"></i>Подробнее</button>
            <div class="burger-menu__use"> 
              <div class="top-info__item"> 
                <div class="top-info__theme"> <i class="fa-solid fa-moon"></i><span>Тёмная</span></div>
              </div>
              <div class="top-info__item"> 
                <div class="drop-down">
                  <div class="drop-down__header"><span class="drop-down__current"><i class="fa-solid fa-dollar-sign"></i>Валюта</span></div>
                  <ul class="drop-down__menu drop-down__menu-right">
                    <li class="drop-down__item"><i class="fa-solid fa-dollar-sign"> </i>Доллар</li>
                    <li class="drop-down__item"><i class="fa-solid fa-ruble-sign"> </i>Рубль</li>
                    <li class="drop-down__item"><i class="fa-solid fa-yen-sign"> </i>Иена</li>
                  </ul>
                </div>
              </div>
              <div class="top-info__item"> 
                <div class="drop-down">
                  <div class="drop-down__header"> <i class="fa-solid fa-globe"></i><span class="drop-down__current">Язык</span></div>
                  <ul class="drop-down__menu drop-down__menu-right">
                    <li class="drop-down__item">English</li>
                    <li class="drop-down__item">Русский</li>
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
    <!-- burger-menu -- end-->
    <!-- header ---- start -->
    <header class="header">
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
                  <div class="top-info__theme">
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
                <li class="top-nav__link"><a href="#">Главная</a></li>
                <li class="top-nav__link"><a href="#">Портфолио</a></li>
                <li class="top-nav__link"><a href="#">О нас</a></li>
                <li class="top-nav__link"><a href="#">Сервис</a></li>
                <li class="top-nav__link"><a href="#">Контакты</a></li>
                <li class="top-nav__link"><a href="#">Вакансии</a></li>
              </ul>
              <button class="top-nav__booking">
                <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div><span>Нажми меня</span>
              </button>
              <div class="top-nav__use">
                <button class="top-nav__btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                <button class="top-nav__btn"><i class="fa-regular fa-user"></i></button>
                <button class="top-nav__btn burger"><i class="fa-solid fa-bars"></i></button>
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
                <!-- banner__video -- start-->
                <video class="banner__video" loop="loop" preload="auto" muted>
                  <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                </video>
                <!-- banner__video -- end-->
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
                <!-- banner__video -- start-->
                <video class="banner__video" loop="loop" preload="auto" muted>
                  <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                </video>
                <!-- banner__video -- end-->
                <!-- banner__block -- start-->
                <div class="banner__block">
                  <div class="banner__content">
                    <h1 class="banner__title">
                       Торговое предложение 2</h1>
                    <p class="banner__desc">
                       Несколько слов об организации, которые её охарактеризовывают любой макет непонятным смыслом </p>
                    <button class="banner__button button"><i class="fa-solid fa-fire"></i>Подробнее 2</button>
                  </div>
                  <div class="banner__icon"> <i class="fa-solid fa-circle-play banner__icon__img"></i>
                    <!-- banner__block -- end-->
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <!-- banner__video -- start-->
                <video class="banner__video" loop="loop" preload="auto" muted>
                  <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                </video>
                <!-- banner__video -- end-->
                <!-- banner__block -- start-->
                <div class="banner__block">
                  <div class="banner__content">
                    <h1 class="banner__title">
                       Торговое предложение 3</h1>
                    <p class="banner__desc">
                       Несколько слов об организации, которые её охарактеризовывают любой макет непонятным смыслом </p>
                    <button class="banner__button button"><i class="fa-solid fa-fire"></i>Подробнее 3</button>
                  </div>
                  <div class="banner__icon"> <i class="fa-solid fa-circle-play banner__icon__img"></i>
                    <!-- banner__block -- end-->
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- banner ---- end -->
    <!-- advantages ---- start -->
    <section class="advantages"> 
      <div class="advantages__container"> 
        <div class="advantages__wrapper"> 
          <!-- header-block -- start -->
          <header class="header-block">
            <h2 class="header-block__title">Преимущества</h2>
            <div class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><a href="#">Подробнее</a>
            </div>
          </header>
          <!-- header-block -- end -->
          <!-- tabs-block -- start -->
          <div class="tabs">
            <div class="tabs__list">
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
                      <div class="advantages__header"> 
                        <div class="advantages__title"> 
                          <h3 class="item-title">Преимущество1</h3>
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
                          <h3 class="item-title">Преимущество1</h3>
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
                          <h3 class="item-title">Преимущество1</h3>
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
              <div class="pagination advantages-pagination"></div>
              <div class="advantages-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew advantages-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
              <div class="pagination advantages-pagination"></div>
              <div class="advantages-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew advantages-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
              <div class="pagination advantages-pagination"></div>
              <div class="advantages-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew advantages-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
            <h2 class="header-block__title">Галерея</h2>
            <div class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><a href="#">Подробнее</a>
            </div>
          </header>
          <!-- header-block -- end -->
          <!-- tabs-block -- start -->
          <div class="tabs">
            <div class="tabs__list">
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
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fslightbox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fslightbox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fslightbox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
              </div>
              <div class="pagination gallery-pagination"></div>
              <div class="gallery-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew gallery-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fslightbox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fslightbox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fslightbox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
              </div>
              <div class="pagination gallery-pagination"></div>
              <div class="gallery-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew gallery-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fslightbox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fslightbox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fslightbox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
              </div>
              <div class="pagination gallery-pagination"></div>
              <div class="gallery-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew gallery-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fslightbox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fslightbox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-brands fa-pied-piper-pp"></i></div>
                    </div><a href="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" data-fslightbox="gallery"><img class="gallery__img" src="<?php echo bloginfo('template_url');?>/assets/img/gallery.png" alt="gallery"></a>
                  </div>
                </div>
              </div>
              <div class="pagination gallery-pagination"></div>
              <div class="gallery-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew gallery-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
            <h2 class="header-block__title">Счетчик</h2>
            <div class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><a href="#">Подробнее</a>
            </div>
          </header>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <div class="tabs">
            <div class="tabs__list">
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
                      <h3>До мероприятия осталось</h3>
                    </div>
                    <div class="timer-count timer-count-2">
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
              <div class="pagination counter-pagination"></div>
              <div class="counter-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew counter-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
              <div class="pagination counter-pagination"></div>
              <div class="counter-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew counter-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
              <div class="pagination counter-pagination"></div>
              <div class="counter-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew counter-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
              <div class="pagination counter-pagination"></div>
              <div class="counter-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew counter-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
            <h2 class="header-block__title">Отзывы</h2>
            <div class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><a href="#">Подробнее</a>
            </div>
          </header>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <div class="tabs">
            <div class="tabs__list">
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
              <div class="pagination reviews-pagination"></div>
              <div class="reviews-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew reviews-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
              <div class="pagination reviews-pagination"></div>
              <div class="reviews-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew reviews-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
              <div class="pagination reviews-pagination"></div>
              <div class="reviews-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew reviews-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
            <h2 class="header-block__title">Дополнительная информация</h2>
            <div class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><a href="#">Подробнее</a>
            </div>
          </header>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <div class="tabs">
            <div class="tabs__list">
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
          <!-- tabs-block -- end-->
          <!-- body-block -- start-->
          <div class="information__body">
            <!-- tab-item-->
            <div class="swiper information-swiper tabs__panel tabs__panel--active">
              <div class="swiper-wrapper information__swiper">
                <div class="swiper-slide">
                  <div class="information__block"> 
                    <div class="information__nav" data-simplebar>
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
                    <div class="information__content" data-simplebar data-info-target="one">
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
                      <h3 class="information__title item-title">Заголовок H3 </h3>
                      <div class="information__description">
                         В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст. В отличии от lorem ipsum, текст рыба на русском языке Наполнит любой макет непонятным смыслом и придаст</div>
                      <button class="information__button button"><i class="fa-solid fa-circle-dot"></i>Подробнее</button>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide"><span>slide 2</span></div>
                <div class="swiper-slide"><span>slide 3</span></div>
              </div>
              <div class="pagination information-pagination"></div>
              <div class="information-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew information-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
              <div class="pagination information-pagination"></div>
              <div class="information-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew information-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
              <div class="pagination information-pagination"></div>
              <div class="information-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew information-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
              <div class="pagination information-pagination"></div>
              <div class="information-navigation slider-navigation">
                <div class="slider-navigation__body">
                  <button class="slider-navigation-prew information-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
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
    <!-- feedback ---- start -->
    <section class="feedback">
      <div class="feedback__container">
        <div class="feedback__wrapper">
          <!-- header-block -- start -->
          <header class="header-block">
            <h2 class="header-block__title">Обратная связь</h2>
            <div class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><a href="#">Подробнее</a>
            </div>
          </header>
          <!-- header-block -- end -->
          <!-- feedback__block -- start -->
          <div class="feedback__block">
            <div class="feedback__form form">
              <h3 class="form__title">Заголовок формы</h3>
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
              <div><img src="<?php echo bloginfo('template_url');?>/assets/img/feedback-img.png" alt="feedback"></div>
            </div>
          </div>
          <!-- feedback__block -- end -->
        </div>
      </div>
    </section>
    <!-- feedback ---- end -->
<?php
        get_footer();