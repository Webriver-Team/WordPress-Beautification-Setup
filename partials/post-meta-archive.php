<?php
/**
 * Template part for displaying content of about us page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 *
 */

 // Global variables
global $option_fields;
global $pID;
global $fields;
$pID = get_the_ID();
$author_id = $post->post_author;

// Post ACf fields
// Author profile image
$basethemevar_user_profile_image = get_field('basethemevar_user_profile_image', 'user_'.$pID);
if($basethemevar_user_profile_image){
	$basethemevar_author_image = $basethemevar_user_profile_image;
} else if((get_avatar_url( get_the_author_meta( 'ID' ) )) != 'http://0.gravatar.com/avatar/?s=96&d=mm&r=g' || (get_avatar_url( get_the_author_meta( 'ID' ) )) != 'http://1.gravatar.com/avatar/?s=96&d=mm&r=g' || (get_avatar_url( get_the_author_meta( 'ID' ) )) != 'http://2.gravatar.com/avatar/?s=96&d=mm&r=g'){
	$basethemevar_author_image = get_avatar_url( get_the_author_meta( 'ID' ), 128 );
} else {
	$basethemevar_author_image = get_template_directory_uri(  ) ."/assets/img/default-author.webp";
}

// Get author name with fallback to display name
 if ( get_the_author_meta( 'first_name', $author_id ) || get_the_author_meta( 'last_name', $author_id ) ) {
	$basethemevar_author_name = get_the_author_meta( 'first_name', $author_id ) . ' ' . get_the_author_meta( 'last_name', $author_id );
} else if ( get_the_author_meta( 'display_name', $author_id ) ) {
	$basethemevar_author_name = get_the_author_meta( 'display_name', $author_id );
}

// Post Tags & Categories
$basethemevar_post_categories = get_categories($pID);

 ?>

<div class="post-meta-archive">

	<div class="post-date-archive"><?php the_time( project_dtformat ); ?></div>
	<div class="post-author-archive">
		<div class="post-author-image-archive" style="background-image: url(<?php echo $basethemevar_author_image; ?>); width:50px; height:50px; background-size:cover"></div>
		<div class="post-author-name-archive">By: <?php echo $basethemevar_author_name; ?></div>
	</div>
	<?php if($basethemevar_post_categories){ ?>
		<div class="post-categories-archive">
			<?php foreach ($basethemevar_post_categories as $category ) { ?>
				<a href="<?php echo get_category_link($category); ?>"><?php echo $category->name; ?></a>
			<?php } ?>
		</div>
		<!-- /.post-categories -->
	<?php } ?>

</div>
