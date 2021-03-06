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
			<span>
			<?php printf( __( 'This website is powered by %s and %s', 'aquarius' ), '<a href="http://www.wordpress.org/" title="WordPress">WordPress</a>', '<a href="http://wplovin.com/aquarius/" title="Aquarius theme by wplovin">Aquarius</a><i class="fa fa-heart"></i>' ); ?>
			</span>
		</div>
	</footer>


<?php wp_footer(); ?>
</body>
</html>