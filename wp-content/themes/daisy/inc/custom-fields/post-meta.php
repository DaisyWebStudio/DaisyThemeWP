<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_post_meta' );
function crb_attach_post_meta() {
	Container::make('post_meta', 'Настройки поста')
        ->show_on_post_type('post')
        ->add_tab('Описание', array(
            Field::make('textarea', 'art_short_descr', 'Краткое описание'),
        ));
    Container::make('term_meta', 'Настройки категории')
        ->add_tab('Иконка', array(
            Field::make( 'image', 'cat_thumb_icon', 'Иконка категории' ),
            Field::make( 'image', 'cat_thumb_icon_hover', 'Иконка категории при наведении' ),
    ));
}