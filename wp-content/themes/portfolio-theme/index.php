<?php
/* 
Template Name: Prologue HTML5 UP
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    
    <!-- CSS-Dateien einbinden -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css" />
    
    <?php wp_head(); ?>
</head>
<body <?php body_class('is-preload'); ?>>

<!-- Header -->
<div id="header">

    <div class="top">

        <!-- Logo -->
        <div id="logo">
            <span class="image avatar48"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/avatar.jpg" alt="" /></span>
            <h1 id="title">Erik Walter</h1>
        </div>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="#top" id="top-link"><span class="icon solid fa-home">Intro</span></a></li>
                <li><a href="#portfolio" id="portfolio-link"><span class="icon solid fa-th">Projekte</span></a></li>
                <li><a href="#contact" id="contact-link"><span class="icon solid fa-envelope">Kontakt</span></a></li>
            </ul>
        </nav>

    </div>

    <div class="bottom">


    </div>

</div>

<!-- Main -->
<div id="main">

    <!-- Intro -->
    <section id="top" class="one dark cover">
        <div class="container">

            <header>
                <h2 class="alt"> Hi! Hier liste ich meine Projekte mit <br/> Verlinkung zu den Github Repositories auf. 
            </header>

            </br> 

            <footer>
                <a href="#portfolio" class="button scrolly">Projekte</a>
            </footer>

            </br> 

        </div>
    </section>

    <!-- Projekte -->
    <section id="portfolio" class="two">
        <div class="container">

            <header>
                <h2>Projekte</h2>
            </header>

            <p>Mit Klick auf das jeweilige Projekt gelangt man zum GitHub Repository.</p>

            <div class="row">
                <div class="col-4 col-12-mobile">
                    <article class="item">
                        <a href="https://github.com/erik-walter/wp-project1" class="image fit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic02.jpg" alt="" /></a>
                        <header>
                            <h3>Wordpress Projekt</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic03.jpg" alt="" /></a>
                        <header>
                            <h3>Platzhalter</h3>
                        </header>
                    </article>
                </div>
                <div class="col-4 col-12-mobile">
                    <article class="item">
                        <a href="#" class="image fit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic04.jpg" alt="" /></a>
                        <header>
                            <h3>Platzhalter</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic05.jpg" alt="" /></a>
                        <header>
                            <h3>Platzhalter</h3>
                        </header>
                    </article>
                </div>
                <div class="col-4 col-12-mobile">
                    <article class="item">
                        <a href="#" class="image fit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic06.jpg" alt="" /></a>
                        <header>
                            <h3>Platzhalter</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic07.jpg" alt="" /></a>
                        <header>
                            <h3>Platzhalter</h3>
                        </header>
                    </article>
                </div>
            </div>

        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="four">
        <div class="container">

            <header>
                <h2>Kontakt</h2>
            </header>

            <p>
                <span class="icon solid fa-envelope" style="margin-right: 1rem;"></span>
                e.waltersoftware@gmail.com
                <br />
                <a href="https://github.com/e-waltersoftware" target="_blank" rel="noopener" style="border-bottom: none;">
                    <span class="icon brands fa-github" style="margin-right: 1rem;"></span>
                    GitHub
                </a>
            </p>


        </div>
    </section>

</div>

<!-- Footer -->
<div id="footer">

    <ul class="copyright">
        <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net" target="_blank">HTML5 UP</a></li>
    </ul>

</div>

<!-- JS-Dateien einbinden -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.scrolly.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.scrollex.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/browser.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/breakpoints.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/util.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>
</body>
</html>
