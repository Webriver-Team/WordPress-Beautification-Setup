<?php

/**
 * The template  displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package BaseTheme Package
 * @since   1.0.0
 */

// Include header..
get_header();

// Global variables..
global $option_fields;
global $p_id;
global $fields;

// 404 Page - Advanced custom fields variables.
$basethemevar_error_headline     = ( isset( $option_fields['basethemevar_error_headline'] ) ) ? $option_fields['basethemevar_error_headline'] : null;
$basethemevar_error_sub_headline = ( isset( $option_fields['basethemevar_error_sub_headline'] ) ) ? $option_fields['basethemevar_error_sub_headline'] : null;

$basethemevar_error_text             = ( isset( $option_fields['basethemevar_error_text'] ) ) ? $option_fields['basethemevar_error_text'] : null;
$basethemevar_error_menu             = ( isset( $option_fields['basethemevar_error_menu'] ) ) ? $option_fields['basethemevar_error_menu'] : null;
$basethemevar_error_menu_bottom_text = ( isset( $option_fields['basethemevar_error_menu_bottom_text'] ) ) ? $option_fields['basethemevar_error_menu_bottom_text'] : null;
$basethemevar_error_search           = ( isset( $option_fields['basethemevar_error_search'] ) ) ? $option_fields['basethemevar_error_search'] : null;

/**
 * Error Page Masthead
 */

?>

<section class="m-section">
	<div class="banner-container center-align error-page-masthead">
		<div class="wrapper">
			<h1 class="heading"><?php echo $basethemevar_error_headline; ?></h1>
			<div class="banner-text">
				<p><?php echo $basethemevar_error_sub_headline; ?></p>
			</div>
		</div>
	</div>
</section>

<?php

/**
 * Error Page Masthead End
 */

?>
<div class="s-section">
	<div class="wrapper">
		<section class="error-404 not-found">
			<div class="page-content">
				<?php
				if ( $basethemevar_error_text ) {
					echo $basethemevar_error_text;
				}
				if ( $basethemevar_error_menu ) {
					?>
				<div class="error"><?php echo $basethemevar_error_menu; ?></div>
				<?php } ?>
				<div class="clear"></div>
				<div class="404-form">
					<?php
					if ( $basethemevar_error_menu_bottom_text ) {
						?>
						<?php echo $basethemevar_error_menu_bottom_text; ?>
						<?php
					}
					?>
					<?php
					if ( 1 !== $basethemevar_error_search ) {
						?>
						<?php get_search_form(); ?>
						<?php
					}
					?>
				</div>
				<!--404-form-->
			</div><!-- .page-content -->
		</section><!-- .error-404 -->
		<div class="s-80"></div>
	</div>
</div>
<?php
get_footer();
