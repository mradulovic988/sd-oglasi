<?php
/**
 * Template Name: My Profile
 * Template Post Type: page
 *
 * @author M Lab Studio
 * @version 1.0.0
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! is_user_logged_in() ) {
	wp_redirect( '/moj-nalog' );
}

get_header(); ?>

    <div id="primary">

    </div>

<?php get_footer(); ?>