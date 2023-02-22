<?
 /**
 * Template name: Обратная связь
 * Template Post Type: blocks
 */
?>
<section class="feedback">
      <div class="feedback__container">
        <div class="feedback__wrapper">
          <!-- header-block -- start -->
          <? get_template_part('template-parts/blocks/header-block'); ?>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <? get_template_part('template-parts/blocks/tabs');?>
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