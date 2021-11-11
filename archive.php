<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */

// Include header
get_header();

// Global variables
global $option_fields;
global $pID;
global $fields;

 /**
 * Archive Masthead
 *
 */
	the_archive_title( );

?>


<?php
 /**
 * Archive Masthead
 *
 */
 ?>

<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();

			// Include specific template for the content
			get_template_part( 'partials/content', 'archive-post' );
		endwhile;
		?>
		<div class="clear"></div>
		<?php
	else :

		// If no content, include the "No posts found" template.
		get_template_part( 'partials/content', 'none' );
	endif;
	?>


<?php get_footer(); ?>
