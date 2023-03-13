<footer class="footer"> 
      <div class="footer__container"> 
        <div class="footer__wrapper"> 
          <!-- header-block -- start -->
          <header class="header-block">
            <h2 class="header-block__title title">Футер</h2>
            <button class="header-block__link">
              <div class="icon-wrapper-14"><i class="fa-solid fa-circle-info"></i></div><span>Подробнее</span>
            </button>
          </header>
          <!-- header-block -- end-->
          <!-- body-block -- start-->
          <? $data = carbon_get_theme_option( 'footer_content'); ?>
          <? if ( ! empty( $data ) ): ?>
          <div class="footer__body"> 
          <?php foreach ( $data as $item ):?>
            <? if($item['_type'] == 'footer_content_main'): ?>
            <div class="footer__info">
              <div class="footer__info-top">
                <div class="footer__logo">
                <?
                $image = $item['footer_logo'];
                $image_url = wp_get_attachment_image_url( $image, 'full' );  ?>
                <? if($image_url){ ?>
                    <img src="<?echo $image_url;?>" alt="logo"> <?  } ?>
                </a>
                </div>
                <div class="footer__info-description"><? echo $item['footer_descr']; ?></div>
              </div>
              <div class="footer__info-bot">
                <div class="footer__info-date info">
                <? if($item['footer_times']): ?>
                  <div class="info__item">
                    <div class="icon-wrapper-16"> <i class="fa-solid fa-clock"></i></div><span><? echo $item['footer_times']; ?></span>
                  </div>
                  <?php endif; ?>
                  <? if($item['footer_address']): ?>
                  <div class="info__item">
                    <div class="icon-wrapper-16"> <i class="fa-solid fa-location-dot"></i></div><span><? echo $item['footer_address']; ?></span>
                  </div>
                  <?php endif; ?>
                  <? if($item['footer_phone']): ?>
                  <div class="info__item">
                    <div class="icon-wrapper-16"> <i class="fa-solid fa-phone"></i></div><a href="tel:<? echo $item['footer_phone']; ?>"><? echo $item['footer_phone']; ?></a>
                  </div>
                  <?php endif; ?>
                </div>
                <? if($item['footer_btn_label']): ?>
                <a href="<? echo $item['footer_btn_link']; ?>" class="footer__info-button">
                  <div class="icon-wrapper-14"> <i class="fa-solid <? echo $item['footer_btn_icon']['class']; ?>"></i></div><span><? echo $item['footer_btn_label']; ?></span>
                </a>
                <?php endif; ?>
              </div>
            </div>
            <?php endif; ?>
            <? if($item['_type'] == 'footer_content_nav'): ?>
            <div class="footer__nav"> 
            <h3 class="footer__nav-title item-title"><? echo $item['footer_nav_title']; ?></h3>
              <ul class="footer__nav-list">
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Пункт меню</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Смотреть еще</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="#">
                    <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span></a>
                  <div class="footer__nav-item--hover"></div>
                </li>
              </ul>
            </div>
            <?php endif; ?>
            <? if($item['_type'] == 'footer_content_form'): ?>
            <div class="footer__form form">
              <div class="form__header">
                <h3 class="form__title item-title"><? echo $item['footer_form_title']; ?></h3>
                <div class="form__description"><? echo $item['footer_form_descr']; ?></div>
                <div class="form__block">
                  <?php $fb_form = $item['footer_form'];
                      echo do_shortcode( '' . $fb_form . ''); ?>
                </div>
              </div>
            </div>
            <?php endif; ?>
            <? if($item['_type'] == 'footer_content_map'): ?>
            <div class="footer__map">
              <? echo $item['footer_map']; ?>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
          <div class="footer__bottom"> 
            <div class="footer__copyright"><? echo carbon_get_theme_option( 'footer_copyright'); ?></div>
            <div class="contacts__social">
              <? $social = carbon_get_theme_option( 'footer_social'); ?>
              <?php foreach ( $social as $soc ):?>
                <a href="<? echo $soc['footer_social_link'] ?>"><div class="icon-wrapper-24"><i class="fa-solid <? echo $soc['footer_social_icon']['class'] ?>"></i></div></a>
              <?php endforeach; ?>
          </div>
          <!-- body-block -- end-->
        </div>
      </div>
    </footer>
<?php wp_footer(); ?>
 <!-- fancybox--><script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js?_v=20230216185501"></script>
		</body>
</html>