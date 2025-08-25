<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <nav class="site-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu_class'     => 'main-menu',
                'fallback_cb'    => false,
            ));
            ?>
        </nav>
    </div>
</header>
