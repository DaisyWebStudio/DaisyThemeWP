<? $data =  carbon_get_the_post_meta( 'tabs'); ?>
              <? if ( ! empty( $data ) && count($data) > 1): ?>
<div class="tabs">
            <div class="tabs__wrapper">
              <div class="tabs__header" aria-expanded="false"> 
                <div class="tabs__header-item">
                  <div class="icon-wrapper-14"><i class="fa-solid fa-circle-dot"></i></div><span>Подробнее</span>
                </div>
                <div class="icon-wrapper-14"><i class="fa-solid fa-angle-down"></i></div>
              </div>
             
              <div class="tabs__list" aria-hidden="true">
              <?php foreach ( $data as $item ): ?>
                <button class="tabs__btn tabs__item" data-tabs-path="more">
                  <div class="icon-wrapper-14"><i class="fa-solid <? 
                  if($item['tab_icon']){
                    echo $item['tab_icon']['class']; 
                  } else {
                    echo 'fa-circle-dot';
                  }
                  ?>"> </i></div><? echo $item['tab_title']; ?>
                </button>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
<?php endif; ?>