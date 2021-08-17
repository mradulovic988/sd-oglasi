<?php
/**
 * Class Mls_Favorites_Ads
 *
 * @class Mls_Favorites_Ads
 * @package Mls_Favorites_Ads
 * @version 1.0.0
 * @since 1.0.0
 * @author M Lab Studio
 */

if ( ! class_exists( 'Mls_Favorites_Ads' ) ) {
	class Mls_Favorites_Ads {
		public function __construct() {
			$this->mls_insert_data();
			$this->mls_delete_data();
		}

		/**
		 * Form for favorites ads
		 */
		public function mls_favorites_form() {
			global $wpdb;
			global $current_user;
			$table_name  = $wpdb->prefix . 'favorite_ads';
			$user_id     = $current_user->ID;
			$post_id     = get_the_ID();
			$get_results = $wpdb->get_results( "SELECT user_id, post_id FROM {$table_name} WHERE user_id = {$user_id} AND post_id = {$post_id}" );

			if ( $get_results ) {
				?>
                <form id="mls-favorite-form-fav" method="post">
                    <input type="hidden" name="mls-favorites-user-id-fav" value="<?php echo $user_id ?>">
                    <input type="hidden" name="mls-favorites-post-id-fav" value="<?php echo get_the_ID() ?>">
                    <input type="submit" name="mls-favorites-submit-fav" class="mls-favorites-ads-submit" value="&#9733;">
                </form>
			<?php } else { ?>
                <form id="mls-favorite-form" method="post">
                    <input type="hidden" name="mls-favorites-user-id" value="<?php echo $user_id ?>">
                    <input type="hidden" name="mls-favorites-post-id" value="<?php echo get_the_ID() ?>">
                    <input type="submit" name="mls-favorites-submit" class="mls-favorites-ads-submit-empty" value="&#9734;">
                </form>
			<?php }
		}

		public function mls_insert_data() {
			if ( isset( $_POST['mls-favorites-submit'] ) ) {
				global $wpdb;
				$mls_favorite_user_id = sanitize_text_field( $_POST['mls-favorites-user-id'] );
				$mls_favorite_post_id = sanitize_text_field( $_POST['mls-favorites-post-id'] );

				$table_name = $wpdb->prefix . 'favorite_ads';
				$data       = array(
					'user_id'      => $mls_favorite_user_id,
					'post_id'      => $mls_favorite_post_id,
					'return_value' => 1
				);
				$format     = array( '%d', '%d', '%d' );
				$wpdb->insert( $table_name, $data, $format );
			}
		}

		public function mls_delete_data() {
			if ( isset( $_POST['mls-favorites-submit-fav'] ) ) {
				global $wpdb;
				$mls_favorite_user_id_fav = sanitize_text_field( $_POST['mls-favorites-user-id-fav'] );
				$mls_favorite_post_id_fav = sanitize_text_field( $_POST['mls-favorites-post-id-fav'] );

				$table_name = $wpdb->prefix . 'favorite_ads';
				$where      = array(
					'user_id' => $mls_favorite_user_id_fav,
					'post_id' => $mls_favorite_post_id_fav
				);
				$format     = array( '%d', '%d' );
				$wpdb->delete( $table_name, $where, $format );
			}
		}
	}
}