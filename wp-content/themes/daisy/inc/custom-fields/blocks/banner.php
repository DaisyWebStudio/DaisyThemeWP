<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
add_action( 'carbon_fields_register_fields', 'crb_banner' );
function crb_banner() {
    Container::make('post_meta', 'Настройки этого блока')
    ->show_on_template('blocks/banner.php')
    ->add_tab('Настройки отображения', array(
        Field::make( "radio", "banner_icon", "Рассположение текстового контента" )
        ->add_options( array (
            'left_50' => 'Слева 50%',
            'left_100' => 'Слева 100%',
            'center_50' => 'По центру 50%',
            'center_100' => 'По центру 100%',
        )),
        ))
    ->add_tab('Настройки контента', array(
        Field::make( 'complex', 'banner_slides', 'Слайды' )
		->add_fields( array(
            Field::make( 'text', 'banner_title', 'Заголовок' ),
            Field::make( 'text', 'banner_descr', 'Описание' ),
            Field::make( 'separator', 'banner_btn', 'Настройки кнопки' ),
            Field::make( 'text', 'banner_btn_label', 'Надпись' )->set_width(30),
            Field::make( 'icon', 'banner_btn_icon', 'Иконка' )->set_width(70),
            Field::make( "text", "banner_btn_link", "Ссылка" )->set_width(50),
		    Field::make( "text", "banner_btn_modal", "Popup" )->set_width(50),
        ))->set_layout('tabbed-horizontal')
        ->set_header_template('Слайд')
    ));
}