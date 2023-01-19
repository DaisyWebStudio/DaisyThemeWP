<style>
            body{
                color: <?php echo carbon_get_theme_option( 'theme_text_color' ) ?>;
                --anchor-color: <?php echo carbon_get_theme_option( 'theme_text_two_color' ) ?>;
                --bg-cart: <?php echo carbon_get_theme_option( 'theme_card_bg_color' ) ?>;
                --bg-small-cart: #FBFBFB;
                --bg-searh: #FBFBFB;
                --bg-button-sl: #FBFBFB;
                --bg-dots: #9D9D9D;
                --title-second-color: #000;
                --bg-input: #fff;
                --header-logo: #313131;
                --gray-light: #F3F3F3;
                --light-light: #FBFBFB;
                --bg-arrowcal: #1F77FC;
                --bg-fl-header: #F3F3F3;
                --bg-filter: #F3F3F3;
            }
            .advantages_slider_header, .d__note{
                border-color: <?php echo carbon_get_theme_option( 'theme_text_color' ) ?>;
            }
            img{
                border-radius: inherit;
            }
            .theme-btn, .single_add_to_cart_button{
                background-color:<?php echo carbon_get_theme_option( 'theme_btn_color' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_btn_text_color' ) ?>;
                border-radius: <?php echo carbon_get_theme_option( 'theme_btn_border_radius' ) ?>
            }
            .theme-btn:hover, .single_add_to_cart_button:hover{
                background-color:<?php echo carbon_get_theme_option( 'theme_btn_color_hover' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_btn_text_color_hover' ) ?>;
            }
            .theme-btn:active, .single_add_to_cart_button:active{
                background-color:<?php echo carbon_get_theme_option( 'theme_btn_color_active' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_btn_text_color_active' ) ?>;
            }
            .theme-btn:disabled, .single_add_to_cart_button:disabled{
                background-color:<?php echo carbon_get_theme_option( 'theme_btn_color_dis' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_btn_text_color_dis' ) ?>;
            }
            .theme-btn-two, .products .single_add_to_cart_button{
                background-color:<?php echo carbon_get_theme_option( 'theme_btntwo_color' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_btntwo_text_color' ) ?>;
                border-radius: <?php echo carbon_get_theme_option( 'theme_btn_border_radius' ) ?>;
            }
            .theme-btn-two:hover, .products .single_add_to_cart_button:hover{
                background-color:<?php echo carbon_get_theme_option( 'theme_btntwo_color_hover' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_btntwo_text_color_hover' ) ?>;
            }
            .theme-btn-two:active, .products .single_add_to_cart_button:active{
                background-color:<?php echo carbon_get_theme_option( 'theme_btntwo_color_active' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_btntwo_text_color_active' ) ?>;
            }
            .theme-btn-two:disabled, .products .single_add_to_cart_button:disabled{
                background-color:<?php echo carbon_get_theme_option( 'theme_btntwo_color_dis' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_btntwo_text_color_dis' ) ?>;
            }
            .radius-image{
                border-radius: <?php echo carbon_get_theme_option( 'theme_image_border_radius' ) ?>;
                overflow: hidden;
            }
            .radius-image video{
                overflow: hidden;
            }
            .radius-image_top{
                border-radius: <?php echo carbon_get_theme_option( 'theme_image_border_radius' ) ?> <?php echo carbon_get_theme_option( 'theme_image_border_radius' ) ?> 0 0;
            }
            .radius-image_right{
                border-radius: 0 <?php echo carbon_get_theme_option( 'theme_image_border_radius' ) ?> <?php echo carbon_get_theme_option( 'theme_image_border_radius' ) ?> 0;
            }
            .radius-sbtn{
                border-radius: 0 <?php echo carbon_get_theme_option( 'theme_btn_border_radius' ) ?> <?php echo carbon_get_theme_option( 'theme_btn_border_radius' ) ?> 0;
            }
            .radius-search{
                border-radius: <?php echo carbon_get_theme_option( 'theme_btn_border_radius' ) ?>;
            }
            .d__dot{
                background-color:<?php echo carbon_get_theme_option( 'theme_btn_color' ) ?>;
            }
            .second_title{
                color: <?php echo carbon_get_theme_option( 'theme_section_title_color' ) ?>;
            }
            .footer{
                background: <?php echo carbon_get_theme_option( 'theme_footer_color' ) ?>;
            }
            .par-cat{
                background: <?php echo carbon_get_theme_option( 'theme_cat_par_bg' ) ?>;
            }
            .par-cat__item{
                color: <?php echo carbon_get_theme_option( 'theme_cat_par_color' ) ?>;
            }
            .par-cat__item:hover{
                <?php if(carbon_get_theme_option( 'theme_cat_par_bg_hover' )) { ?>
                    background: <?php echo carbon_get_theme_option( 'theme_cat_par_bg_hover' ) ?>;
               <?php } else { ?>
                    background: <?php echo carbon_get_theme_option( 'theme_cat_child1_bg' ) ?>;
              <?php } ?>
              <?php if(carbon_get_theme_option( 'theme_cat_par_color_hover' )) { ?>
                    color: <?php echo carbon_get_theme_option( 'theme_cat_par_color_hover' ) ?>;
               <?php } else { ?>
                    color: <?php echo carbon_get_theme_option( 'theme_cat_par_bg' ) ?>;
              <?php } ?>
            }
            .cild-1__item{
                background: <?php echo carbon_get_theme_option( 'theme_cat_child1_bg' ) ?>;
                color: <?php echo carbon_get_theme_option( 'theme_cat_child1_color' ) ?>;
            } 
            .cild-1__item:hover{
                <?php if(carbon_get_theme_option( 'theme_cat_child1_bg_hover' )) { ?>
                    background: <?php echo carbon_get_theme_option( 'theme_cat_child1_bg_hover' ) ?>;
               <?php } else { ?>
                    background: <?php echo carbon_get_theme_option( 'theme_cat_child2_bg' ) ?>;
              <?php } ?>
              <?php if(carbon_get_theme_option( 'theme_cat_child1_color_hover' )) { ?>
                    background: <?php echo carbon_get_theme_option( 'theme_cat_child1_color_hover' ) ?>;
               <?php } else { ?>
                color: #000;
              <?php } ?>
            }         
            .child-1{
                background: <?php echo carbon_get_theme_option( 'theme_cat_child1_bg' ) ?>;
            }
            .child-2{
                background: <?php echo carbon_get_theme_option( 'theme_cat_child2_bg' ) ?>;
            }
            .cild-2__item{
                color: <?php echo carbon_get_theme_option( 'theme_cat_child2_color' ) ?>;
            } 
            .cild-2__item:hover{
              <?php if(carbon_get_theme_option( 'theme_cat_child2_color_hover' )) { ?>
                    color: <?php echo carbon_get_theme_option( 'theme_cat_child2_color_hover' ) ?>;
               <?php } else { ?>
                color: <?php echo carbon_get_theme_option( 'theme_cat_par_bg' ) ?>;
              <?php } ?>
            } 
            <?php $cat_image_hidden = carbon_get_theme_option( 'theme_catalog_image_hidden' ); 
            if($cat_image_hidden == 'no') { ?>
                .woocommerce-loop-product__link img{
                    display: none;
                }
                .woocommerce-loop-product__title {
                    margin-top: 40px;
                }
                .woocommerce-product-gallery{
                    display: none;
                }
                .product, .flex-control-thumbs{
                    align-items: flex-start;
                }
                .main_note_slider_goods .popular_goods_slider{
                    display: none;
                }
           <?php } ?>
           .main_slider_social li a, .advantages_slider_icon{
                background-color: <?php echo carbon_get_theme_option( 'theme_icon_bg_color' ) ?>;
                transition: .3s;
           }
           .main_slider_social li a:hover{
                background-color: <?php echo carbon_get_theme_option( 'theme_icon_bg_color_hover' ) ?>;
                transition: .3s;
           }
            /* .woocommerce-loop-product__title{
                margin-top: 30px;
            }
            .size-woocommerce_thumbnail, .woocommerce-placeholder{
                display: none;
            } */
            .plyr{
                min-width: 60%;
                }
        </style>