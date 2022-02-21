<?php
/**
 * Class Mls_Dropdown_Profile_Menu
 *
 * Dropdown menu on main header for user profile
 *
 * @class Mls_Dropdown_Profile_Menu
 * @package Mls_Dropdown_Profile_Menu
 * @version 1.0.0
 * @since 1.0.0
 * @author M Lab Studio
 */

if ( ! class_exists( 'Mls_Dropdown_Profile_Menu' ) ) {
	class Mls_Dropdown_Profile_Menu {
		protected function mls_dropdown_template() {
			return '<div class="mls-dropdown-main-wrapper"><div id="mls-dropdown-wrap" class="mls-dropdown-menu">
                <ul class="mls-main-ul">
                    <li class="mls-li"><a href="/moj-nalog/moji-podaci"><span class="mls-icon"><i class="far fa-user"></i></span>' . __( 'Moj profil', 'mls' ) . '</a></li>
                    <li class="mls-li"><a href="/moj-nalog/moji-oglasi"><span class="mls-icon"><i class="far fa-address-book"></i></span>' . __( 'Moji oglasi', 'mls' ) . '</a></li>
                    <li class="mls-li"><a href="/moj-nalog/moji-izabrani"><span class="mls-icon"><i class="far fa-star"></i></span>' . __( 'Izabrani oglasi', 'mls' ) . '</a></li>
                    <li class="mls-li"><a href="/moj-nalog/moje-poruke/"><span class="mls-icon"><i class="far fa-comments"></i></span>' . __( 'Moje poruke', 'mls' ) . '</a></li>
                    <li class="mls-li"><a href=""><span class="mls-icon"><i class="far fa-bell"></i></span>' . __( 'Sačuvane pretrage', 'mls' ) . '</a></li>
                    <hr class="mls-hr-full">
                    <li class="mls-li"><a href=""><span class="mls-icon"><i class="far fa-credit-card"></i></span>' . __( 'Moj račun', 'mls' ) . '</a></li>
                    <li class="mls-li"><a href=""><span class="mls-icon"><i class="far fa-folder-open"></i></span>' . __( 'Moji podaci', 'mls' ) . '</a></li>
                    <li class="mls-li"><a href=""><span class="mls-icon"><i class="fas fa-sliders-h"></i></span>' . __( 'Podešavanje', 'mls' ) . '</a></li>
                    <hr class="mls-hr-full">
                    <li class="mls-li"><a href=""><span class="mls-icon"><i class="fas fa-outdent"></i></span>' . __( 'Izloguj me', 'mls' ) . '</a></li>
                </ul>
            </div></div>';
		}
	}
}