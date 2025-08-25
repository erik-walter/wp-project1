<?php get_header(); ?>

<main class="container">

    <!-- Filterformular -->
    <form method="get" action="">
        <label for="gericht">Kategorie wählen:</label>
        <select name="gericht" id="gericht">
            <option value="">Alle</option>
            <option value="vorspeise" <?php selected($_GET['gericht'] ?? '', 'vorspeise'); ?>>Vorspeise</option>
            <option value="hauptspeise" <?php selected($_GET['gericht'] ?? '', 'hauptspeise'); ?>>Hauptspeise</option>
            <option value="dessert" <?php selected($_GET['gericht'] ?? '', 'dessert'); ?>>Dessert</option>
        </select>
        <button type="submit">Filtern</button>
    </form>

    <?php
    $selected_gericht = sanitize_text_field($_GET['gericht'] ?? '');

    $args = array(
        'post_type' => 'rezepte',
        'posts_per_page' => -1,
    );

    if ($selected_gericht) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'gericht',
                'field'    => 'slug', // oder 'name'
                'terms'    => $_GET['gericht'],
            ),
        );
    }

    $rezepte = new WP_Query($args);

    if ($rezepte->have_posts()): ?>
        <div class="rezepte-list">
            <?php while ($rezepte->have_posts()): $rezepte->the_post(); ?>
                <div class="rezept-item">
                    <h2><?php the_title(); ?></h2>
                    <div class="rezept-content"><?php the_content(); ?></div>
                    <div class="rezept-gericht">
                        <?php
                        $gerichte_terms = get_the_terms(get_the_ID(), 'gericht');
                        if ($gerichte_terms && !is_wp_error($gerichte_terms)) {
                            $names = wp_list_pluck($gerichte_terms, 'name');
                            echo implode(', ', $names);
                        }
                        ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php wp_reset_postdata(); ?>
    <?php else: ?>
        <p>Keine Rezepte gefunden.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
