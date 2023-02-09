<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_slider' );
function crb_slider() {
    Container::make('post_meta', 'Настройки этого блока')
    ->show_on_template('slider.php')
    ->add_tab('Слайдер', array(
        Field::make('text', 'slider_test', 'Слайдер'),
    ));
}