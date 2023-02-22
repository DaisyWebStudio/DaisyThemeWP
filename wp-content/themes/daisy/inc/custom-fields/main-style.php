<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_main_style' );
function crb_main_style() {
    Container::make('theme_options', 'Настройки ui kit')
    ->add_tab('Настройки шрифтов', array(
        Field::make( "select", "font_family", "Выбрать основной шрифт" )
        ->add_options( array(
            'roboto' => 'roboto',
            'more'     => 'Другой пример шрифта',
        ) )->set_width(50),
    ))
    ->add_tab('Настройки цветов', array(
        Field::make( "separator", "btn_primary", "Главная кнопка" ),
        Field::make( "color", "btn_primary_bg_color", "Фоновый цвет" )->set_width(25),
        Field::make( "color", "btn_primary_color", "Цвет текста" )->set_width(25),
    ));
}