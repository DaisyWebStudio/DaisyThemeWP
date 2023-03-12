<?
 /**
 * Template name: О нас / Обратная связь
 * Template Post Type: blocks
 */
?>
<? $data =  carbon_get_the_post_meta( 'feedback_tabs'); ?>
<section class="about-us">
      <div class="about-us__container">
        <div class="about-us__wrapper">
          <!-- header-block -- start -->
          <? get_template_part('template-parts/blocks/header-block'); ?>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <? get_template_part('template-parts/blocks/tabs');?>
          <!-- tabs-block -- end-->
          <!-- feedback__block -- start-->
          <div class="about-us__body">
            <!-- tab-item-->
            <? if ( ! empty( $data ) ): ?>
              <?php foreach ( $data as $item ):?>
            <div class="swiper about-us-Swiper tabs__panel">
              <div class="swiper-wrapper feedback__swiper">
              <? $slides =  $item['feedback_tab_sliders'];?>
                <?php foreach ( $slides as $slide ): ?>
                <div class="swiper-slide">
                <? 
                $content_proportions =  $slide['feedback_proportions']; 
                $contents = $slide['feedback_content']; 
                ?>
                  <div class="about-us__block
                  <? 
                  if(count($contents) == 1) {
                    echo 'about-us__block_full';
                  }
                  if(count($contents) > 1 && $content_proportions == '70%'){
                    echo 'about-us__block_70';
                  }
                  if(count($contents) > 1 && $content_proportions == '50%'){
                    echo 'about-us__block_50';
                  }
                  if(count($contents) > 1 && $content_proportions == '30%'){
                    echo 'about-us__block_30';
                  }
                  ?>
                  ">
                  <?php foreach ( $contents as $content ): ?>
                  <? if($content['_type'] == 'feedback_content_main'): ?>
                    <div class="about-us__block__content"> 
                      <div class="about-us__block__content__group">
                        <h3 class="about-us__title"><? echo $content['feedback_title']; ?></h3>
                        <!-- <ul class="about-us__list"> 
                          <li class="about-us__item">
                             Несколько слов об организации, которые её охарактеризовывают </li>
                          <li class="about-us__item">
                             Наполнит любой макет непонятным смыслом и придаст</li>
                        </ul> -->
                        <div class="about-us__list">
                        <? echo $content['feedback_descr']; ?>
                        </div>
                      </div>
                      <div class="about-us__social">
                       <?  $social =  $content['feedback_social_tooltip'];
                       if ( ! empty( $social ) ){ ?>
                        <div class="about-us__social__group tooltype">
                        <?php foreach ( $social as $soc ): ?>
                         
                          <? if($soc['_type'] == 'feedback_social') {?>
                            <a href="<? echo $soc['feedback_social_link']; ?>" class="tooltype__item"><i class="about-us__social__icon fa-solid <? echo $soc['feedback_social_icon']['class']; ?>"></i></a>
                            <? } ?>
                            <? if($soc['_type'] == 'feedback_tooltip') { ?>
                              <div class="tooltype__item"> 
                              <div class="icon-wrapper-16"><i class="about-us__social__icon fa-solid <? echo $soc['feedback_tooltip_icon']['class']; ?>"></i></div>
                              <div class="tooltype__content tooltype__left"><? echo $soc['feedback_tooltip_text']; ?></div>
                              </div>
                            <? } ?>
                        <?php endforeach; ?>
                            <!-- <i class="fa-brands fa-telegram about-us__social__icon"></i><i class="fa-brands fa-vk about-us__social__icon"></i><i class="fa-brands fa-square-facebook about-us__social__icon"></i><i class="fa-brands fa-square-youtube about-us__social__icon"></i><i class="fa-brands fa-square-instagram about-us__social__icon"></i><i class="fa-brands fa-square-whatsapp about-us__social__icon"></i> -->
                    </div>
                    <? } ?>
                    
                    <? if($content['feedback_btn_label']){ ?>
                        <button class="about-us__button button">
                            <a href="<? echo $content['feedback_btn_link'] ?>"> <i class="fa-solid <? echo $content['feedback_btn_icon']['class'] ?>"></i></a>
                            <? echo $content['feedback_btn_label'] ?></button>
                        <? } ?>
                      </div>
                    </div>
                  <?php endif; ?>
                  <? if($content['_type'] == 'feedback_content_slider'): ?>
                                        <!-- начало -->
                                        <? $medias = $content['feedback_content_slider_select']; ?>
                      <? if ( ! empty( $medias ) ): ?>  
                        <div class="about-us__block__other about-us__block__other_radius">
                      <div class="swiper about-us-other-Swiper">
                        <div class="swiper-wrapper">
                        <?php foreach ($medias as $media ):?>
                          <div class="swiper-slide">
                            <?
                            if($media['_type'] == 'feedback_content_slider_image_type'){
                                $image = $media['feedback_content_slider_image'];
                                $image_url = wp_get_attachment_image_url( $image, 'full' );  ?>
                          
                                <img src="<? echo $image_url; ?>" alt="" class="about_content_slide_image">
                          
                          <?  } ?>
                         <? if($media['_type'] == 'feedback_content_slider_video_type'){
                                // $video = $media['about_two_content_video'];
                                // $video_url = wp_get_attachment_url( $video, 'full' );  
                                // $video = $media['about_two_content_video_link'];
                                ?>
                            <video class="about-us__video" loop="loop" preload="auto" muted controls>
                              <source src="https://storage.yandexcloud.net/storagewood/%D0%92%D0%B8%D0%B4%D0%B5%D0%BE%20%D0%B4%D0%BB%D1%8F%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0/video-fon.mp4" type="video/mp4">
                            </video><i class="fa-solid fa-circle-play about-us__icon__img"></i>
                          <?  } ?>     
                          </div>
                        <?php endforeach; ?>
                        </div>
                         <div class="swiper-pagination slider-navigation__body__vertical about_slider_nav"></div>
                      </div>
                    </div>
                    <?php endif; ?>
                    <!-- конец -->
                  <?php endif; ?>
                  <? if($content['_type'] == 'feedback_content_form'): ?>
                    <div class="feedback__form form">
                      <div class="form__header">
                        <h4 class="form__title"><? echo $content['feedback_form_title']; ?></h4>
                        <span class="form__description"><? echo $content['feedback_form_descr']; ?></span>
                      </div>
                      <div class="form__block">
                      <?php $fb_form = $content['feedback_form'];
                      echo do_shortcode( '' . $fb_form . ''); ?>
                      </div>
                      <!-- <form class="form__block" action="">
                        <input class="form__input form__item" type="text" placeholder="Имя">
                        <input class="form__input form__item" type="tel" placeholder="+7 (...)...-...-...">
                        <textarea class="form__textarea form__item" placeholder="Комментарий"></textarea>
                        <button class="form__button button form__item" type="submit"><i class="fa-solid fa-square-arrow-up-right"></i>Отправить</button>
                        <label class="form__checkbox form__item">
                          <input type="checkbox">Согласие ссылка на обработку персональных данных
                        </label>
                      </form> -->
                    </div>
                    <?php endif; ?>
                  <?php endforeach; ?>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
              <div class="feedback-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew feedback-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination feedback-pagination"></div>
                  <button class="slider-navigation-next feedback-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
             <?php endif; ?>
          </div>
          <!-- feedback__block -- end -->
        </div>
      </div>
    </section>
    <!-- <div class="feedback__block">
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
                  </div> -->