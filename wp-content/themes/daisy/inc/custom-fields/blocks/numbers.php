<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_numbers' );
function crb_numbers() {
    Container::make('post_meta', 'Настройки этого блока')
    ->show_on_template('blocks/numbers.php')
    ->add_tab('Настройки отображения', array(
        Field::make( "radio", "numbers_slide_count", "Кол-во слайдев" )
        ->add_options( array(
            '4' => '4',
            '3' => '3',
            '2' => '2',
            '1' => '1',
        ) )->set_width(50),
        ))
    ->add_tab('Настройки контента', array(
        Field::make( 'complex', 'numbers_tabs', 'Вкладки' )
		->add_fields( array(
        Field::make( 'complex', 'numbers_cards', 'Карточки' )
           ->add_fields( 'numbers_card', 'Карточка', array(
               Field::make( "text", "numbers_card_num", "Цифра" )->set_width(30),
               Field::make( "icon", "numbers_card_icon", "Иконка" )->set_width(70),
               Field::make( "textarea", "numbers_card_text", "Описание" ),
        ))
        ->set_layout('tabbed-vertical'),
        ))->set_layout('tabbed-horizontal')
        ->set_header_template(' Вкладка ')
    ));
}