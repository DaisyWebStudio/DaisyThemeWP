<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'footer_to' );
function footer_to() {

    $footer_container = Container::make( 'theme_options', 'Подвал')
// Родительская страница настроек Container::make( 'theme_options', 'Шапка' );
->set_icon( 'dashicons-paperclip' )
		 ->add_fields(array(
            Field::make( 'complex', 'footer_content', 'Контент' )  
            ->add_fields('footer_content_main', 'Информация/контакты', array(
                 Field::make("image", "footer_logo", "Логотип")->set_width(30),
                 Field::make("rich_text", "footer_descr", "Описание")->set_width(70),
                 Field::make( "separator", "footer_inf", "Информация" ),
                 Field::make( 'text', 'footer_times', 'Часы работы' )->set_width(33),
                 Field::make( 'text', 'footer_address', 'Адрес' )->set_width(33),
                 Field::make( 'text', 'footer_phone', 'Телефон' )->set_width(33),
                 Field::make( "separator", "footer_btn", "Кнопка" ),
                 Field::make( 'text', 'footer_btn_label', 'Надпись' )->set_width(30),
                 Field::make( 'icon', 'footer_btn_icon', 'Иконка' )->set_width(70),
                 Field::make( "text", "footer_btn_link", "Ссылка" )->set_width(50),
                 Field::make( "text", "footer_btn_modal", "Popup" )->set_width(50),
             ))
             ->add_fields('footer_content_nav', 'Навигация', array(
                Field::make("text", "footer_nav_title", "Заголовок"),
            ))
             ->add_fields('footer_content_form', 'Форма связи', array(
                 Field::make("text", "footer_form_title", "Заголовок"),
                 Field::make("textarea", "footer_form_descr", "Описание"),
                 Field::make("text", "footer_form", "Шорткод для формы"),
             ))
             ->add_fields('footer_content_map', 'Карта', array(
                Field::make("textarea", "footer_map", "Код для карты"),
            ))->set_layout('tabbed-horizontal')->set_max(4)
		 ));

// Подстраница настроек, входящая в страницу 'Basic Options'
Container::make( 'theme_options', 'Копирайт, соц.сети' ) 
->set_page_parent($footer_container) 
		   // Название родительской страницы настроек
		 ->add_fields(array(
			Field::make('text', 'footer_copyright', 'Копирайт')->set_width(30),
            Field::make( 'complex', 'footer_social', 'Соц. сети' )  
            ->add_fields( array(
                Field::make("icon", "footer_social_icon", "Иконка")->set_width(70),
                Field::make("text", "footer_social_link", "Ссылка")->set_width(30),
            ))->set_layout('tabbed-horizontal')
		));

}