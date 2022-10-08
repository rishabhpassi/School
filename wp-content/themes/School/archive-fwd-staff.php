<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		

			<header class="page-header">
			<h1>Staff</h1>
			
				<?php
				the_archive_description( '<div class="archive-description">', '</div>' );
				
				?>
			</header><!-- .page-header -->

			<?php
				$args = array(
					'post_type'      => 'fwd-staff',
					'posts_per_page' => -1,
					'tax_query'      => array(
						array (
							'taxonomy' => 'fwd-Staff-category',
							'field'    => 'slug',
							'terms'    => 'administrative'
						),
					),
				);

				$query = new WP_Query( $args );

				if ( $query->have_posts() ) : ?>
					<section class="staff-wrapper">
						<h2><?php esc_html_e( 'Administrative', 'fwd' ); ?></h2>
						<?php
						while( $query->have_posts() ) :
							$query->the_post(); ?>
							<article class="staff-item">
							<h3><?php the_title(); ?></h3>
								<?php
								if ( function_exists( 'get_field' ) ) {
			
									if ( get_field( 'short_staff_biography' ) ) {

										echo '<p>' . esc_html( get_field( 'short_staff_biography' ) ) . '</p>';
									}
								
									if ( get_field( 'course' ) ) {
										echo '<p> <strong>Courses-</strong>' . esc_html( get_field( 'course' ) ) . '</p>';
									}
									if ( get_field( 'instructor_website' ) ) {
										echo "<a href=" .esc_html( get_field( 'instructor_website' ) ) .">Instuctor Website</a>";
									}

								
								}
								?>
							</article>
							<?php
						endwhile;
						wp_reset_postdata();
						?>
					</section>
					<?php
				endif;
				?>

<?php
				$args = array(
					'post_type'      => 'fwd-staff',
					'posts_per_page' => -1,
					'tax_query'      => array(
						array (
							'taxonomy' => 'fwd-Staff-category',
							'field'    => 'slug',
							'terms'    => 'faculty'
						),
					),
				);

				$query = new WP_Query( $args );

				if ( $query->have_posts() ) : ?>
					<section class="staff-wrapper">
						<h2><?php esc_html_e( 'Faculty', 'fwd' ); ?></h2>
						<?php
						while( $query->have_posts() ) :
							$query->the_post(); ?>
							<article class="staff-item">
								<h3><?php the_title(); ?></h3>
									
									
								
								<?php
								if ( function_exists( 'get_field' ) ) {
			
									if ( get_field( 'short_staff_biography' ) ) {

										echo '<p>' . esc_html( get_field( 'short_staff_biography' ) ) . '</p>';
									}
								
									if ( get_field( 'course' ) ) {
										echo '<p> <strong>Courses-</strong>' . esc_html( get_field( 'course' ) ) . '</p>';
									}
									if ( get_field( 'instructor_website' ) ) {
										echo "<a href=" .esc_html( get_field( 'instructor_website' ) ) .">Instuctor Website</a>";
									}

								
								}
								?>
							</article>
							<?php
						endwhile;
						wp_reset_postdata();
						?>
					</section>
					<?php
				endif;
				?>


			
			
			

			
	

	</main><!-- #primary -->

<?php

get_footer();
