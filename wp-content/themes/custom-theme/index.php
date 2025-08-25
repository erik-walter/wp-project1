<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
</header>

<main>
    <?php
    // Rezepte aus dem CPT "rezepte" anzeigen
    $args = array(
        'post_type' => 'rezepte',
        'posts_per_page' => -1, // alle Beiträge
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $rezepte = new WP_Query($args);

    if($rezepte->have_posts()):
        echo '<div class="rezepte-list">';
        while($rezepte->have_posts()): $rezepte->the_post();
            echo '<div class="rezept-item">';
            echo '<h2>' . get_the_title() . '</h2>';
            echo '<div class="rezept-content">' . get_the_content() . '</div>';
            echo '</div>';
        endwhile;
        echo '</div>';
        wp_reset_postdata();
    else:
        echo '<p>Keine Rezepte gefunden.</p>';
    endif;
    ?>
</main>

<?php wp_footer(); ?>
</body>
</html>
