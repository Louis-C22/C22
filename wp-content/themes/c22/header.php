<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header class="site-header">

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top header-white">
				<div class="wrap position-relative">

					<div class="logo-wrapper">
						<a class="tcj-logo logo-light" href="<?php echo esc_url(home_url()); ?>">
							<img width="280" src="<?php echo esc_url(home_url()); ?>/wp-content/themes/c22/assets/images/svg/c22_white-written.svg" />
						</a>

						<a class="tcj-logo logo-dark" href="<?php echo esc_url(home_url()); ?>">
							<img width="280" src="<?php echo esc_url(home_url()); ?>/wp-content/themes/c22/assets/images/svg/c22_blue-written.svg" />
						</a>

					</div>

					<!-- Support btn -->
						
					<div class="btn-text-wrapper">
						<a href="http://localhost:8888/support-us/" class="btn-text">
							 Support us
						</a>
					</div>

					<!-- /.Support btn -->
					
					<!-- Search function -->
						
					<div class="search-wrapper">
						<?php get_search_form(); ?>
					</div>

					<!-- /.Search function -->

					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>

				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- .site-header -->

	<?php
	// If a regular post or page, and not the front page, show the featured image.
	if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) ) :
		echo '<div class="single-featured-image-header">';
		the_post_thumbnail( 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
