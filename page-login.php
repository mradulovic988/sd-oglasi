<?php
/**
 * Template Name: Login page
 * Template Post Type: page
 *
 * @author M Lab Studio
 * @version 1.0.0
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( is_user_logged_in() ) {
	header( 'Location: /moj-nalog' );
}

get_header(); ?>
    <div id="primary">
        <div class="login-form">
			<?php
			$args = array(
				'redirect'    => '/moj-nalog',
				'id_username' => 'user',
				'id_password' => 'pass',
			);

			wp_login_form( $args );

			$login = ( isset( $_GET['login'] ) ) ? $_GET['login'] : 0;
			if ( $login === "failed" ) {
				echo '<p class="login-msg"><strong>Greška:</strong> Korisničko ime ili email ne postoje.</p>';
			} elseif ( $login === "empty" ) {
				echo '<p class="login-msg"><strong>Greška:</strong> Korisničko ime ili Email i Lozinka nisu popunjeni.</p>';
			} elseif ( $login === "false" ) {
				echo '<p class="login-msg"><strong>Greška:</strong> Odjavljeni ste.</p>';
			}
			?>
        </div>
		<?php echo do_shortcode( '[oa_social_login]' ); ?>

        <!--
        Lost password
        <div class="mls-forget-password" style="display: none">
            <form name="lostpasswordform" id="lostpasswordform" action="<?php echo wp_lostpassword_url(); ?>" method="post">
                <p>
                    <label>Korisničko ime ili Email<br>
                        <input type="text" name="user_login" id="user_login" class="input" value="" size="20" tabindex="10">
                    </label>
                </p>
                <p class="submit">
                    <input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Zatraži novu lozinku" tabindex="100">
                </p>
            </form>
        </div> -->
    </div>

<?php get_footer(); ?>