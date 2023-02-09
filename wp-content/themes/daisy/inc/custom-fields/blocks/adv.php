<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_adv' );
function crb_adv() {
    Container::make('post_meta', 'Настройки этого блока')
    ->show_on_template('adv.php')
    ->add_tab('Преемущества', array(
        Field::make('text', 'adv_test', 'Преемущества'),
    ));
}