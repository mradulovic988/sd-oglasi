<?php
/**
 * Class Mls_Init
 *
 * @class Mls_Init
 * @package Mls_Init
 * @version 1.0.0
 * @since 1.0.0
 * @author M Lab Studio
 */

if ( ! class_exists( 'Mls_Init' ) ) {

	class Mls_Init {
		public function __construct() {
			include MLAB_STUDIO_DIR . 'src/config/Mls_Config.php';

			if ( is_admin() ) {
				$this->mls_admin_files_include();
			} else {
				$this->mls_public_files_include();
			}
		}

		public function mls_public_files_include() {
			include MLAB_STUDIO_DIR . 'src/public/Mls_Public.php';
		}

		public function mls_admin_files_include() {
			include MLAB_STUDIO_DIR . 'src/admin/Mls_Admin.php';
		}
	}

	new Mls_Init();
}