<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_counter' );
function crb_counter() {
    Container::make('post_meta', 'Настройки этого блока')
    ->show_on_template('blocks/counter.php')
    ->add_tab('Настройки контента', array(
		Field::make( 'complex', 'counter_tabs', 'Вкладки' )
		->add_fields( array(
            Field::make( 'complex', 'counter_tab_sliders', 'Слайды' )
		->add_fields( array(
		Field::make("separator", "counter_item", "Настройки счетчика"),
        Field::make('text', 'counter_title', 'Заголовок счетчика')->set_width(40),
		Field::make('icon', 'counter_icon', 'Иконка')->set_width(60),
        Field::make('date_time', 'counter_date_time', 'Дата и время'),
		Field::make('icon', 'counter_btn_icon', 'Иконка на кнопке'),
        Field::make('text', 'counter_btn_label', 'Надпись на кнопке')->set_width(40),
        Field::make('text', 'counter_btn_link', 'Ссылка на кнопке')->set_width(60),
		))
        ))
    ));
}