<?
 /**
 * Template name: Преимущества
 * Template Post Type: blocks
 */

// $data = carbon_get_the_post_meta( 'card_ass'); 
// print_r($data);
$img_order = carbon_get_the_post_meta( 'adv_side_image');
$count = carbon_get_the_post_meta( 'adv_side_count');
// print_r($img_order);
?>
  <style>
    .left-image .advantages__img{
      --img_order: 0;
    }
    .right-image .advantages__img{
      --img_order: 1;
    }
      .left-image .advantages__img{
        border-bottom-left-radius: 30px;
        border-top-right-radius: 0;
      }
      .left-image .advantages__content{
        border-bottom-left-radius: 0;
        border-top-right-radius: 30px;
      }
      .right-image .advantages__img{
        border-top-right-radius: 30px;
        border-bottom-right-radius: 30px;
        border-top-left-radius: 0;
      }
      .right-image .advantages__content{
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
        border-bottom-right-radius: 0;
      }
  </style>
<section class="advantages <? 
if($img_order == 'none'){ 
  echo 'advantages-img-none';
  }
if($img_order == 'bg'){ 
  echo 'advantages-img-bg';
  }
if($img_order == 'left' || $img_order == 'right'){ 
  echo 'advantages-img-side';
  } ?>
   <?
  if($img_order == 'left'){ 
    echo 'left-image';
    }
    if($img_order == 'right'){ 
      echo 'right-image';
      }
  ?>"> 
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
            <? $data =  carbon_get_the_post_meta( 'adv_tabs'); 
            ?>
           <? 
          //  print_r($data); 
           ?>
            <? if ( ! empty( $data ) ): ?>
              <?php foreach ( $data as $item ): ?>
                <? 
                $dd = $item['card_ass'];
                $term_id = array();
                foreach ( $dd as $d ){
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
           <div id="sl<? the_id(); ?>" data-show="<? echo $count; ?>" class="swiper advantages-swiper tabs__panel">
              <div class="swiper-wrapper advantages__swiper">
             <? 
            //  $btn = false;
             $btn = carbon_get_the_post_meta( 'card_btn_label');
            $btn_icon = carbon_get_the_post_meta( 'card_btn_icon');
            $dateon = carbon_get_the_post_meta( 'card_date');
                // if($btn_label){
                //   $btn = true;
                // }
                         ?>
            <?  if ( $_posts->have_posts() ) :
            while ( $_posts->have_posts() ) :
              $_posts->the_post() ?>
              <div class="swiper-slide">
                  <div class="advantages__card"> 
                    <div class="advantages__img"> 
                    <?php the_post_thumbnail (); ?>
                  </div>
                    <div class="advantages__content" style="
                  <?
                  if($img_order == 'bg'){ ?>
                    background-image: url(<? echo get_the_post_thumbnail_url(); ?>);
                    background-size: cover;
                  <?  }
                  ?>
                  ">
                      <div class="advantages__content-body">
                        <div class="advantages__header"> 
                          <div class="advantages__title"> 
                            <h3 class="item-title"><? the_title(); ?></h3>
                          </div>
                             <div class="advantages__rating"><span class="item-title"><? echo carbon_get_the_post_meta( 'card_icon_text'); ?></span>
                          <? if(carbon_get_the_post_meta( 'card_icon_image')){
                            $image = carbon_get_the_post_meta( 'card_icon_image');
                            $image_url = wp_get_attachment_image_url( $image, 'full' ); ?>
                            <img src="<? echo $image_url; ?>" alt="">
                         <? } ?>
                         <? if(carbon_get_the_post_meta( 'card_icon_icon')){ ?>
                            <div class="icon-wrapper-24"><i class="fa-solid <? echo carbon_get_the_post_meta( 'card_icon_icon')['class'] ?>"> </i> </div>
                          <? } ?>
                          </div>
                        </div>
                        <div class="advantages__description"><? echo carbon_get_the_post_meta( 'card_descr'); ?></div>
                      </div>
                      <? if($btn || $dateon){ ?> 
                      <div class="advantages__footer">
                        <? 
                        if($btn){ ?>
                         <a href="<? the_permalink(); ?>" class="advantages__btn"> 
                          <div class="icon-wrapper-14"><i class="fa-solid <? 
                          if($btn_icon){
                            echo $btn_icon['class']; 
                          }
                          ?> "></i> <? echo $btn; ?></div>
                        </a>
                       <? }  ?>
                        <? if($dateon){ ?>
                          <div class="advantages__data">
                          <time><? echo get_the_date(); ?></time>
                        </div>
                      <?  } ?>    
                      </div>
                      <? } ?>
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