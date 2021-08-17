<?php
/**Mls_Authentication
 * Class Mls_Authentication
 *
 * Register form handling and validation
 *
 * @class Mls_Authentication
 * @package Mls_Authentication
 * @version 1.0.0
 * @since 1.0.0
 * @author M Lab Studio
 */

if ( ! class_exists( 'Mls_Authentication' ) ) {
	class Mls_Authentication {

		public function __construct() {
			add_action( 'init', array( $this, 'mls_registration' ) );
			add_action( 'init', array( $this, 'mls_registration_company' ) );
			add_action( 'init', array( $this, 'mls_redirect_login_page' ) );
			add_action( 'wp_login_failed', array( $this, 'mls_login_failed' ) );
			add_filter( 'authenticate', array( $this, 'mls_verify_username_password' ), 1, 3 );
			add_action( 'wp_logout', array( $this, 'mls_logout_page' ) );

			$this->mls_restricted_pages_redirection();
		}

		/**
		 * Validating person and company register form
		 *
		 * @param string $username Username
		 * @param string $password Password
		 * @param string $email_address Email address
		 * @param string $user_role User role
		 * @param string $redirect Redirection page
		 */
		protected function mls_register_form_validation( $username, $password, $email_address, $user_role, $redirect = '' ) {
			$user  = ( isset( $_POST[ $username ] ) ? $_POST[ $username ] : '' );
			$pass  = ( isset( $_POST[ $password ] ) ? $_POST[ $password ] : '' );
			$email = ( isset( $_POST[ $email_address ] ) ? $_POST[ $email_address ] : '' );

			if ( ! username_exists( $user ) && ! email_exists( $email ) ) {
				$user_id = wp_create_user( $user, $pass, $email );
				if ( ! is_wp_error( $user_id ) ) {

					$user = new WP_User( $user_id );
					$user->set_role( $user_role );

					wp_redirect( $redirect );
					exit;
				}
			} else {
				?>
                <script>
                    setTimeout(() => {
                        const html = `<div class="mls-reg-error">Korisničko ime ili e-mail adresa je već registrovana. Već ste registrovani? <a href="/prijava">Prijavite se</a>.</div>`;
                        document.querySelector('div.mls-error').innerHTML += html;
                    }, 100);
                </script>
				<?php
			}
		}

		public function mls_registration() {
			$this->mls_register_form_validation(
				'mls-username',
				'mls-password',
				'mls-email',
				'subscriber',
				'/prijava'
			);
		}

		public function mls_registration_company() {
			$this->mls_register_form_validation(
				'mls-username-company',
				'mls-password-company',
				'mls-email-company',
				'subscriber',
				'/prijava'
			);
		}

		// Redirection after successful login
		public function mls_redirect_login_page() {
			$login_page  = home_url( '/moj-nalog' );
			$page_viewed = basename( $_SERVER['REQUEST_URI'] );

			if ( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET' ) {
				wp_redirect( $login_page );
				exit;
			}
		}

		// Redirection after failed login attempt
		public function mls_login_failed() {
			$login_page = home_url( '/prijava' );
			wp_redirect( $login_page . '?login=failed' );
			exit;
		}

		// Verification for username and password
		public function mls_verify_username_password( $user, $username, $password ) {
			$login_page = home_url( '/prijava' );
			if ( $username == "" || $password == "" ) {
				wp_redirect( $login_page . "?login=empty" );
				exit;
			}
		}

		// Redirection after log out
		public function mls_logout_page() {
			$login_page = home_url( '/prijava' );
			wp_redirect( $login_page );
			exit;
		}

		// If the user is not logged in
		public function mls_restricted_pages_redirection() {
			if ( is_page( '69' ) ) {
				if ( ! is_user_logged_in() ) {
					wp_redirect( '/prijava' );
				}
			}
		}

	}

	new Mls_Authentication();
}