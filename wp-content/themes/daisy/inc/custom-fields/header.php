<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'header_to' );
function header_to() {

    $header_container = Container::make( 'theme_options', 'Шапка')
// Родительская страница настроек Container::make( 'theme_options', 'Шапка' );
->set_icon( 'dashicons-laptop' )
		 ->add_fields(array(
        Field::make('image', 'header_logo', 'Логотип')
        ->set_width(25), 
        Field::make("checkbox", "header_nav_menu", "Включить меню навигации")->help_text('Настройка меню находится в разделе внешний вид/меню')
        ->set_width(25), 
        Field::make("checkbox", "header_search", "Включить поисковую строку")
        ->set_width(25), 
        Field::make( "separator", "header_btn", "Кнопка" ),
        Field::make( 'text', 'header_btn_label', 'Надпись' )->set_width(30),
        Field::make( 'icon', 'header_btn_icon', 'Иконка' )->set_width(70),
        Field::make( "text", "header_btn_link", "Ссылка" )->set_width(50),
        Field::make( "text", "header_btn_modal", "Popup" )->set_width(50),
		 ));

// Подстраница настроек, входящая в страницу 'Basic Options'
Container::make( 'theme_options', 'Новость/акция' ) 
->set_page_parent($header_container) 
		   // Название родительской страницы настроек
		 ->add_fields(array(
			Field::make('text', 'header_news_text', 'Новость/акция')->set_width(30),
            Field::make('icon', 'header_news_icon', 'Иконка')->set_width(70),
            Field::make( 'date_time', 'header_news_date', 'Дата события' ),
            Field::make( "separator", "header_news_btn", "Кнопка" ),
            Field::make( 'text', 'header_news_btn_label', 'Надпись' )->set_width(30),
            Field::make( 'icon', 'header_news_btn_icon', 'Иконка' )->set_width(70),
            Field::make( "text", "header_news_btn_link", "Ссылка" )->set_width(50),
            Field::make( "text", "header_news_btn_modal", "Popup" )->set_width(50),
		));

}