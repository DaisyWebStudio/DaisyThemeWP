<footer class="footer">
                <div class="container">
                    <div class="footer_top_row">
                        <?php $data =  carbon_get_theme_option( 'footer_contacts' );
                        if ( ! empty( $data ) ): ?>
                        <div class="footer_contact">
                        <?php foreach ( $data as $item ): ?>
                            <?php if($item['_type'] == 'footer_title_add'){ ?>
                                <h3 class="footer_item_title"><?php echo $item['footer_title']; ?></h3> 
                          <?php  } ?>
                        <?php if($item['_type'] == 'footer_logo_add'){ 
                                $icon = $item['footer_logo'];
                                $icon_url = wp_get_attachment_image_url( $icon, 'full' ); 
                                ?>
                                <a href="#" class="header_logo footer_item_title"><img class="img_svg" src="<?php echo ($icon_url); ?>" alt="Logo"></a> 
                          <?php  } ?>
                        <?php if($item['_type'] == 'footer_address_add'){ 
                            $icon = $item['footer_address_icon'];
                            $icon_url = wp_get_attachment_image_url( $icon, 'full' ); 
                                ?>
                                <div class="footer-contacts-item footer_address" <?php 
                                if($icon_url){ ?> style="background-image: url(<?php echo ($icon_url); ?>);" <?php  }?>><?php echo $item['footer_address']; ?></div>
                          <?php  } ?>
                          <?php if($item['_type'] == 'footer_phone_add'){ 
                            $icon = $item['footer_phone_icon'];
                            $icon_url = wp_get_attachment_image_url( $icon, 'full' ); 
                                ?>
                                <a href="tel:<?php echo $item['footer_phone']; ?>" class="footer-contacts-item footer_phone" <?php 
                                if($icon_url){ ?> style="background-image: url(<?php echo ($icon_url); ?>);" <?php  }?>
                                ><?php echo $item['footer_phone']; ?></a>
                          <?php  } ?>
                          <?php if($item['_type'] == 'footer_email_add'){ 
                            $icon = $item['footer_email_icon'];
                            $icon_url = wp_get_attachment_image_url( $icon, 'full' ); 
                                ?>
                                <a href="mailto:<?php echo $item['footer_email']; ?>" class="footer-contacts-item footer_phone" <?php 
                                if($icon_url){ ?> style="background-image: url(<?php echo ($icon_url); ?>);" <?php  }?>
                                ><?php echo $item['footer_email']; ?></a>
                          <?php  } ?>
                          <?php if($item['_type'] == 'footer_link_add'){ 
                            $icon = $item['footer_contact_link_icon'];
                            $icon_url = wp_get_attachment_image_url( $icon, 'full' ); 
                                ?>
                                <a href="<?php echo $item['footer_contact_link']; ?>" class="bookmark bookmark1" <?php 
                                if($icon_url){ ?> style="background-image: url(<?php echo ($icon_url); ?>);" <?php  }?>><?php echo $item['footer_contact_link_title']; ?></a>
                          <?php  } ?>
                        <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                        <?php dynamic_sidebar( 'footer-4' ); ?>
                    </div>
                    <div class="footer_bottom_row">
                        <p class="footer_copi"><?php echo carbon_get_theme_option( 'footer_copyright' ); ?></p>
                        <?php $footer_links =  carbon_get_theme_option( 'footer_links' );
                        if ( ! empty( $footer_links ) ): ?>
                        <ul class="footer_social">
                        <?php foreach ( $footer_links as $link ): 
                            $media = $link['footer_link_icon'];
                            $media_url = wp_get_attachment_image_url( $media, 'full' ); 
                            ?>
                            <li><a href="<?php echo $link['footer_link']; ?>"><img src="<?php echo ($media_url); ?>" alt=""></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </footer>
<?php wp_footer(); ?>
		</body>
</html>