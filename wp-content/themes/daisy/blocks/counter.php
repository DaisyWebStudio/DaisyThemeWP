<?
 /**
 * Template name: Счетчик
 * Template Post Type: blocks
 */
?>
<? 
// $date = carbon_get_the_post_meta( 'counter_date_time');
// print_r($date);
?>
<? $data =  carbon_get_the_post_meta( 'counter_tabs');?>
  <section class="counter"> 
      <div class="counter__container"> 
        <div class="counter__wrapper">
          <!-- header-block -- start -->
          <? get_template_part('template-parts/blocks/header-block'); ?>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <? get_template_part('template-parts/blocks/tabs'); ?>
          <!-- tabs-block -- end-->
          <!-- body-block -- start-->
          <div class="counter__body">
            <!-- tab-item-->
            <? if ( ! empty( $data ) ): ?>
              <?php foreach ( $data as $item ):?>
            <div class="swiper counter-swiper tabs__panel">
              <div class="swiper-wrapper counter__swiper">
                <? $slides =  $item['counter_tab_sliders'];?>
                <?php foreach ( $slides as $slide ): ?>
                <div class="swiper-slide">
                  <div class="counter__card"> 
                    <div class="counter__name">
                      <div class="icon-wrapper-24"><i class="fa-solid <? echo $slide['counter_icon']['class']; ?>"></i></div>
                      <h3 class="item-title"><? echo $slide['counter_title']; ?></h3>
                    </div>
                    <div data-date="<? echo $slide['counter_date_time']; ?>" class="counter__timer timer-count timer-count-2">
                      <div class="timer-count__item"><span class="timer-count__value" id="count-days-2"></span><span class="timer-count__caption">дней</span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                      <div class="timer-count__item"><span class="timer-count__value" id="count-hours-2"></span><span class="timer-count__caption">часов</span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                      <div class="timer-count__item"><span class="timer-count__value" id="count-minutes-2"></span><span class="timer-count__caption">минут</span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                      <div class="timer-count__item"><span class="timer-count__value" id="count-second-2"></span><span class="timer-count__caption">секунд</span></div>
                      </div>
                    <? if($slide['counter_btn_label'] || $slide['counter_btn_icon']){ ?>
                      <a href="<? echo $slide['counter_btn_link']; ?>" class="counter__btn button">
                      <div class="icon-wrapper-14"><i class="fa-solid <? echo $slide['counter_btn_icon']['class']; ?>"></i></div><? echo $slide['counter_btn_label']; ?>
                    </a>
                 <? } ?>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
              <div class="counter-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew counter-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination counter-pagination"></div>
                  <button class="slider-navigation-next counter-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
             <?php endif; ?>
            <!-- tab-item-->
          </div>
          <!-- body-block -- end-->
        </div>
      </div>
    </section>