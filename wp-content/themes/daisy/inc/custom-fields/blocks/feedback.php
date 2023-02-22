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
		Field::make("separator", "feedback_item", "Настройки слайда"),
        Field::make("text", "feedback_title", "Заголовок"),
        Field::make("textarea", "feedback_descr", "Описание"),
        Field::make("text", "feedback_form", "Шорткод для формы"),
        Field::make("radio", "feedback_proportions", "Размер левого контента")
        ->add_options( array (
            '100%' => '100%',
            '70%' => '70%',
            '50%' => '50%',
            '30%' => '30%',
        )),
        Field::make("separator", "feedback_two_content", "Настройки правого контента"),
           Field::make( 'complex', 'feedback_two_content_slider', 'Картинка' )
           ->add_fields('feedback_two_content_slide_image_type', 'Картинка', array(
            Field::make("image", "feedback_two_content_slide_image", "Картинка"),
            ))->set_layout('tabbed-horizontal')->set_header_template(' <% if (feedback_title) { %><%- feedback_title %><% } else { %> Слайд <% } %>'),
		))->set_layout('tabbed-vertical'),
        ))->set_layout('tabbed-horizontal')
        ->set_header_template(' Вкладка ')
    ));
}