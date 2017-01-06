<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package telegraphdata1
 */

?>

	</div><!-- #content -->
	
	<footer id="colophon" class="site-footer" role="contentinfo">
	
		<div id="footer-sidebar" class="secondary elements">
			<div id="footer-sidebar1" class="item">
			<?php
				if(is_active_sidebar('first-footer-widget-area')){
				dynamic_sidebar('first-footer-widget-area');
				}
				?>
			</div>
			
			<div id="footer-sidebar2" class="item">
				<?php
					if(is_active_sidebar('second-footer-widget-area')){
					dynamic_sidebar('second-footer-widget-area');
					}
				?>
			</div>
			
			<div id="footer-sidebar3" class="item">
				<?php
					if(is_active_sidebar('third-footer-widget-area')){
					dynamic_sidebar('third-footer-widget-area');
					}
				?>
			</div>
		</div>

		
			
		
			
			
			
			
		
			<h5 class="footer-text">&copy;<?php echo date('Y'); ?> Telegraph Data</h5>
			<h5 class="footer-text">All Rights Reserved</h5> 
			<h5 class="footer-text"><?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'telegraphdata1' ), 'telegraphdata1', '<a href="http://www.laurakaltman.com" rel="designer">Laura Kaltman</a>' ); ?></h5>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	
</div><!-- #page -->



<?php wp_footer(); ?>

</body>
</html>
