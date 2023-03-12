<?
 /**
 * Template name: Отзывы
 * Template Post Type: blocks
 */
?>
<? $count = carbon_get_the_post_meta( 'reviews_slide_count'); ?>
<? $data =  carbon_get_the_post_meta( 'reviews_tabs'); ?>
<? print_r($count); ?>
    <section class="reviews">
      <div class="reviews__container"> 
        <div class="reviews__wrapper">
          <!-- header-block -- start -->
          <? get_template_part('template-parts/blocks/header-block'); ?>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <? get_template_part('template-parts/blocks/tabs'); ?>
          <!-- tabs-block -- end-->
          <!-- body-block -- start-->
          <div class="reviews__body">
            <!-- tab-item-->
            <? if ( ! empty( $data ) ): ?>
              <?php foreach ( $data as $item ): ?>
            <div id="sl<? the_id();?>" data-show="<?echo $count;?>" class="swiper much-swiper reviews-swiper tabs__panel">
              <div class="swiper-wrapper reviews__swiper">
              <? $slides =  $item['reviews_card'];?>
                <?php foreach ( $slides as $slide ): ?>
                <div class="swiper-slide">
                  <div class="reviews__card"> 
                    <div class="reviews__header"> 
                      <div class="reviews__header-left">
                        <h3 class="reviews__title item-title"><? echo $slide['reviews_card_name']; ?></h3>
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
                      <div class="reviews__header-right" style="width: 70px; height: 70px;"> 
                      <?
                      $image = $slide['reviews_card_photo'];
                      $image_url = wp_get_attachment_image_url( $image, 'full' );  ?>
                        <img src="<? echo $image_url; ?>" alt="user">
                      </div>
                    </div>
                    <div class="reviews__description">
                    <? echo $slide['reviews_card_text']; ?></div>
                    <div class="reviews__footer"> 
                      <button class="reviews__button">Читать далее</button>
                      <? $date = $slide['reviews_card_date'];
                      $format_date = date('d.m.Y', strtotime($date)); ?>
                      <div class="reviews__date"><? echo $format_date; ?></div>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
              <div class="reviews-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew reviews-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination reviews-pagination"></div>
                  <button class="slider-navigation-next reviews-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
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