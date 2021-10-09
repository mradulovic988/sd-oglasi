<?php
/**
 * Class Mls_Public
 *
 * Main class for all communication between front-end
 *
 * @class Mls_Public
 * @package Mls_Public
 * @version 1.0.0
 * @since 1.0.0
 * @author M Lab Studio
 */
if ( ! class_exists( 'Mls_Public' ) ) {

	class Mls_Public {
		public function __construct() {
			$this->mls_including();

			add_action( 'wp_enqueue_scripts', array( $this, 'mls_public_enqueue' ) );
			add_action( 'template_redirect', array( $this, 'mls_not_logged_in' ) );
		}


		public function mls_public_enqueue() {
			wp_enqueue_script( 'mls_public_script', MLAB_STUDIO_DIRECTORY_URI . '/src/public/assets/js/mls_public.js', array(), '1.0.0', true );
			wp_enqueue_script( 'mls_public_ajax', MLAB_STUDIO_DIRECTORY_URI . '/src/public/assets/js/mls_public_ajax.js', array('jquery'), null, true );
			wp_localize_script( 'mls_public_ajax', 'mls_public_ajax', array( 'mls_ajax' => admin_url( 'admin-ajax.php' ) ) );
//            wp_enqueue_script('mls_geolocation', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAVfNWiMpj-mwPSJ_gc7UBDJe5YT0cAPy0&callback=initMap&libraries=&v=weekly', array(), '1.0.0', true);
//            wp_enqueue_script('mls_polyfill', 'https://polyfill.io/v3/polyfill.min.js?features=default', array(), '1.0.0');
			wp_enqueue_style( 'mls_public_style', MLAB_STUDIO_DIRECTORY_URI . '/src/public/assets/css/mls_public.css' );

			wp_enqueue_script( 'wpb-fa', 'https://kit.fontawesome.com/0cca66ee47.js', array(), '1.0.0', true ); // Font Awesome icons
		}

		public function mls_not_logged_in() {
			global $post;
			if ( ! is_user_logged_in() && $post->ID == 49 ) {
				wp_redirect( '/prijava' );
			}
		}

		// Including class for the front-end
		public function mls_including() {
			include MLAB_STUDIO_DIR . 'src/includes/auth/Mls_Authentication.php';
			include MLAB_STUDIO_DIR . 'src/includes/category-tree/Mls_Category_Tree.php';
			include MLAB_STUDIO_DIR . 'src/includes/my-account/Mls_My_Account.php';
		}
	}

	new Mls_Public();
}