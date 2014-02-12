<?php
/**
 * Main footer template.
 * 
 * Include it with get_footer();
 *
 * @package WordPress
 * @subpackage Aquarius
 * @since Aquarius 1.0
 * @author wplovin <hello@wplovin.com>
 */
?><?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
	<section id="sidebar-main">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</section>
<?php } ?>


	<footer id="footer-main">
		<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>	
		<div class="inside full-padding">
			<section id="sidebar-footer" class="cf">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</section>
		</div>
		<?php } ?>
		<div id="credits">
			<div class="inside">
				<div class="one-half half-padding-h">
					<span>
					<?php printf( __( '&copy; %s %s', 'aquarius' ), date('Y'), get_bloginfo('name')); ?>
					</span>
				</div>
				<div class="one-half half-padding-h">
					<span>
						<?php printf( __( '%s &amp; %s', 'aquarius' ), '<a href="http://www.wordpress.org/" title="WordPress"><img src="'. get_stylesheet_directory_uri() .'/assets/images/wpmini-blue.png" alt="(W)" title="" width="16px" height="16px" /></a>', '<a href="http://wplovin.com/aquarius/" title="Aquarius theme by wplovin"><i class="fa fa-heart"></i></a>' ); ?>
					</span>
				</div>
			</div>
		</div>
	</footer>


<?php wp_footer(); ?>
</body>
</html>