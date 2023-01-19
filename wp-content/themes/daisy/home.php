<?php
/**
 * Template name: Главная (Home)
 */
            get_header();
         ?>
    <main class="main">
        <?php 
         $select = carbon_get_post_meta( get_the_ID(), 'blocks' );
         if ( ! empty( $select ) ): ?>
            <?php foreach ( $select as $selector ):?>
                
                <!-- Главный слайдер начало -->
                <?php  if ($selector['block_type'] == 'main-slider') { ?>
                <?php $data = $selector['main-banner'];
                $hidden = $selector['block_hidden'];
                if($hidden == 'no') {
                    if ( ! empty( $data ) ): ?>
                        <div id="<?php echo $selector['block_id']; ?>" class="main_slider_wrap" style="background: <?php echo $selector['banner_all_color']; ?>;">
                        <div class="main_slider">
                    <?php foreach ( $data as $item ): ?>
                        <?php
                            $media = $item['main-banner_media'];
                            $media_url = wp_get_attachment_image_url( $media, 'full' ); 
                            $mob_image = $item['main-banner_mob_image'];
                            $mob_image_url = wp_get_attachment_image_url( $mob_image, 'full' ); 
                            $bgimg = $item['banner_bg_img'];
                            $bgimg_url = wp_get_attachment_image_url( $bgimg, 'full' );
                            ?>  
                                    <div class="main_slider_item main_slider_wrap" style="background: <?php echo $item['banner_color'];?> url(<?php echo ($bgimg_url); ?>) no-repeat; background-size: cover;">
                                    <div class="main_slider_img_masck" style=" <?php if($item['main-banner_effect_color'] == 'brighten'){ ?>
                                                        background: rgba(225, 225, 225, .8);
                                                  <?php  } ?>
                                                  <?php if($item['main-banner_effect_color'] == 'darken'){ ?>
                                                        background: rgba(49, 49, 49, .8);
                                                  <?php  } ?>"></div>
                                        <div class="container main_slider_item_row">
                                            <div class="main_slider_text">
                                                <h1 class="main_slider_title"><?php echo $item['main-banner_title']; ?></h1>
                                                <p class="main_slider_info"><?php echo $item['main-banner_descr']; ?></p>
                                                <ul class="main_slider_social">
                                                <?php  
                                                $social = $item['main-banner_social']; 
                                                    if ( ! empty( $social ) ): ?>
                                                    <?php foreach ( $social as $soc ): ?>
                                                        <?php
                                                        $file = $soc['main-banner_social-icon'];
                                                        $file_url = wp_get_attachment_image_url( $file, 'full' ); ?>  
                                                        <li><a href="<?php echo $soc['main-banner_social-link'];?>"><img src="<?php echo ($file_url); ?>" alt=""></a></li>
                                                        <?php endforeach; ?>
                                                <?php endif; ?>
                                                </ul>
                                                <div class="main_about_slider_row_btn">
                                        <?php 
                                        if ( $item['main-banner_btn-label'] ): ?>
                                            <a href="<?php echo $item['main-banner_btn-link'];?>" class="main_slider_btn theme-btn"><?php echo $item['main-banner_btn-label'];?></a>                            
                                      <?php endif; ?>
                                </div>
                                            </div>
                                            <?php if($media_url) { ?>
                                            <a href="<?php echo $item['main-banner_media_link'];?>" class="main_slider_img img_width radius-image"><img src="<?php echo ($media_url);?>" alt="" >
                                            <?php  if($item['main-banner_video']) { ?>
                                                <div class="video-popup__trigger-wrap">
                                                    <a href="<?php echo $item['main-banner_video'];?>" data-autoplay="<?php echo $item['main-banner_video_autoplay'];?>" data-mute="<?php echo $item['main-banner_video_mute'];?>" class="video-popup__trigger"></a>
                                                </div> 
                                            <?php } ?>
                                        </a> <?php } ?>
                                           <?php if($mob_image_url) { ?>
                                            <div class="main_slider_mob_image"><img src="<?php echo ($mob_image_url); ?>" alt="" ></div> <?php } ?>
                                            <div class="main_slider_img_mob_masck" style=" <?php if($item['main-banner_mob_color'] == 'brighten'){ ?> 
                                                        background: rgba(225, 225, 225, .8);
                                                  <?php  } ?>
                                                  <?php if($item['main-banner_mob_color'] == 'darken'){ ?>
                                                        background: rgba(49, 49, 49, .8);
                                                  <?php  } ?>"></div>
                                        </div>
                                        </div>
                                        <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; }}?> 
                    <!-- Главный слайдер конец --> 
            <!-- О нас начало -->
              <?php if ($selector['block_type'] == 'about') { ?>
            <?php  $data = $selector['main-banner'];
            $hidden = $selector['block_hidden']; 
            if ($hidden == 'no') {
            if ( ! empty( $data ) ): ?>
            <div id="<?php echo $selector['block_id']; ?>" class="container container_main_about">
                <h2 class="second_title"><?php echo $selector['block_main_title']; ?></h2>
                <div class="main_about_slider single-slide_slider">
                <?php foreach ( $data as $item ): ?>
                    <?php
                    $media = $item['main-banner_media'];
                    $media_url = wp_get_attachment_image_url( $media, 'full' ); ?>   
                    <div class="main_about_slider_item radius-image">
                        <div class="main_about_slider_row">
                            <div class="main_about_slider_text">
                                <h3 class="main_about_slider_title"><?php echo $item['main-banner_title']; ?></h3>
                                <p class="main_about_slider_info"><?php echo $item['main-banner_descr']; ?></p>
                                <ul class="main_slider_social">
                                <?php  
                                        $social = $item['main-banner_social']; 
                                            if ( ! empty( $social ) ): ?>
                                            <?php foreach ( $social as $soc ): ?>
                                                <?php
                                                $file = $soc['main-banner_social-icon'];
                                                $file_url = wp_get_attachment_image_url( $file, 'full' );
                                            ?>  
                                                <li><a href="<?php echo $soc['main-banner_social-link'];?>"><img src="<?php echo ($file_url); ?>" alt=""></a></li>
                                                <?php endforeach; ?>
                                        <?php endif; ?>
                                </ul>
                                <div class="main_about_slider_row_btn">
                                <?php                            
                                if ( $item['main-banner_btn-label'] ): ?>
                                    <a href="<?php echo $item['main-banner_btn-link'];?>" class="main_about_slider_btn  theme-btn"><?php echo $item['main-banner_btn-label'];?></a>    
                              <?php endif; ?>
                              <?php                            
                                if ( $item['main-banner_btn-label_pop'] ): ?>
                                    <a href="<?php echo $item['main-banner_btn-link_pop'];?>" class="main_about_slider_btn  theme-btn-two"><?php echo $item['main-banner_btn-label_pop'];?></a> <?php endif; ?>
                                </div>
                            </div>
                            <div class="main_about_slider_img img_width radius-image_right" style="background-image: url(<?php echo ($media_url)?>);"><?php  if($item['main-banner_video']) { ?>
                                                <div class="video-popup__trigger-wrap">
                                                    <a href="<?php echo $item['main-banner_video'];?>" data-autoplay="<?php echo $item['main-banner_video_autoplay'];?>" data-mute="<?php echo $item['main-banner_video_mute'];?>" class="video-popup__trigger"></a>
                                                </div> 
                                            <?php } ?> </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="advantages_slider_nav_wrap">
                    <div class="advantages_slider_nav">
                        <span class="advantages_prev">PREV</span>
                        <div class="advantages_dots"></div>
                        <span class="advantages_next">NEXT</span>
                    </div>
                </div>
            </div>
            <?php endif; }}?>
                    <!-- О нас конец -->
                     <!-- ADV начало -->
                     <?php if ($selector['block_type'] == 'adv') { ?>
                <?php $data = $selector['adv_block'];
                $hidden = $selector['block_hidden']; 
                if ($hidden == 'no') {
            if ( ! empty( $data ) ): ?>
               <div id="<?php echo $selector['block_id']; ?>" class="container advantages">
                <h2 class="second_title"><?php echo $selector['block_main_title']; ?></h2>
                <?php
				$post_quantity = $selector['block_quantity'];
                 if($post_quantity == '2')
                    $q = '2';
                 if($post_quantity == '3')
                    $q = '3';
                 if($post_quantity == '4')
                    $q = '4'; ?> 
                <div data-show="<?php echo $q ?>" class="advantages_slider slider">             
            <?php foreach ( $data as $item ): ?>
                <?php
                    $file = $item['adv_icon'];
                    $file_url = wp_get_attachment_image_url( $file, 'full' );
                ?>               
                <div class="advantages_slider_item radius-image">
                        <header class="advantages_slider_header">
                            <div class="advantages_slider_icon">
                                <?php if( $file_url ){ ?>
                                  <img src="<?php echo ($file_url); ?>" alt=""> <?php } ?>
                            </div>
                            <h3 class="advantages_slider_title"><?php echo $item['adv_title']; ?></h3>
                        </header>
                        <p class="advantages_slider_text"><?php echo $item['adv_descr']; ?></p>
                </div>
                    <?php endforeach; ?>
                </div>
                <div class="advantages_slider_nav_wrap">
                    <div class="advantages_slider_nav">
                        <span class="advantages_prev">PREV</span>
                        <div class="advantages_dots"></div>
                        <span class="advantages_next">NEXT</span>
                    </div>
                </div>
            </div> 
            <?php endif; }}?>
                    <!-- ADV конец -->
                    <!-- Каталог начало -->
                    <?php if ($selector['block_type'] == 'cat') { ?>
                        <?php  $hidden = $selector['block_hidden']; 
                    if ($hidden == 'no') {?>
                             <div id="<?php echo $selector['block_id']; ?>" class="container main_categories">
                        <h2 class="second_title"><?php echo $selector['block_main_title']; ?></h2>
                        <div class="main_categories_slider">
                        <?php 
                            $taxonomy     = 'product_cat';
                            $orderby      = 'name';  
                            $show_count   = 0;
                            $pad_counts   = 0; 
                            $hierarchical = 1; 
                            $title        = '';  
                            $empty        = 0;
                            $shop_category = array(
                            'taxonomy'     => $taxonomy,

                            );
                            $cat_product = get_categories( $shop_category )?>
                            <?php foreach ($cat_product as $cat_p) : ?>
                                <?php 
                                if($cat_p->category_parent == 0) {
                                    $category_id = $cat_p->term_id;
                                    $thumbnail_id   = get_term_meta( $cat_p->term_id, 'thumbnail_id', true );
                                    $small_thumbnail_size   = apply_filters( 'woocommerce_subcategory_thumbnail', 'full' );
                                    $image = wp_get_attachment_image_src( $thumbnail_id, $small_thumbnail_size );
                                    ?>
                                <div class="main_categories_item radius-image">
                                    <a href="<?php echo get_term_link( $category_id ,'product_cat') ?>" class="main_categories_img">
                                    <?php if($image){ ?>
                                        <img src="<?php echo $image[0]; ?>" alt="">
                                  <?php  } else { ?>
                                    <img src="<?php bloginfo('template_url');?>/assets/img/no-photo.png" alt="">
                               <?php   } ?>
                                </a>
                                <div class="main_categories_text">
                                    <a href="<?php echo get_term_link( $category_id ,'product_cat') ?>" class="main_categories_link"><?php echo $cat_p->name; ?></a>
                                </div>
                            </div>
                                <?php } ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="advantages_slider_nav_wrap">
                            <div class="advantages_slider_nav">
                                <span class="advantages_prev">PREV</span>
                                <div class="advantages_dots"></div>
                                <span class="advantages_next">NEXT</span>
                            </div>
                        </div>
                    </div>
                    <?php } }?>
                     <!-- Каталог конец --> 
             <!-- Текст начало -->
             <?php if ($selector['block_type'] == 'textslider') { ?>
            <?php $hidden = $selector['block_hidden']; 
                    if ($hidden == 'no') {
                $data = $selector['textslider_block'];
            if ( ! empty( $data ) ): ?>
             <div id="<?php echo $selector['block_id']; ?>" class="wrap_text_slider">
                <div class="text_slider single-slide_slider">
                <?php foreach ( $data as $item ): ?>
                            <div class="text_slider_item">
                                <div class="text_slider_row">
                                    <p><?php echo $item['textslider_title'];?></p>
                                    <a href="<?php echo $item['textslider_link'];?>" class="main_about_slider_btn theme-btn-two"><?php echo $item['textslider_label'];?></a>
                                </div>
                            </div>         
                     <?php endforeach; ?>
                </div>
                <div class="advantages_slider_nav_wrap">
                    <div class="advantages_slider_nav">
                        <span class="advantages_prev">PREV</span>
                        <div class="advantages_dots"></div>
                        <span class="advantages_next">NEXT</span>
                    </div>
                </div>
            </div>
            <?php endif; }} ?>
             <!-- Текст конец -->
             <!-- Доп инф начало -->
             <?php if ($selector['block_type'] == 'info') { ?>
                <?php $hidden = $selector['block_hidden']; 
                    if ($hidden == 'no') {
                $data = $selector['info_block'];
            if ( ! empty( $data ) ): ?>
              <div id="<?php echo $selector['block_id']; ?>" class="container dop_info">
                <h2 class="second_title"><?php echo $selector['block_main_title']; ?></h2>
                <div class="dop_info_row">
                    <div class="dop_info_scroll">
                        <ul class="dop_info_tabs">
                            <?php foreach ( $data as $item ): ?> 
                                <li class="dop_info_tabs-trig"><?php echo $item['info_title']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php foreach ( $data as $item ): ?> 
                    <div class="dop_info_box">
                        <h1 class="dop_info_box_title"><?php echo $item['info_title']; ?></h1>
                        <?php $punkts = $item['info_list']; 
                        if ( ! empty( $punkts ) ):?>
                        <ul class="dop_info_box_list">
                            <?php foreach ( $punkts as $punkt ): ?> 
                                <li><?php echo $punkt['info_item']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                        <p class="dop_info_box_text"><?php echo $item['info_descr']; ?></p>
                        <div class="main_about_slider_row_btn">
                            <?php if($item['info_btn-label']) { ?>
                            <a href="<?php echo $item['info_btn-link']; ?>" class="main_about_slider_btn theme-btn"><?php echo $item['info_btn-label']; ?></a> <?php } ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; }}?>
                    <!-- Доп инф конец -->
                    <!-- Обратная связь начало --> 
                 <?php if ($selector['block_type'] == 'feedback') { ?>
                <?php $hidden = $selector['block_hidden']; 
                    if ($hidden == 'no') { 
                        $fb_form = $selector['feedback_form'];
                        $file = $selector['feedback_icon'];
                        $file_url = wp_get_attachment_image_url( $file, 'full' ); 
                        ?>
                    <div id="<?php echo $selector['block_id']; ?>" class="container feedback">
                        <h2 class="second_title"><?php echo $selector['block_main_title']; ?></h2>
                        <div class="feedback_row radius-image">
                            <div class="feedback_form">
                                <?php echo do_shortcode('' . $fb_form . ''); ?>
                            </div>
                            <div class="feedback_img img_width">
                                <img src="<?php echo $file_url; ?>" alt="">
                            </div>
                        </div>
                    </div>
                     <?php  }}?>
                 <!-- Обратная связь конец --> 
            <!-- Товары дня начало -->   
            <?php if ($selector['block_type'] == 'featured') { ?>
                <?php $hidden = $selector['block_hidden']; 
                    if ($hidden == 'no') { ?>
            <div id="<?php echo $selector['block_id']; ?>" class="container advantages goods">
                <h2 class="second_title"><?php echo $selector['block_main_title']; ?></h2>
            </div> 
                <div class="featured_slider"> 
            <?php 
                $args = array(
                    'post-type' => 'produt',
                    'tax_query' => array(
                        array(
                        'taxonomy' => 'product_visibility',
                        'field' => 'name',
                        'terms' => 'featured',
                    ),
                ),
            );
            $f = new WP_Query($args); ?>
            <?php
                while($f->have_posts()){
                    $f->the_post();
                    $g = get_the_id(); ?>
                    <div class="featured_slider__item">
                        <?php echo do_shortcode('[product_page id="' . $g . '"]');  ?>
                    </div>
                <?php
                } 
                    ?>            
                </div>
                <?php  }}?>
            <!-- Товары дня конец -->
                        <!-- Контакты начало -->   
                        <?php if ($selector['block_type'] == 'contacts') { ?>
                <?php $hidden = $selector['block_hidden']; 
                    if ($hidden == 'no') { ?>
            <div id="<?php echo $selector['block_id']; ?>" class="container main_contact">
            <h2 class="second_title"><?php echo $selector['block_main_title']; ?></h2>
                <div class="contact_row radius-image">
                    <div class="contact_content">
                        <?php
                    $address = $selector['contacts_ad_block'];
            if ( ! empty( $address ) ): ?>
                        <div class="contact_item">
                            <div class="contact_header">
                                <div class="contact_icon"><img src="<?php echo bloginfo('template_url');?>/assets/img/map.svg" alt=""></div>
                                <p>Адрес</p>
                            </div>
                            <?php foreach ( $address as $add ): ?> 
                                <p class="address"><?php echo $add['contacts_address'] ?></p>                              
                            <?php endforeach; ?>   
                        </div>
            <?php endif; ?>
            <?php
                    $phones = $selector['contacts_ph_block'];
            if ( ! empty( $phones ) ): ?>
             <div class="contact_item">
                            <div class="contact_header">
                                <div class="contact_icon"><img src="<?php echo bloginfo('template_url');?>/assets/img/phone-contact.svg" alt=""></div>
                                <p>Телефон</p>
                            </div>
                            <div class="contacts-wrap">
                            <?php foreach ( $phones as $phone ): ?> 
                                <a href="tel:<?php echo $phone['contacts_phone'];?>" class="contact_link"><?php echo $phone['contacts_phone'];?></a>                              
                            <?php endforeach; ?> 
                            </div>
                        </div>
             <?php endif; ?>
             <?php
             $emails = $selector['contacts_emails_block'];
            if ( ! empty( $emails ) ): ?>
            <div class="contact_item">
                            <div class="contact_header">
                                <div class="contact_icon"><img src="<?php echo bloginfo('template_url');?>/assets/img/mail-contact.svg" alt=""></div>
                                <p>Email</p>
                            </div>
                            <div class="contacts-wrap">
                            <?php foreach ( $emails as $email ): ?> 
                                <a href="mailto:<?php echo $email['contacts_email'];?>" class="contact_link"><?php echo $email['contacts_email'];?></a>                              
                            <?php endforeach; ?> 
                            </div>
                        </div>
            <?php endif; ?>
            <?php
             $links = $selector['contacts_links_block'];
            if ( ! empty( $links ) ): ?>
            <div class="contact_item">
                            <div class="contact_header">
                                <div class="contact_icon"><img src="<?php echo bloginfo('template_url');?>/assets/img/dop-info.svg" alt=""></div>
                                <p>Дополнительная информация</p>
                            </div>
                            <?php foreach ( $links as $link ): ?> 
                                <a href="<?php echo $link['contacts_link'];?>" class="dop_info_contact"><?php echo $link['contacts_link_label'];?></a>
                            <?php endforeach; ?> 
                        </div>
            <?php endif; ?>
                </div>
                <?php $map_shortcode = $selector['contacts_map_shortcode']; ?>
                <div class="map"><?php echo $map_shortcode; ?></div>
            </div>
            </div>
                <?php  }}?>
            <!-- Контакты конец -->   
                      <!-- Рекомендации начало -->
                      <?php if ($selector['block_type'] == 'recommended') { ?>
                <?php $hidden = $selector['block_hidden']; 
                    if ($hidden == 'no') {
                        $data = $selector['recommended_group'];
                 if ( ! empty( $data ) ): ?>
                                     <?php
				$post_quantity = $selector['block_quantity'];
                 if($post_quantity == '2')
                    $q = '2';
                 if($post_quantity == '3')
                    $q = '3';
                 if($post_quantity == '4')
                    $q = '4';?> 
                <div id="<?php echo $selector['block_id']; ?>" class="container main_note">
                <h2 class="second_title"><?php echo $selector['block_main_title']; ?></h2>
                <ul class="main_note_tabs">
                <?php foreach ( $data as $item ): ?>
                    <li class="main_note_tabs__group">
                    <?php if ( $item['_type'] == 'select_post' ): echo $item['recommended_art_group_name']; ?>
                    <?php endif; ?>
				    <?php if ( $item['_type'] == 'select_prod' ): echo $item['recommended_prod_group_name'];?>
                    <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                </ul>
                <?php foreach ( $data as $item ): ?>
                    <?php if ( $item['_type'] == 'select_post' ): ?>
                <?php $art = $item['recommended_art_group_association'];?>
                <div class="main_note_box"> 
                    <div data-show="<?php echo $q ?>" class="main_note_slider slider">
                    <?php foreach ( $art as $i ) { ?>
                        <?php
                            if ( $i['type'] == 'post' ) {
                                // получаем данные поста по его ID
                                $post = get_post( $i['id'] ); ?>
                                    <div class="note_slider_item radius-image">
                            <div class="note_slider_img radius-image_top"><a href="#"><img src="<?php the_post_thumbnail_url();?>" alt=""></a></div>
                            <div class="note_slider_content">
                                <div class="note_slider_text">
                                    <a href="<?php the_permalink(); ?>" class="note_slider_title"><?php echo the_title();?></a>
                                    <p class="note_slider_info"><?php echo carbon_get_the_post_meta('art_short_descr');?></p>
                                </div>
                                <div class="note_slider_row">
                                    <a href="<?php the_permalink(); ?>" class="note_slider_link">Перейти</a>
                                    <div class="note_slider_date"><?php echo get_the_date(); ?></div>
                                </div>
                            </div>
                        </div>
                             <?php  
                            }
                        ?>     
                 <?php }?>  
                    </div>
                    <div class="advantages_slider_nav_wrap">
                    <div class="advantages_slider_nav">
                        <span class="advantages_prev">PREV</span>
                        <div class="advantages_dots"></div>
                        <span class="advantages_next">NEXT</span>
                    </div>
                </div>
                </div> <?php endif; ?>

                 <?php endforeach; ?> 
            </div>
             <?php  endif; }} ?>
              <!-- Рекомендации конец --> 
               <!-- Галерея начало -->
            <?php  if ($selector['block_type'] == 'gallery') {?>    
            <?php $hidden = $selector['block_hidden']; 
                    if ($hidden == 'no') {
            $slides = $selector['crb_media_gallery']; 
            if ( ! empty( $slides ) ): ?>
            <div id="<?php echo $selector['block_id']; ?>" class="container main_gallery">
            <!-- <div class="modal-img hide">
                <div class="modal__dialoge">
                </div>
            </div> -->
                <h2 class="second_title"><?php echo $selector['block_main_title']; ?></h2>
                <?php
				$post_quantity = $selector['gallery_block_quantity'];
                 if($post_quantity == '2')
                    $q = '2';
                 if($post_quantity == '3')
                    $q = '3';
                 if($post_quantity == '4')
                    $q = '4'; 
                if($post_quantity == '6')
                    $q = '6';?>
                <?php  if ($selector['gallery_block_type'] == 'gallery') { ?>   
                <div data-show="<?php echo $q ?>" class="main_gallery_slider slider">
                    <?php foreach ($slides as $slide): ?>
                    <a href="#" class="main_gallery_item radius-image" style="padding-bottom: <?php echo $selector['gallery_ratio']; ?>;"><img src="<?php echo wp_get_attachment_image_url($slide); ?>" alt=""></a>
                    <?php endforeach; ?>
                </div>
                <?php } ?>
                <?php  if ($selector['gallery_block_type'] == 'partners') { ?> 
                    <div data-show="<?php echo $q ?>" class="main_partners_slider slider">
                    <?php foreach ($slides as $slide): ?>
                        <div class="main_partners_item_wrap">
                    <div class="main_partners_item radius-image" style="height: <?php echo $selector['gallery_ratio']; ?>;">
                        <div>
                            <img src="<?php echo wp_get_attachment_image_url($slide); ?>" alt="">
                        </div>
                    </div>	
                    </div>	
                    <?php endforeach; ?>
                </div>
                <?php } ?>
                <div class="advantages_slider_nav_wrap">
                    <div class="advantages_slider_nav">
                        <span class="advantages_prev">PREV</span>
                        <div class="advantages_dots"></div>
                        <span class="advantages_next">NEXT</span>
                    </div>
                </div>
            </div> 
            <?php endif; }}?>
             <!-- Галерея конец -->
                                 <!-- Команда начало -->
                                 <?php if ($selector['block_type'] == 'team') { ?>
                <?php $hidden = $selector['block_hidden']; 
                    if ($hidden == 'no') {
                $data = $selector['main-banner'];
            if ( ! empty( $data ) ): ?>
               <div id="<?php echo $selector['block_id']; ?>" class="container main_team">
                <h2 class="second_title"><?php echo $selector['block_main_title']; ?></h2>
                <?php
				$post_quantity = $selector['block_quantity'];
                 if($post_quantity == '2')
                    $q = '2';
                 if($post_quantity == '3')
                    $q = '3';
                 if($post_quantity == '4')
                    $q = '4'; ?> 
                <div data-show="<?php echo $q ?>" class="slider main_team_slider">             
            <?php foreach ( $data as $item ): ?>
                <?php
                    $file = $item['main-banner_media'];
                    $file_url = wp_get_attachment_image_url( $file, 'full' );
                ?>               
                <div class="main_reviews_item radius-image">
                        <div class="main_team_img radius-image_top"><a href="#"><img src="<?php echo $file_url ?>" alt=""></a></div>
                        <div class="note_slider_content">
                            <div class="note_slider_text">
                                <h3 class="note_slider_title"><?php echo $item['main-banner_title']; ?></h3>
                                <p class="note_slider_info"><?php echo $item['main-banner_descr']; ?></p>
                            </div>
                            <div class="main_team_social">
                              <?php  $links = $item['main-banner_social']; 
                              if ( ! empty( $links ) ): ?>
                                <ul class="main_slider_social">
                                <?php foreach ( $links as $link ): 
                                    $icon = $link['main-banner_social-icon'];
                                    $icon_url = wp_get_attachment_image_url( $icon, 'full' ); ?>
                                    <li><a href="<?php echo $link['main-banner_social-link']; ?>"><img src="<?php echo $icon_url; ?>" alt=""></a></li>
                                <?php endforeach; ?>
                                </ul>
                            <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="advantages_slider_nav_wrap">
                    <div class="advantages_slider_nav">
                        <span class="advantages_prev">PREV</span>
                        <div class="advantages_dots"></div>
                        <span class="advantages_next">NEXT</span>
                    </div>
                </div>
            </div> 
            <?php endif; }}?>
                    <!-- Команда конец -->
                     <!-- Доставка начало -->
              <?php if ($selector['block_type'] == 'delivery') { ?>
                <?php $hidden = $selector['block_hidden']; 
                    if ($hidden == 'no') {
                $data = $selector['delivery_block'];
            if ( ! empty( $data ) ): ?>
               <div id="<?php echo $selector['block_id']; ?>" class="container delivery advantages">
                <h2 class="second_title"><?php echo $selector['block_main_title']; ?></h2>
                <div data-show="<?php echo 2 ?>" class="d_slider">             
            <?php foreach ( $data as $item ): ?>          
                <div class="advantages_slider_item radius-image">
                        <header class="advantages_slider_header d__head">
                            <h3 class="advantages_slider_title"><?php echo $item['delivery_name']; ?></h3>
                        </header>
                        <div class="d-card__body">
                        <div class="d-card__body-wrap">
                        <?php $punct =  $item['delivery_items']; foreach ( $punct as $p ): ?>
                            <?php
                    $file = $p['delivery_icon'];
                    $file_url = wp_get_attachment_image_url( $file, 'full' ); ?> 
                 <div class="d-card__item">
                        <?php if( $file_url ) { ?>
                        <div class="advantages_slider_icon"><img src="<?php echo ($file_url); ?>" alt=""></div> <?php } else { ?> <div class="d__dot-wrap"><span class="d__dot"></span> </div><?php } ?>
                        <p class="advantages_slider_text d__text"><?php echo $p['delivery_text']; ?></p>  
                    </div> 
                        <?php endforeach; ?> </div> 
                        <?php  if($item['delivery_note']) { ?>                     
                        <p class="advantages_slider_text d__text d__note"><?php echo $item['delivery_note']; ?></p> <?php } ?> </div> 
                </div> 
                    <?php endforeach; ?>
                </div>
                <div class="advantages_slider_nav_wrap">
                    <div class="advantages_slider_nav">
                        <span class="advantages_prev">PREV</span>
                        <div class="advantages_dots"></div>
                        <span class="advantages_next">NEXT</span>
                    </div>
                </div>
            </div> 
            <?php endif; }}?>
                    <!-- Доставка конец -->                  
                    <!-- Конец цыкла -->
                <?php endforeach; ?>
            <?php endif; ?>
        </main>
        <?php
        get_footer();