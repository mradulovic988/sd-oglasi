<?php
/**
 * Class Mls_My_Account_Process_Declaration
 *
 * All process for my account pages
 *
 * @class Mls_My_Account_Process_Declaration
 * @package Mls_My_Account_Process_Declaration
 * @version 1.0.0
 * @since 1.0.0
 * @author M Lab Studio
 */
include MLAB_STUDIO_DIR . 'src/config/Mls_Config.php';

if ( ! class_exists( 'Mls_My_Account_Process_Declaration' ) ) {
	class Mls_My_Account_Process_Declaration extends Mls_Config {
		public function __construct() {
			if ( isset( $_POST['mls-declaration-person-submit-person'] ) ) {
				$this->mls_get_form_data();
				wp_redirect( 'https://smederevooglasi.rs/moj-nalog/moji-podaci' );
			}

			if ( isset( $_POST['mls-declaration-company-submit-person'] ) ) {
				$this->mls_get_company_form_data();
				wp_redirect( 'https://smederevooglasi.rs/moj-nalog/moji-podaci' );
			}
		}

		/**
		 * Send data from person contact form to db table usermeta
		 */
		public function mls_get_form_data() {
			require_once( ABSPATH . 'wp-admin/includes/file.php' );

			$target_dir  = MLAB_STUDIO_DIR . '/files/declaration/';
			$file_name   = basename( str_replace( ' ', '_', $_FILES['mls-declaration-personuploadfile']['name'] ) );
			$target_file = $target_dir . $file_name;

			$all_data = array(
				'mls_person'        => 'Fizičko lice',
				'mls_firstname'     => $_POST['mls-declaration-person-firstname'],
				'mls_lastname'      => $_POST['mls-declaration-person-lastname'],
				'mls_address'       => $_POST['mls-declaration-person-address'],
				'mls_city'          => $_POST['mls-declaration-person-city'],
				'mls_personalid'    => $_POST['mls-declaration-person-personalid'],
				'mls_email'         => $_POST['mls-declaration-person-email'],
				'mls_user_id'       => $_POST['mls-declaration-person-id'],
				'mls_uploaded_file' => $file_name
			);

			foreach ( $all_data as $k => $v ) {
				$this->mls_send_meta( $k, $v );
			}

			move_uploaded_file( $_FILES["mls-declaration-personuploadfile"]["tmp_name"], $target_file );
		}

		/**
		 * Send data from company contact form to db table usermeta
		 */
		public function mls_get_company_form_data() {
			$all_data = array(
				'mls_company_person'      => 'Pravno lice',
				'mls_company_personalid'  => $_POST['mls-declaration-company-personalid'],
				'mls_company_email'       => $_POST['mls-declaration-company-email'],
				'mls_company_companyname' => $_POST['mls-declaration-company-companyname'],
				'mls_company_address'     => $_POST['mls-declaration-company-address'],
				'mls_company_place'       => $_POST['mls-declaration-company-place'],
				'mls_company_pib'         => $_POST['mls-declaration-company-pib'],
				'mls_company_uniqnumber'  => $_POST['mls-declaration-company-uniqnumber'],
			);

			foreach ( $all_data as $k => $v ) {
				$this->mls_send_meta( $k, $v );
			}
		}
	}

	new Mls_My_Account_Process_Declaration();
}