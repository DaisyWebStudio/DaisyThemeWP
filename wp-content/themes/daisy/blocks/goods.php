<?
 /**
 * Template name: Товары/тарифы
 * Template Post Type: blocks
 */

 $img_order = carbon_get_the_post_meta( 'goods_side_image');
 $count = carbon_get_the_post_meta( 'goods_slide_count');
?>
    <section class="products">
      <div class="products__container">
        <div class="products__wrapper">
          <!-- header-block -- start -->
          <? get_template_part('template-parts/blocks/header-block'); ?>
          <!-- header-block -- end-->
          <!-- tabs-block -- start -->
          <? get_template_part('template-parts/blocks/tabs'); ?>
          <!-- tabs-block -- end-->
          <!-- products__block -- start-->
          <div class="products__body">
          <? $data =  carbon_get_the_post_meta( 'goods_tabs'); ?>
          <? if ( ! empty( $data ) ): ?>
              <?php foreach ( $data as $item ): ?>
                <? 
                $dd = $item['goods_ass'];
                $term_id = array();
                foreach ( $dd as $d ){
                  array_push($term_id, $d['id']);
                }
              $_posts    = new WP_Query( array(
                    'post_type'      => 'goods',
                    'tax_query'      => array(
                      array(
                        'taxonomy' => 'goods_tax',
                        'field'    => 'id',
                        'terms'    => $term_id,
                      ),
                    ),
                  ) );
                ?>
            <!-- tab-item-->
            <div id="sl<? the_id(); ?>" data-show="<? echo $count; ?>" class="swiper much-swiper products-swiper tabs__panel">
              <div class="swiper-wrapper products__swiper">
              <?  if ( $_posts->have_posts() ) :
            while ( $_posts->have_posts() ) :
              $_posts->the_post() ?>
              <? $goods_select = carbon_get_the_post_meta( 'goods_select'); ?>
                <div class="swiper-slide">
                  <div class="products__card"> 
                    <div class="products__img"><img src="<?php echo get_the_post_thumbnail_url();?>" alt="products"></div>
                    <div class="products__content"> 
                      <div class="products__header"> 
                        <h3 class="products__title item-title"><? the_title(); ?></h3>
                        <button class="products__like">
                          <div class="icon-wrapper-24"><i class="fa-solid fa-heart"></i></div>
                        </button>
                      </div>
                      <div class="products__description">
                        <span><? echo carbon_get_the_post_meta( 'goods_descr'); ?></span>
                        <? if($goods_select == 'product'){ ?>
                            <? $tooltips = carbon_get_the_post_meta('product_tooltip');
                        if( ! empty ($tooltips)) :
                        ?>
                      <div class="products__tooltype">
                      <? foreach ( $tooltips as $tooltip ){ ?>
                        <div class="tooltype">
                            <div class="tooltype__item"> 
                            <div class="icon-wrapper-16"><i class="fa-solid <? echo $tooltip['product_tooltip_icon']['class']; ?>"></i></div>
                            <div class="tooltype__content tooltype__left"><? echo $tooltip['product_tooltip_text']; ?></div>
                            </div>
                        </div>
                        <? } ?>
                     </div>
                     <? endif;?>
                     <? } ?>
                    </div>
                    <? if($goods_select == 'product'){ ?>
                        <? $params = carbon_get_the_post_meta('product_params');
                        if( ! empty ($params)) :
                        ?>
                    <ul class="products__parameters-list">
                    <? foreach ( $params as $param ){ ?>
                        <li class="products__parameters-item"> <span class="products__parameters-name"><? echo $param['product_params_title']; ?></span><span class="products__parameters-type"><? echo $param['product_params_text']; ?></span></li>
                    <? } ?>
                    </ul>
                    <? endif;?>
                     <? } ?>
                      <? if($goods_select == 'rate'){ ?>
                        <? $rate_settings = carbon_get_the_post_meta('rate_settings');
                        if( ! empty ($rate_settings)) :
                        ?>
                        <ul class="products__parameters-list">
                         <? foreach ( $rate_settings as $s ){ 
                            if($s['_type'] == 'rate_included_filds'){ ?>
                            <li class="products__parameters-item products__rate-check">
                                <div class="icon-wrapper-16"><i class="fa-solid fa-check"></i></div><span><? echo $s['rate_included'] ?></span>
                            </li>
                          <?  }
                          if($s['_type'] == 'rate_not_included_filds'){ ?>
                            <li class="products__parameters-item products__rate-not">
                                <div class="icon-wrapper-16"><i class="fa-solid fa-lock"></i></div><span><? echo $s['rate_not_included'] ?></span>
                            </li>
                          <?  }
                            }
                            ?>   
                      </ul>
                      <? endif;?>
                     <? } ?>
                      <div class="products__price item-title"><? echo carbon_get_the_post_meta( 'goods_price'); ?></div>
                      <button class="products__button button" data-btnproduct="name-1">
                        <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                      </button>
                    </div>
                  </div>
                </div>
                <? endwhile; endif;?>
              </div>
              <div class="products-navigation slider-navigation">
                <div class="slider-navigation__body slider-navigation__body__horizontal">
                  <button class="slider-navigation-prew products-navigation-prev icon-wrapper-16"><i class="fa-solid fa-angle-left"></i></button>
                  <div class="pagination products-pagination"></div>
                  <button class="slider-navigation-next products-navigation-next icon-wrapper-16"><i class="fa-solid fa-angle-right"></i></button>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
             <?php endif; ?>
          </div>
        </div>
      </div>
    </section>