<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_slider' );
function crb_slider() {
    Container::make('post_meta', 'Настройки этого блока')
    ->show_on_template('blocks/slider.php')
    ->add_tab('Слайдер', array(
        Field::make('text', 'slider_test', 'Слайдер'),
    ))->add_tab('Настройки контента', array(
		Field::make( 'complex', 'tabs', 'Вкладки' )
		->add_fields( array(
		Field::make('text', 'tab_title', 'Заголовок вкладки')->set_width(40),
		Field::make('icon', 'tab_icon', 'Иконка')->set_width(60),
		Field::make('association', 'card_ass')
        ->set_types(array(
          array(
            'type' => 'term',
			'post_type' => 'cards_tax',
          ),
        ))
		))
    ));
}