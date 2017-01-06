<?php
/**
 * The template for the services pages.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package telegraphdata1
 */

get_header(); ?>

	<div id="primary" class="content-area">
	
	<?php
	$service_1 = get_field('service_1');
	$service_1_text = get_field('service_1_text');
	$service_1_image = get_field('service_1_image');
	
	$service_2 = get_field('service_2');
	$service_2_text = get_field('service_2_text');
	$service_2_image = get_field('service_2_image');
	
	$service_3 = get_field('service_3');
	$service_3_text = get_field('service_3_text');
	$service_3_image = get_field('service_3_image');
	
	$service_4 = get_field('service_4');
	$service_4_text = get_field('service_4_text');
	$service_4_image = get_field('service_4_image');
	
	$service_5 = get_field('service_5');
	$service_5_text = get_field('service_5_text');
	$service_5_image = get_field('service_5_image');
	
	$service_6 = get_field('service_6');
	$service_6_text = get_field('service_6_text');
	$service_6_image = get_field('service_6_image');
	
	$service_7 = get_field('service_7');
	$service_7_text = get_field('service_7_text');
	$service_7_image = get_field('service_7_image');
	
	$service_8 = get_field('service_8');
	$service_8_text = get_field('service_8_text');
	$service_8_image = get_field('service_8_image');
	
	$service_9 = get_field('service_9');
	$service_9_text = get_field('service_9_text');
	$service_9_image = get_field('service_9_image');
	
	$service_10 = get_field('service_10');
	$service_10_text = get_field('service_10_text');
	$service_10_image = get_field('service_10_image');
	
	$service_11 = get_field('service_11');
	$service_11_text = get_field('service_11_text');
	$service_11_image = get_field('service_11_image');

	?>
		<section class= "service-hero">
		<div>
			<?php the_content(); ?>
		</div>
		</section>
	
		<main id="main" class="site-main" role="main">
			
			
			
			<?php
			//while ( have_posts() ) : the_post();

				//get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				//if ( comments_open() || get_comments_number() ) :
					comments_template();
				//endif;

			//endwhile; // End of the loop.
			//?>
			
		
		
		
		<article class="services">
		
		<div>
		<h3 class="center">Our Services:</h3>
			<p class="center">We take pride in our content and the content we create for them. Here is a brief overview of our offered services.</p>
		</div>
		
		
		<div class="">
		<img src="<?php echo $service_1_image; ?>">
		</div>
		
		<div class="service-text">
			<h2 class="underline"><?php echo $service_1; ?></h2>
			<p><?php echo $service_1_text; ?></p>
		</div>
		
		<div class="">
		<img src="<?php echo $service_2_image; ?>">
		</div>
		
		<div class="service-text">
			<h2 class="underline"><?php echo $service_2; ?></h2>
			<p><?php echo $service_2_text; ?></p>
		</div>
		
		<div class="">
		<img src="<?php echo $service_3_image; ?>">
		</div>
		
		<div class="service-text">
			<h2 class="underline"><?php echo $service_3; ?></h2>
			<p><?php echo $service_3_text; ?></p>
		</div>
		
		
		<div class="service-text">
			<h2 class="underline"><?php echo $service_4; ?></h2>
			<p><?php echo $service_4_text; ?></p>
		</div>
		
		<div class="">
		<img src="<?php echo $service_4_image; ?>">
		</div>
		
		<div class="service-text">
			<h2 class="underline"><?php echo $service_5; ?></h2>
			<p><?php echo $service_5_text; ?></p>
		</div>
		
		<div class="">
		<img src="<?php echo $service_5_image; ?>">
		</div>
		
		<div class="service-text">
			<h2 class="underline"><?php echo $service_6; ?></h2>
			<p><?php echo $service_6_text; ?></p>
		</div>
		
		<div class="">
		<img src="<?php echo $service_6_image; ?>">
		</div>
		
		<div class="service-text">
			<h2 class="underline"><?php echo $service_7; ?></h2>
			<p><?php echo $service_7_text; ?></p>
		</div>
		
		<div class="">
		<img src="<?php echo $service_7_image; ?>">
		</div>
		
		<div class="service-text">
			<h2 class="underline"><?php echo $service_8; ?></h2>
			<p><?php echo $service_8_text; ?></p>
		</div>
		
		<div class="">
		<img src="<?php echo $service_8_image; ?>">
		</div>
		
		<div class="service-text">
			<h2 class="underline"><?php echo $service_9; ?></h2>
			<p><?php echo $service_9_text; ?></p>
		</div>
		
		<div class="">
		<img src="<?php echo $service_9_image; ?>">
		</div>
		
		<div class="service-text">
			<h2 class="underline"><?php echo $service_10; ?></h2>
			<p><?php echo $service_10_text; ?></p>
		</div>
		
		<div class="">
		<img src="<?php echo $service_10_image; ?>">
		</div>
		
		<div class="service-text">
			<h2 class="underline"><?php echo $service_11; ?></h2>
			<p><?php echo $service_11_text; ?></p>
		</div>
		
		<div class="">
		<img src="<?php echo $service_11_image; ?>">
		</div>
		
		</article>

		<div class="working-with-us center">
			<h3>Interested in working with us?</h3>
			<a class="button" href="#">Contact Us</a>
		</div>
		
		</main><!-- #main -->
		
		
	</div><!-- #primary -->

<?php

get_footer();
