<?php
/**
 * Class Mls_Html
 *
 * All Html templates
 *
 * @class Mls_Html
 * @package Mls_Html
 * @version 1.0.0
 * @since 1.0.0
 * @author M Lab Studio
 */
if ( ! class_exists( 'Mls_Html' ) ) {
	class Mls_Html {

		/**
		 * Tooltip for all of the forms
		 *
		 * @param $text string Add string for a tooltip
		 * @return string
		 */
		public function mls_html_tooltip( $text ):string {
			$data = '<div class="mls-tool-tip">';
			$data .= '<p class="mls-tool-tip__icon">!</p>';
			$data .= '<p class="mls-tool-tip__info">';
			$data .= '<span class="mls-info">' . $text . '</span>';
			$data .= '</p>';
			$data .= '</div>';

			return $data;
		}
	}
}