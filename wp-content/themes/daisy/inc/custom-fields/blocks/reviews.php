<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
add_action( 'carbon_fields_register_fields', 'crb_reviews' );
function crb_reviews() {
    Container::make('post_meta', 'Настройки этого блока')
    ->show_on_template('blocks/reviews.php')
    ->add_tab('Настройки отображения', array(
        Field::make( "radio", "reviews_slide_count", "Кол-во слайдев" )
        ->add_options( array(
            '4' => '4',
            '3' => '3',
            '2' => '2',
            '1' => '1',
        ) )->set_width(20),
        ))
    ->add_tab('Настройки контента', array(
        Field::make( 'complex', 'reviews_tabs', 'Вкладки' )
		->add_fields( array(
            Field::make( 'complex', 'reviews_card', 'Карточка' )
            ->add_fields( array(
                Field::make("text", "reviews_card_name", "Имя")->set_width(40),
                Field::make("image", "reviews_card_photo", "Фотография")->set_width(30),
                Field::make("text", "reviews_card_rating", "Рейтинг")->set_width(30)->help_text('Цифра от 1 до 5'),
                Field::make("textarea", "reviews_card_text", "Отзыв")->set_width(65),
                Field::make("date", "reviews_card_date", "Дата")->set_width(35),
            ))->set_layout('tabbed-horizontal')
        ))->set_layout('tabbed-horizontal')
        ->set_header_template('Вкладка')
    ));
}