<!doctype html>
<html class="no-js" lang="<?php bloginfo('language') ?>" dir="ltr">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/foundation.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="grid-container">
    <header class="grid-x grid-padding-x">
        <div class="large-6 cell">
            <?php
            if(function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>
        </div>
        <div class="large-6 cell">
            <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'container_class' => 'menu simple main-nav'
            )); ?>
        </div>
    </header>