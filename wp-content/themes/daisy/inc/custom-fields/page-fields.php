<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_page_fields' );
function crb_attach_page_fields() {
  Container::make('post_meta', 'Настройки главной страницы')
  ->show_on_post_type('page')
  ->add_tab('Конструктор', array(
    Field::make('complex', 'blocks', 'Блок')
    ->set_layout('tabbed-horizontal')
    ->add_fields(array(
        Field::make('select', 'block_type', 'Тип блока')
        ->add_options( array (
            'main-slider' => 'Главный сладер',
            'adv' => 'Преимущества',
            'about' => 'О нас',
            'cat' => 'Каталог',
            'recommended' => 'Рекомендованное',
            'contacts' => 'Контакты',
            'gallery' => 'Галерея/Партнеры',
            'textslider' => 'Текст слайдер',
            'team' => 'Команда',
            'feedback' => 'Обратная связь',
            'delivery' => 'О доставке',
            'featured' => 'Товары дня',
            'info' => 'Дополнительная информация',
            'reviews' => 'Отзывы',
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
   // Текст слайдер
   Field::make('complex', 'textslider_block', 'Слайд с текстом')
   ->set_layout('tabbed-vertical')
   ->add_fields(array(
       Field::make('text', 'textslider_title', 'Текст')
       ->set_width(50),
       Field::make('text', 'textslider_label', 'Надпись на кнопке')
       ->set_width(25),
       Field::make('text', 'textslider_link', 'Ссылка')
       ->set_width(25),
   ))->set_conditional_logic( array (
       'relation' => 'AND',
      array (
          'field' => 'block_type',
          'value' => 'textslider',
          'compare' => '='
      ) )),
   // Доп инф
Field::make('complex', 'info_block', 'Раздел с информацией')
->set_layout('tabbed-vertical')
->add_fields(array(
   Field::make('text', 'info_title', 'Заголовок')
   ->set_width(50),
   Field::make('textarea', 'info_descr', 'Описание')->set_width(50),
   Field::make( 'complex', 'info_list', 'Пункты описания' )
     ->add_fields('info_list_item','', array(
         Field::make( 'text', 'info_item', 'Пункт описания' ),
     ))->set_layout('tabbed-horizontal'),
    Field::make( 'text', 'info_btn-label', 'Надпись на кнопке' )->set_width(40),
    Field::make( 'text', 'info_btn-link', 'Ссылка' )->set_width(60),  
))
->set_conditional_logic( array (
   'relation' => 'AND',
  array (
       'field' => 'block_type',
       'value' => 'info',
       'compare' => '='
  )
  ))->set_header_template( '<% if (info_title) { %><%- info_title %><% }  %>' ), 
 // Обратная связь 
Field::make('image', 'feedback_icon', 'Картинка в блоке')->set_width(50)
->set_conditional_logic( array (
 'relation' => 'AND',
array (
    'field' => 'block_type',
    'value' => 'feedback',
    'compare' => '='
) )), 
Field::make('text', 'feedback_form', 'Шорткод формы')->set_width(50)
->set_conditional_logic( array (
 'relation' => 'AND',
array (
    'field' => 'block_type',
    'value' => 'feedback',
    'compare' => '='
) )), 
// Доставка
Field::make('complex', 'delivery_block', 'Слайды с информацией')
->set_layout('tabbed-vertical')
->add_fields(array(
 Field::make('text', 'delivery_name', 'Заголовок слайда')->set_width(50),
 Field::make( 'text', 'delivery_note', 'Сноска внизу' )
 ->set_width(50),
 Field::make( 'complex', 'delivery_items', 'Пункты' )
   ->add_fields('delivery_item','', array(
       Field::make( 'image', 'delivery_icon', 'Иконка' )
         ->set_width(30),
       Field::make( 'text', 'delivery_text', 'Текст или ссылка' )
         ->set_width(50),
       Field::make( 'checkbox', 'delivery_check', 'Это ссылка' )
         ->set_width(20),
   ))->set_layout('tabbed-horizontal'),  
)) ->set_conditional_logic( array (
 'relation' => 'AND', array (
     'field' => 'block_type',
     'value' => 'delivery',
     'compare' => '='
) ))->set_header_template( '<% if (delivery_name) { %><%- delivery_name %><% } else { %> Слайд <% } %>' ), 
// Рекомендации
// Field::make('select', 'recommended_block_type', 'Тип блока')
//         ->add_options( array (
//             'articles' => 'Статьи',
//             'prod' => 'Товары',
//             'team' => 'Команда',
//             'reviews' => 'Отзывы',
//         ))->set_conditional_logic( array (
//           'relation' => 'AND',
//          array (
//              'field' => 'block_type',
//              'value' => array ( 'recommended', 'team'),
//              'compare' => 'IN'
//          ) )),
  Field::make('complex', 'recommended_group', 'Группа рекомендаций')
  ->add_fields('select_post', 'Выбор статей', array(
    Field::make('text', 'recommended_art_group_name', 'Название группы')
    ->set_required(true),
    Field::make('association', 'recommended_art_group_association')
    ->set_types(array(
      array(
      'type' => 'post',
      'post_type' => 'post',
      ), )) ))
  ->add_fields('select_prod', 'Выбор товаров', array(
    Field::make('text', 'recommended_prod_group_name', 'Название группы')
    ->set_required(true),
    Field::make('association', 'recommended_prod_group_association')
    ->set_types(array(
      array(
      'type' => 'post',
      'post_type' => 'product',
      ), )) ))
  ->set_conditional_logic( array (
    'relation' => 'AND', array (
        'field' => 'block_type',
        'value' => 'recommended',
        'compare' => '=' ) )),    
   // Галлерея и Партнеры
   Field::make('select', 'gallery_block_type', 'Тип блока')
   ->add_options( array (
       'gallery' => 'Галерея',
       'partners' => 'Партнеры',
   ))->set_width(33)
   ->set_conditional_logic( array (
    'relation' => 'AND',
   array (
       'field' => 'block_type',
       'value' => 'gallery',
       'compare' => '='
   ))),
 Field::make('text', 'gallery_ratio', 'Высота фотографии')->help_text('<strong>Указать px или %. Например: 30px</strong>')->set_width(33)
 ->set_conditional_logic( array (
  'relation' => 'AND',
 array (
     'field' => 'block_type',
     'value' => 'gallery',
     'compare' => '='
 ))),
 Field::make('radio', 'gallery_block_quantity', 'Кол-во отображаемых элиментов в галереи')
        ->add_options( array (
            '6' => '6',
            '4' => '4',
            '3' => '3',
            '2' => '2',
        ))->set_width(33)->set_default_value('4')
        ->set_conditional_logic( array (
          'relation' => 'AND',
         array (
             'field' => 'block_type',
             'value' => 'gallery',
             'compare' => '='
         ))),
 Field::make( 'media_gallery', 'crb_media_gallery' )->set_type( array( 'image', 'video'))
 ->set_conditional_logic( array (
    'relation' => 'AND',
   array (
       'field' => 'block_type',
       'value' => 'gallery',
       'compare' => '='
   ))),
)) ->set_header_template( '<% if (block_name) { %><%- block_name %><% } else { %> Блок <% } %>' ) ));
}