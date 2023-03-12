<?
 /**
 * Template name: Контакты
 * Template Post Type: blocks
 */
?>
<? $data =  carbon_get_the_post_meta( 'contacts_tabs');?>
    <section class="contacts">
      <div class="contacts__container">
        <div class="contacts__wrapper">
          <!-- header-block -- start -->
          <? get_template_part('template-parts/blocks/header-block'); ?>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <? get_template_part('template-parts/blocks/tabs'); ?>
          <!-- tabs-block -- end-->
          <!-- contacts__block -- start-->
          <div class="contacts__body">
            <!-- tab-item-->
            <? if ( ! empty( $data ) ): ?>
              <?php foreach ( $data as $item ):?>
            <div class="swiper contacts-swiper tabs__panel">
              <div class="swiper-wrapper contacts__swiper">
              <? $slides = $item['contacts_tab_sliders']; ?>
                <?php foreach ( $slides as $slide ):?>
                 <? $content_proportions =  $slide['contacts_proportions']; ?>
                <div class="swiper-slide">
                  <div class="contacts__block 
                  <? 
                  if($content_proportions == '70%'){
                    echo 'contacts__block_70';
                  }
                  if($content_proportions == '50%'){
                    echo 'contacts__block_50';
                  }
                  if($content_proportions == '30%'){
                    echo 'contacts__block_30';
                  }
                  ?>" data-contact="name-contact">
                    <div class="contacts__date">
                        <? if($slide['contacts_address']){ ?>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-location-dot"></i></div>
                          <h3 class="contacts__item-title item-title">Адрес</h3>
                        </div><span><? echo $slide['contacts_address']; ?></span>
                      </div>
                      <? } ?>
                      <? if($slide['contacts_tel']){ ?>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-phone"></i></div>
                          <h3 class="contacts__item-title item-title">Телефон</h3>
                        </div><a class="contacts__phone" href="tel: <? echo $slide['contacts_tel']; ?>"><? echo $slide['contacts_tel']; ?></a>
                      </div>
                      <? } ?>
                      <? if($slide['contacts_mail']){ ?>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-envelope"></i></div>
                          <h3 class="contacts__item-title item-title">Эл. Почта</h3>
                        </div><a class="contacts__phone" href="mailto: <? echo $slide['contacts_mail']; ?>"><? echo $slide['contacts_mail']; ?></a>
                      </div>
                      <? } ?>
                      <? if($slide['contacts_inf']){ ?>
                      <div class="contacts__item">
                        <div class="contacts__header">
                          <div class="icon-wrapper-14"><i class="fa-solid fa-info-circle"></i></div>
                          <h3 class="contacts__item-title item-title">Доп. информация</h3>
                        </div><span><? echo $slide['contacts_inf']; ?></span>
                      </div>
                      <? } ?>
                      <? $social = $slide['contacts_social']; ?>
                      <? if ( ! empty( $social ) ): ?>
                      <div class="contacts__item contacts__social">
                      <?php foreach ( $social as $soc ):?>
                        <a href="<? echo $soc['contacts_social_link'] ?>"> <div class="icon-wrapper-24"><i class="fa-solid <? echo $soc['contacts_social_icon']['class'] ?>"></i></div></a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    </div>
                    <div class="contacts__map">
                      <!-- <button class="contacts__map-button">
                        <div class="icon-wrapper-16"><i class="fa-solid fa-arrow-left"></i></div>
                      </button> -->
                      <div class="map" id="map"><? echo $slide['contacts_map']; ?></div>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
              <div class="contacts-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew contacts-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination contacts-pagination"></div>
                  <button class="slider-navigation-next contacts-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
          </div>
          <!-- contacts__block -- end -->
        </div>
      </div>
    </section>