<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_goods' );
function crb_goods() {
    Container::make('post_meta', 'Настройки этого блока')
    ->show_on_template('blocks/goods.php')
    ->add_tab('Настройки отображения', array(
        Field::make( "radio", "goods_side_image", "Расположение картинки" )
				  ->add_options( array(
					  'top'     => 'Сверху',
					  'left' => 'Слева',
				  ) )->set_width(50),
				  Field::make( "radio", "goods_slide_count", "Кол-во слайдев" )
				  ->add_options( array(
                      '4' => '4',
                      '3' => '3',
					  '2' => '2',
					  '1' => '1',
				  ) )->set_width(50),
				 ))
                 ->add_tab('Настройки контента', array(
                    Field::make( 'complex', 'goods_tabs', 'Вкладки' )
                    ->add_fields( array(
                    Field::make('association', 'goods_ass')
                    ->set_types(array(
                      array(
                        'type' => 'term',
                        'taxonomy' => 'goods_tax',
                      ),
                    //   array(
                    //     'type' => 'post',
                    //     'post_type' => 'goods',
                    //   ),
                    ))
                    ))
                    ->set_layout('tabbed-horizontal')
                    ->set_header_template(' Вкладка '),
                ));
    Container::make('post_meta', 'Настройки товара/тарифа')
    ->show_on_post_type('goods')
    ->add_tab('Настройки контента', array(
        Field::make( "radio", "goods_select", "Товар/тариф" )
        ->add_options( array(
            'product' => 'Товар',
            'rate' => 'Тариф',
        ) ),
        Field::make( "separator", "goods_product", "Товар" )
        ->set_conditional_logic( array (
            'relation' => 'AND',
           array (
                'field' => 'goods_select',
                'value' => 'product',
                'compare' => '='
           ))),
        Field::make( "separator", "goods_rate", "Тариф" )
        ->set_conditional_logic( array (
            'relation' => 'AND',
           array (
                'field' => 'goods_select',
                'value' => 'rate',
                'compare' => '='
           ))),
        Field::make( 'complex', 'product_tooltip', 'Тултипы' )
           ->add_fields( array(
               Field::make( "text", "product_tooltip_text", "Подсказка" )->set_width(30),
               Field::make( "icon", "product_tooltip_icon", "Иконка" )->set_width(70),
        ))
        ->set_layout('tabbed-horizontal')
        ->set_conditional_logic( array (
            'relation' => 'AND',
           array (
                'field' => 'goods_select',
                'value' => 'product',
                'compare' => '='
           )))->set_header_template(' <% if (product_tooltip_text) { %><%- product_tooltip_text %><% } else { %> Тултип <% } %>'),
        Field::make( 'complex', 'product_params', 'Параметры' )
           ->add_fields( array(
               Field::make( "text", "product_params_title", "Параметр" )->set_width(50),
               Field::make( "text", "product_params_text", "Свойство" )->set_width(50),
        ))
        ->set_layout('tabbed-horizontal')
        ->set_conditional_logic( array (
            'relation' => 'AND',
           array (
                'field' => 'goods_select',
                'value' => 'product',
                'compare' => '='
           )))->set_header_template(' <% if (product_params_title) { %><%- product_params_title %><% } else { %> Параметр <% } %>'),
        Field::make( 'complex', 'rate_settings', 'Настройки тарифа' )
        ->add_fields( 'rate_included_filds', 'Включено в тариф', array(
            Field::make( "text", "rate_included", "Что включено в тариф" ),
        ))
        ->add_fields( 'rate_not_included_filds', 'Не включено в тариф', array(
            Field::make( "text", "rate_not_included", "Что не включено в тариф" ),
        ))->set_layout('tabbed-vertical')
        ->set_conditional_logic( array (
            'relation' => 'AND',
           array (
                'field' => 'goods_select',
                'value' => 'rate',
                'compare' => '='
           ))),
	))
    ->add_tab('Описание', array(
        Field::make( "rich_text", "goods_descr", "Описание" ),
    ))
    ->add_tab('Цена', array(
        Field::make( "text", "goods_price", "Цена" ),
    ));
}