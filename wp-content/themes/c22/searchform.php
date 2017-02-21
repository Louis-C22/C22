<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<div id="c22-search" class="c22-search">
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input class="c22-search-submit search-submit" type="submit" value="">
		<input class="c22-search-input search-field" placeholder="Enter your search term..." type="text" value="<?php echo get_search_query(); ?>" name="s" id="search">
		<span class="icon icon-magnifying-glass animate"></span>
	</form>
</div>
