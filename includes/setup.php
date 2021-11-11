<?php
/**
 * Setup function for the project
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */

 /**
  * Sets up theme defaults and registers support for various WordPress features.
  */
if ( ! function_exists( 'glide_setup_function' ) ) {

	function glide_setup_function() {

		// Make theme available for translation.
		load_theme_textdomain( 'basetheme_td' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for RSS Feed.
		add_theme_support( 'automatic-feed-links' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Set post thumbnail sizes
		set_post_thumbnail_size( 150, 150, true );

		// Add custom thumbnail sizes for backend admin
		add_image_size( 'admin-square', 90, 90, false  );
		add_image_size( 'admin-landscape', 150, 90, false   );
		add_image_size( 'admin-portrait', 90, 130, false   );
		// Add custom thumbnail sizes for frontend theme
		add_image_size( 'thumb_2000', 2000 , 9999, false );
		add_image_size( 'thumb_1600', 1600, 9999, false );
		add_image_size( 'thumb_1400', 1400 , 9999, false );
		add_image_size( 'thumb_1200', 1200 , 9999, false );
		add_image_size( 'thumb_1000', 1000, 9999, false );
		add_image_size( 'thumb_900', 900, 9999, false );
		add_image_size( 'thumb_800', 800, 9999, false );
		add_image_size( 'thumb_700', 700, 9999, false );
		add_image_size( 'thumb_600', 600, 9999, false );
		add_image_size( 'thumb_500', 500, 9999, false );
		add_image_size( 'thumb_400', 400, 9999, false );
		add_image_size( 'thumb_300', 300, 9999, false );
		add_image_size( 'thumb_200', 200, 9999, false );
		add_image_size( 'thumb_100', 100, 9999, false );

		// Register wp_nav_menu() menus
		register_nav_menus(
			array(
				'main'   => __( 'Main Navigation', 'basetheme_td' ),
				'footer' => __( 'Footer Menu', 'basetheme_td' ),
			)
		);

		// Fallback function for menus
		function menu_fallback(){ ?>
			<div id="menu">
				<ul>
					<li> <?php _e( 'Go to Admin > Appearance > Menus, to create your menu.', 'basetheme_td' ); ?></li>
				</ul>
			</div>
		<?php
		}

		// Add HTML5 theme support for required functionalities
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		// Align support for Gutenberg - Enabling theme support for align full and align wide option for the block editor.
		add_theme_support( 'align-wide' );

		// Set JPEG quality to 100%
		add_filter(
			'jpeg_quality',
			function() {
				return 100;
			}
		);

	}
}

add_action( 'after_setup_theme', 'glide_setup_function' );
