<?php
/**
 * Template part for displaying page content in front-page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package telegraphdata1
 */

?>

<section class="homepage">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
	</header><!-- .entry-header -->
	
	<?php
	$section_2_header = get_field('section_2_header');
	$section_2_text = get_field('section_2_text');
	$section_2_image = get_field('section_2_image');
	$section_2_link = get_field('section_2_link');
	
	$section_3_header = get_field('section_3_header');
	$section_3_text = get_field('section_3_text');
	$section_3_image = get_field('section_3_image');
	$section_3_link = get_field('section_3_link');
	?>
	
	
	<div class=" site-main">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'telegraphdata1' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php if ( get_edit_post_link() ) : ?>
	
	<?php endif; ?>

</article><!-- #post-## -->
</section>

<section class="site-main clients clearfix homepage-section">
	<div class="col-1">
		<h2 class="h-homepage"><?php echo $section_2_header; ?></h2>
		<p><?php echo $section_2_text; ?></p>
		<p><a class="button-hero" href="#"><?php echo $section_2_link ?></a></p>
	</div>
	<div>
		<img class="img_sec_1" src="<?php echo $section_2_image ?>"/>
	</div>
</section>

<section class="site-main featured-work clearfix homepage-section">
<div>
	<p> FEATURED WORK</p>
	</div>
</section>

<section class="site-main services clearfix homepage-section">
	<div class="col-1">
		<h2 class="h-homepage"><?php echo $section_3_header; ?></h2>
		<p><?php echo $section_3_text; ?></p>
		<p><a class="button-hero" href="#"><?php echo $section_3_link ?></a></p>
	</div>
</section>

<section id="contact" class="site-main clearfix homepage-section">
	<div>
			<h2 class="h-homepage">Contact</h2>
			<p>test</p>
	</div>
</section>