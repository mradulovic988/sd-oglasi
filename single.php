<?php
/**
 * The template for displaying all single ads
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div id="primary">

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();
		global $post;
		echo $post->ID;

		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-ad-full' );
		the_title();
		the_content();
		$author_ID = get_query_var('author');
		echo $author_ID;

		echo get_post_meta( get_the_ID(), '_mls_naslovna_phone', true ) . '<br>';
		echo get_post_meta( get_the_ID(), '_mls_naslovna_additional_phone', true ) . '<br>';
		echo get_post_meta( get_the_ID(), '_mls_naslovna_email', true ) . '<br>';
		echo get_post_meta( get_the_ID(), '_mls_naslovna_place', true ) . '<br>';
		echo get_post_meta( get_the_ID(), '_mls_naslovna_place', true ) . '<br>';
		echo get_post_meta( get_the_ID(), '_mls_naslovna_street', true ) . '<br>';
		echo get_post_meta( get_the_ID(), '_mls_naslovna_street_number', true ) . '<br>';
		echo get_post_meta( get_the_ID(), '_mls_naslovna_instagram', true ) . '<br>';
		echo get_post_meta( get_the_ID(), '_mls_naslovna_facebook', true ) . '<br>';
		echo get_post_meta( get_the_ID(), '_mls_naslovna_linkedin', true ) . '<br>';
		echo get_post_meta( get_the_ID(), '_mls_naslovna_website', true ) . '<br>';
		echo get_post_meta( get_the_ID(), '_mls_naslovna_highlightone', true ) . '<br>';
		echo get_post_meta( get_the_ID(), '_mls_naslovna_highlightone_price', true ) . '<br>';
		echo get_post_meta( get_the_ID(), '_mls_naslovna_highlighttwo', true ) . '<br>';
		echo get_post_meta( get_the_ID(), '_mls_naslovna_highlighttwo_price', true ) . '<br>';
		echo get_post_meta( get_the_ID(), '_mls_naslovna_highlightthree', true ) . '<br>';
		echo get_post_meta( get_the_ID(), '_mls_naslovna_highlightthree_price', true ) . '<br>';

		$upload_dir     = wp_get_upload_dir();
		$image_location = $upload_dir['url'] . '/' . basename( get_attached_file( get_post_meta( get_the_ID(), '_wp_attached_file', true ) ) );

		echo '<img src="' . $image[0] . '" alt="" class="mls-single-ad-full"<br>';

		$args = array(
			'post_type' => 'attachment',
			'numberposts' => null,
			'post_status' => null,
			'post_parent' => $post->ID
		);

		$attachments = get_posts($args);
		if ($attachments) {
			foreach ($attachments as $attachment) {
//				echo apply_filters('the_title', $attachment->post_title);
				the_attachment_link($attachment->ID, false);
			}
		}

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

		// Previous/next post navigation.
		the_post_navigation( array(
			'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'mls' ) . '</span> ' .
			               '<span class="screen-reader-text">' . __( 'Next post:', 'mls' ) . '</span> ' .
			               '<span class="post-title">%title</span>',
			'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'mls' ) . '</span> ' .
			               '<span class="screen-reader-text">' . __( 'Previous post:', 'mls' ) . '</span> ' .
			               '<span class="post-title">%title</span>',
		) );

		// End the loop.
	endwhile;
	wp_reset_postdata();
	?>

</div><!-- #primary -->

<?php get_footer(); ?>
