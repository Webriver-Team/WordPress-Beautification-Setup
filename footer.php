<?php
/**
 * The template for displaying website footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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

if ( is_home() ) {
	$p_id = get_option( 'page_for_posts' );
}

if ( is_404() || is_archive() || is_category() || is_search() ) {
	$p_id = get_option( 'page_on_front' );
}

$option_fields = get_fields_escaped( 'option' );
// $fields        = get_fields( $p_id );
$fields = get_fields_escaped( $p_id );

?>

</main> <?php get_template_part( 'partials/cta' ); ?>


<?php

// Schema Markup - ACF variables.
$basethemevar_schema_check = $option_fields['basethemevar_schema_check'];
$basethemevar_schema_check = ( isset( $option_fields['basethemevar_schema_check'] ) ) ? $option_fields['basethemevar_schema_check'] : null;
if ( $basethemevar_schema_check ) {
	$basethemevar_schema_business_name       = ( isset( $option_fields['basethemevar_schema_business_name'] ) ) ? $option_fields['basethemevar_schema_business_name'] : null;
	$basethemevar_schema_business_legal_name = ( isset( $option_fields['basethemevar_schema_business_legal_name'] ) ) ? $option_fields['basethemevar_schema_business_legal_name'] : null;
	$basethemevar_schema_street_address      = ( isset( $option_fields['basethemevar_schema_street_address'] ) ) ? $option_fields['basethemevar_schema_street_address'] : null;
	$basethemevar_schema_locality            = ( isset( $option_fields['basethemevar_schema_locality'] ) ) ? $option_fields['basethemevar_schema_locality'] : null;
	$basethemevar_schema_region              = ( isset( $option_fields['basethemevar_schema_region'] ) ) ? $option_fields['basethemevar_schema_region'] : null;
	$basethemevar_schema_postal_code         = ( isset( $option_fields['basethemevar_schema_postal_code'] ) ) ? $option_fields['basethemevar_schema_postal_code'] : null;
	$basethemevar_schema_map_short_link      = ( isset( $option_fields['basethemevar_schema_map_short_link'] ) ) ? $option_fields['basethemevar_schema_map_short_link'] : null;
	$basethemevar_schema_latitude            = ( isset( $option_fields['basethemevar_schema_latitude'] ) ) ? $option_fields['basethemevar_schema_latitude'] : null;
	$basethemevar_schema_longitude           = ( isset( $option_fields['basethemevar_schema_longitude'] ) ) ? $option_fields['basethemevar_schema_longitude'] : null;
	$basethemevar_schema_opening_hours       = ( isset( $option_fields['basethemevar_schema_opening_hours'] ) ) ? $option_fields['basethemevar_schema_opening_hours'] : null;
	$basethemevar_schema_telephone           = ( isset( $option_fields['basethemevar_schema_telephone'] ) ) ? $option_fields['basethemevar_schema_telephone'] : null;
	$basethemevar_schema_business_email      = ( isset( $option_fields['basethemevar_schema_business_email'] ) ) ? $option_fields['basethemevar_schema_business_email'] : null;
	$basethemevar_schema_business_logo       = ( isset( $option_fields['basethemevar_schema_business_logo'] ) ) ? $option_fields['basethemevar_schema_business_logo'] : null;
	$basethemevar_schema_price_range         = ( isset( $option_fields['basethemevar_schema_price_range'] ) ) ? $option_fields['basethemevar_schema_price_range'] : null;
	$basethemevar_schema_type                = ( isset( $option_fields['basethemevar_schema_type'] ) ) ? $option_fields['basethemevar_schema_type'] : null;
}

?>


<footer>
	<?php if ( $basethemevar_schema_check ) { ?>
		<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "<?php echo $basethemevar_schema_type; ?>",
			"address": {
				"@type": "PostalAddress",
				"addressLocality": "<?php echo $basethemevar_schema_locality; ?>",
				"addressRegion": "<?php echo $basethemevar_schema_region; ?>",
				"postalCode": "<?php echo $basethemevar_schema_postal_code; ?>",
				"streetAddress": "<?php echo $basethemevar_schema_street_address; ?>"
			},
			"hasMap": "<?php echo $basethemevar_schema_map_short_link; ?>",
			"geo": {
				"@type": "GeoCoordinates",
				"latitude": "<?php echo $basethemevar_schema_latitude; ?>",
				"longitude": "<?php echo $basethemevar_schema_longitude; ?>"
			},
			"name": "<?php echo $basethemevar_schema_business_name; ?>",
			"openingHours": "<?php echo $basethemevar_schema_opening_hours; ?>",
			"telephone": "<?php echo $basethemevar_schema_telephone; ?>",
			"email": "<?php echo $basethemevar_schema_business_email; ?>",
			"url": "<?php echo esc_url( home_url() ); ?>",
			"image": "<?php echo $basethemevar_schema_business_logo; ?>",
			"legalName": "<?php echo $basethemevar_schema_business_legal_name; ?>",
			"priceRange": "<?php echo $basethemevar_schema_price_range; ?>"
		}
		</script>
	<?php } ?>
</footer>

<?php wp_footer(); ?> </body>

</html>
