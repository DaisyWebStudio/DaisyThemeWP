<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_main_style' );
function crb_main_style() {
    $basic_options_ui_container = Container::make('theme_options', 'Настройки UI KIT')->set_icon( 'dashicons-art' );
    $basic_options_ui_container
        ->add_tab('Отступы', array(
            Field::make( 'html', 'separation-vertical-spacing' )
                ->set_html( '<h1 style="text-align: center;">&#11015 Вертикальные &#11015</h1>' ),
                Field::make( 'text', 'vertical_spacing-card', 'Между текстом внутри карточки' )
                    ->set_default_value( '15px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(25),
                Field::make( 'text', 'vertical_spacing-block-card_inside', 'Внутри блоков/поля карточек' )
                    ->set_default_value( '30px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(25),
                Field::make( 'text', 'vertical_spacing-block_inside', 'Внутри блоков' )
                    ->set_default_value( '50px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(25),
                Field::make( 'text', 'vertical_spacing-between-blocks', 'Между блоками' )
                    ->set_default_value( '100px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(25),

            Field::make( 'html', 'separation-horizontal-spacing' )
                ->set_html( '<h1 style="text-align: center;">&#11015 Горизонтальные &#11015</h1>' ),
                Field::make( 'text', 'horizontal_spacing-card', 'Между текстом внутри карточки' )
                    ->set_default_value( '5px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(25),
                Field::make( 'text', 'horizontal_spacing-block-card_inside', 'Внутри блоков/поля карточек' )
                    ->set_default_value( '15px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(25),
                Field::make( 'text', 'horizontal_spacing-block_inside', 'Внутри блоков' )
                    ->set_default_value( '30px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(25),
        ));

    Container::make( 'theme_options', 'Шрифты' ) // ! настройки шрифтов
		->set_page_parent($basic_options_ui_container)
		->add_tab('Цвета', array( // ? настройки цветов
            Field::make( 'color', 'body_text', 'Основной текст' )
                ->set_palette( array( '#747A80' ) ),
            Field::make( 'color', 'h1_color', 'Заголовок 1' )
                ->set_palette( array( '#282828' ) )
                ->set_width(33),
            Field::make( 'color', 'h2_color', 'Заголовок 2' )
                ->set_palette( array( '#494D53' ) )
                ->set_width(33),
            Field::make( 'color', 'h3_color', 'Заголовок 3' )
                ->set_palette( array( '#494D53' ) )
                ->set_width(33),
            Field::make( 'color', 'h4_color', 'Заголовок 4' )
                ->set_palette( array( '#747A80' ) )
                ->set_width(33),
            Field::make( 'color', 'h5_color', 'Заголовок 5' )
                ->set_palette( array( '#AFAFAF' ) )
                ->set_width(33),
            Field::make( 'color', 'h6_color', 'Заголовок 6' )
                ->set_palette( array( '#C8C8C8' ) )
                ->set_width(33),
        ))

        ->add_tab('Стили', array(
            Field::make( 'html', 'separation_mob_ver' ) // ? настройки фришта для Mobile версии
                ->set_html( '<h1 style="text-align: center;">&#11015 Мобильная версия &#11015</h1>' ),
                Field::make( 'text', 'm-h1_font-size', 'Заголовок 1' )
                    ->set_default_value( '36px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'text', 'm-h2_font-size', 'Заголовок 2' )
                    ->set_default_value( '30px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'text', 'm-h3_font-size', 'Заголовок 3' )
                    ->set_default_value( '24px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'text', 'm-h4_font-size', 'Заголовок 4' )
                    ->set_default_value( '16px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'text', 'm-h5_font-size', 'Заголовок 5' )
                    ->set_default_value( '12px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'text', 'm-h6_font-size', 'Заголовок 6' )
                    ->set_default_value( '10px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'select', 'm-h1_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '500' )
                    ->set_width(16),
                Field::make( 'select', 'm-h2_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '500' )
                    ->set_width(16),
                Field::make( 'select', 'm-h3_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '400' )
                    ->set_width(16),
                Field::make( 'select', 'm-h4_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '400' )
                    ->set_width(16),
                Field::make( 'select', 'm-h5_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '400' )
                    ->set_width(16),
                Field::make( 'select', 'm-h6_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '400' )
                    ->set_width(16),
                Field::make( 'text', 'm-main-text', 'Основной текст')
                    ->set_default_value( '14px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(32),
            Field::make( 'html', 'separation_pc_ver' ) // ? настройки фришта для PC версии
                ->set_html( '<h1 style="text-align: center;">&#11015 Планшетная/Десктопная версия &#11015</h1>' ),
                Field::make( 'text', 'h1_font-size', 'Заголовок 1' )
                    ->set_default_value( '48px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'text', 'h2_font-size', 'Заголовок 2' )
                    ->set_default_value( '36px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'text', 'h3_font-size', 'Заголовок 3' )
                    ->set_default_value( '28px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'text', 'h4_font-size', 'Заголовок 4' )
                    ->set_default_value( '20px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'text', 'h5_font-size', 'Заголовок 5' )
                    ->set_default_value( '16px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'text', 'h6_font-size', 'Заголовок 6' )
                    ->set_default_value( '14px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'select', 'h1_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '500' )
                    ->set_width(16),
                Field::make( 'select', 'h2_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '500' )
                    ->set_width(16),
                Field::make( 'select', 'h3_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '500' )
                    ->set_width(16),
                Field::make( 'select', 'h4_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '400' )
                    ->set_width(16),
                Field::make( 'select', 'h5_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '400' )
                    ->set_width(16),
                Field::make( 'select', 'h6_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '400' )
                    ->set_width(16),
                Field::make( 'text', 'main-text', 'Основной текст')
                    ->set_default_value( '16px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(32),
            Field::make( 'html', 'separation_4k_ver' ) // ? настройки фришта для 4k версии
                ->set_html( '<h1 style="text-align: center;">&#11015 Широкоформатная версия &#11015</h1>' ),
                Field::make( 'text', '4k-h1_font-size', 'Заголовок 1' )
                    ->set_default_value( '60px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'text', '4k-h2_font-size', 'Заголовок 2' )
                    ->set_default_value( '42px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'text', '4k-h3_font-size', 'Заголовок 3' )
                    ->set_default_value( '30px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'text', '4k-h4_font-size', 'Заголовок 4' )
                    ->set_default_value( '24px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'text', '4k-h5_font-size', 'Заголовок 5' )
                    ->set_default_value( '20px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'text', '4k-h6_font-size', 'Заголовок 6' )
                    ->set_default_value( '18px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(16),
                Field::make( 'select', '4k-h1_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '500' )
                    ->set_width(16),
                Field::make( 'select', '4k-h2_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '500' )
                    ->set_width(16),
                Field::make( 'select', '4k-h3_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '500' )
                    ->set_width(16),
                Field::make( 'select', '4k-h4_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '400' )
                    ->set_width(16),
                Field::make( 'select', '4k-h5_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '400' )
                    ->set_width(16),
                Field::make( 'select', '4k-h6_font-weight', 'Толщина фришта' )
                    ->add_options( array(
                        '400' => '400',
                        '500' => '500',
                        '600' => '600',
                    ) )
                    ->set_default_value( '400' )
                    ->set_width(16),
                Field::make( 'text', '4k-main-text', 'Основной текст')
                    ->set_default_value( '18px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(32),
        ));

    Container::make( 'theme_options', 'Кнопки' ) // ! настройки кнопок
        ->set_page_parent($basic_options_ui_container) // будет ли кнопка для 4к ?
        ->add_tab('Стандартная', array(
            Field::make( 'html', 'separation-button__border_radius-primary' ) // ? настройки обводки
                ->set_html( '<h1 style="text-align: center;">&#11015 Настройки обводки &#11015</h1>' ),
                Field::make( 'select', 'button_border-primary', 'Обводка' )
                    ->add_options( array(
                        '1px solid' => 'вкл',
                        'none' => 'выкл',
                    ) )
                    ->set_width(25),
                Field::make( 'select', 'radius-button-primary', 'Закругление' )
                    ->add_options( array(
                        '0' => 'квадратные',
                        '6px'     => 'без углов',
                        '30px'     => 'овальная',
                    ) )
                    ->set_default_value( '6px' )
                    ->set_width(25),
                Field::make( 'color', 'button__border-primary', 'Цвет обводки' )
                    ->set_palette( array( '#ffffff', '#0669FF' ) )
                    ->set_width(25),
                Field::make( 'color', 'button__border_hover-primary', 'Цвет обводки при наведении' )
                    ->set_palette( array( '#ffffff', '#0669FF' ) )
                    ->set_width(25),
            Field::make( 'html', 'separation-color-button-primary' ) // ? настройки фона
                ->set_html( '<h1 style="text-align: center;">&#11015 Настройки фона &#11015</h1>' ),
                Field::make( 'select', 'opacity-button-primary', 'Прозрачность фона' )
                    ->add_options( array(
                        '100%' => 'не прозрачный',
                        '10%' => 'прозрачный на 90%',
                    ) )
                    ->set_width(33),
                Field::make( 'color', 'color-button-primary', 'Цвет фона' )
                    ->set_palette( array( '#0669FF', '#5699FF' ) )
                    ->set_width(33),
                Field::make( 'color', 'button_hover_color-primary', 'Цвет фона при наведении' )
                    ->set_palette( array( '#ffffff', '#0669FF' ) )
                    ->set_width(33),
            Field::make( 'html', 'separation-button_text-primary' ) // ? настройки текста
                ->set_html( '<h1 style="text-align: center;">&#11015 Настройки текста &#11015</h1>' ),
                Field::make( 'text', 'size-button_text-primary', 'Размер текста' )
                    ->set_default_value( '16px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(33),
                Field::make( 'color', 'color-button_text-primary', 'Цвет текста' )
                    ->set_palette( array( '#ffffff', '#0669FF' ) )
                    ->set_width(33),
                Field::make( 'color', 'button__text_hover-primary', 'Цвет текста при наведении' )
                    ->set_palette( array( '#ffffff', '#0669FF' ) )
                    ->set_width(33),
        ))
        ->add_tab('Уменьшенная', array(
            Field::make( 'html', 'separation-button__border_radius-secondary' ) // ? настройки обводки
                ->set_html( '<h1 style="text-align: center;">&#11015 Настройки обводки &#11015</h1>' ),
                Field::make( 'select', 'button_border-secondary', 'Обводка' )
                    ->add_options( array(
                        '1px solid' => 'вкл',
                        'none' => 'выкл',
                    ) )
                    ->set_width(25),
                Field::make( 'select', 'radius-button-secondary', 'Закругление' )
                    ->add_options( array(
                        '0' => 'квадратные',
                        '6px'     => 'без углов',
                        '30px'     => 'овальная',
                    ) )
                    ->set_default_value( '6px' )
                    ->set_width(25),
                Field::make( 'color', 'button__border-secondary', 'Цвет обводки' )
                    ->set_palette( array( '#ffffff', '#0669FF' ) )
                    ->set_width(25),
                Field::make( 'color', 'button__border_hover-secondary', 'Цвет обводки при наведении' )
                    ->set_palette( array( '#ffffff', '#0669FF' ) )
                    ->set_width(25),
            Field::make( 'html', 'separation-color-button-secondary' ) // ? настройки фона
                ->set_html( '<h1 style="text-align: center;">&#11015 Настройки фона &#11015</h1>' ),
                Field::make( 'select', 'opacity-button-secondary', 'Прозрачность фона' )
                    ->add_options( array(
                        '100%' => 'не прозрачный',
                        '10%' => 'прозрачный на 90%',
                    ) )
                    ->set_width(33),
                Field::make( 'color', 'color-button-secondary', 'Цвет фона' )
                    ->set_palette( array( '#0669FF', '#5699FF' ) )
                    ->set_width(33),
                Field::make( 'color', 'button_hover_color-secondary', 'Цвет фона при наведении' )
                    ->set_palette( array( '#ffffff', '#0669FF' ) )
                    ->set_width(33),
            Field::make( 'html', 'separation-button_text-secondary' ) // ? настройки текста
                ->set_html( '<h1 style="text-align: center;">&#11015 Настройки текста &#11015</h1>' ),
                Field::make( 'text', 'size-button_text-secondary', 'Размер текста' )
                    ->set_default_value( '18px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(33),
                Field::make( 'color', 'color-button_text-secondary', 'Цвет текста' )
                    ->set_palette( array( '#ffffff', '#0669FF' ) )
                    ->set_width(33),
                Field::make( 'color', 'button__text_hover-secondary', 'Цвет текста при наведении' )
                    ->set_palette( array( '#ffffff', '#0669FF' ) )
                    ->set_width(33),
        ))
        ->add_tab('Подсказка', array(
            Field::make( 'html', 'separation-button__border_radius-tip' ) // ? настройки цвета
                ->set_html( '<h1 style="text-align: center;">&#11015 Настройки цвета &#11015</h1>' ),
                Field::make( 'color', 'color-button_text-tip', 'Цвет текста' )
                    ->set_palette( array( '#ffffff' ) )
                    ->set_width(33),
                Field::make( 'color', 'color-button-tip', 'Цвет фона' )
                    ->set_palette( array( '#494D53' ) )
                    ->set_width(33),
                Field::make( 'color', 'button__border-tip', 'Цвет обводки' )
                    ->set_palette( array( '#494D53' ) )
                    ->set_width(33),
        ))
        ->add_tab('Метка', array(
            Field::make( 'html', 'separation-button__border_radius-tag' ) // ? настройки цвета
                ->set_html( '<h1 style="text-align: center;">&#11015 Настройки цвета &#11015</h1>' ),
                Field::make( 'color', 'color-button_text-tag', 'Цвет текста' )
                    ->set_palette( array( '#747A80' ) )
                    ->set_width(33),
                Field::make( 'color', 'color-button-tag', 'Цвет фона' )
                    ->set_palette( array( '#ffffff', '#F7F8F8' ) )
                    ->set_width(33),
                Field::make( 'color', 'button__border-tag', 'Цвет обводки' )
                    ->set_palette( array( '#ffffff', '#F7F8F8' ) )
                    ->set_width(33),
        ));

    Container::make( 'theme_options', 'Иконки' ) // ! настройки иконок
        ->set_page_parent($basic_options_ui_container)
        ->add_tab('Цвета', array(
            Field::make( 'color', 'icon_color', 'Цвет иконки' )
                ->set_palette( array( '#FFFFFF' ) )
                ->set_width(33),
            Field::make( 'color', 'icon_bg_color', 'Цвет фона' )
                ->set_palette( array( '#494D53' ) )
                ->set_width(33),
            Field::make( 'color', 'icon_border_color', 'Цвет обводки' )
                ->set_palette( array( '#494D53' ) )
                ->set_width(33),
        ))
        ->add_tab('Размер', array(
            Field::make( 'html', 'icon_size_mob_version', 'Мобильная версия' )
                ->set_html( '<h1 style="text-align: center;">&#11015 Мобильная версия &#11015</h1>' ),
                Field::make( 'text', 'icon_small-size-mob_ver', 'Маленькая иконка' )
                    ->set_default_value( '14px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(33),
                Field::make( 'text', 'icon_normal-size-mob_ver', 'Обычная иконка' )
                    ->set_default_value( '24px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(33),
                Field::make( 'text', 'icon_big-size-mob_ver', 'Большая иконка' )
                    ->set_default_value( '40px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(33),
            Field::make( 'html', 'icon_size_pc_version', 'Планшетная/Десктопная версия' )
                ->set_html( '<h1 style="text-align: center;">&#11015 Планшетная/Десктопная версия &#11015</h1>' ),
                Field::make( 'text', 'icon_small-size-pc_ver', 'Маленькая иконка' )
                    ->set_default_value( '14px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(33),
                Field::make( 'text', 'icon_normal-size-pc_ver', 'Обычная иконка' )
                    ->set_default_value( '24px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(33),
                Field::make( 'text', 'icon_big-size-pc_ver', 'Большая иконка' )
                    ->set_default_value( '40px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(33),
            Field::make( 'html', 'icon_size_4k_version', 'Широкоформатная' )
                ->set_html( '<h1 style="text-align: center;">&#11015 Широкоформатная &#11015</h1>' ),
                Field::make( 'text', 'icon_small-size-4k_ver', 'Маленькая иконка' )
                    ->set_default_value( '14px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(33),
                Field::make( 'text', 'icon_normal-size-4k_ver', 'Обычная иконка' )
                    ->set_default_value( '24px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(33),
                Field::make( 'text', 'icon_big-size-4k_ver', 'Большая иконка' )
                    ->set_default_value( '40px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(33),
        ));

    Container::make( 'theme_options', 'Элементы' ) // ! настройки элементов
        ->set_page_parent($basic_options_ui_container)
        ->add_tab('Скролл', array(
            Field::make( 'color', 'scroll-color', 'Цвет' )
                ->set_palette( array( '#DEE1E5' ) )
                ->set_width(50),
            Field::make( 'select', 'scroll-radius', 'Закругление' )
                    ->add_options( array(
                        '0' => 'квадратные',
                        '2px'     => 'без углов',
                        '30px'     => 'овальные',
                    ) )
                    ->set_default_value( '2px' )
                    ->set_width(50),

        ))
        ->add_tab('Разделительная линия', array(
            Field::make( 'html', 'line_inside', 'Внутренняя' )
                ->set_html( '<h1 style="text-align: center;">&#11015 Внутренняя &#11015</h1>' ),
            Field::make( 'color', 'sline_inside-color', 'Цвет' )
                ->set_palette( array( '#DEE1E5', '#656565' ) )
                ->set_width(50),
            Field::make( 'select', 'sline_inside-radius', 'Закругление' )
                    ->add_options( array(
                        '0' => 'квадратные',
                        '6px'     => 'без углов',
                        '30px'     => 'овальные',
                    ) )
                    ->set_default_value( '6px' )
                    ->set_width(50),
            Field::make( 'html', 'line_outside', 'Внешняя' )
                ->set_html( '<h1 style="text-align: center;">&#11015 Внешняя &#11015</h1>' ),
            Field::make( 'color', 'line_outside-color', 'Цвет' )
                ->set_palette( array( '#DEE1E5', '#656565' ) )
                ->set_width(50),
            Field::make( 'select', 'line_outside-radius', 'Закругление' )
                    ->add_options( array(
                        '0' => 'квадратные',
                        '6px'     => 'без углов',
                        '30px'     => 'овальные',
                    ) )
                    ->set_default_value( '6px' )
                    ->set_width(50),
        ))
        ->add_tab('Подложки', array(
            Field::make( 'color', 'body-bg-color', 'Сайта' )
                ->set_palette( array( '#FFFFFF', '#030C19' ) )
                ->set_width(100),
            Field::make( 'color', 'block-bg-color', 'Блоков' )
                ->set_palette( array( '#FFFFFF', '#030C19' ) )
                ->set_width(100),
            Field::make( 'select', 'block-shadow', 'Обводка блоков' )
                ->add_options( array(
                    '0px 10px 20px rgba(152, 152, 152, 0.2)' => 'вкл',
                    'none'     => 'выкл',
                ) )
                ->set_width(33),
            Field::make( 'color', 'block-border-color', 'Цвет обводки блоков' )
                ->set_palette( array( '#FFFFFF', '#DEE1E5' ) )
                ->set_width(33),
            Field::make( 'color', 'block-shadow-color', 'Цвет тени блоков' )
                ->set_palette( array( '#989898' ) )
                ->set_width(33),
        ))
        ->add_tab('Пагинация', array(
            Field::make( 'html', 'pagination_outside', 'Внутренняя' )
                ->set_html( '<h1 style="text-align: center;">&#11015 Внутренняя &#11015</h1>' ),
                Field::make( 'select', 'pagination_inside-radius', 'Закругление' )
                    ->add_options( array(
                        '0' => 'квадратные',
                        '2px'     => 'без углов',
                        '30px'     => 'овальные',
                    ) )
                    ->set_default_value( '0' )
                    ->set_width(33),
                Field::make( 'text', 'pagination_inside-width', 'Ширина' )
                    ->set_default_value( '12px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(33),
                Field::make( 'text', 'pagination_inside-height', 'Высота' )
                    ->set_default_value( '12px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(33),
                Field::make( 'color', 'pagination_inside-color', 'Цвет не активной' )
                    ->set_palette( array( '#DEE1E5', '#FFFFFF' ) )
                    ->set_width(50),
                Field::make( 'color', 'pagination_inside_active-color', 'Цвет активной' )
                    ->set_palette( array( '#1F77FC', '#FFFFFF' ) )
                    ->set_width(50),
            Field::make( 'html', 'outer_pagination', 'Внешняя' )
                ->set_html( '<h1 style="text-align: center;">&#11015 Внешняя &#11015</h1>' ),
                Field::make( 'select', 'pagination_outside-radius', 'Закругление' )
                    ->add_options( array(
                        '0' => 'квадратные',
                        '2px'     => 'без углов',
                        '30px'     => 'овальные',
                    ) )
                    ->set_default_value( '30px' )
                    ->set_width(33),
                Field::make( 'text', 'pagination_outside-width', 'Ширина' )
                    ->set_default_value( '36px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(33),
                Field::make( 'text', 'pagination_outside-height', 'Высота' )
                    ->set_default_value( '6px' )
                    ->set_help_text( 'Введите число в px' )
                    ->set_attribute( 'pattern', '[0-9]+px' )
                    ->set_width(33),
                Field::make( 'color', 'pagination_outside-color', 'Цвет не активной' )
                    ->set_palette( array( '#DEE1E5', '#FFFFFF' ) )
                    ->set_width(50),
                Field::make( 'color', 'pagination_outside_active-color', 'Цвет активной' )
                    ->set_palette( array( '#1F77FC', '#FFFFFF' ) )
                    ->set_width(50),
        ));
}