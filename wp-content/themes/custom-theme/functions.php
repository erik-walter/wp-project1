<?php
function my_custom_theme_setup() {
    // Theme-Support hinzufügen
    add_theme_support('title-tag'); // dynamischer Titel
    add_theme_support('post-thumbnails'); // Beitragsbilder
}
add_action('after_setup_theme', 'my_custom_theme_setup');
