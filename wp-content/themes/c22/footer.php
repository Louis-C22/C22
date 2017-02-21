<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">	
					<div class="footer-logo-wrapper pt-10">
						<img width="150" src="<?php echo esc_url(home_url()); ?>/wp-content/themes/c22/assets/images/svg/c22_big.svg">
					</div>
					<?php 
						if ( has_nav_menu( 'footer' ) ) : ?>
						<nav class="footer-navigation" role="navigation" aria-label="<?php _e( 'Footer Links Menu', 'twentyseventeen' ); ?>">
							<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?> 
						</nav><!-- .footer-navigation -->
						<?php endif;
					?>
					<hr class="divider width-4 bkg-grey mt-20 mb-20">


					<?php 
						if ( has_nav_menu( 'footer-social' ) ) : ?>
						<nav class="social-navigation width-4" role="navigation" aria-label="<?php _e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'footer-social',
									'menu_class'     => 'social-links-menu footer-social',
									'depth'          => 1,
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
								) );
							?>
						</nav><!-- .social-navigation -->
						<?php endif;
					?>

					<p class="copyright">© Calvert 22 foundation. all rights reserved.</p>

			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
