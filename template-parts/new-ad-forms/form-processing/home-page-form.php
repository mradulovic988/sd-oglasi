<?php
/**
 * Form processing for home page ads
 */

include MLAB_STUDIO_DIR . 'src/config/Mls_Config.php';
$_config = new Mls_Config();

if ( isset( $_POST['ispost'] ) ) {
	global $current_user;
	get_currentuserinfo();

//	function mls_get_promotion_timestamp() {
//		$_config = new Mls_Config();
//		if ( isset( $_POST['mls-promotion-days-choose'] ) ) {
//			return $_config->mls_promotion_day_counting( $_POST['mls-promotion-days-choose'] );
//		}
//		if ( isset( $_POST['mls-promotion-days-choose-priority'] ) ) {
//			return $_config->mls_promotion_day_counting( $_POST['mls-promotion-days-choose-priority'] );
//		}
//		if ( isset( $_POST['mls-promotion-days-choose-standard'] ) ) {
//			return $_config->mls_promotion_day_counting( $_POST['mls-promotion-days-choose-standard'] );
//		}
//		if ( isset( $_POST['mls-promotion-days-choose-lead'] ) ) {
//			return $_config->mls_promotion_day_counting( $_POST['mls-promotion-days-choose-lead'] );
//		}
//		if ( isset( $_POST['mls-promotion-days-choose-diamante'] ) ) {
//			return $_config->mls_promotion_day_counting( $_POST['mls-promotion-days-choose-diamante'] );
//		}
//	}

	$user_login     = $current_user->user_login;
	$user_email     = $current_user->user_email;
	$user_firstname = $current_user->user_firstname;
	$user_lastname  = $current_user->user_lastname;
	$user_id        = $current_user->ID;

	$post_title                = $_POST['mls-title'];
	$post_category             = (int) $_POST['mls-get-categories'];
	$post_phone                = $_POST['mls-phone'];
	$post_additional_phone     = $_POST['mls-additional-phone'];
	$post_email                = $_POST['mls-email'];
	$post_place                = $_POST['mls-place'];
	$post_street               = $_POST['mls-street'];
	$post_street_number        = $_POST['mls-street-number'];
	$post_instagram            = $_POST['mls-instagram'];
	$post_facebook             = $_POST['mls-facebook'];
	$post_linkedin             = $_POST['mls-linkedin'];
	$post_website              = $_POST['mls-website'];
	$post_description          = $_POST['mls-description'];
	$post_highlightone         = $_POST['mls-highlightone'];
	$post_highlighttwo         = $_POST['mls-highlighttwo'];
	$post_highlightthree       = $_POST['mls-highlightthree'];
	$post_highlightone_price   = $_POST['mls-highlightone-price'];
	$post_highlighttwo_price   = $_POST['mls-highlighttwo-price'];
	$post_highlightthree_price = $_POST['mls-highlightthree-price'];
	$post_type                 = 'naslovna_oglasi';
//	$promotion_days            = $_config->mls_promotion_day_counting( $_POST['promotion_check'] ); // for testing timestamp set 1 instead $_POST['mls-promotion-days-choose']
//	$promotion_days = mls_check_promotion(); // for testing timestamp set 1 instead $_POST['mls-promotion-days-choose']
	// $promotion_days = mls_get_promotion_timestamp();

	$new_post = array(
		'post_title'   => $post_title,
		'post_content' => $post_description, // Change this to dynamic content
		'post_status'  => 'publish',
		'post_name'    => str_replace( ' ', '-', $post_title ),
		'post_type'    => 'naslovna_oglasi',
		'post_author'  => $user_login,
	);

	$pid = wp_insert_post( $new_post );
	wp_set_object_terms( $pid, $post_category, 'naslovna' );
	add_post_meta( $pid, 'meta_key', true );
	add_post_meta( $pid, '_mls_naslovna_phone', $post_phone );
	add_post_meta( $pid, '_mls_naslovna_additional_phone', $post_additional_phone );
	add_post_meta( $pid, '_mls_naslovna_email', $post_email );
	add_post_meta( $pid, '_mls_naslovna_place', $post_place );
	add_post_meta( $pid, '_mls_naslovna_place', $post_place );
	add_post_meta( $pid, '_mls_naslovna_street', $post_street );
	add_post_meta( $pid, '_mls_naslovna_street_number', $post_street_number );
	add_post_meta( $pid, '_mls_naslovna_instagram', $post_instagram );
	add_post_meta( $pid, '_mls_naslovna_facebook', $post_facebook );
	add_post_meta( $pid, '_mls_naslovna_linkedin', $post_linkedin );
	add_post_meta( $pid, '_mls_naslovna_website', $post_website );
	add_post_meta( $pid, '_mls_naslovna_highlightone', $post_highlightone );
	add_post_meta( $pid, '_mls_naslovna_highlighttwo', $post_highlighttwo );
	add_post_meta( $pid, '_mls_naslovna_highlightthree', $post_highlightthree );
	add_post_meta( $pid, '_mls_naslovna_highlightone_price', $post_highlightone_price );
	add_post_meta( $pid, '_mls_naslovna_highlighttwo_price', $post_highlighttwo_price );
	add_post_meta( $pid, '_mls_naslovna_highlightthree_price', $post_highlightthree_price );
	// add_post_meta( $pid, '_mls_naslovna_timestamp', $promotion_days );
	add_post_meta( $pid, '_mls_naslovna_user_id', $user_id );

	if ( ! function_exists( 'wp_generate_attachment_metadata' ) ) {
		require_once( ABSPATH . "wp-admin" . '/includes/image.php' );
		require_once( ABSPATH . "wp-admin" . '/includes/file.php' );
		require_once( ABSPATH . "wp-admin" . '/includes/media.php' );
	}

	$file_logo = media_handle_upload( 'mls-file', $pid );
	if ( $file_logo > 0 ) {
		update_post_meta( $pid, '_thumbnail_id', $file_logo );
	}

	$files = $_FILES["mls-photos"];
	foreach ( $files['name'] as $key => $value ) {
		set_time_limit( 0 );

		if ( $files['name'][ $key ] ) {
			$file          = array(
				'name'     => $files['name'][ $key ],
				'type'     => $files['type'][ $key ],
				'tmp_name' => $files['tmp_name'][ $key ],
				'error'    => $files['error'][ $key ],
				'size'     => $files['size'][ $key ]
			);
			$_FILES        = array( "upload_file" => $file );
			$attachment_id = media_handle_upload( "upload_file", $pid );

			if ( is_wp_error( $attachment_id ) ) {
				echo "Došlo je do greške. Pokušajte ponovo.";
			} else {
//				echo "Oglas je uspešno dodat.";
//				echo wp_get_attachment_image($attachment_id, array(800, 600)) . "<br>";
			}
		}
	}

	if ( is_wp_error( $_POST['ispost'] ) ) {
		echo "<b>Došlo je do greške. Pokušajte ponovo.</b>";
	} else {
		echo "<b>Oglas je uspešno dodat. </b><a href='/moj-nalog/moji-oglasi/'>Pogledajte vaše oglase</a>";
	}
}
