<?php
/**
 * Template Name: Homepage
 * Template Post Type: page
 *
 * This template is for displaying home page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 *
 */

// Include header
get_header();

// Global variables
global $option_fields;
global $pID;
global $fields;

/**
 * Homepage Masthead
 *
 */
$basethemevar_pagetitle = (isset($fields['basethemevar_pagetitle'])) ? $fields['basethemevar_pagetitle'] : get_the_title();

 /**
 * Homepage Masthead End
 *
 */

 /**
 * Page content
 *
 */

?>


<?php while ( have_posts() ) : the_post();
	//Include specific template for the content.
	get_template_part( 'partials/content', get_post_type() );
endwhile; ?>

<div class="clear"></div>

<?php
/**
 * Page content
 *
 */
 ?>

<?php get_footer();
