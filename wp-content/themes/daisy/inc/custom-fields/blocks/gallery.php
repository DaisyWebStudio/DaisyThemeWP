<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
add_action( 'carbon_fields_register_fields', 'crb_gallery' );
function crb_gallery() {
    Container::make('post_meta', 'Настройки этого блока')
    ->show_on_template('blocks/gallery.php')
    ->add_tab('Настройки отображения', array(
        Field::make( "radio", "gallery_slide_count", "Кол-во слайдев" )
        ->add_options( array(
            '4' => '4',
            '3' => '3',
            '2' => '2',
            '1' => '1',
        ) )->set_width(20),
        Field::make( "icon", "gallery_icon", "Иконка" )
        ->set_width(80),
        ))
    ->add_tab('Настройки контента', array(
        Field::make( 'complex', 'gallery_tabs', 'Вкладки' )
		->add_fields( array(
            Field::make( 'media_gallery', 'crb_media_gallery', 'Выбор фотографий' )
            ->set_type( array( 'image'))
            ->help_text('Удерживайте ctrl для выбора сразу нескольких изображений'),
        ))->set_layout('tabbed-horizontal')
        ->set_header_template('Вкладка')
    ));
}