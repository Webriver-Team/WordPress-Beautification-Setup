<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */

// Include header.
get_header();

// Global variables.
global $option_fields;
global $p_id;
global $fields;


 /**
 * Default Homepage Masthead
 */
?>

	<h1 class="heading"> <?php bloginfo( 'name' ); ?> </h1>
	<h2 class="subheading"><?php bloginfo( 'description' ); ?></h2>

<?php
/**
 * Default Homepage Masthead End
 */
?>

<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		// Include specific template for the content.
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
