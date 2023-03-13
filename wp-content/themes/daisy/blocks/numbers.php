<?
 /**
 * Template name: Буллеты с цифрами
 * Template Post Type: blocks
 */
?>
<? $data =  carbon_get_the_post_meta( 'numbers_tabs');
   $count = carbon_get_the_post_meta( 'numbers_slide_count');
?>
 <!-- numbers ---- start -->
 <section class="numbers">
      <div class="numbers__container">
        <div class="numbers__wrapper">
          <!-- header-block -- start -->
          <? get_template_part('template-parts/blocks/header-block'); ?>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <? get_template_part('template-parts/blocks/tabs'); ?>
          <!-- tabs-block -- end-->
          <!-- numbers__block -- start-->
          <div class="feedback__body">
            <!-- tab-item-->
            <? if ( ! empty( $data ) ): ?>
              <?php foreach ( $data as $item ):?>
            <div id="sl<? the_id(); ?>" data-show="<? echo $count; ?>" class="swiper much-swiper numbers-swiper tabs__panel">
              <div class="swiper-wrapper numbers__swiper">
              <? $slides =  $item['numbers_cards'];?>
                <?php foreach ( $slides as $slide ): ?>
                <div class="swiper-slide">
                  <div class="numbers__card"> 
                    <div class="numbers__header"> <span class="numbers__num title"><? echo $slide['numbers_card_num']; ?></span>
                      <div class="icon-wrapper-40"><i class="fa-solid <? echo $slide['numbers_card_icon']['class']; ?>"></i></div>
                    </div>
                    <div class="numbers__description"> </div><? echo $slide['numbers_card_text']; ?>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
              <div class="numbers-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew numbers-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination numbers-pagination"></div>
                  <button class="slider-navigation-next numbers-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
             <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- numbers ---- end-->