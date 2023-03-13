<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_contacts' );
function crb_contacts() {
    Container::make('post_meta', 'Настройки этого блока')
    ->show_on_template('blocks/contacts.php')
    ->add_tab('Настройки контента', array(
		Field::make( 'complex', 'contacts_tabs', 'Вкладки' )
		->add_fields( array(
            Field::make( 'complex', 'contacts_tab_sliders', 'Слайды' )
		->add_fields( array(
            Field::make("radio", "contacts_proportions", "Размер карты")
        ->add_options( array (
            '70%' => '70%',
            '50%' => '50%',
            '30%' => '30%',
        ))->set_width(30),
        Field::make( "textarea", "contacts_map", "Код для карты" )->set_width(70),
        Field::make( "text", "contacts_address", "Адрес" )->set_width(25),
        Field::make( "text", "contacts_tel", "Телефон" )->set_width(25),
        Field::make( "text", "contacts_mail", "Эл. почта" )->set_width(25),
        Field::make( "text", "contacts_inf", "Доп. информация" )->set_width(25),
        Field::make( 'complex', 'contacts_social', 'Соц. сети' )
        ->add_fields( array(
            Field::make("icon", "contacts_social_icon", "Иконка")->set_width(80),
            Field::make("text", "contacts_social_link", "Ссылка")->set_width(20),
        ))->set_layout('tabbed-horizontal'),
		))->set_layout('tabbed-horizontal')->set_header_template('Слайд')
        ))
        ->set_layout('tabbed-horizontal')
        ->set_header_template(' Вкладка ')
    ));
}