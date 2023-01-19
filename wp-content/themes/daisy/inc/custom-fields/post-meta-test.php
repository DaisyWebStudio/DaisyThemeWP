<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_post_meta_test' );
function crb_attach_post_meta_test() {
	Container::make('post_meta', 'Настройки поста')
        ->show_on_post_type('user_post')
        ->add_tab('Конструктор блока', array(
            Field::make('select', 'block_type', 'Тип блока')
            ->add_options( array (
                'main-slider' => 'Главный сладер',
                'adv' => 'Преимущества',
                'about' => 'О нас',
                'contacts' => 'Контакты',
                'gallery' => 'Галерея/Партнеры',
            )),
            Field::make('text', 'block_name', 'Название блока')->set_width(50),
            Field::make('text', 'block_main_title', 'Главный заголовок блока')->set_width(50),
            Field::make('radio', 'block_hidden', 'Скрыть блок')
            ->add_options( array (
                'no' => 'нет',
                'yes' => 'да',
            ))->set_width(20),
            Field::make('radio', 'block_quantity', 'Кол-во отображаемых элиментов в слайдере')
            ->add_options( array (
                '4' => '4',
                '3' => '3',
                '2' => '2',
            ))->set_width(30)->set_conditional_logic( array (
              'relation' => 'AND',
             array (
                 'field' => 'block_type',
                 'value' => array ( 'adv', 'team', 'reviews', 'recommended'),
                 'compare' => 'IN'
             ))),
            Field::make('text', 'block_id', 'ID блока')
            ->help_text('Для навигации по якорным ссылкам')->set_width(30),          
       // Главный баннер, о нас и команда
       Field::make('color', 'banner_all_color', 'Цвет фона баннера')
       ->set_width(50)
       ->set_conditional_logic( array (
         'relation' => 'AND',
       array (
             'field' => 'block_type',
             'value' => 'main-slider',
             'compare' => '='
       )
       )),
    Field::make('complex', 'main-banner', 'Слайды')
    ->set_layout('tabbed-vertical')
    ->add_fields(array(
       Field::make('text', 'banner_name', 'Название слайда')
       ->help_text('Название для отображения в навигации')
       ->set_width(33),
       Field::make('color', 'banner_color', 'Цвет фона слайда')
       ->set_width(33)
       ->set_conditional_logic( array (
        'relation' => 'AND',
        array (
            'field' => 'parent.block_type',
            'value' => 'main-slider',
            'compare' => '='
        ) )),
       Field::make('image', 'banner_bg_img', 'Фоновая картинка')
       ->set_width(33)
       ->set_conditional_logic( array (
        'relation' => 'AND',
        array (
            'field' => 'parent.block_type',
            'value' => 'main-slider',
            'compare' => '='
        ) )),
       Field::make('radio', 'main-banner_effect_color', 'Затемнить или осветлить фон')
       ->add_options( array (
         'no' => 'Без эффекта',
         'darken' => 'Затемнить',
         'brighten' => 'Осветлить',
       ))->set_conditional_logic( array (
        'relation' => 'AND',
        array (
            'field' => 'parent.block_type',
            'value' => 'main-slider',
            'compare' => '='
        ) ))
       ->set_width(30),
       Field::make('file', 'main-banner_media', 'Изображение')
       ->set_width(30),
       Field::make('text', 'main-banner_media_link', 'Cсылка для изображения')
       ->set_width(30),
       Field::make('text', 'main-banner_video', 'Ссылка на видео')->set_width(60),
       Field::make('checkbox', 'main-banner_video_autoplay', 'Автовоспроизведение')->set_width(20),
       Field::make('checkbox', 'main-banner_video_mute', 'Отключить звук')->set_width(20),
       Field::make('image', 'main-banner_mob_image', 'Изображение в мобильной версии')
       ->set_width(30)
       ->set_conditional_logic( array (
        'relation' => 'AND',
        array (
            'field' => 'parent.block_type',
            'value' => 'main-slider',
            'compare' => '='
        ) )),
       Field::make('radio', 'main-banner_mob_color', 'Затемнить или осветлить изображение в мобильной версии')
       ->add_options( array (
         'no' => 'Без эффекта',
         'darken' => 'Затемнить',
         'brighten' => 'Осветлить',
       ))->set_conditional_logic( array (
        'relation' => 'AND',
        array (
            'field' => 'parent.block_type',
            'value' => 'main-slider',
            'compare' => '='
        ) ))
       ->set_width(30),
       Field::make('rich_text', 'main-banner_title', 'Заголовок')
       ->set_width(70),
       Field::make('rich_text', 'main-banner_descr', 'Описание'),
       Field::make( 'complex', 'main-banner_social', 'Список соцсетей' )
       ->add_fields('main-banner_social-item','Соцсеть', array(
           Field::make( 'image', 'main-banner_social-icon', 'Иконка' )
             ->set_width(40),
           Field::make( 'text', 'main-banner_social-link', 'Ссылка' )
             ->set_width(60),
       ))->set_layout('tabbed-horizontal'), 
      Field::make( 'text', 'main-banner_btn-label', 'Кнопка ссылка - надпись' )->set_width(40),
      Field::make( 'text', 'main-banner_btn-link', 'Кнопка ссылка - ссылка' )->set_width(60),
      Field::make( 'text', 'main-banner_btn-label_pop', 'Кнопка попап - надпись' )->set_width(40),
      Field::make( 'text', 'main-banner_btn-link_pop', 'Кнопка попап - шорткод попапа' )->set_width(60),
    ))
    ->set_conditional_logic( array (
       'relation' => 'AND',
      array (
          'field' => 'block_type',
          'value' => array ( 'main-slider', 'about', 'team'),
          'compare' => 'IN'
      ) ))->set_header_template( '<% if (banner_name) { %><%- banner_name %><% } else { %> Слайд <% } %>' ),                           
              // Преимущества
              Field::make('complex', 'adv_block', 'Преимущества')
              ->set_layout('tabbed-vertical')
              ->add_fields(array(
                  Field::make('image', 'adv_icon', 'Иконка')
                      ->help_text('Иконка для преимуществ')
                      ->set_width(30),
                  Field::make('text', 'adv_title', 'Заголовок')
                  ->set_width(70),
                  Field::make('textarea', 'adv_descr', 'Описание'),
              ))
              ->set_conditional_logic( array (
                  'relation' => 'AND',
                array (
                    'field' => 'block_type',
                    'value' => 'adv',
                    'compare' => '='
                ) )),                            
      // Контакты
      Field::make('textarea', 'contacts_map_shortcode', 'Код для карты')
      ->set_conditional_logic( array (
        'relation' => 'AND',
       array (
            'field' => 'block_type',
            'value' => 'contacts',
            'compare' => '='
       )
       )),
      Field::make('complex', 'contacts_ad_block', 'Адреса')
      ->set_layout('tabbed-vertical')
      ->add_fields(array(
        Field::make('text', 'contacts_address', 'Адрес'),
      ))
      ->set_conditional_logic( array (
        'relation' => 'AND',
       array (
            'field' => 'block_type',
            'value' => 'contacts',
            'compare' => '='
       ) ))->set_width(50),
       Field::make('complex', 'contacts_ph_block', 'Телефоны')
      ->set_layout('tabbed-vertical')
      ->add_fields(array(
        Field::make('text', 'contacts_phone', 'Телефон'),
      ))
      ->set_conditional_logic( array (
        'relation' => 'AND',
       array (
            'field' => 'block_type',
            'value' => 'contacts',
            'compare' => '='
       ) ))->set_width(50),
       Field::make('complex', 'contacts_emails_block', 'Электронные почты')
      ->set_layout('tabbed-vertical')
      ->add_fields(array(
        Field::make('text', 'contacts_email', 'email'),
      ))
      ->set_conditional_logic( array (
        'relation' => 'AND',
       array (
            'field' => 'block_type',
            'value' => 'contacts',
            'compare' => '='
       )
       ))->set_width(50),
       Field::make('complex', 'contacts_links_block', 'Дополнительная информация')
      ->set_layout('tabbed-vertical')
      ->add_fields(array(
        Field::make('text', 'contacts_link_label', 'Название ссылки'),
        Field::make('text', 'contacts_link', 'Ссылка'),
      ))
      ->set_conditional_logic( array (
        'relation' => 'AND',
       array (
            'field' => 'block_type',
            'value' => 'contacts',
            'compare' => '='
       ) ))->set_width(50),
        ));
        Container::make('post_meta', 'Настройки категории')
        ->show_on_post_type('page')
        ->add_tab('Блоки на странице', array(
            Field::make('association', 'crb_association')
            ->set_types(array(
              array(
                'type' => 'post',
                'post_type' => 'user_post',
              ),
            ))
    ));
}