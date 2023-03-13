<?
 /**
 * Template name: Главный экран / баннер
 * Template Post Type: blocks
 */
?>
 <? $data = carbon_get_the_post_meta( 'banner_slides'); ?>
 <? $display = carbon_get_the_post_meta('banner_display'); ?>
 <section class="banner">
      <div class="banner__container <? if($display == 'full'): ?> banner__container_full <?php endif; ?>"> 
        <div class="banner__wrapper">
          <!-- body-block -- start-->
          <div class="banner__body">
            <!-- tab-item-->
            <div class="swiper reviews-swiper tabs__panel">
            <div class="swiper bannerSwiper">
            <div class="swiper-wrapper">
            <? if ( ! empty( $data ) ): ?>
              <?php foreach ( $data as $item ):?>
                
              <div class="swiper-slide">
                <? $display_text = $item['banner_display_text'];?>
                <div class="banner__mask"
                style="background-color: <? echo $item['banner_mask_color'];?>; opacity: <? echo $item['banner_mask_opacity'] ;?>;"
                ></div>
                <?
              $image = $item['banner_image'];
              $image_url = wp_get_attachment_image_url( $image, 'full' );  ?>
                <!-- <video class="banner__video" loop="loop" preload="auto" muted autoplay>
                  <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                </video> -->
                <? if($image):?>
                <img class="banner__img" src="<? echo  $image_url ?>" alt="">  
                <?php endif; ?>
                <!-- banner__block -- start-->
                <div class="banner__block <? if($display == 'full'): ?> banner__container <?php endif; ?>  
                 <? if($display_text == 'left_100'): ?> banner__block_left_100 <?php endif; ?>
                  <? if($display_text == 'center_50'): ?> banner__block_center_50 <?php endif; ?>
                    <? if($display_text == 'center_100'): ?> banner__block_center_100 <?php endif; ?>
                  ">
                  <div class="banner__content">
                    <h1 class="banner__title"><? echo $item['banner_title']; ?></h1>
                    <p class="banner__desc">
                    <? echo $item['banner_descr']; ?> </p>
                    <? if($item['banner_btn_label']) { ?>
                    <a href="<? echo $item['banner_btn_link']; ?>" class="banner__button button"><i class="fa-solid <? echo $item['banner_btn_icon']['class']; ?>"></i><? echo $item['banner_btn_label']; ?></a>
                    <? } ?>
                  </div>
                  <!-- <div class="banner__icon"> <i class="fa-solid fa-circle-play banner__icon__img"></i></div> -->
                </div>
                <!-- banner__block -- end-->
              </div>
              <?php endforeach; ?>
             <?php endif; ?>
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
          <!-- body-block -- end-->
        </div>
      </div>
    </section>