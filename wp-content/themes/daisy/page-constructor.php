<?php
/**
 * Template name: Конструктор
 */
            get_header();
         ?>
         <main class="main">
       <?  
       $association = carbon_get_the_post_meta( 'crb_association');
    //    print_r($association);
       foreach ( $association as $item ) {
        print_r($item);
        if ( $item['type'] == 'blocks' ) {
            // получаем данные поста по его ID
            $post = get_post( $item['id'] );
            print_r($post);
        }  
    }
  //  $g = get_post_meta('12');
  //  print_r($g);
       ?>
         </main>
<?php
    get_footer();