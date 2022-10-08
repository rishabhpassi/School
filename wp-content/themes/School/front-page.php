<?php
/**
 * The template for displaying Home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			
		

			get_template_part( 'template-parts/content', 'page' );
			?>
		<section class = "home-intro">
			<!-- Load the intro using WP_query -->
			<?php
				$args = array( 'page_id' => 15 ); // list of parameters
				
				$intro_query = new WP_Query( $args );
				
				if ( $intro_query -> have_posts() ) {
					while ( $intro_query -> have_posts() ) {
						$intro_query -> the_post();
				
						the_content();
				
					}
					wp_reset_postdata();
				}
			?>
		</section>
		

		
		<section class = "home-work"></section>
		<section class = "home-left"></section>
		<?php
			
			if ( function_exists( 'get_field' ) ) {
			
				if ( get_field( 'left_section_title' ) ) {
					echo '<h2>' . esc_html( get_field( 'left_section_title' ) ) . '</h2>';
				}
			
				if ( get_field( 'left_section_text' ) ) {
					echo '<p>' . esc_html( get_field( 'left_section_text' ) ) . '</p>';
				}
			
			}
			
		?>
		<section class = "home-right"></section>
		<section class = "home-slider">
		<?php
			$args = array(
				'post_type'      => 'fwd-testimonial',
				'posts_per_page' => -1
			);

			$query = new WP_Query( $args );

			if ( $query->have_posts() ) : ?>
				<div class="swiper">
					<div class="swiper-wrapper">
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<div class="swiper-slide">
								<?php the_content(); ?>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="swiper-pagination"></div>
					
				</div>
				<?php
				wp_reset_postdata();
			endif;
		?>
		</section>
		<section class = "home-blog">
			<h2><?php esc_html_e("Recent News","fwd");?></h2>
			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 4
			);
			$blog_query = new WP_Query($args);
			if($blog_query -> have_posts()){
				while($blog_query -> have_posts()){
					$blog_query -> the_post();
					?>
					<article>
					
						<a href="<?php the_permalink(); ?>">
						
						<h3><?php the_title(); ?></h3>
						<?php
					the_post_thumbnail(
						'latestportrait-blog',
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						)
					);
				?>

						</a>
					</article>
					
					<?php

				}
				wp_reset_postdata();
			}
			?>
		</section>	
		<?php
			add_action( 'init', function() {
		remove_post_type_support( '6', 'editor' );
		
	}, 99);
	
?>
<a href="http://localhost:8888/School/news/">See all News</a>

		<?php	
		endwhile; // End of the loop.
		?>

	</main><!-- #primary -->

<?php

get_footer();
