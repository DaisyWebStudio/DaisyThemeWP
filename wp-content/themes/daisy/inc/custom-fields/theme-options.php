<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make('theme_options', 'Настройки темы')
    ->add_tab('Общие настройки', array(
        Field::make('color', 'theme_text_color', 'Цвет обычного текста')
        ->set_width(25),
        Field::make('color', 'theme_text_two_color', 'Второй цвет текста')
        ->set_width(25),
        Field::make('color', 'theme_section_title_color', 'Цвет зогоовка секций')
        ->set_width(25),
        Field::make('color', 'theme_card_bg_color', 'Фоновый цвет карточек')
        ->set_width(25),
        Field::make('color', 'theme_footer_color', 'Цвет подвала')
        ->set_width(25),
        Field::make('color', 'theme_icon_bg_color', 'Цвет фона иконок')
        ->set_width(25),
        Field::make('color', 'theme_icon_bg_color_hover', 'Цвет фона иконок при наведении')
        ->set_width(25),
        Field::make('text', 'theme_btn_border_radius', 'Закругления на кнопках')
        ->help_text('<strong>Указать px или %. Например: 30px</strong>')
        ->set_width(25),
        Field::make('text', 'theme_image_border_radius', 'Закругления на картинках')
        ->help_text('<strong>Указать px или %. Например: 30px</strong>')
        ->set_width(25),
    ))
    ->add_tab('Настройка кнопок', array(
        Field::make('color', 'theme_btn_color', 'Цвет кнопок')
        ->set_width(25),
        Field::make('color', 'theme_btn_text_color', 'Цвет текста кнопок')
        ->set_width(25),
        Field::make('color', 'theme_btn_color_hover', 'Цвет кнопок при наведении')
        ->set_width(25),
        Field::make('color', 'theme_btn_text_color_hover', 'Цвет текста кнопок при наведении')
        ->set_width(25),
        Field::make('color', 'theme_btn_color_active', 'Цвет кнопок при нажатии')
        ->set_width(25),
        Field::make('color', 'theme_btn_text_color_active', 'Цвет текста кнопок при нажатии')
        ->set_width(25),
        Field::make('color', 'theme_btn_color_dis', 'Цвет кнопок заблокированных')
        ->set_width(25),
        Field::make('color', 'theme_btn_text_color_dis', 'Цвет текста кнопок заблокированных')
        ->set_width(25),
        Field::make('color', 'theme_btntwo_color', 'Второй цвет кнопок')
        ->help_text('Вторй вид кнопки')
        ->set_width(25),
        Field::make('color', 'theme_btntwo_text_color', 'Цвет текста кнопок')
        ->help_text('Вторй вид кнопки')
        ->set_width(25),
        Field::make('color', 'theme_btntwo_color_hover', 'Второй цвет кнопок при наведении')
        ->help_text('Вторй вид кнопки')
        ->set_width(25),
        Field::make('color', 'theme_btntwo_text_color_hover', 'Цвет текста кнопок при наведении')
        ->help_text('Вторй вид кнопки')
        ->set_width(25),
        Field::make('color', 'theme_btntwo_color_active', 'Второй цвет кнопок при нажатии')
        ->help_text('Вторй вид кнопки')
        ->set_width(25),
        Field::make('color', 'theme_btntwo_text_color_active', 'Цвет текста кнопок при нажатии')
        ->help_text('Вторй вид кнопки')
        ->set_width(25),
        Field::make('color', 'theme_btntwo_color_dis', 'Второй цвет кнопок заблокированных')
        ->help_text('Вторй вид кнопки')
        ->set_width(25),
        Field::make('color', 'theme_btntwo_text_color_dis', 'Цвет текста кнопок заблокированных')
        ->help_text('Вторй вид кнопки')
        ->set_width(25),
    ))
    ->add_tab('Настройки каталога', array(
        Field::make('radio', 'theme_catalog_image_hidden', 'Наличие картинок у товаров')
        ->add_options( array (
            'yes' => 'Есть картинки',
            'no' => 'Нет картинок',
        ))
        ->set_width(25),
        Field::make('color', 'theme_cat_par_bg', 'Цвет фона родительских категорий')
        ->set_width(25),
        Field::make('color', 'theme_cat_par_color', 'Цвет текста родительских категорий')
        ->set_width(25),
        Field::make('color', 'theme_cat_par_bg_hover', 'Цвет фона родительских категорий при наведении')
        ->set_width(25),
        Field::make('color', 'theme_cat_par_color_hover', 'Цвет текста родительских категорий при наведении')
        ->set_width(25),
        Field::make('color', 'theme_cat_child1_bg', 'Цвет фона подкатегорий')
        ->set_width(25),
        Field::make('color', 'theme_cat_child1_color', 'Цвет текста подкатегорий')
        ->set_width(25),
        Field::make('color', 'theme_cat_child1_bg_hover', 'Цвет фона подкатегорий при наведении')
        ->set_width(25),
        Field::make('color', 'theme_cat_child1_color_hover', 'Цвет текста подкатегорий при наведении')
        ->set_width(25),
        Field::make('color', 'theme_cat_child2_bg', 'Цвет фона подкатегорий 3 уровня')
        ->set_width(25),
        Field::make('color', 'theme_cat_child2_color', 'Цвет текста подкатегорий 3 уровня')
        ->set_width(25),
        Field::make('color', 'theme_cat_child2_color_hover', 'Цвет текста подкатегорий 3 уровня при наведении')
        ->set_width(25),
    ))
    ->add_tab('Шапка', array(
        Field::make('radio', 'main_header_type', 'Тип меню')
                ->add_options( array (
                    'def' => 'Обычное',
                    'store' => 'Магазин',
                ))
        ->set_width(25),
        Field::make('image', 'daisy_header_logo', 'Логотип')
        ->set_width(25), 
        Field::make('radio', 'daisy_header_search_inp', 'Включить строку поиска')
        ->add_options( array (
            'yes' => 'да',
            'no' => 'нет',
        ))
        ->set_width(25), 
        // Field::make('radio', 'daisy_header_top_tool', 'Верхняя часть шапки')
        //         ->add_options( array (
        //             'yes' => 'да',
        //             'no' => 'нет',
        //         ))
        // ->set_width(25),
        // Field::make('radio', 'daisy_header_center_tool', 'Средняя часть шапки')
        //         ->add_options( array (
        //             'yes' => 'да',
        //             'no' => 'нет',
        //         ))
        // ->set_width(25),
        // Field::make('radio', 'daisy_header_search_inp', 'Включить строку поиска')
        // ->add_options( array (
        //     'yes' => 'да',
        //     'no' => 'нет',
        // ))
        // ->set_width(25),        
        // Field::make('text', 'daisy_header_sity', 'Город')
        // ->set_width(33),
        // Field::make('complex', 'daisy_header_address_block', 'Адресa')
        // ->add_fields(array(
        //     Field::make('text', 'daisy_header_address', 'Адрес')
        // ))
        // ->set_width(33),
        // Field::make('text', 'daisy_header_phone', 'Телефон')
        // ->set_width(33),
    ))
    ->add_tab('Подвал', array(
        Field::make('complex', 'footer_contacts', 'Контакты в подвале')
        ->set_layout('tabbed-horizontal')
            ->add_fields('footer_title_add', 'Заголовок', array(
                Field::make('text', 'footer_title', 'Заголовок'),
            ))
            ->add_fields('footer_logo_add', 'Логотип', array(
                Field::make('image', 'footer_logo', 'Логотип'),
            ))
            ->add_fields('footer_address_add', 'Адрес', array(
                Field::make('text', 'footer_address', 'Адрес')
                ->set_width(60),
                Field::make('image', 'footer_address_icon', 'Иконка')
                ->set_width(40),
            ))
            ->add_fields('footer_phone_add', 'Телефон', array(
                Field::make('text', 'footer_phone', 'Телефон')
                ->set_width(60),
                Field::make('image', 'footer_phone_icon', 'Иконка')
                ->set_width(40),
            ))
            ->add_fields('footer_email_add', 'Email', array(
                Field::make('text', 'footer_email', 'Email')
                ->set_width(60),
                Field::make('image', 'footer_email_icon', 'Иконка')
                ->set_width(40),
            ))
            ->add_fields('footer_link_add', 'Ссылка', array(
                Field::make('text', 'footer_contact_link', 'Ссылка')
                ->set_width(40),
                Field::make('text', 'footer_contact_link_title', 'Название ссылки')
                ->set_width(40),
                Field::make('image', 'footer_contact_link_icon', 'Иконка')
                ->set_width(20),
            )),
        Field::make('text', 'footer_copyright', 'Копирайт')
        ->set_width(30),
        Field::make('complex', 'footer_links', 'Ссылки')
        ->set_layout('tabbed-vertical')
        ->set_width(70)
        ->add_fields(array(
            Field::make('image', 'footer_link_icon', 'Иконка')
                ->set_width(30),
            Field::make('text', 'footer_link', 'Ссылка')
            ->set_width(70),
        ))
    ));
}