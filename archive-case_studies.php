<?php
/**
 * The template for displaying archive-case_studies.php.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package telegraphdata1
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();
				$case_study_image = get_field('case_study_image');
				$location = get_field('location');
				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			
			<aside>
				<img src="<?php echo $case_study_image; ?>"/>
				<h3><?php echo $location; ?></h3>
			</aside>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
