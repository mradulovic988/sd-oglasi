<?php
/**
 * Class Mls_Admin
 *
 * Main class for all communication between front-end
 *
 * @class Mls_Admin
 * @package Mls_Admin
 * @version 1.0.0
 * @since 1.0.0
 * @author M Lab Studio
 */
if ( ! class_exists( 'Mls_Admin' ) ) {
	class Mls_Admin {
		public function __construct() {
			add_action( 'admin_enqueue_scripts', array( $this, 'mls_admin_enqueue' ) );

			if ( is_admin() ) {
				include MLAB_STUDIO_DIR . 'src/admin/settings-api/Mls_Settings_Api_Dashboard.php';
			}
		}

		public function mls_admin_enqueue() {
			wp_enqueue_script( 'mls_admin_script', MLAB_STUDIO_DIRECTORY_URI . '/src/admin/assets/js/mls_admin.js', array(), '1.0.0', true );
			wp_enqueue_style( 'mls_admin_style', MLAB_STUDIO_DIRECTORY_URI . '/src/admin/assets/css/mls_admin.css' );
		}
	}

	new Mls_Admin();
}