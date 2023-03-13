<?
 /**
 * Template name: Галерея
 * Template Post Type: blocks
 */
?>
<? $data =  carbon_get_the_post_meta( 'gallery_tabs');?>
<? $icon = carbon_get_the_post_meta( 'gallery_icon'); 
   $count = carbon_get_the_post_meta( 'gallery_slide_count');
?>

    <section class="gallery">
      <div class="gallery__container"> 
        <div class="gallery__wrapper"> 
          <!-- header-block -- start -->
          <? get_template_part('template-parts/blocks/header-block'); ?>
          <!-- header-block -- end -->
          <!-- tabs-block -- start -->
          <? get_template_part('template-parts/blocks/tabs'); ?>
          <!-- tabs-block -- end-->
          <!-- gallery -- start-->
          <div class="gallery__body">
            <!-- tab-item-->
            <? if ( ! empty( $data ) ): ?>
              <?php foreach ( $data as $item ):?>
            <div id="sl<? the_id(); ?>" data-show="<? echo $count; ?>" class="swiper much-swiper gallery-swiper tabs__panel">
              <div class="swiper-wrapper gallery__swiper">
                <? $slides = $item['crb_media_gallery']; ?>
               <? if ( ! empty( $slides ) ): ?>
                <?php foreach ($slides as $slide): ?>
                <div class="swiper-slide">
                  <div class="gallery__item">
                    <div class="gallery-hover">
                      <div class="icon-wrapper-40"><i class="fa-solid <? if($icon){
                        echo $icon['class'];
                         } else { ?>
                            fa-image
                        <? } ?> "></i></div>
                    </div><a href="<?php echo wp_get_attachment_image_url($slide, 'full'); ?>" data-fancybox="gallery"><img class="gallery__img" src="<?php echo wp_get_attachment_image_url($slide, 'full'); ?>" alt="gallery"></a>
                  </div>
                </div>
                <?php endforeach; ?>
             <?php endif; ?>
              </div>
              <div class="gallery-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew gallery-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination gallery-pagination"></div>
                  <button class="slider-navigation-next gallery-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <script>
              // import { Fancybox } from "https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.esm.js";
            </script>
            <?php endforeach; ?>
             <?php endif; ?>
          </div>
          <!-- gallery -- end-->
        </div>
      </div>
    </section>