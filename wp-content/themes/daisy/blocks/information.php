<?
 /**
 * Template name: Дополнительная информация
 * Template Post Type: blocks
 */
?>
<? $data =  carbon_get_the_post_meta( 'information_tabs');?>
    <section class="information">
      <div class="information__container"> 
        <div class="information__wrapper">
          <!-- header-block -- start -->
          <? get_template_part('template-parts/blocks/header-block'); ?>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <? get_template_part('template-parts/blocks/tabs'); ?>
          <!-- tabs-block -- end-->
          <!-- body-block -- start-->
          <div class="information__body">
            <!-- tab-item-->
            <? if ( ! empty( $data ) ): ?>
              <?php foreach ( $data as $item ):?>
            <div class="swiper information-swiper tabs__panel">
              <div class="swiper-wrapper information__swiper">
                <? $slides = $item['information_tab_sliders']; ?>
                <?php foreach ( $slides as $slide ):?>
                <div class="swiper-slide">
                  <div class="information__block">
                    <div class="information__scroll-wrapper information__nav-wrapper">
                      <div class="information__nav">
                        <ul class="information__list">
                          <? $information = $slide['information_tab_inf']; ?>
                          <?php foreach ( $information as $inf ):?>
                          <li class="information__item">
                            <button class="information__tab" data-info-nav="<? echo $inf['information_name']; ?>">
                              <div class="icon-wrapper-14"><i class="fa-solid <? if($inf['information_icon']) {
                                  echo $inf['information_icon']['class'];
                                } else { ?>
                              fa-circle-dot <? } ?>
                              "></i></div><span><? echo $inf['information_name']; ?></span>
                            </button>
                            <div class="information__hover-item"></div>
                          </li>
                          <?php endforeach; ?>
                        </ul>
                      </div>
                    </div>
                    <div class="information__scroll-wrapper information__content-wrapper">
                      <!-- information-content -- start-->
                      <?php foreach ( $information as $inf ):?>
                      <div class="information__content" data-info-target="<? echo $inf['information_name']; ?>">
                      <? $gallery = $inf['information_media_gallery'];?>
                      <? if ( ! empty( $gallery ) ): ?>
                          <div class="swiper information-content-swiper">
                          <div class="swiper-wrapper">
                          <?php foreach ($gallery as $img): ?>
                            <div class="swiper-slide">
                              <div class="information__img"><img src="<?php echo wp_get_attachment_image_url($img, 'full'); ?>" alt="information"></div>
                            </div>
                          <?php endforeach; ?>
                          </div>
                          <div class="pagination information-content-pagination"></div>
                          </div>
                       <?php endif; ?>
                        <h3 class="information__title item-title"><? echo $inf['information_title']; ?></h3>
                        <div class="information__description">
                        <? echo $inf['information_descr']; ?></div>
                        <? if($inf['information_btn_label'] ) { ?>
                        <button class="information__button button">
                          <i class="fa-solid <? if($inf['information_btn_icon']) { echo $inf['information_btn_icon']['class']; } ?>"></i>
                            <? echo $inf['information_btn_label']; ?></button>
                        <? } ?>
                      </div>
                      <?php endforeach; ?>
                      <!-- information-content -- end-->
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
              <div class="information-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew information-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination information-pagination"></div>
                  <button class="slider-navigation-next information-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
             <?php endif; ?>
          </div>
          <!-- body-block -- end-->
        </div>
      </div>
    </section>