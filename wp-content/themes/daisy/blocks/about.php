<?
 /**
 * Template name: О нас
 * Template Post Type: blocks
 */
?>
<? $data =  carbon_get_the_post_meta( 'about_tabs'); ?>
<? $bg =  carbon_get_the_post_meta( 'about_bg'); ?>

 <section class="about-us" id="aboutus">
  <? if($bg){ 
    $bg_url = wp_get_attachment_image_url( $bg, 'full' );
    ?>
    <img class="about-us__img" src="<? echo $bg_url; ?>" alt="" style="display: block;">
 <? } ?>
      <div class="about-us__container">
        <div class="about-us__wrapper">
          <!-- header-block -- start -->
          <? get_template_part('template-parts/blocks/header-block'); ?>
          <!-- header-block -- end -->
          <!-- tabs-block -- start -->
          <? get_template_part('template-parts/blocks/tabs'); ?>
          <!-- tabs-block -- end-->
          <div class="about-us_body">
          <? if ( ! empty( $data ) ): ?>
              <?php foreach ( $data as $item ):?>
            <!-- tab-item -- start-->
            <div class="swiper about-us-Swiper tabs__panel">
              <div class="swiper-wrapper">
              <? $slides =  $item['about_tab_sliders'];?>
                <?php foreach ( $slides as $slide ): ?>
                <div class="swiper-slide">
                <? 
                $two_content =  $slide['about_two_content_select']; 
                $content_proportions =  $slide['about_proportions']; 
                ?>
                  <div class="about-us__block
                  <? 
                  if($two_content == 'none' || $content_proportions == '100%'){
                    echo 'about-us__block_full';
                  }
                  if($content_proportions == '70%'){
                    echo 'about-us__block_70';
                  }
                  if($content_proportions == '50%'){
                    echo 'about-us__block_50';
                  }
                  if($content_proportions == '30%'){
                    echo 'about-us__block_30';
                  }
                  ?>
                  ">
                    <div class="about-us__block__content"> 
                      <div class="about-us__block__content__group">
                        <h3 class="about-us__title"><? echo $slide['about_title']; ?></h3>
                        <ul class="about-us__list"> 
                          <li class="about-us__item">
                             Несколько слов об организации, которые её охарактеризовывают </li>
                          <li class="about-us__item">
                             Наполнит любой макет непонятным смыслом и придаст</li>
                        </ul>
                      </div>
                      <div class="about-us__social">
                       <?  $social =  $slide['about_social_tooltip'];
                       if ( ! empty( $social ) ){ ?>
                        <div class="about-us__social__group tooltype">
                        <?php foreach ( $social as $soc ): ?>
                         
                          <? if($soc['_type'] == 'about_social') {?>
                            <a href="<? echo $soc['about_social_link']; ?>" class="tooltype__item"><i class="about-us__social__icon fa-solid <? echo $soc['about_social_icon']['class']; ?>"></i></a>
                            <? } ?>
                            <? if($soc['_type'] == 'about_tooltip') { ?>
                              <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="about-us__social__icon fa-solid <? echo $soc['about_tooltip_icon']['class']; ?>"></i></div>
                              <div class="tooltype__content tooltype__left"><? echo $soc['about_tooltip_text']; ?></div>
                              </div>
                            <? } ?>
                        <?php endforeach; ?>
                            <!-- <i class="fa-brands fa-telegram about-us__social__icon"></i><i class="fa-brands fa-vk about-us__social__icon"></i><i class="fa-brands fa-square-facebook about-us__social__icon"></i><i class="fa-brands fa-square-youtube about-us__social__icon"></i><i class="fa-brands fa-square-instagram about-us__social__icon"></i><i class="fa-brands fa-square-whatsapp about-us__social__icon"></i> -->
                    </div>
                    <? } ?>
                    
                    <? if($slide['about_btn_label']){ ?>
                        <button class="about-us__button button">
                            <a href="<? echo $slide['about_btn_link'] ?>"> <i class="fa-solid <? echo $slide['about_btn_icon']['class'] ?>"></i></a>
                            <? echo $slide['about_btn_label'] ?></button>
                        <? } ?>
                      </div>
                    </div>
                    <!-- начало -->
                    <? $medias = $slide['about_two_content_slider']; ?>
                      <? if ( ! empty( $medias ) ): ?>  
                        <div class="about-us__block__other about-us__block__other_radius">
                      <div class="swiper about-us-other-Swiper">
                        <div class="swiper-wrapper">
                        <?php foreach ($medias as $media ):?>
                            <?
                            if($media['_type'] == 'about_two_content_slide_image_type'){
                                $image = $media['about_two_content_slide_image'];
                                $image_url = wp_get_attachment_image_url( $image, 'full' );  ?>
                                <div class="swiper-slide">
                                <img src="<? echo $image_url; ?>" alt="" class="about_content_slide_image">
                            </div>
                          <?  } ?>
                         <? if($media['_type'] == 'about_two_content_slide_video_type'){
                                // $video = $media['about_two_content_video'];
                                // $video_url = wp_get_attachment_url( $video, 'full' );  
                                // $video = $media['about_two_content_video_link'];
                                ?>
                           
                           <div class="swiper-slide">
                            <video class="about-us__video" loop="loop" preload="auto" muted controls>
                              <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                            </video><i class="fa-solid fa-circle-play about-us__icon__img"></i>
                          </div>
                          <?  } ?>     
                            
                        <?php endforeach; ?>
                        </div>
                        <div class="swiper-pagination slider-navigation__body__vertical"></div>
                      </div>
                    </div>
                    <?php endif; ?>
                    <!-- конец -->
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
              <div class="about-us-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew about-us-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination swiper-pagination"></div>
                  <button class="slider-navigation-next about-us-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
             <?php endif; ?>
            <!-- tab-item -- end-->
          </div>
        </div>
      </div>
    </section>