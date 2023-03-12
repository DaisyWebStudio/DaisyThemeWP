<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_adv' );
function crb_adv() {
    Container::make('post_meta', 'Настройки этого блока')
    ->show_on_template('blocks/adv.php')
    ->add_tab('Настройки отображения', array(
        Field::make( "radio", "adv_side_image", "Расположение картинки" )
				  ->add_options( array(
                      'none' => 'Без картинки',
                      'bg'     => 'Фоновая картинка',
					  'top'     => 'Сверху',
					  'left' => 'Слева',
					  'right'  => 'Справа',
				  ) )->set_width(50),
				  Field::make( "radio", "adv_slide_count", "Кол-во слайдев" )
				  ->add_options( array(
                      '4' => '4',
                      '3' => '3',
					  '2' => '2',
					  '1' => '1',
				  ) )->set_width(50),
				 )) 
	->add_tab('Настройки контента', array(
		Field::make( 'complex', 'adv_tabs', 'Вкладки' )
		->add_fields( array(
		Field::make('association', 'card_ass')
        ->set_types(array(
          array(
            'type' => 'term',
			'taxonomy' => 'cards_tax',
          ),
        ))
		))
		->set_layout('tabbed-horizontal')
        ->set_header_template(' Вкладка '),
    ))
	->add_tab('Настройки кнопки', array(
		Field::make( "separator", "card_btn", "Настройки кнопки" ),
		Field::make( "text", "card_btn_label", "Надпиь на кнопке" )->set_width(40),
		Field::make( "icon", "card_btn_icon", "Иконка" )->set_width(60),
		// Field::make( "checkbox", "card_btn_permalink", "Permalink" )->set_width(20),
		Field::make( "separator", "card_btn_permalink", "По умолчанию ссылка на страницу записи" ),
		Field::make( "text", "card_btn_link", "Ссылка" )->set_width(50),
		Field::make( "text", "card_btn_modal", "Popup" )->set_width(50),
    ))
	->add_tab('Включить дату', array(
		Field::make( "checkbox", "card_date", "Включить дату" ),
    ))
	;
	Container::make('post_meta', 'Настройки карточки')
    ->show_on_post_type('cards')
    ->add_tab('Настройки контента', array(
        Field::make( "rich_text", "card_descr", "Описание" ),
		Field::make( "separator", "card_icon_seting", "Настройки иконки" ),
		Field::make( "text", "card_icon_text", "Цифра/текст" )->set_width(20),
		Field::make( "image", "card_icon_image", "Иконка" )->set_width(20),
		Field::make( "icon", "card_icon_icon", "Иконка" )->set_width(60),
	));
}