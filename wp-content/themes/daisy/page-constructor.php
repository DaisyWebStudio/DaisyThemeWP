<?php
/**
 * Template name: Конструктор
 */
            get_header();
         ?>
         <main class="main">
       <?  
       $association = carbon_get_the_post_meta( 'ass');
    //    print_r($association);
       foreach ( $association as $item ) {
        $post = get_post( $item['id'] );
        // echo the_title();
       
        $m = get_post_meta($item['id'], '_wp_page_template');?>
       

        <?      
          if($m[0] == 'blocks/adv.php'){
            get_template_part('blocks/adv');
          }
          if($m[0] == 'blocks/counter.php'){
            get_template_part('blocks/counter');
          }
          if($m[0] == 'blocks/about.php'){
            get_template_part('blocks/about');
          }
          if($m[0] == 'blocks/feedback.php'){
            get_template_part('blocks/feedback');
          }
          if($m[0] == 'blocks/goods.php'){
            get_template_part('blocks/goods');
          }
          if($m[0] == 'blocks/numbers.php'){
            get_template_part('blocks/numbers');
          }
          if($m[0] == 'blocks/gallery.php'){
            get_template_part('blocks/gallery');
          }
          if($m[0] == 'blocks/banner.php'){
            get_template_part('blocks/banner');
          }
          if($m[0] == 'blocks/information.php'){
            get_template_part('blocks/information');
          }
        // get_template_part('slider');
        // echo carbon_get_the_post_meta('art_short_descr');
    }
  //  $g = get_post_meta('12');
  //  print_r($g);
       ?>
         </main>
<?php
    get_footer();