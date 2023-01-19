<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
	<title>Главная</title>
    <?php
             wp_head();
         ?>
</head>
    <body>
    <?php
            get_template_part('template-parts/style');

            get_template_part('template-parts/news_action');
            get_template_part('template-parts/top_tool');
            $header_type = carbon_get_theme_option( 'main_header_type' );
            if($header_type == 'def'){
                get_template_part('template-parts/main-menu');
            } else {
                get_template_part('template-parts/main-menu-store');
            }   
            get_template_part('template-parts/main-menu');
            get_template_part('template-parts/header-nav');
    ?>
    
            