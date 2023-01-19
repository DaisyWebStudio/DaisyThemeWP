<header class="sub_header sub_header_bg">
                        <div class="container submenu_container">
                        <?php 
                      $file = carbon_get_theme_option( 'daisy_header_logo' );
                      $file_url = wp_get_attachment_image_src( $file, 'full' );
                        if( $file_url ){ ?>
                            <a href="#" class="header_logo"><img class="img_svg" src="<?php echo ($file_url[0]); ?>" alt="Logo"></a> 
                        <?php } ?> 
                        <?php
                        wp_nav_menu( [
                            'theme_location'  => 'header-menu',
                            'container'       => 'nav',
                            'container_class' => 'sub_nav',
                            'container_id'    => '',
                            'menu_class'      => 'sub_nav_list',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ] ); ?>
                       
                            <!-- <nav class="sub_nav">
                                <ul class="sub_nav_list">
                                    <li><a href="#">Главная</a>
                                        <ul class="sub_nav_list_drop">
                                            <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                            <li><a href="#">Cupidatat</a>
                                                <ul class="second_sub_nav_list_drop">
                                                    <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                                    <li><a href="#">Cupidatat</a></li>
                                                    <li><a href="#">Laborum Cupidatat</a></li>
                                                    <li><a href="#">Nulla Lorem</a></li>
                                                    <li><a href="#">Cupidatat</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Laborum Cupidatat</a></li>
                                            <li><a href="#">Nulla Lorem</a></li>
                                            <li><a href="#">Cupidatat</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Портфолио</a></li>
                                    <li><a href="#">О нас</a></li>
                                    <li><a href="#">Сервис</a></li>
                                    <li><a href="#">Контакты</a></li>
                                    <li><a href="#">Вакансии</a></li>
                                </ul>
                            </nav> -->
                            <a href="#" class="click_me">Нажми меня</a>
                            <div class="sub_header_tools">
                                <a href="#" class="sub_search"></a>
                                <a href="#" class="sub_account"></a>
                                <a href="#" class="moon_clear"></a>
                                <a href="#" class="sub_language"></a>
                                <div class="burger">
                                    <span class="bar bar1"></span>
                                    <span class="bar bar2"></span>
                                    <span class="bar bar3"></span>
                                    <span class="bar bar4"></span>
                                    <span class="bar bar5"></span>
                                </div>
                            </div>
                        </div>
                    </header>