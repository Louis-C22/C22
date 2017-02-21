<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap row pb-20">
	<div class="row">
			<section class="pt-20 pb-20">
				<h3>Search results for: &quot;<?php echo get_search_query(); ?>&quot;</h3>
				<hr class="divider">
			</section>


	<?php if ( have_posts() ) :  // results found?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="width-12">
				<article class="pt-10 pb-10">

					<div>

						<?php get_the_category() ?>

						<div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_title">

							<h3 style="margin-bottom: 10px;">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php the_title();  ?>
								</a>
							</h3>

							<div class="width-7">
								<?php the_excerpt(); ?>
							</div>

							<p>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									View more
								</a>
							</p>
							
						</div>

					</div>
				</article>
			</div>
			<hr class="divider">
		<?php endwhile; ?>

			<?php else :  // no results?>
				<article>

					<h3>Sorry, there are no results found for your search.</h3>
				</article>
			<?php endif; ?>

		</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
