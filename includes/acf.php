<?php
/**
 * Functions for advanced custom fields plugin
 *
 * @link https://www.advancedcustomfields.com/resources/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 *
 */

 /**
 * Register custom Gutenberg blocks category
 */
function glide_blocks_category( $categories ) {
    $custom_block = array(
        'slug'  => 'glide-blocks',
		'title' => __( 'Glide Blocks', 'basetheme_td' ),
		'icon'  => 'glide-blocks',
    );

    $categories_sorted = array();
    $categories_sorted[0] = $custom_block;

    foreach ($categories as $category) {
        $categories_sorted[] = $category;
    }

    return $categories_sorted;
}
add_filter( 'block_categories_all', 'glide_blocks_category', 10, 2);


/**
 * Build ACF based theme Options page
 */
// if( function_exists('acf_add_options_page') ) {
  $option_page = acf_add_options_page(array(
		'page_title' 	=> __( 'Theme Options', 'basetheme_td' ),
		'menu_title' 	=> __( 'Theme Options', 'basetheme_td' ),
		'menu_slug' 	=> 'acf-options',
		'capability' 	=> 'edit_posts',
		'redirect' 		=> false,
		'position'		=> 2
	));
// }

/**
 * Helper function that builds button from ACF link object
 */
function glide_acf_button($object, $classes="") {
	if($object['url']){
		$link = "";
		$link = "<a href='".esc_url($object['url']). "' title='".esc_html($object['title'])."' target='".$object['target']."' class='".$classes."'>".esc_html($object['title'])."</a>";
		return $link;
	}
	return null;
}

/**
 * Helper function to get escaped field from ACF
 * and also normalize values.
 *
 * @param $field_key
 * @param bool $post_id
 * @param bool $format_value
 * @param string $escape_method esc_html / esc_attr or NULL for none
 * @return array|bool|string
 */
function get_fields_escaped($field_key, $escape_method = 'esc_html')
{
	$field = get_fields($field_key);

	/* Check for null and falsy values and always return space */
    if($field === NULL || $field === FALSE)
        $field = '';

	/* Handle arrays */
	if(is_array($field))
	{
		$field_escaped = array();
		foreach($field as $key => $value)
		{
			if(is_array($value)){
				$field_escaped[$key] =	get_sub_field_escaped($value, $escape_method);
			} else {
				$field_escaped[$key] =   ($escape_method === NULL) ? $value : $escape_method($value);
				// $field_escaped[$key] =   esc_html($value);
			}
		}
		return $field_escaped;
	}
	else
		return ($escape_method === NULL) ? $field : $escape_method($field);
}

/**
 * Helper function to get escaped field for a sub-field from ACF inside a parent
 * and also normalize values.
 *
 * @param $parent
 * @param string $escape_method esc_html / esc_attr or NULL for none
 * @return array|bool|string
 */

function get_sub_field_escaped($parent =null, $escape_method = 'esc_html' )
 {
	$field = $parent;

	/* Check for null and falsy values and always return space */
	if($field === NULL || $field === FALSE)
	$field = '';

	/* Handle arrays */
	if(is_array($field))
	{
	$field_escaped = array();
	foreach($field as $key => $value)
	{
		if(is_array($value)){
			$field_escaped[$key] =	get_sub_field_escaped($value, $escape_method);
		} else {
		// $field_escaped[$key] =  esc_html($value);
		$field_escaped[$key] =  ($escape_method === NULL) ? $value : $escape_method($value);
		}
	}
		return $field_escaped;
	}
	else
	return ($escape_method === NULL) ? $field : $escape_method($field);
 }

 /**
 * Add height field to ACF WYSIWYG
 */

function wysiwyg_render_field_settings( $field ) {
	acf_render_field_setting( $field, array(
		'label'			=> __('Height of Editor', 'basetheme_td'),
		'instructions'	=> __('Height of Editor after Init', 'basetheme_td'),
		'name'			=> 'wysiwyg_height',
		'type'			=> 'number',
	));
}
add_action('acf/render_field_settings/type=wysiwyg', 'wysiwyg_render_field_settings', 10, 1 );


/**
 * Render height on ACF WYSIWYG
 */

function wysiwyg_render_field( $field ) {
	$field_class = '.acf-'.str_replace('_', '-', $field['key']);
	if(!$field['wysiwyg_height']){
		$custom_acf_wysisyg_height = '150';
	} else {
		$custom_acf_wysisyg_height = $field['wysiwyg_height'];
	}
?>
	<style type="text/css">
	<?php echo $field_class; ?> iframe {
		min-height: <?php echo $custom_acf_wysisyg_height; ?>px;
	}
	</style>
	<script type="text/javascript">
	jQuery(window).load(function() {
		jQuery('<?php echo $field_class; ?>').each(function() {
			jQuery('#'+jQuery(this).find('iframe').attr('id')).height( <?php echo $custom_acf_wysisyg_height; ?> );
		});
	});
	</script>
<?php
}
add_action( 'acf/render_field/type=wysiwyg', 'wysiwyg_render_field', 10, 1 );


/**
 * Render custom Gutenberg blocks
 */

function glide_acf_block_callback( $block ) {
	// convert name ("acf/Testimonial") into path friendly slug ("Testimonial")
	$slug = str_replace( 'acf/', '', $block['name'] );

	// include a template part from within the "template-parts/block" folder
	if ( file_exists( get_theme_file_path( "/blocks/block-{$slug}.php" ) ) ) {
		include get_theme_file_path( "/blocks/block-{$slug}.php" );
	}
}
