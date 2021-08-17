<?php
/**
 * Template Name: Add new ad
 * Template Post Type: page
 *
 * @author M Lab Studio
 * @version 1.0.0
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

include MLAB_STUDIO_DIR . 'src/config/Mls_Config.php';
$mls_config = new Mls_Config();

// Check if company person is empty and check if is person email is empty
if ( empty( $mls_config->mls_get_meta( 'mls_company_person' ) ) && empty( $mls_config->mls_get_meta( 'mls_email' ) ) ) {
	wp_redirect( '/moj-nalog/deklaracija/' );
}

// Check if person is empty and check if company email is empty
if ( empty( $mls_config->mls_get_meta( 'mls_person' ) ) && empty( $mls_config->mls_get_meta( 'mls_company_email' ) ) ) {
	wp_redirect( '/moj-nalog/deklaracija/' );
}

get_header();
?>

    <div id="primary" class="mls-full-width mls-choose-form-wrapper">
        <div class="mls-container">
            <button class="mls-choose-form active" data-id="mls-home">Naslovna</button>
            <button class="mls-choose-form" data-id="mls-jobs">Poslovi</button>
            <button class="mls-choose-form" data-id="mls-ads">Oglasi</button>
            <button class="mls-choose-form" data-id="mls-market">Tržište</button>
        </div>

        <div class="mls-content-form active" id="mls-home">
			<?php get_template_part( 'template-parts/new-ad-forms/content', 'new-ad-home-page-form' ); ?>
        </div>
        <div class="mls-content-form" id="mls-jobs">
			<?php get_template_part( 'template-parts/new-ad-forms/content', 'new-ad-jobs-form' ); ?>
        </div>
        <div class="mls-content-form" id="mls-ads">
			<?php get_template_part( 'template-parts/new-ad-forms/content', 'new-ad-ads-form' ); ?>
        </div>
        <div class="mls-content-form" id="mls-market">
			<?php get_template_part( 'template-parts/new-ad-forms/content', 'new-ad-market-form' ); ?>
        </div>
    </div>
<?php get_footer(); ?>