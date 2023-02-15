<?
 /**
 * Template name: Главный слайдер
 * Template Post Type: blocks
 */
?>
      <div class="advantages__container"> 
        <div class="advantages__wrapper"> 
          <!-- header-block -- start -->
         <? get_template_part('template-parts/blocks/header-block'); ?>
          <!-- header-block -- end -->
          <!-- tabs-block -- start -->
          <? get_template_part('template-parts/blocks/tabs'); ?>
          <!-- tabs-block -- end-->
          <!-- body-block -- start-->
          <div class="advantages__body">
            <!-- tab-item-->
            <? $data =  carbon_get_the_post_meta( 'tabs'); ?>
           <? 
          //  print_r($data); 
           ?>
            <? if ( ! empty( $data ) ): ?>
              <?php foreach ( $data as $item ): ?>
                <? 
                print_r($item );
                $dd = $item['card_ass'];
                $term_id = array();
                foreach ( $dd as $d ){
                  print_r($d);
                  array_push($term_id, $d['id']);
                }
                $_posts    = new WP_Query( array(
                  'post_type'      => 'cards',
                  'tax_query'      => array(
                    array(
                      'taxonomy' => 'cards_tax',
                      'field'    => 'id',
                      'terms'    => $term_id,
                    ),
                  ),
                ) );
                ?>
           <div data-show="3" class="swiper advantages-swiper tabs__panel">
              <div class="swiper-wrapper advantages__swiper">
            <?  if ( $_posts->have_posts() ) :
            while ( $_posts->have_posts() ) :
              $_posts->the_post() ?>
              <div class="swiper-slide">
                  <div class="advantages__card"> 
                    <div class="advantages__img"> 
                    <?php the_post_thumbnail (); ?>
                  </div>
                    <div class="advantages__content">
                      <div class="advantages__content-body">
                        <div class="advantages__header"> 
                          <div class="advantages__title"> 
                            <h3 class="item-title"><? the_title(); ?></h3>
                          </div>
                          <div class="advantages__rating"><span class="item-title">5</span>
                            <div class="icon-wrapper-24"><i class="fa-solid fa-star"> </i></div>
                          </div>
                        </div>
                        <div class="advantages__description"><? echo carbon_get_the_post_meta( 'card_descr'); ?></div>
                      </div>
                      <div class="advantages__footer">
                        <a href="<? the_permalink(); ?>" class="advantages__btn"> 
                          <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"> </i></div>Подробнее
                        </a>
                        <div class="advantages__data">
                          <time><? echo get_the_date(); ?></time>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
             <? endwhile; endif;?>
              </div>
              <div class="advantages-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew advantages-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination advantages-pagination"></div>
                  <button class="slider-navigation-next advantages-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
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