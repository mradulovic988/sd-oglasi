<?php
/**
 * Template Name: Registration page
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
	wp_redirect( '/moj-nalog' );
}

get_header(); ?>

    <div id="primary">

        <div id="registration-form" class="registration-form">

            <input type="radio" name="choose-person" value="Fizičko lice" onclick="openTab(event, 'mls-registration-person')" class="mls-choose-tab mls-radio-row" id="mls-default-open"><label class="mls-radio-row-choose" for="mls-default-open"><?php _e( 'Fizičko lice', 'mls' ) ?></label>
            <input type="radio" name="choose-person" value="Pravno lice" onclick="openTab(event, 'mls-registration-company')" class="mls-choose-tab mls-radio-row" id="mls-nondefault"><label class="mls-radio-row-choose" for="mls-nondefault"><?php _e( 'Pravno lice', 'mls' ) ?></label>

            <div id="mls-registration-person" class="mls-tabcontent">
                <form action="" method="post" class="registration-form">
                    <div class="mls-registration-form-row">
                        <label for="mls-username"><?php _e( 'Korisničko ime *', 'mls' ) ?></label>
                        <input type="text" name="mls-username" id="mls-username" class="mls-text-field mls-field-row" required>
                    </div>

                    <div class="mls-registration-form-row">
                        <label for="mls-email"><?php _e( 'Email *', 'mls' ) ?></label>
                        <input type="email" name="mls-email" id="mls-email" class="mls-text-field mls-field-row" required>
                    </div>

                    <div class="mls-registration-form-row">
                        <label for="mls-password"><?php _e( 'Lozinka *', 'mls' ) ?></label>
                        <input type="password" name="mls-password" id="mls-password" class="mls-text-field mls-field-row" required>
                    </div>

                    <div class="mls-registration-form-row">
                        <label for="mls-confirm-password"><?php _e( 'Ponovi Lozinku *', 'mls' ) ?></label>
                        <input type="password" name="mls-confirm-password" id="mls-confirm-password" class="mls-text-field mls-field-row">
                    </div>

                    <div class="mls-registration-form-row">
                        <input type="submit" class="mls-btn-field" name="submit-person" value="<?php _e( 'Registruj me', 'mls' ) ?>">
                    </div>
                </form>
				<?php echo do_shortcode( '[oa_social_login]' ); ?>

            </div>

            <div id="mls-registration-company" class="mls-tabcontent">
                <form action="" method="post" class="registration-form">
                    <div class="mls-registration-form-row">
                        <label for="mls-username-company"><?php _e( 'Korisničko ime *', 'mls' ) ?></label>
                        <input type="text" name="mls-username-company" id="mls-username-company" class="mls-text-field mls-field-row" required>
                    </div>

                    <div class="mls-registration-form-row">
                        <label for="mls-email-comany"><?php _e( 'Email *', 'mls' ) ?></label>
                        <input type="email" name="mls-email-company" id="mls-email-company" class="mls-text-field mls-field-row" required>
                    </div>

                    <div class="mls-registration-form-row">
                        <label for="mls-password-comany"><?php _e( 'Lozinka *', 'mls' ) ?></label>
                        <input type="password" name="mls-password-company" id="mls-password-company" class="mls-text-field mls-field-row" required>
                    </div>

                    <div class="mls-registration-form-row">
                        <label for="mls-confirm-password-comany"><?php _e( 'Ponovi Lozinku *', 'mls' ) ?></label>
                        <input type="password" name="mls-confirm-password-company" id="mls-confirm-password-company" class="mls-text-field mls-field-row">
                    </div>

                    <div class="mls-registration-form-row">
                        <input type="submit" class="mls-btn-field-company" name="submit-company" value="<?php _e( 'Registruj me', 'mls' ) ?>">
                    </div>

                </form>
            </div>

            <div class="mls-error"></div>
            <p class="mls-margin mls-bold-weight"><?php _e( 'Već ste registrovani? ', 'mls' ) ?>
                <a href="/prijava"><?php _e( 'Ulogujte se', 'mls' ) ?></a></p>
            <small><?php echo sprintf( __( 'Registracijom prihvatam %s portala Halo oglasi i potvrđujem da sam upoznat sa uslovima %s.', 'mls' ), '<a href="#">Pravila i Uslove korišćenja</a>', '<a href="#">upotrebe i zaštite podataka</a>' ) ?></small>
        </div>


    </div>

    <script>
        const openTab = (e, t) => {
            let a, l, s;
            l = document.getElementsByClassName("mls-tabcontent");
            for (let e = 0; e < l.length; e++) l[e].style.display = "none";
            for (s = document.getElementsByClassName("mls-choose-tab"), a = 0; a < s.length; a++) s[a].className = s[a].className.replace(" mls-active", "");
            document.getElementById(t).style.display = "block", e.currentTarget.className += " mls-active";
        };
        document.getElementById("mls-default-open").click();
    </script>

<?php get_footer(); ?>