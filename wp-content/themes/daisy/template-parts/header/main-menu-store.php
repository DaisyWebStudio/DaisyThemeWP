<header class="header">
                <div class="container header_container">
                    <div class="logo_catalog">
                    <?php 
                      $file = carbon_get_theme_option( 'daisy_header_logo' );
                      $file_url = wp_get_attachment_image_src( $file, 'full' );
                        if( $file_url ){ ?>
                          <a href="#" class="header_logo"><img class="img_svg" src="<?php echo ($file_url[0]); ?>" alt="Logo"></a> 
                        <?php } ?> 
                        <span class="to_catalog_btn hover_top">Каталог</span>
                    </div>
                    <?php if (carbon_get_theme_option( 'daisy_header_search_inp') == 'yes'){ 
                        get_search_form();
                     } ?>
                    <div class="header_tools">
                        <div class="account_wrap">
                            <span class="account hover_top"></span>
                            <div class="account_drop">
                                <a href="#">Заказы</a>
                                <a href="#">Избранное</a>
                                <a href="#">Корзина</a>
                                <a href="#">Сравнения</a>
                                <a href="#">Профиль</a>
                                <a href="#">Доставка</a>
                            </div>
                        </div>
                        <div class="heart_item heart_item1">
                            <span class="heart hover_top"></span>
                            <div class="heart_drop">
                                <div class="drop_scroll">
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/1.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Какой-то товар</h3>
                                            <p class="drop_scroll_cost">22 000 р</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                            <a href="#" class="drop_scroll_cart"></a>
                                        </div>
                                    </div>
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/2.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Какой-то товар</h3>
                                            <p class="drop_scroll_cost">22 000 р</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                            <a href="#" class="drop_scroll_cart"></a>
                                        </div>
                                    </div>
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/3.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Какой-то товар</h3>
                                            <p class="drop_scroll_cost">22 000 р</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                            <a href="#" class="drop_scroll_cart"></a>
                                        </div>
                                    </div>
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/1.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Какой-то товар</h3>
                                            <p class="drop_scroll_cost">22 000 р</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                            <a href="#" class="drop_scroll_cart"></a>
                                        </div>
                                    </div>
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/2.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Какой-то товар</h3>
                                            <p class="drop_scroll_cost">22 000 р</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                            <a href="#" class="drop_scroll_cart"></a>
                                        </div>
                                    </div>
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/3.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Какой-то товар</h3>
                                            <p class="drop_scroll_cost">22 000 р</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                            <a href="#" class="drop_scroll_cart"></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="heart_drop_btn">Перейти в избранное</a>
                            </div>
                        </div>
                        <div class="heart_item heart_item2">
                            <span class="bar_chart hover_top"></span>
                            <div class="heart_drop2">
                                <div class="drop_scroll">
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/1.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Смартфоны</h3>
                                            <p class="drop_scroll_cost">Сравнение 1</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                        </div>
                                    </div>
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/2.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Смартфоны</h3>
                                            <p class="drop_scroll_cost">Сравнение 2</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                        </div>
                                    </div>
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/3.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Смартфоны</h3>
                                            <p class="drop_scroll_cost">Сравнение 3</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                        </div>
                                    </div>
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/1.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Смартфоны</h3>
                                            <p class="drop_scroll_cost">Сравнение 4</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                        </div>
                                    </div>
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/2.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Смартфоны</h3>
                                            <p class="drop_scroll_cost">Сравнение 5</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                        </div>
                                    </div>
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/3.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Смартфоны</h3>
                                            <p class="drop_scroll_cost">Сравнение 6</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="heart_drop_btn">Перейти к сравнениям</a>
                            </div>
                        </div>
                        <div class="heart_item heart_item3">
                            <span class="cart hover_top"></span>
                            <div class="heart_drop3">
                                <div class="drop_scroll">
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/1.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Какой-то товар</h3>
                                            <p class="drop_scroll_cost">22 000 р</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                            <a href="#" class="drop_scroll_cart2"></a>
                                        </div>
                                    </div>
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/2.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Какой-то товар</h3>
                                            <p class="drop_scroll_cost">22 000 р</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                            <a href="#" class="drop_scroll_cart2"></a>
                                        </div>
                                    </div>
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/3.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Какой-то товар</h3>
                                            <p class="drop_scroll_cost">22 000 р</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                            <a href="#" class="drop_scroll_cart2"></a>
                                        </div>
                                    </div>
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/1.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Какой-то товар</h3>
                                            <p class="drop_scroll_cost">22 000 р</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                            <a href="#" class="drop_scroll_cart2"></a>
                                        </div>
                                    </div>
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/2.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Какой-то товар</h3>
                                            <p class="drop_scroll_cost">22 000 р</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                            <a href="#" class="drop_scroll_cart2"></a>
                                        </div>
                                    </div>
                                    <div class="drop_scroll_item">
                                        <a href="#" class="drop_scroll_img"><img src="img/heart-drop/3.png" alt=""></a>
                                        <div class="drop_scroll_info">
                                            <h3 class="drop_scroll_title">Какой-то товар</h3>
                                            <p class="drop_scroll_cost">22 000 р</p>
                                            <a href="#" class="drop_scroll_remove"></a>
                                            <a href="#" class="drop_scroll_cart2"></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="heart_drop_btn">Перейти в корзину</a>
                            </div>
                        </div>
                        <div class="burger">
                            <span class="bar bar1"></span>
                            <span class="bar bar2"></span>
                            <span class="bar bar3"></span>
                            <span class="bar bar4"></span>
                            <span class="bar bar5"></span>
                        </div>
                    </div>
                </div>
                <div class="container catalog_nav_container">
                    <div class="catalog_nav_wrap">
                        <ul class="catalog_nav_list">
                            <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                            <li><a href="#">Cupidatat</a></li>
                            <li><a href="#">Laborum Cupidatat</a></li>
                            <li><a href="#">Nulla Lorem</a></li>
                            <li><a href="#">Cupidatat</a></li>
                            <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                            <li><a href="#">Laborum Cupidatat</a></li>
                            <li><a href="#">Nulla Lorem</a></li>
                            <li><a href="#">Cupidatat</a></li>
                        </ul>
                        <div class="catalog_nav_scroll">
                            <div class="catalog_nav_row">
                                <div class="catalog_nav_row_item">
                                    <h3 class="catalog_nav_title">Какой-то заголовок</h3>
                                    <ul class="catalog_nav_scroll_list">
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Laborum Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                        <li><a href="#">Laborum Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                    </ul>
                                </div>
                                <div class="catalog_nav_row_item">
                                    <h3 class="catalog_nav_title">Какой-то заголовок</h3>
                                    <ul class="catalog_nav_scroll_list">
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Laborum Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                    </ul>
                                </div>
                                <div class="catalog_nav_row_item">
                                    <h3 class="catalog_nav_title">Какой-то заголовок</h3>
                                    <ul class="catalog_nav_scroll_list">
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Laborum Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                        <li><a href="#">Laborum Cupidatat</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="catalog_nav_row">
                                <div class="catalog_nav_row_item">
                                    <h3 class="catalog_nav_title">Какой-то заголовок</h3>
                                    <ul class="catalog_nav_scroll_list">
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Laborum Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                        <li><a href="#">Laborum Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                    </ul>
                                </div>
                                <div class="catalog_nav_row_item">
                                    <h3 class="catalog_nav_title">Какой-то заголовок</h3>
                                    <ul class="catalog_nav_scroll_list">
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Laborum Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                    </ul>
                                </div>
                                <div class="catalog_nav_row_item">
                                    <h3 class="catalog_nav_title">Какой-то заголовок</h3>
                                    <ul class="catalog_nav_scroll_list">
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Laborum Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                        <li><a href="#">Laborum Cupidatat</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="catalog_nav_row">
                                <div class="catalog_nav_row_item">
                                    <h3 class="catalog_nav_title">Какой-то заголовок</h3>
                                    <ul class="catalog_nav_scroll_list">
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Laborum Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                        <li><a href="#">Laborum Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                    </ul>
                                </div>
                                <div class="catalog_nav_row_item">
                                    <h3 class="catalog_nav_title">Какой-то заголовок</h3>
                                    <ul class="catalog_nav_scroll_list">
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Laborum Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                    </ul>
                                </div>
                                <div class="catalog_nav_row_item">
                                    <h3 class="catalog_nav_title">Какой-то заголовок</h3>
                                    <ul class="catalog_nav_scroll_list">
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Laborum Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem</a></li>
                                        <li><a href="#">Cupidatat</a></li>
                                        <li><a href="#">Nulla Lorem Nulla Lorem</a></li>
                                        <li><a href="#">Laborum Cupidatat</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="catalog_nav_close"></a>
                    </div> 
                </div>
            </header>