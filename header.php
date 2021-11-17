<?php
/**
 * The template for displaying website header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */

// Global variables.
global $option_fields;
global $p_id;
global $fields;

$p_id = get_the_ID();

if ( is_home() ) {
	$p_id = get_option( 'page_for_posts' );
}

if ( is_404() || is_archive() || is_category() || is_search() ) {
	$p_id = get_option( 'page_on_front' );
}

if ( function_exists( 'get_fields' ) ) {
	$option_fields = get_fields_escaped( 'option' );
	// $fields        = get_fields( $p_id );
	$fields = get_fields_escaped( $p_id );
}
// Page Tags - Advanced custom fields variables
$tracking = ( isset( $option_fields['tracking_code'] ) ) ? $option_fields['tracking_code'] : null;
$ccss     = ( isset( $option_fields['custom_css'] ) ) ? $option_fields['custom_css'] : null;
$hscripts = ( isset( $option_fields['head_scripts'] ) ) ? $option_fields['head_scripts'] : null;
$bscripts = ( isset( $option_fields['body_scripts'] ) ) ? $option_fields['body_scripts'] : null;

// Page variables - Advanced custom fields variables

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<?php
		// Add Head Scripts
	if ( $hscripts != '' ) {
		echo $hscripts;
	}
	?>

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="apple-touch-icon" sizes="180x180"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pwa/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pwa/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pwa/favicon-16x16.png">
	<link rel="icon" sizes="any"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pwa/favicon.ico">
	<link rel="icon" type="image/svg+xml"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pwa/icon.svg">
	<link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pwa/site.webmanifest">

	<script>
	// Identifies the Browser type in the HTML tag for specific browser CSS
	var doc = document.documentElement;
	doc.setAttribute('data-useragent', navigator.userAgent);
	doc.setAttribute("data-platform", navigator.platform);
	</script>
	<?php
		// Add Tracking Code
	if ( $tracking != '' ) {
		echo $tracking;
	}
		// Add Custom CSS
	if ( $ccss != '' ) {
		echo '<style type="text/css">';
		echo $ccss;
		echo '</style>';
	}

	?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php if ( $bscripts != '' ) { ?>
	<div style="display: none;">
		<?php echo $bscripts; ?>
	</div>
	<?php } ?>
	<header class="site-header">
		<div class="big-wrapper">
			<div class="left-header">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Logo</a>
				</div>
			</div>
			<div class="right-header">
				<div class="menu-overlay">
					<div class="menu-container">
						<div class="menu-content">
							<div class="main-menu">
								<span class="header-menu-item">
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'main',
											'fallback_cb' => 'menu_fallback',
										)
									);
									?>
								</span>
							</div>
							<div class="header-btns">
							</div>
							<!-- /.header-btns -->
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<div class="menu-btn">
					<span class="top"></span>
					<span class="middle"></span>
					<span class="bottom"></span>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<!-- /.wrapper -->

	</header>

	<main id="content" class="site-content">
		<?php
		/**
		 * Include masthead
		 *
		 * Contains masthead settings for each type and template for the theme
		 */
		// get_template_part( 'partials/masthead' );
		?>
