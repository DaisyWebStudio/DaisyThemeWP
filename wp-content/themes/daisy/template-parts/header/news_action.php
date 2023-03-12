<div class="header__item">
            <div class="top-news">
              <div class="top-news__info">
                <div class="icon-wrapper-14"><i class="fa-solid <? echo carbon_get_theme_option( 'header_news_icon')['class']; ?>"></i></div><span><? echo carbon_get_theme_option( 'header_news_text'); ?></span>
              </div>
              <? if(carbon_get_theme_option( 'header_news_date')): ?>
              <div data-date="<? echo carbon_get_theme_option( 'header_news_date'); ?>" class="counter__timer timer-count">
                      <div class="timer-count__item"><span class="timer-count__value" id="count-days"></span><span class="timer-count__caption">дней</span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                      <div class="timer-count__item"><span class="timer-count__value" id="count-hours"></span><span class="timer-count__caption">часов</span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                      <div class="timer-count__item"><span class="timer-count__value" id="count-minutes"></span><span class="timer-count__caption">минут</span></div><img src="<?php echo bloginfo('template_url');?>/assets/img/sep.svg" alt="pus">
                      <div class="timer-count__item"><span class="timer-count__value" id="count-second"></span><span class="timer-count__caption">секунд</span></div>
                </div>
                <?php endif; ?>
                <? if( carbon_get_theme_option( 'header_news_btn_label') || carbon_get_theme_option( 'header_news_btn_icon')): ?>
              <a class="top-news__link" href="<? echo carbon_get_theme_option( 'header_news_btn_link'); ?>">
                <div class="icon-wrapper-14"><i class="fa-solid <? echo carbon_get_theme_option( 'header_news_btn_icon')['class'] ?>"></i></div><span><? echo carbon_get_theme_option( 'header_news_btn_label'); ?></span></a>
                <?php endif; ?>
            </div>
          </div>