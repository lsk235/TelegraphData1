<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package telegraphdata1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php telegraphdata1_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		
			the_excerpt();
//		
//			wp_link_pages( array(
//				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'telegraphdata1' ),
//				'after'  => '</div>',
//			) );
		?>
	</div><!-- .entry-content -->
	
	<div class="continue-reading">
		<a href="<?php echo esc_url(get_permalink() ); ?>" rel="bookmark">
			<?php
				printf(
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'telegraphdata1' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
			 	);
			?>
		</a>
	</div>

	<footer class="entry-footer">
		<?php telegraphdata1_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
