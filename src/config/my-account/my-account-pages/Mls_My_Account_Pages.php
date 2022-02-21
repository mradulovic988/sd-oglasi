<?php
/**
 * Class Mls_My_Account_Pages
 *
 * All sorted pages for my account page
 *
 * @class Mls_My_Account_Pages
 * @package Mls_My_Account_Pages
 * @version 1.0.0
 * @since 1.0.0
 * @author M Lab Studio
 */

if ( ! class_exists( 'Mls_My_Account_Pages' ) ) {
	class Mls_My_Account_Pages {
		public function __construct() {
			add_action( 'init', array( $this, 'mls_my_account_new_endpoints' ) );
			add_action( 'woocommerce_account_moji-podaci_endpoint', array( $this, 'mls_my_profile_endpoint_content' ) );
			add_action( 'woocommerce_account_osnovni-podaci_endpoint', array( $this, 'mls_personal_information_endpoint_content' ) );
			add_action( 'woocommerce_account_deklaracija_endpoint', array( $this, 'mls_declaration_endpoint_content' ) );
			add_action( 'woocommerce_account_moji-oglasi_endpoint', array( $this, 'mls_my_ads_endpoint_content' ) );
			add_action( 'woocommerce_account_moji-izabrani_endpoint', array( $this, 'mls_my_favorites_endpoint_content' ) );
			add_action( 'woocommerce_account_moje-poruke_endpoint', array( $this, 'mls_my_messages_endpoint_content' ) );
			add_action( 'woocommerce_account_izmeni-oglas_endpoint', array( $this, 'mls_edit_ads_endpoint_content' ) );
			add_filter( 'woocommerce_account_menu_items', array( $this, 'mls_my_account_menu_order' ) );
		}

		public function mls_my_account_new_endpoints() {
			add_rewrite_endpoint( 'moji-podaci', EP_ROOT | EP_PAGES );
			add_rewrite_endpoint( 'osnovni-podaci', EP_ROOT | EP_PAGES );
			add_rewrite_endpoint( 'deklaracija', EP_ROOT | EP_PAGES );
			add_rewrite_endpoint( 'moji-oglasi', EP_ROOT | EP_PAGES );
			add_rewrite_endpoint( 'moji-izabrani', EP_ROOT | EP_PAGES );
			add_rewrite_endpoint( 'izmeni-oglas', EP_ROOT | EP_PAGES );
			add_rewrite_endpoint( 'moje-poruke', EP_ROOT | EP_PAGES );
		}

		public function mls_my_account_menu_order() {
			$menu_order = array(
				'moji-podaci'     => __( 'Moji podaci i deklaracija', 'woocommerce' ),
				'osnovni-podaci'  => __( 'Osnovni podaci naloga', 'woocommerce' ),
				'deklaracija'     => __( 'Deklaracija', 'woocommerce' ),
				'moje-poruke'     => __( 'Moje poruke', 'woocommerce' ),
//                'orders' => __('Your Orders', 'woocommerce'),
//                'downloads' => __('Download', 'woocommerce'),
//                'edit-address' => __('Addresses', 'woocommerce'),
//                'edit-account' => __('Account Details', 'woocommerce'),
				'customer-logout' => __( 'Odjavi se', 'woocommerce' ),
//                'dashboard' => __('Dashboard', 'woocommerce')
			);

			return $menu_order;
		}

		public function mls_my_profile_endpoint_content() {
			get_template_part( 'src/config/my-account/template-parts-my-account/content', 'my-profile' );
		}

		public function mls_personal_information_endpoint_content() {
			get_template_part( 'src/config/my-account/template-parts-my-account/content', 'personal-information' );
		}

		public function mls_declaration_endpoint_content() {
			get_template_part( 'src/config/my-account/template-parts-my-account/content', 'declaration' );
		}

		public function mls_my_ads_endpoint_content() {
			get_template_part( 'src/config/my-account/template-parts-my-account/content', 'my-ads' );
		}

		public function mls_my_favorites_endpoint_content() {
			get_template_part( 'src/config/my-account/template-parts-my-account/content', 'favorites-ads' );
		}

		public function mls_edit_ads_endpoint_content() {
			get_template_part( 'src/config/my-account/template-parts-my-account/content', 'edit-ads' );
		}

		public function mls_my_messages_endpoint_content() {
			get_template_part( 'src/config/my-account/template-parts-my-account/content', 'my-messages' );
		}
	}

	new Mls_My_Account_Pages();
}