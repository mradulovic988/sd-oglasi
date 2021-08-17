<?php
/**
 * Listing all categories per specific taxonomy
 */

function mls_list_categories( $atts, $content = null ) {
	$taxonomy = $content;
//    $tax_terms = get_terms($taxonomy);
	$tax_terms = get_categories( array(
		'taxonomy'   => $taxonomy,
		'hide_empty' => false,
		'orderby'    => 'name',
		'order'      => 'ASC'
	) );

//    echo '<pre>', var_dump($tax_terms), '</pre>';

	$data = '';
	$data .= '<div class="mls-home-wrapper">';
	foreach ( $tax_terms as $tax_term ) {

//        $number_of_ads = ($tax_term->count = 1) ? $tax_term->count . ' oglas' . ($tax_term->count < 1) ? '' : $tax_term->count . ' oglasa';
		$number_of_ads = $tax_term->count < 1 ? 'Nema oglasa' : ( $tax_term->count == 1 ? $tax_term->count . ' oglas' : $tax_term->count . ' oglasa' );
		$data .= '<a href="' . esc_attr( get_term_link( $tax_term, $taxonomy ) ) . '" class="mls-home-button">';
		$data .= '<div class="mls-home-row">';
		$data .= '<span class="mls-ads-name">' . $tax_term->name . '</span>';
		$data .= '<span class="mls-ads-counter">' . $number_of_ads . '</span>';
		$data .= '</div>'; // home-row
		$data .= '</a>';
	}
	$data .= '<div>'; // home-wrapper

	return $data;

}

add_shortcode( 'listing_kategorija', 'mls_list_categories' );