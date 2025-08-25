<?php
function mein_theme_enqueue_scripts() {
    // CSS
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css', array(), '1.0');

    // JS
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mein_theme_enqueue_scripts');


function mein_theme_setup() {
    register_nav_menus(array(
        'main-menu' => __('Hauptmenü', 'custom-theme'),
    ));
}
add_action('after_setup_theme', 'mein_theme_setup');

