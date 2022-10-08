<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		<?php

				// Check rows existexists.
				if( have_rows('weekly_course_schedule') ):
					$sub_value4 = get_sub_field_object('date');
					$sub_value5 = get_sub_field_object('course');
					$sub_value6 = get_sub_field_object('instructor');
					?>
					<table class="schedule">
						<caption>Weekly Course Schedule</caption>
						<tr>
					<th><?php echo $sub_value4['label']; ?></th>
					<th><?php echo $sub_value5['label']; ?></th>
					<th><?php echo $sub_value6['label']; ?></th>
					</tr>
						
						

					<?php

					while( have_rows('weekly_course_schedule') ) : the_row();

						// Load sub field value.
						$sub_value = get_sub_field('date');
						$sub_value1 = get_sub_field('course');
						$sub_value2 = get_sub_field('instructor');
						$sub_value3 = get_field_object('weekly_course_schedule');
					
						

						?>
					
						
						
						<tr>
						<td><?php echo($sub_value) ; ?> </td>
						<td><?php echo($sub_value1); ?> </td>
						<td><?php echo($sub_value2); ?> </td>
						</tr>
			
				
						
						
					<?php

						


					
					
						
						

						// Do something...

					// End loop.
					endwhile;
					?>
					</table>

					
					<?php

				// No value.
				else :
					// Do something...
				endif;
		?>		


	</main><!-- #primary -->

<?php

get_footer();
