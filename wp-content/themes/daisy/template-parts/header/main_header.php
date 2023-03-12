<div class="header__item"> 
            <div class="top-nav"> 
                <a class="top-nav__logo" href="<? echo get_home_url(); ?>">
                <?
                $image = carbon_get_theme_option( 'header_logo' );
                $image_url = wp_get_attachment_image_url( $image, 'full' );  ?>
                <? if($image_url){ ?>
                    <img src="<?echo $image_url;?>" alt="logo"> <?  } ?>
                </a>
              <? 
                  $args =          [
                              'theme_location'  => '',
                              'menu'            => '',
                              'container'       => 'div',
                              'menu_class'      => 'top-nav__menu',
                              'menu_id'         => '',
                              'echo'            => true,
                              'fallback_cb'     => 'wp_page_menu',
                              'before'          => '',
                              'after'           => '',
                              'link_before'     => '',
                              'link_after'      => '',
                              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                              'depth'           => 0,
                              'walker'          => '',
                            ]
              ?>
              <?php wp_nav_menu( $args ); ?>

               <? $btn_label = carbon_get_theme_option( 'header_btn_label' );
                  $btn_icon = carbon_get_theme_option( 'header_btn_icon' );
                  ?>
                <? if($btn_label || $btn_icon): ?>
                <a href="<? echo carbon_get_theme_option( 'header_btn_link' ); ?>" class="top-nav__booking">
                  <div class="icon-wrapper-14"><i class="fa-solid <? echo $btn_icon['class'] ?>"> </i></div><span><? echo $btn_label  ?></span>
                </a>
              <?php endif; ?>
              <!-- <div class="top-nav__use">
                <button class="top-nav__btn burger">
                  <div class="icon-wrapper-24"><i class="fa-solid fa-bars"></i></div>
                </button>
              </div> -->
            </div>
          </div>