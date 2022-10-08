<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">
		<h1>The Class</h1>
	<section class="students">
		
			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) :
					?>
					<article class="student-item">
						<?php
					the_post();
					
					

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', get_post_type());
					$terms = wp_get_post_terms($post-> ID,'fwd-Student-category');
					
					foreach($terms as $oneterm){
						$term_link = get_term_link( $oneterm );
						
						echo 'Specialty: <a href="' . esc_url( $term_link ) . '">' . $oneterm->name . '</a>';
					}
					?></article>
						<?php

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			
			?>
		
	</section>
	</main><!-- #primary -->

<?php

get_footer();
