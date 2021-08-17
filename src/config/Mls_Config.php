<?php
/**
 * Class Mls_Config
 *
 * Communication between front-end and the back-end
 *
 * @class Mls_Config
 * @package Mls_Config
 * @version 1.0.0
 * @since 1.0.0
 * @author M Lab Studio
 */
if ( ! class_exists( 'Mls_Config' ) ) {
	class Mls_Config {
		/**
		 * All cities in Serbia
		 *
		 * @var string[]
		 */
		public $mls_cities = array(
			'Beograd',
			'Novi Sad',
			'Niš',
			'Kragujevac',
			'Ada',
			'Aleksandrovac',
			'Aleksinac',
			'Alibunar',
			'Apatin',
			'Aranđelovac',
			'Arilje',
			'Babušnica',
			'Bač',
			'Bačka',
			'Palanka',
			'Bačka Topola',
			'Bački Petrovac',
			'Bajina',
			'Bašta',
			'Batočina',
			'Bečej',
			'Bela Crkva',
			'Bela Palanka',
			'Beočin',
			'Blace',
			'Bogatić',
			'Bojnik',
			'Boljevac',
			'Bor',
			'Bosilegrad',
			'Brus',
			'Bujanovac',
			'Crna Trava',
			'Čačak',
			'Čajetina',
			'Ćićevac',
			'Čoka',
			'Ćuprija',
			'Dečani',
			'Despotovac',
			'Dimitrovgrad',
			'Doljevac',
			'Dragaš',
			'Đakovica',
			'Gadžin Han',
			'Glogovac',
			'Gnjilane',
			'Golubac',
			'Gornji',
			'Milanovac',
			'Inđija',
			'Irig',
			'Istok',
			'Ivanjica',
			'Jagodina',
			'Kačanik',
			'Kanjiža',
			'Kikinda',
			'Kladovo',
			'Klina',
			'Knić',
			'Knjaževac',
			'Koceljeva',
			'Kopaonik',
			'Kosjerić',
			'Kosovo Polje',
			'Kosovska Kamenica',
			'Kosovska Mitrovica',
			'Kovačica',
			'Kovin',
			'Kraljevo',
			'Krupanj',
			'Kruševac',
			'Kučevo',
			'Kula',
			'Kuršumlija',
			'Lajkovac',
			'Lapovo',
			'Lebane',
			'Leposavić',
			'Leskovac',
			'Lipljan',
			'Loznica',
			'Lučani',
			'Ljig',
			'Ljubovija',
			'Majdanpek',
			'Mali Iđoš',
			'Mali Zvornik',
			'Mališevo',
			'Malo Crniće',
			'Medveđa',
			'Merošina',
			'Mionica',
			'Negotin',
			'Nova Crnja',
			'Nova Varoš',
			'Novi Bečej',
			'Novi Kneževac',
			'Novi Pazar',
			'Novo Brdo',
			'Obilić',
			'Odžaci',
			'Opovo',
			'Orahovac',
			'Osečina',
			'Pančevo',
			'Paraćin',
			'Peć',
			'Pećinci',
			'Petrovacna Mlavi',
			'Pirot',
			'Plandište',
			'Podujevo',
			'Požarevac',
			'Požega',
			'Preševo',
			'Priboj',
			'Prijepolje',
			'Priština',
			'Prizren',
			'Prokuplje',
			'Rača',
			'Raška',
			'Ražanj',
			'Rekovac',
			'Ruma',
			'Sečanj',
			'Senta',
			'Sjenica',
			'Smederevo',
			'Smederevska Palanka',
			'Sokobanja',
			'Sombor',
			'Srbica',
			'Srbobran',
			'Sremska Mitrovica',
			'Sremski Karlovci',
			'Stara Pazova',
			'Subotica',
			'Surdulica',
			'Suva',
			'Reka',
			'Svilajnac',
			'Svrljig',
			'Šabac',
			'Šid',
			'Štimlje',
			'Štrpce',
			'Tara',
			'Temerin',
			'Titel',
			'Topola',
			'Trgovište',
			'Trstenik',
			'Tutin',
			'Ub',
			'Uroševac',
			'Užice',
			'Valjevo',
			'Varvarin',
			'Velika Plana',
			'Veliko Gradište',
			'Vitina',
			'Vladičin Han',
			'Vladimirci',
			'Vlasotince',
			'Vranje',
			'VranjskaBanja',
			'Vrbas',
			'Vrnjačka Banja',
			'Vršac',
			'Vučitrn',
			'Zaječar',
			'Zlatibor',
			'Zrenjanin',
			'Zubin Potok',
			'Zvečan',
			'Žabalj',
			'Žabari',
			'Žagubica',
			'Žitište',
			'Žitorađa'
		);

		public function __construct() {
			include MLAB_STUDIO_DIR . 'src/config/my-account/my-account-pages/Mls_My_Account_Pages.php';
			include MLAB_STUDIO_DIR . 'src/config/my-account/my-account-pages/Mls_My_Account_Process_Declaration.php';
			include MLAB_STUDIO_DIR . 'src/config/favorites-ads/Mls_Favorites_Ads.php';

			// CRON DAILY
			add_action( 'wp', array( $this, 'mls_daily_cron_post_delete' ) );
			add_action( 'mls_delete_expired_posts', array( $this, 'mls_delete_expired_posts_callback' ) );

			// Delete post on timestamp
			// $this->mls_delete_post_timestamp();
		}


		/**
		 * Sending the value to wp_usermeta
		 *
		 * @param $meta_key string Desired user_meta_key
		 * @param $meta_value string Desired user_meta_value
		 */
		public function mls_send_meta( $meta_key, $meta_value ) {
			if ( is_user_logged_in() ) {
				$user_id   = wp_get_current_user();
				$new_value = $meta_value;

				update_user_meta( $user_id->ID, $meta_key, $new_value );

				if ( get_user_meta( $user_id->ID, $meta_key, true ) != $new_value ) {
					wp_die( 'An error occurred' );
				}
			}
		}

		/**
		 * Getting the user meta value
		 *
		 * @param $meta_key string Passing meta key
		 *
		 * @return string
		 */
		public function mls_get_meta( $meta_key ) {
			if ( is_user_logged_in() ) {
				$user_id             = wp_get_current_user();
				$all_meta_user_value = get_user_meta( $user_id->ID );

				return ! empty( $all_meta_user_value[ $meta_key ][0] ) ? $all_meta_user_value[ $meta_key ][0] : '';
			}
		}

		/**
		 * If is company
		 *
		 * @return bool
		 */
		public function mls_is_company() {
			if ( $this->mls_get_meta( 'mls_company_person' ) ) {
				return true;
			}
		}

		/**
		 * If is person
		 *
		 * @return bool
		 */
		public function mls_is_person() {
			if ( $this->mls_get_meta( 'mls_person' ) ) {
				return true;
			}
		}

		/**
		 * Get meta key for editing single ads
		 *
		 * @param $post_id
		 * @param $meta_key
		 *
		 * @return string
		 */
		public function mls_get_edit_meta( $post_id, $meta_key ) {
			if ( ! empty( $meta_key ) ) {
				echo get_post_meta( $post_id, $meta_key, true );
			}
		}

		public function mls_daily_cron_post_delete() {
			if ( ! wp_next_scheduled( 'mls_delete_expired_posts' ) ) {
				wp_schedule_event( time(), 'hourly', 'mls_delete_expired_posts' ); // change back to 'daily'
			}
		}

		public function mls_delete_expired_posts_callback() {
			wp_delete_post( 663 ); // deleted immediately - check: https://wordpress.stackexchange.com/questions/152786/posts-to-expire-deleted-after-a-date
		}

		/**
		 * Timestamp in days
		 *
		 * @param int $day Number of timestamp days
		 *
		 * @return false|string
		 */
//		public function mls_promotion_day_counting( $day ) {
//			$number_of_days = ( $day == 1 ) ? ' day' : ' days';
//
//			return date( 'd.m.Y', strtotime( '+ ' . $day . $number_of_days ) );
//		}

//		public function mls_delete_post_timestamp() {
//			$arr = array(
//				'post_type'      => 'naslovna_oglasi',
//				'orderby'        => 'post_id',
//				'posts_per_page' => - 1,
//			);
//
//			$query = new WP_Query( $arr );
//
//			if ( $query->have_posts() ) {
//				while ( $query->have_posts() ) {
//					$query->the_post();
//
//					$expiration_date      = get_post_meta( get_the_ID(), '_mls_naslovna_timestamp', true );
//					$expiration_date_time = strtotime( $expiration_date );
//
//					if ( $expiration_date_time < time() ) {
//						wp_delete_post( get_the_ID() );
//					}
//				}
//				wp_reset_postdata();
//			}
//		}
	}

	new Mls_Config();
}
