<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_information' );
function crb_information() {
    Container::make('post_meta', 'Настройки этого блока')
    ->show_on_template('blocks/information.php')
    ->add_tab('Настройки контента', array(
		Field::make( 'complex', 'information_tabs', 'Вкладки' )
		->add_fields( array(
            Field::make( 'complex', 'information_tab_sliders', 'Слайды' )
		->add_fields( array(
            Field::make("radio", "information_proportions", "Размер основного контента")
        ->add_options( array (
            '70%' => '70%',
            '50%' => '50%',
            '30%' => '30%',
        )),
            Field::make( 'complex', 'information_tab_inf', 'Вкладки с информацией' )
            ->add_fields( array(
                Field::make('text', 'information_name', 'Название вкладки')->set_width(30),
		        Field::make('icon', 'information_icon', 'Иконка')->set_width(70),
                Field::make( 'media_gallery', 'information_media_gallery', 'Выбор фотографий' )
                ->set_type( array( 'image'))
                ->help_text('Удерживайте ctrl для выбора сразу нескольких изображений'),
                Field::make('text', 'information_title', 'Заголовок'),
                Field::make('textarea', 'information_descr', 'Описание'),
                Field::make( 'separator', 'information_btn', 'Настройки кнопки' ),
                Field::make( 'text', 'information_btn_label', 'Надпись' )->set_width(30),
                Field::make( 'icon', 'information_btn_icon', 'Иконка' )->set_width(70),
                Field::make( "text", "information_btn_link", "Ссылка" )->set_width(50),
                Field::make( "text", "information_btn_modal", "Popup" )->set_width(50),
            ))->set_layout('tabbed-horizontal')->set_header_template(' <% if (information_name) { %><%- information_name %><% } else { %> Вкладка с информацией <% } %>')
		))->set_layout('tabbed-horizontal')->set_header_template('Слайд')
        ))
        ->set_layout('tabbed-horizontal')
        ->set_header_template(' Вкладка ')
    ));
}