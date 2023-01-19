<?php
function daisy_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Футер левый', 'daisy' ),
			'id'            => 'footer-1',
			'before_widget' => '<section id="%1$s" class="widget footer_contact %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title footer_item_title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Футер центер 1', 'daisy' ),
			'id'            => 'footer-2',
			'before_widget' => '<section id="%1$s" class="widget footer_item footer_item_list %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title footer_item_title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Футер центер 2', 'daisy' ),
			'id'            => 'footer-3',
			'before_widget' => '<section id="%1$s" class="widget footer_item footer_item_list %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title footer_item_title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Футер правый', 'daisy' ),
			'id'            => 'footer-4',
			'before_widget' => '<section id="%1$s" class="widget footer_item footer_item_list %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title footer_item_title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Фильтры магазина', 'daisy' ),
			'id'            => 'sidebar-shop',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Сортировка товаров', 'daisy' ),
			'id'            => 'sidebar-shop-sort',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Соцсети и подписка блога', 'daisy' ),
			'id'            => 'blog-social',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="blog_aside_title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'календарь в блоге', 'daisy' ),
			'id'            => 'blog-calendar',
			'before_widget' => '<section id="datepicker %1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="blog_aside_title">',
			'after_title'   => '</h3>',
		)
	);
}