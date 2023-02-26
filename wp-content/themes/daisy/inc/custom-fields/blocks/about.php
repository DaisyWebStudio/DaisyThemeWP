<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_about' );
function crb_about() {
    Container::make('post_meta', 'Настройки этого блока')
    ->show_on_template('blocks/about.php')
    ->add_tab('Настройки контента', array(
		Field::make( 'complex', 'about_tabs', 'Вкладки' )
		->add_fields( array(
            Field::make( 'complex', 'about_tab_sliders', 'Слайды' )
		->add_fields( array(
		Field::make("separator", "about_item", "Настройки слайда"),
        Field::make("text", "about_title", "Заголовок"),
        Field::make("textarea", "about_descr", "Описание"),
        Field::make( 'complex', 'about_social_tooltip', 'Иконки-ссылки' )
        ->add_fields('about_social', 'Соц. сеть', array(
            Field::make("icon", "about_social_icon", "Иконка")->set_width(80),
            Field::make("text", "about_social_link", "Ссылка")->set_width(20),
        ))
        ->add_fields('about_tooltip', 'Тултип', array(
            Field::make("icon", "about_tooltip_icon", "Иконка")->set_width(80),
            Field::make("text", "about_tooltip_text", "Подсказка")->set_width(20),
        ))->set_layout('tabbed-horizontal'),
        Field::make("separator", "about_sep_btn", "Кнопка"),
        Field::make("text", "about_btn_label", "Надпись на кнопке")->set_width(40),
        Field::make("text", "about_btn_link", "Ссылка")->set_width(60),
        Field::make("icon", "about_btn_icon", "Иконка"),
        Field::make("radio", "about_proportions", "Размер левого контента")
        ->add_options( array (
            '100%' => '100%',
            '70%' => '70%',
            '50%' => '50%',
            '30%' => '30%',
        )),
        Field::make("separator", "about_two_content", "Настройки правого контента"),
        Field::make("select", "about_two_content_select", "Выбор контента")
        ->add_options( array (
            'none' => 'Нет контента',
            'form' => 'Форма обратной связи',
            'slider' => 'Слайдер картинки-видео',
        )),
        Field::make("text", "about_two_content_form", "Шорткод для формы")
        ->set_conditional_logic( array (
            'relation' => 'AND',
           array (
                'field' => 'about_two_content_select',
                'value' => 'form',
                'compare' => '='
           ))),
           Field::make( 'complex', 'about_two_content_slider', 'Картинка/видео' )
           ->add_fields('about_two_content_slide_image_type', 'Картинка', array(
            Field::make("image", "about_two_content_slide_image", "Картинка"),
            ))
            ->add_fields('about_two_content_slide_video_type', 'Видео', array(
                Field::make("text", "about_two_content_slide_video_link", "Ссылка на видео"),
                // Field::make("file", "about_two_content_slide_video", "Видео")->set_type('video'),
            ))->set_layout('tabbed-horizontal')
            ->set_conditional_logic( array (
                'relation' => 'AND',
               array (
                    'field' => 'about_two_content_select',
                    'value' => 'slider',
                    'compare' => '='
               ))),
		))->set_layout('tabbed-vertical')->set_header_template(' <% if (about_title) { %><%- about_title %><% } else { %> Слайд <% } %>'),
        ))
        ->set_layout('tabbed-horizontal')
        ->set_header_template(' Вкладка '),
    ))
    ->add_tab('Фоновая картинка блока', array(
        Field::make("image", "about_bg", "Фоновая картинка"),
    ));
}