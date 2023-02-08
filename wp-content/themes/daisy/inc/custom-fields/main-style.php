<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_main_style' );
function crb_main_style() {
    Container::make('theme_options', 'Настройки ui kit')
    ->add_tab('Настройки шрифтов', array(
        
    ))
    ->add_tab('Настройки цветов', array(
        
    ));
}