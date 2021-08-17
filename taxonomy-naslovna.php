<?php
/**
 * The template for displaying Naslovna taxonomy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

include MLAB_STUDIO_DIR . 'src/config/favorites-ads/Mls_Favorites_Ads.php';
$_favorite = new Mls_Favorites_Ads();

get_header(); ?>

    <div id="primary" class="mls-full-width">

		<?php
		$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
		$arr   = array(
			'post_type'      => 'naslovna_oglasi',
			'orderby'        => 'post_id',
			'posts_per_page' => 5,
			'paged'          => $paged,
//            'order' => 'DESC',
			'tax_query'      => array(
				array(
					'taxonomy' => 'naslovna',
					'terms'    => get_queried_object_id(),
				)
			),
		);

		$query = new WP_Query( $arr );

		if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="mls-taxonomy-wrapper">
                <div class="mls-taxonomy-top-section">
                    <div class="mls-taxonomy-logo-wrapper">
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                        <a href="<?php the_permalink() ?>"><img src="<?php echo $image[0]; ?>" alt="" class="mls-taxonomy-logo"></a>
                    </div>
                    <div class="mls-taxonomy-title-wrapper">
                        <h2 class="mls-taxonomy-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    </div>
                </div>
                <div class="mls-middle-section">
                    <div class="mls-taxonomy-phone-wrapper">
                        <i class="fas fa-phone"></i><span class="mls-taxonomy-phone"><?php echo get_post_meta( get_the_ID(), '_mls_naslovna_phone', true ) ?></span>
                        <i class="fas fa-phone"></i><span class="mls-taxonomy-phone"><?php echo get_post_meta( get_the_ID(), '_mls_naslovna_phone', true ) ?></span>
                        <i class="far fa-envelope"></i><span class="mls-taxonomy-email"><?php echo get_post_meta( get_the_ID(), '_mls_naslovna_email', true ) ?></span>
                    </div>
                    <div class="mls-taxonomy-address-wrapper">`
                        <span class="mls-taxonomy-address"><i class="fas fa-map-marker-alt"></i><?php echo get_post_meta( get_the_ID(), '_mls_naslovna_place', true ) ?></span>
                        <span class="mls-taxonomy-address"><i class="fas fa-map-marker-alt"></i><?php echo get_post_meta( get_the_ID(), '_mls_naslovna_street', true ) ?></span>
                        <span class="mls-taxonomy-address"><i class="fas fa-map-marker-alt"></i><?php echo get_post_meta( get_the_ID(), '_mls_naslovna_street_number', true ) ?></span>
                    </div>
                </div>
                <div class="mls-footer-section">
                    <div class="mls-taxonomy-social-network-wrapper">
                        <span class="mls-taxonomy-social-network"><a target="_blank" href="<?php echo get_post_meta( get_the_ID(), '_mls_naslovna_instagram', true ) ?>"><i class="fab fa-instagram"></i></a></span>
                        <span class="mls-taxonomy-social-network"><a target="_blank" href="<?php echo get_post_meta( get_the_ID(), '_mls_naslovna_linkedin', true ) ?>"><i class="fab fa-linkedin-in"></i></a></span>
                        <span class="mls-taxonomy-social-network"><a target="_blank" href="<?php echo get_post_meta( get_the_ID(), '_mls_naslovna_facebook', true ) ?>"><i class="fab fa-facebook-f"></i></a></span>
                        <span class="mls-taxonomy-social-network"><a target="_blank" href="<?php echo get_post_meta( get_the_ID(), '_mls_naslovna_website', true ) ?>"><i class="fas fa-globe-americas"></i></a></span>
                    </div>
                </div>
                <div class="mls-taxonomy-wrapper-button">
                    <a href="<?php the_permalink() ?>">
                        <button class="mls-taxonomy-button">Pogledaj Oglas</button>
                    </a>
					<?php
					if ( is_user_logged_in() ) {
						echo $_favorite->mls_favorites_form();
					}
					?>
                </div>
            </div>

		<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

		<?php else: ?>

            <h2>Nema novih oglasa.</h2>

		<?php endif; ?>
        <div class="pagination">
			<?php
			$big = 999999999; // need an unlikely integer

			echo paginate_links( array(
				'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'  => '?paged=%#%',
				'current' => max( 1, get_query_var( 'paged' ) ),
				'total'   => $query->max_num_pages
			) );
			?>
        </div>


    </div><!-- #primary -->

<?php get_footer(); ?>