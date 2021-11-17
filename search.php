<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */

// Include header..
get_header();

// Global variables..
global $option_fields;
global $p_id;
global $fields;

// Required if you want different search results style for separate CPT etc
// $post_type = get_post_type();

/**
 * Search Masthead
 */
printf(
/* translators: %s: search term. */
	esc_html__( 'Results for "%s"', 'basetheme_td' ),
	'<span class="search-term">' . esc_html( get_search_query() ) . '</span>'
);

?>

<?php
/**
 * Search Masthead End
 */
?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		// Include specific template for the content.
		get_template_part( 'partials/content', 'archive-post' );
	}
	?>
<div class="clear"></div>
	<?php
} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'partials/content', 'none' );
}
?>


<?php get_footer(); ?>
