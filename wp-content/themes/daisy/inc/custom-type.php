<?php
add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'blocks', [
		'label'  => null,
		'labels' => [
			'name'               => 'Блоки', // основное название для типа записи
			'singular_name'      => 'Блок', // название для одной записи этого типа
			'add_new'            => 'Добавить Блок', // для добавления новой записи
			'add_new_item'       => 'Добавление Блока', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Блока', // для редактирования типа записи
			'new_item'           => 'Новый Блок', // текст новой записи
			'view_item'          => 'Смотреть Блок', // для просмотра записи этого типа.
			'search_items'       => 'Искать Блок', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Блоки', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-excerpt-view',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'page-attributes', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

// Для Преимуществ, команды итд

add_action( 'init', 'register_post_types_cards' );
function register_post_types_cards(){
	register_post_type( 'cards', [
		'label'  => null,
		'labels' => [
			'name'               => 'Карточка', // основное название для типа записи
			'singular_name'      => 'Карточку', // название для одной записи этого типа
			'add_new'            => 'Добавить карточку', // для добавления новой записи
			'add_new_item'       => 'Добавление карточки', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование карточки', // для редактирования типа записи
			'new_item'           => 'Новая карточка', // текст новой записи
			'view_item'          => 'Смотреть карточку', // для просмотра записи этого типа.
			'search_items'       => 'Искать карточку', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Карточки', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-grid-view',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}


?>
<?
add_action( 'init', 'create_taxonomy_cards' );
function create_taxonomy_cards(){

  // список параметров: wp-kama.ru/function/get_taxonomy_labels
  register_taxonomy( 'cards_tax', [ 'cards' ], [ 
    'label'                 => '', // определяется параметром $labels->name
    'labels'                => [
      'name'              => 'Категории карточек',
      'singular_name'     => 'Категория карточек',
      'search_items'      => 'Искать категорию карточек',
      'all_items'         => 'Все категории карточек',
      'view_item '        => 'Посмотреть категорию',
      'parent_item'       => 'Родительская каегория',
      'parent_item_colon' => 'Родительская каегория:',
      'edit_item'         => 'Изминить каегорию',
      'update_item'       => 'Обновить каегорию',
      'add_new_item'      => 'Добавить новую каегорию',
      'new_item_name'     => 'Название новоой меры каегории',
      'menu_name'         => 'Каегории карточек',
    ],
    'description'           => 'Для создания категорий карточек выводимых в блоках', // описание таксономии
    'public'                => true,
    'publicly_queryable'    => true, // равен аргументу public
    'show_in_nav_menus'     => true, // равен аргументу public
    'show_ui'               => true, // равен аргументу public
    'show_in_menu'          => true, // равен аргументу show_ui
    'show_tagcloud'         => true, // равен аргументу show_ui
    'show_in_quick_edit'    => true, // равен аргументу show_ui
    'hierarchical'          => true,

    'rewrite'               => true,
    //'query_var'             => $taxonomy, // название параметра запроса
    'capabilities'          => array(),
    'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
    'show_admin_column'     => true, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
    'show_in_rest'          => true, // добавить в REST API
    'rest_base'             => null, // $taxonomy
    // '_builtin'              => false,
    //'update_count_callback' => '_update_post_term_count',
  ] );
}

// Для Преимуществ, команды итд

add_action( 'init', 'register_post_types_goods' );
function register_post_types_goods(){
	register_post_type( 'goods', [
		'label'  => null,
		'labels' => [
			'name'               => 'Товар', // основное название для типа записи
			'singular_name'      => 'Товар', // название для одной записи этого типа
			'add_new'            => 'Добавить товар', // для добавления новой записи
			'add_new_item'       => 'Добавление товара', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование товара', // для редактирования типа записи
			'new_item'           => 'Новаый товар', // текст новой записи
			'view_item'          => 'Смотреть товар', // для просмотра записи этого типа.
			'search_items'       => 'Искать карточкутовар', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Товары/тарифы', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-products',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail', 'page-attributes', 'post-formats'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}


?>
<?
add_action( 'init', 'create_taxonomy_goods' );
function create_taxonomy_goods(){
  // список параметров: wp-kama.ru/function/get_taxonomy_labels
  register_taxonomy( 'goods_tax', [ 'goods' ], [ 
    'label'                 => '', // определяется параметром $labels->name
    'labels'                => [
      'name'              => 'Категории товаров',
      'singular_name'     => 'Категория товара',
      'search_items'      => 'Искать категорию товара',
      'all_items'         => 'Все категории товаров',
      'view_item '        => 'Посмотреть категорию',
      'parent_item'       => 'Родительская каегория',
      'parent_item_colon' => 'Родительская каегория:',
      'edit_item'         => 'Изминить каегорию',
      'update_item'       => 'Обновить каегорию',
      'add_new_item'      => 'Добавить новую каегорию',
      'new_item_name'     => 'Название новоой меры каегории',
      'menu_name'         => 'Каегории товаров',
    ],
    'description'           => 'Для создания категорий товаров/тарифов выводимых в блоках', // описание таксономии
    'public'                => true,
    'publicly_queryable'    => true, // равен аргументу public
    'show_in_nav_menus'     => true, // равен аргументу public
    'show_ui'               => true, // равен аргументу public
    'show_in_menu'          => true, // равен аргументу show_ui
    'show_tagcloud'         => true, // равен аргументу show_ui
    'show_in_quick_edit'    => true, // равен аргументу show_ui
    'hierarchical'          => true,

    'rewrite'               => true,
    //'query_var'             => $taxonomy, // название параметра запроса
    'capabilities'          => array(),
    'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
    'show_admin_column'     => true, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
    'show_in_rest'          => true, // добавить в REST API
    'rest_base'             => null, // $taxonomy
    // '_builtin'              => false,
    //'update_count_callback' => '_update_post_term_count',
  ] );
}