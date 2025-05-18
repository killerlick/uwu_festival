<?php

/*
Template Name: Test
*/

get_header();
?>

<h1><?php the_title() ?>   </h1>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

	
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
cool , japparait  


<?php

get_footer();
?>