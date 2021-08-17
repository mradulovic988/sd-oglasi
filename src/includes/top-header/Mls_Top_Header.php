<?php
/**
 * Class Mls_Top_Header
 *
 * Top header bar
 *
 * @class Mls_Top_Header
 * @package Mls_Top_Header
 * @version 1.0.0
 * @since 1.0.0
 * @author M Lab Studio
 */
if ( ! class_exists( 'Mls_Top_Header' ) ) {
	include MLAB_STUDIO_DIR . 'src/includes/top-header/Mls_Dropdown_Profile_Menu.php';

	class Mls_Top_Header extends Mls_Dropdown_Profile_Menu {
		protected function mls_non_logged_in_template(): string {
			return '<div class="mls-top-wrapper">
                <div class="mls-row"><a href="/prijava">' . __( 'Prijava', 'mls' ) . '</a></div>
                <div class="mls-row"><a href="/registracija">' . __( 'Registracija', 'mls' ) . '</a></div>
            </div>
            <div class="mls-top-wrapper">
                <img class="mls-img-top-header" src="' . MLAB_STUDIO_DIRECTORY_URI . 'src/public/assets/img/user.png" alt="">
            </div>';
		}

		protected function mls_logged_in_template(): string {
			$mls_current_user = wp_get_current_user();

			return '<div id="mls-logged-in-top-menu" class="mls-top-wrapper">
                <div class="mls-row"><a><b>' . __( 'Dobrodošli ' . $mls_current_user->user_login, 'mls' ) . '</b></a></div>
                <div class="mls-row"><a href="/wp-login.php?action=logout" class="mls-logged-out">' . __( 'Odjavi se', 'mls' ) . '</a></div>
                ' . $this->mls_dropdown_template() . '
            </div>
            <div class="mls-top-wrapper">
                <img class="mls-img-top-header" src="' . MLAB_STUDIO_DIRECTORY_URI . 'src/public/assets/img/user.png" alt="">
            </div>';
		}

		public function mls_condition() {
			if ( is_user_logged_in() ) {
				echo $this->mls_logged_in_template();
			} else {
				echo $this->mls_non_logged_in_template();
			}
		}
	}
}