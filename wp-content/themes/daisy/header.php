<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
	<title><? the_title(); ?></title>
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="icon.png">

    <!-- fonts--><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap&_v=20230120215128" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css?_v=20230120215128">
    <!-- scrollbar--><link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css?_v=20230120215128"/>
    <!-- swiper--><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css?_v=20230120215128"/>
    <!-- galery--><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css?_v=20230216185501"/>
    <?php
             wp_head();
         ?>
</head>
<body class="f" data-simplebar>
<? get_template_part('template-parts/header/ui_kit');?>
    <?php
            // get_template_part('template-parts/style');

            // get_template_part('template-parts/news_action');
            // get_template_part('template-parts/top_tool');
            // $header_type = carbon_get_theme_option( 'main_header_type' );
            // if($header_type == 'def'){
            //     get_template_part('template-parts/main-menu');
            // } else {
            //     get_template_part('template-parts/main-menu-store');
            // }   
            // get_template_part('template-parts/main-menu');
            // get_template_part('template-parts/header-nav');
    ?>
    
    <header class="header" id="top">
      <div class="header__container container-settings">
        <div class="header__wrapper">
          <!-- top-news -- start -->
          <? if(carbon_get_theme_option( 'header_news_text') || carbon_get_theme_option( 'header_news_date') || carbon_get_theme_option( 'header_news_btn_label') || carbon_get_theme_option( 'header_news_btn_icon')): ?>
          <?  get_template_part('template-parts/header/news_action'); ?>
         <?php endif; ?>
          <!-- top-news -- end -->
          <!-- top-info -- start -->
          <?  get_template_part('template-parts/header/header_info'); ?>
          <!-- top-info -- end -->
          <!-- top-nav -- start-->
          <?  get_template_part('template-parts/header/main_header'); ?>
          <!-- top-nav -- end -->
        </div>
      </div>
    </header>