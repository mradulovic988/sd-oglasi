<?php
/**
 * Class Mls_Settings_Api_Dashboard
 *
 * Users admin page
 *
 * @class Mls_Settings_Api_Dashboard
 * @package Mls_Settings_Api_Dashboard
 * @version 1.0.0
 * @since 1.0.0
 * @author M Lab Studio
 */
if ( ! class_exists( 'Mls_Settings_Api_Dashboard' ) ) {
	class Mls_Settings_Api_Dashboard {
		public function __construct() {
			add_action( 'admin_menu', array( $this, 'mls_admin_page' ) );
			add_action( 'admin_init', array( $this, 'mls_register_settings' ) );
			add_action( 'admin_notices', array( $this, 'mls_show_error_notice' ) );
			$this->mls_get_single_user();
			$this->mls_get_company_single_user();
		}

		public function mls_show_error_notice() {
			if ( isset( $_GET['settings-updated'] ) ) {
				$message = __( 'Uspešno ste sačuvali izmene.', 'mls' );
				add_settings_error( 'mls_settings_fields', 'sucess', $message, 'success' );
			}
		}

		protected function mls_get_list_users() {
			$users = get_users( array( 'fields' => array( 'ID' ) ) );
			foreach ( $users as $user ) {
				$user_meta = get_user_meta( $user->ID );
				echo $user_meta['nickname'][0] . '<br>';
			}
		}

		protected function mls_get_list_users_table() {
			?>
            <table class="mls-admin-user-table">
                <tr>
                    <th>Detalji</th>
                    <th>Korisničko ime</th>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>E-mail</th>
                    <th>Adresa</th>
                    <th>Mesto</th>
                    <th>JMBG</th>
                </tr>
				<?php
				$users = get_users( array( 'fields' => array( 'ID' ) ) );
				foreach ( $users as $user ) {
					$user_meta = get_user_meta( $user->ID );
					if ( ! empty( $user_meta['mls_person'][0] ) && $user_meta['mls_person'][0] == 'Fizičko lice' ) {
						?>
                        <tr>
                            <td>
								<?php
								$mls_user_id = ! empty( $user_meta['mls_user_id'][0] ) ? $user_meta['mls_user_id'][0] : '';
								if ( ! empty( $user_meta['mls_user_id'][0] ) ) { ?>
                                    <a href="admin.php?mls_user_id=<?php echo $mls_user_id ?>">
                                        <span class="dashicons dashicons-visibility mls-dashicon-visibility"></span>
                                    </a>
								<?php } else { ?>
                                    <a href="#" id="mls-non-defined-user">
                                        <span class="dashicons dashicons-visibility mls-dashicon-visibility"></span>
                                    </a>
								<?php } ?>

                            </td>
                            <td><?php echo ! empty( $user_meta['nickname'][0] ) ? $user_meta['nickname'][0] : '<b>Nije popunjeno</b>' ?></td>
                            <td><?php echo ! empty( $user_meta['mls_firstname'][0] ) ? $user_meta['mls_firstname'][0] : '<b>Nije popunjeno</b>' ?></td>
                            <td><?php echo ! empty( $user_meta['mls_lastname'][0] ) ? $user_meta['mls_lastname'][0] : '<b>Nije popunjeno</b>' ?></td>
                            <td><?php echo ! empty( $user_meta['mls_email'][0] ) ? '<a href="mailto:' . $user_meta['mls_email'][0] . '">' . $user_meta['mls_email'][0] . '</a>' : '<b>Nije popunjeno</b>' ?></td>
                            <td><?php echo ! empty( $user_meta['mls_address'][0] ) ? $user_meta['mls_address'][0] : '<b>Nije popunjeno</b>' ?></td>
                            <td><?php echo ! empty( $user_meta['mls_city'][0] ) ? $user_meta['mls_city'][0] : '<b>Nije popunjeno</b>' ?></td>
                            <td><?php echo ! empty( $user_meta['mls_personalid'][0] ) ? $user_meta['mls_personalid'][0] : '<b>Nije popunjeno</b>' ?></td>
                        </tr>
						<?php
					}
				}
				?>
            </table>
			<?php
		}

		protected function mls_get_list_company_table() {
			?>
            <table class="mls-admin-user-table">
                <tr>
                    <th>Detalji</th>
                    <th>Naziv Firme</th>
                    <th>Adresa</th>
                    <th>Mesto</th>
                    <th>PIB</th>
                    <th>Matični broj</th>
                    <th>E-mail</th>
                </tr>
				<?php
				$users = get_users( array( 'fields' => array( 'ID' ) ) );
				foreach ( $users as $user ) {
					$user_meta = get_user_meta( $user->ID );
					if ( ! empty( $user_meta['mls_company_person'][0] ) && $user_meta['mls_company_person'][0] == 'Pravno lice' ) {
						?>
                        <tr>
                            <td>
								<?php
								$mls_company_user_id = ! empty( $user_meta['mls_company_personalid'][0] ) ? $user_meta['mls_company_personalid'][0] : '';
								if ( ! empty( $user_meta['mls_company_personalid'][0] ) ) { ?>
                                    <a href="admin.php?mls_company_user_id=<?php echo $mls_company_user_id ?>">
                                        <span class="dashicons dashicons-visibility mls-dashicon-visibility"></span>
                                    </a>
								<?php } else { ?>
                                    <a href="#" id="mls-non-defined-user">
                                        <span class="dashicons dashicons-visibility mls-dashicon-visibility"></span>
                                    </a>
								<?php } ?>

                            </td>
                            <td><?php echo ! empty( $user_meta['mls_company_companyname'][0] ) ? $user_meta['mls_company_companyname'][0] : '<b>Nije popunjeno</b>' ?></td>
                            <td><?php echo ! empty( $user_meta['mls_company_address'][0] ) ? $user_meta['mls_company_address'][0] : '<b>Nije popunjeno</b>' ?></td>
                            <td><?php echo ! empty( $user_meta['mls_company_place'][0] ) ? $user_meta['mls_company_place'][0] : '<b>Nije popunjeno</b>' ?></td>
                            <td><?php echo ! empty( $user_meta['mls_company_pib'][0] ) ? $user_meta['mls_company_pib'][0] : '<b>Nije popunjeno</b>' ?></td>
                            <td><?php echo ! empty( $user_meta['mls_company_uniqnumber'][0] ) ? $user_meta['mls_company_uniqnumber'][0] : '<b>Nije popunjeno</b>' ?></td>
                            <td><?php echo ! empty( $user_meta['mls_company_email'][0] ) ? $user_meta['mls_company_email'][0] : '<b>Nije popunjeno</b>' ?></td>
                        </tr>
						<?php
					}
				}
				?>
            </table>
			<?php
		}

		public function mls_get_single_user() {
			if ( isset( $_GET['mls_user_id'] ) ) {
				// Include template for single user
				get_template_part( 'src/config/my-account/single-user/content', 'mls_single_user' );
			}
		}

		public function mls_get_company_single_user() {
			if ( isset( $_GET['mls_company_user_id'] ) ) {
				// Include template for single user
				get_template_part( 'src/config/my-account/single-user/content', 'mls_company_single_user' );
			}
		}

		public function mls_admin_page() {
			add_menu_page(
				__( 'Rukovodstvo', 'mls' ),
				__( 'Rukovodstvo', 'mls' ),
				'manage_options',
				'users_page',
				array( $this, 'mls_admin_page_content' ),
				'dashicons-groups',
				3
			);

			add_submenu_page(
				'users_page',
				__( 'Fizička lica', 'mls' ),
				__( 'Fizička lica', 'mls' ),
				'manage_options',
				'users_page',
				array( $this, 'mls_admin_page_content' )
			);

			add_submenu_page(
				'users_page',
				__( 'Pravna lica', 'mls' ),
				__( 'Pravna lica', 'mls' ),
				'manage_options',
				'company_page',
				array( $this, 'mls_company_page_content' )
			);

			add_submenu_page(
				'users_page',
				__( 'Promocije', 'mls' ),
				__( 'Promocije', 'mls' ),
				'manage_options',
				'promotion_page',
				array( $this, 'mls_promotion_page_content' )
			);
		}

		protected function mls_settings_fields( string $type, string $id, string $class, string $name, string $value, $placeholder = '', $description = '', $min = '', $max = '', $required = '' ) {
			switch ( $type ) {
				case 'text':
					echo '<input type="text" id="' . $id . '" class="' . $class . '" name="mls_settings_fields[' . $name . ']" value="' . $value . '" placeholder="' . __( $placeholder, 'mls' ) . '" ' . $required . '><small class="mls-field-desc">' . __( $description, 'mls' ) . '</small>';
					break;
				case 'number':
					echo '<input type="number" id="' . $id . '" class="' . $class . '" name="mls_settings_fields[' . $name . ']" value="' . $value . '" placeholder="' . __( $placeholder, 'mls' ) . '" min="' . $min . '" max="' . $max . '"><small class="mls-field-desc">' . __( $description, 'mls' ) . '</small>';
					break;
				case 'checkbox':
					echo '<label class="mls-switch" for="' . $id . '"><input type="checkbox" id="' . $id . '" class="' . $class . '" name="mls_settings_fields[' . $name . ']" value="1" ' . $value . '><span class="mls-slider mls-round"></span></label><small class="mls-field-desc">' . $description . '</small>';
					break;
				case 'url':
					echo '<input type="url" id="' . $id . '" class="' . $class . '" name="mls_settings_fields[' . $name . ']" value="' . $value . '"placeholder="' . __( $placeholder, 'mls' ) . '" ' . $required . '><small class="mls-field-desc">' . __( $description, 'mls' ) . '</small>';
					break;
				case 'color':
					echo '<input type="color" id="' . $id . '" class="' . $class . '" name="mls_settings_fields[' . $name . ']" value="' . $value . '">';
					break;
				case 'textarea':
					echo '<textarea class="' . $class . '" name="mls_settings_fields[' . $name . ']" placeholder="' . __( $placeholder, 'mls' ) . '" id="' . $id . '" rows="7" ' . $required . '>' . $value . '</textarea>';
					break;
			}
		}

		public function mls_options_check( string $id ): string {
			$options = get_option( 'mls_settings_fields' );

			return ( ! empty( $options[ $id ] ) ? $options[ $id ] : '' );
		}

		public function mls_option_check_radio_btn( string $id ): string {
			$options = get_option( 'mls_settings_fields' );

			return isset( $options[ $id ] ) ? checked( 1, $options[ $id ], false ) : '';
		}

		/**
		 * Looping throughout the options id
		 *
		 * @param $option_id string Name of the option ID
		 * @param null $string string Concatenation of the option ID name
		 *
		 * @return string
		 */
		public function mls_option_loop( string $option_id, $string = null ): string {
			$standard_ads_days = explode( ', ', $this->mls_options_check( $option_id ) );
			$option_id_data              = '';

			foreach ( $standard_ads_days as $day ) {
				$option_id_data .= '<option class="mls-chosen-price" value="' . $day . '">' . $day . ' ' . $string . '</option>';
			}

			return $option_id_data;
		}

		// Settings API
		public function mls_register_settings() {

			register_setting( 'mls_settings_fields', 'mls_settings_fields', 'mls_sanitize_callback' );

			// Adding sections
			add_settings_section( 'mls_section_id', __( 'Promocije', 'mls' ), array(
				$this,
				'mls_settings_section_callback'
			), 'mls_settings_section_tab1' );

			add_settings_field( 'mls_section_id_free_ads_hide', __( 'Besplatni oglas - Prikazivanje', 'mls' ), array(
				$this,
				'mls_section_id_free_ads_hide'
			), 'mls_settings_section_tab1', 'mls_section_id' );

			add_settings_field( 'mls_section_id_free_ads_day_number', __( 'Besplatni oglas - broj dana', 'mls' ), array(
				$this,
				'mls_section_id_free_ads_day_number'
			), 'mls_settings_section_tab1', 'mls_section_id' );

			add_settings_field( 'mls_section_id_free_ads_prices', __( 'Besplatni oglas - Cene', 'mls' ), array(
				$this,
				'mls_section_id_free_ads_prices'
			), 'mls_settings_section_tab1', 'mls_section_id' );

			add_settings_field( 'mls_section_id_priority_ads_hide', __( 'Prioritetni oglas - Prikazivanje', 'mls' ), array(
				$this,
				'mls_section_id_priority_ads_hide'
			), 'mls_settings_section_tab1', 'mls_section_id' );

			add_settings_field( 'mls_section_id_priority_ads_day_number', __( 'Prioritetni oglas - broj dana', 'mls' ), array(
				$this,
				'mls_section_id_priority_ads_day_number'
			), 'mls_settings_section_tab1', 'mls_section_id' );

			add_settings_field( 'mls_section_id_priority_ads_prices', __( 'Prioritetni oglas - Cene', 'mls' ), array(
				$this,
				'mls_section_id_priority_ads_prices'
			), 'mls_settings_section_tab1', 'mls_section_id' );

			add_settings_field( 'mls_section_id_standard_ads_hide', __( 'Standardni oglas - Prikazivanje', 'mls' ), array(
				$this,
				'mls_section_id_standard_ads_hide'
			), 'mls_settings_section_tab1', 'mls_section_id' );

			add_settings_field( 'mls_section_id_standard_ads_day_number', __( 'Standardni oglas - broj dana', 'mls' ), array(
				$this,
				'mls_section_id_standard_ads_day_number'
			), 'mls_settings_section_tab1', 'mls_section_id' );

			add_settings_field( 'mls_section_id_standard_ads_prices', __( 'Standardni oglas - Cene', 'mls' ), array(
				$this,
				'mls_section_id_standard_ads_prices'
			), 'mls_settings_section_tab1', 'mls_section_id' );

			add_settings_field( 'mls_section_id_lead_ads_hide', __( 'Glavni oglas - Prikazivanje', 'mls' ), array(
				$this,
				'mls_section_id_lead_ads_hide'
			), 'mls_settings_section_tab1', 'mls_section_id' );

			add_settings_field( 'mls_section_id_lead_ads_day_number', __( 'Glavni oglas - broj dana', 'mls' ), array(
				$this,
				'mls_section_id_lead_ads_day_number'
			), 'mls_settings_section_tab1', 'mls_section_id' );

			add_settings_field( 'mls_section_id_lead_ads_prices', __( 'Glavni oglas - Cene', 'mls' ), array(
				$this,
				'mls_section_id_lead_ads_prices'
			), 'mls_settings_section_tab1', 'mls_section_id' );

			add_settings_field( 'mls_section_id_diamante_ads_hide', __( 'Dijamant oglas - Prikazivanje', 'mls' ), array(
				$this,
				'mls_section_id_diamante_ads_hide'
			), 'mls_settings_section_tab1', 'mls_section_id' );

			add_settings_field( 'mls_section_id_diamante_ads_day_number', __( 'Dijamant oglas - broj dana', 'mls' ), array(
				$this,
				'mls_section_id_diamante_ads_day_number'
			), 'mls_settings_section_tab1', 'mls_section_id' );

			add_settings_field( 'mls_section_id_diamante_ads_prices', __( 'Dijamant oglas - Cene', 'mls' ), array(
				$this,
				'mls_section_id_diamante_ads_prices'
			), 'mls_settings_section_tab1', 'mls_section_id' );
		}

		public function mls_section_id_free_ads_hide() {
			$this->mls_settings_fields( 'checkbox', 'mls-free-ads-hide', 'mls-switch-input', 'free_ads_hide', $this->mls_option_check_radio_btn( 'free_ads_hide' ), '', 'Ukoliko čekirate ovu opciju, besplatni oglasi će biti onemogućeni.' );
		}

		public function mls_section_id_free_ads_day_number() {
			$this->mls_settings_fields( 'text', 'mls-free-ads-day-number', 'mls-settings-field', 'free_ads_day_number', esc_attr__( sanitize_text_field( $this->mls_options_check( 'free_ads_day_number' ) ) ), '7, 15, 30, 45', 'Dodajte broj dana razdvojen zarezom.' );
		}

		public function mls_section_id_free_ads_prices() {
			$this->mls_settings_fields( 'text', 'mls-free-ads-prices', 'mls-settings-field', 'free_ads_prices', esc_attr__( sanitize_text_field( $this->mls_options_check( 'free_ads_prices' ) ) ), '100, 200, 500, 700', 'Dodajte cenu razdvojen zarezom, istim redosledom kao i broj dana.' );
		}

		public function mls_section_id_priority_ads_hide() {
			$this->mls_settings_fields( 'checkbox', 'mls-priority-ads-hide', 'mls-switch-input', 'priority_ads_hide', $this->mls_option_check_radio_btn( 'priority_ads_hide' ), '', 'Ukoliko čekirate ovu opciju, prioritetni oglasi će biti onemogućeni.' );
		}

		public function mls_section_id_priority_ads_day_number() {
			$this->mls_settings_fields( 'text', 'mls-priority-ads-day-number', 'mls-settings-field', 'priority_ads_day_number', esc_attr__( sanitize_text_field( $this->mls_options_check( 'priority_ads_day_number' ) ) ), '7, 15, 30, 45', 'Dodajte broj dana razdvojen zarezom.' );
		}

		public function mls_section_id_priority_ads_prices() {
			$this->mls_settings_fields( 'text', 'mls-priority-ads-prices', 'mls-settings-field', 'priority_ads_prices', esc_attr__( sanitize_text_field( $this->mls_options_check( 'priority_ads_prices' ) ) ), '100, 200, 500, 700', 'Dodajte cenu razdvojen zarezom, istim redosledom kao i broj dana.' );
		}

		public function mls_section_id_standard_ads_hide() {
			$this->mls_settings_fields( 'checkbox', 'mls-standard-ads-hide', 'mls-switch-input', 'standard_ads_hide', $this->mls_option_check_radio_btn( 'standard_ads_hide' ), '', 'Ukoliko čekirate ovu opciju, standardni oglasi će biti onemogućeni.' );
		}

		public function mls_section_id_standard_ads_day_number() {
			$this->mls_settings_fields( 'text', 'mls-standard-ads-day-number', 'mls-settings-field', 'standard_ads_day_number', esc_attr__( sanitize_text_field( $this->mls_options_check( 'standard_ads_day_number' ) ) ), '7, 15, 30, 45', 'Dodajte broj dana razdvojen zarezom.' );
		}

		public function mls_section_id_standard_ads_prices() {
			$this->mls_settings_fields( 'text', 'mls-standard-ads-prices', 'mls-settings-field', 'standard_ads_prices', esc_attr__( sanitize_text_field( $this->mls_options_check( 'standard_ads_prices' ) ) ), '100, 200, 500, 700', 'Dodajte cenu razdvojen zarezom, istim redosledom kao i broj dana.' );
		}

		public function mls_section_id_lead_ads_hide() {
			$this->mls_settings_fields( 'checkbox', 'mls-lead-ads-hide', 'mls-switch-input', 'lead_ads_hide', $this->mls_option_check_radio_btn( 'lead_ads_hide' ), '', 'Ukoliko čekirate ovu opciju, glavni oglasi će biti onemogućeni.' );
		}

		public function mls_section_id_lead_ads_day_number() {
			$this->mls_settings_fields( 'text', 'mls-lead-ads-day-number', 'mls-settings-field', 'lead_ads_day_number', esc_attr__( sanitize_text_field( $this->mls_options_check( 'lead_ads_day_number' ) ) ), '7, 15, 30, 45', 'Dodajte broj dana razdvojen zarezom.' );
		}

		public function mls_section_id_lead_ads_prices() {
			$this->mls_settings_fields( 'text', 'mls-lead-ads-prices', 'mls-settings-field', 'lead_ads_prices', esc_attr__( sanitize_text_field( $this->mls_options_check( 'lead_ads_prices' ) ) ), '100, 200, 500, 700', 'Dodajte cenu razdvojen zarezom, istim redosledom kao i broj dana.' );
		}

		public function mls_section_id_diamante_ads_hide() {
			$this->mls_settings_fields( 'checkbox', 'mls-diamante-ads-hide', 'mls-switch-input', 'diamante_ads_hide', $this->mls_option_check_radio_btn( 'diamante_ads_hide' ), '', 'Ukoliko čekirate ovu opciju, dijamant oglasi će biti onemogućeni.' );
		}

		public function mls_section_id_diamante_ads_day_number() {
			$this->mls_settings_fields( 'text', 'mls-diamante-ads-day-number', 'mls-settings-field', 'diamante_ads_day_number', esc_attr__( sanitize_text_field( $this->mls_options_check( 'diamante_ads_day_number' ) ) ), '7, 15, 30, 45', 'Dodajte broj dana razdvojen zarezom.' );
		}

		public function mls_section_id_diamante_ads_prices() {
			$this->mls_settings_fields( 'text', 'mls-diamante-ads-prices', 'mls-settings-field', 'diamante_ads_prices', esc_attr__( sanitize_text_field( $this->mls_options_check( 'diamante_ads_prices' ) ) ), '100, 200, 500, 700', 'Dodajte cenu razdvojen zarezom, istim redosledom kao i broj dana.' );
		}

		/**
		 * Admin pages nav menu
		 *
		 * @param $active_tab
		 * @param $is_active
		 * @param $is_next
		 */
		protected function mls_is_active( $active_tab, $is_active, $is_next ) {
			?>
            <h2 class="nav-tab-wrapper">
                <a href="?page=users_page" class="nav-tab <?php if ( $active_tab == 'users_page' ) {
					echo 'nav-tab-active';
				} ?> "><?php _e( 'Fizička lica', 'mls' ); ?></a>
                <a href="?page=company_page" class="nav-tab <?php if ( $active_tab == 'company_page' ) {
					echo 'nav-tab-active';
				} ?> "><?php _e( 'Pravna lica', 'mls' ); ?></a>
                <a href="?page=promotion_page" class="nav-tab <?php if ( $active_tab == 'promotion_page' ) {
					echo 'nav-tab-active';
				} ?> "><?php _e( 'Promocije', 'mls' ); ?></a>
            </h2>
			<?php

			$active_tab = $is_active;

			if ( isset( $_GET["tab"] ) ) {

				if ( $_GET["tab"] == $is_active ) {
					$active_tab = $is_active;
				} else {
					$active_tab = $is_next;
				}
			}
		}

		public function mls_admin_page_content() {
			?>
            <div class="wrap">
				<?php
				$this->mls_is_active( 'users_page', 'users_page', 'company_page' );
				$this->mls_get_list_users_table();
				?>
            </div>
			<?php
		}

		public function mls_company_page_content() {
			?>
            <div class="wrap">
				<?php
				$this->mls_is_active( 'company_page', 'company_page', 'promotion_page' );
				$this->mls_get_list_company_table();
				?>
            </div>
			<?php
		}

		public function mls_settings_section_callback() {
			// CHANGE DESCRIPTION LATER
			_e( 'Podešavanje promocija', 'mls' );
		}

		public function mls_promotion_page_content() {
			?>
            <div class="wrap">
				<?php
				$this->mls_is_active( 'promotion_page', 'promotion_page', '' );
				?>
                <form action="options.php" method="post">

					<?php
					settings_errors( 'mls_settings_fields' );
					settings_fields( 'mls_settings_fields' );
					do_settings_sections( 'mls_settings_section_tab1' );

					submit_button(
						__( 'Sačuvaj', 'mls' ),
						'',
						'mls_save_changes_btn',
						true,
						array( 'id' => 'mls-save-changes-btn' )
					);
					?>

                </form>
            </div>
			<?php
		}

	}

	new Mls_Settings_Api_Dashboard();
}