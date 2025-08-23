<?php
/**
 * Template pour la page d'accueil
 *
 * @package uwu_fest
 */

get_header(); ?>

<main id="primary" class="site-main">

        <?php
        while ( have_posts() ) :
            the_post();
            the_content(); // Tu écris la présentation de ton événement dans l’admin
        endwhile;
        ?>

</main><!-- #main -->

<?php get_footer(); ?>
