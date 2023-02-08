<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_blocks' );
function crb_blocks() {
    Container::make('post_meta', 'Настройки блока')
    ->show_on_post_type('blocks')
    ->add_tab('Конструктор блока', array(
        Field::make('select', 'block_type', 'Тип блока')
            ->add_options( array (
                'adv' => 'Преимущества',
                'about' => 'О нас',
            )),
        Field::make('text', 'block_main_title', 'Главный заголовок блока')->set_width(50),
        Field::make('text', 'block_id', 'id блока')->set_width(50)->help_text('Для навигации по якорным ссылкам'),
    ));
}