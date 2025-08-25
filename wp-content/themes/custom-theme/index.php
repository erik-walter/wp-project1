<?php
get_header();
?>

<main>
<?php
if (have_posts()):
    while (have_posts()): the_post();
        echo '<h1>' . get_the_title() . '</h1>';

        the_content();
    endwhile;
else:
    echo '<p>Keine Inhalte gefunden.</p>';
endif;
?>
</main>

<?php get_footer(); ?>
