<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_blocks' );
function crb_blocks() {

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
require_once get_template_directory() . '/inc/custom-fields/blocks/slider.php';