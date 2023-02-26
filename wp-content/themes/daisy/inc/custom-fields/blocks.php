<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_blocks' );
function crb_blocks() {
  Container::make('post_meta', 'Общие настройки блока')
  ->show_on_post_type('blocks')
  ->add_tab('Заголовок', array(
    Field::make( "text", "block_title", "Заголовок блока" ),
  ))
  ->add_tab('Кнопка подробнее', array(
    Field::make( "text", "block_btn_label", "Надпись на ссылке" )->set_width(40),
    Field::make( "text", "block_btn_link", "Ссылка" )->set_width(60),
    Field::make( "icon", "block_btn_icon", "Иконка" ),
  ))
    ->add_tab('Вкладки', array(
      Field::make( 'complex', 'tabs', 'Вкладки' )
		->add_fields( array(
		Field::make('text', 'tab_title', 'Заголовок вкладки')->set_width(30),
		Field::make('icon', 'tab_icon', 'Иконка')->set_width(70),
		))->set_layout('tabbed-horizontal')
    ->set_header_template('  <% if (tab_title) { %><%- tab_title %><% } else { %> Вкладки <% } %> ')
      ))
      ->add_tab('ID блока', array(
        Field::make( "text", "block_id", "Уникальное название блока для навигации по якорным ссылкам" ),
        ));
    Container::make('post_meta', 'Настройки категории')
    ->show_on_post_type('page')
    ->add_tab('Блоки на странице', array(
        Field::make('association', 'ass')
        ->set_types(array(
          array(
            'type' => 'post',
            'post_type' => 'blocks',
          ),
        ))
));
}

require_once get_template_directory() . '/inc/custom-fields/blocks/adv.php';
require_once get_template_directory() . '/inc/custom-fields/blocks/counter.php';
require_once get_template_directory() . '/inc/custom-fields/blocks/about.php';
require_once get_template_directory() . '/inc/custom-fields/blocks/feedback.php';
require_once get_template_directory() . '/inc/custom-fields/blocks/goods.php';
require_once get_template_directory() . '/inc/custom-fields/blocks/numbers.php';
require_once get_template_directory() . '/inc/custom-fields/blocks/gallery.php';
require_once get_template_directory() . '/inc/custom-fields/blocks/banner.php';
require_once get_template_directory() . '/inc/custom-fields/blocks/information.php';
