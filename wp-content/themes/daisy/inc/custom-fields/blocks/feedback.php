<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_feedback' );
function crb_feedback() {
    Container::make('post_meta', 'Настройки этого блока')
    ->show_on_template('blocks/feedback.php')
    ->add_tab('Настройки контента', array(
        Field::make( 'complex', 'feedback_tabs', 'Вкладки' )
		->add_fields( array(
            Field::make( 'complex', 'feedback_tab_sliders', 'Слайды' )
		->add_fields( array(
            Field::make("radio", "feedback_proportions", "Размер основного контента")
            ->add_options( array (
                // '100%' => '100%',
                '70%' => '70%',
                '50%' => '50%',
                '30%' => '30%',
            )),
            Field::make( 'complex', 'feedback_content', 'Контент' )  
           ->add_fields('feedback_content_main', 'Основной', array(
                Field::make("text", "feedback_title", "Заголовок"),
                Field::make("rich_text", "feedback_descr", "Описание"),
                Field::make( 'complex', 'feedback_social_tooltip', 'Иконки-ссылки' )
                ->add_fields('feedback_social', 'Соц. сеть', array(
                    Field::make("icon", "feedback_social_icon", "Иконка")->set_width(80),
                    Field::make("text", "feedback_social_link", "Ссылка")->set_width(20),
                ))
                ->add_fields('feedback_tooltip', 'Тултип', array(
                    Field::make("icon", "feedback_tooltip_icon", "Иконка")->set_width(80),
                    Field::make("text", "feedback_tooltip_text", "Подсказка")->set_width(20),
                ))->set_layout('tabbed-horizontal'),
                Field::make("separator", "feedback_sep_btn", "Кнопка"),
                Field::make("text", "feedback_btn_label", "Надпись на кнопке")->set_width(40),
                Field::make("text", "feedback_btn_link", "Ссылка")->set_width(60),
                Field::make("icon", "feedback_btn_icon", "Иконка"),
            ))
            ->add_fields('feedback_content_form', 'Форма связи', array(
                Field::make("text", "feedback_form_title", "Заголовок"),
                Field::make("textarea", "feedback_form_descr", "Описание"),
                Field::make("text", "feedback_form", "Шорткод для формы"),
            ))
            ->add_fields('feedback_content_slider', 'Картинка/видео', array(
                Field::make( 'complex', 'feedback_content_slider_select', 'Картинка/видео' )
                ->add_fields('feedback_content_slider_image_type', 'Картинка', array(
                Field::make("image", "feedback_content_slider_image", "Картинка"),
                ))
                ->add_fields('feedback_content_slider_video_type', 'Видео', array(
                    Field::make("text", "feedback_content_slider_video_link", "Ссылка на видео"),
                    // Field::make("file", "feedback_two_content_slide_video", "Видео")->set_type('video'),
                ))->set_layout('tabbed-horizontal')
            ))
            ->set_layout('tabbed-horizontal')->set_max(2)->set_min(1)
		))->set_layout('tabbed-horizontal')->set_header_template('Слайд'),
        ))->set_layout('tabbed-horizontal')
        ->set_header_template(' Вкладка ')
    ));
}