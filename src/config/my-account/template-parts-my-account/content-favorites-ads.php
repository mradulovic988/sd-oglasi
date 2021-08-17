<?php
/**
 * Template for Favorites Ads page on My account
 */
include MLAB_STUDIO_DIR . 'src/config/Mls_Config.php';
include MLAB_STUDIO_DIR . 'src/config/favorites-ads/Mls_Favorites_Ads.php';
$_favorite  = new Mls_Favorites_Ads();
$mls_config = new Mls_Config();

?>
<h2>Moji Izabrani Oglasi</h2>

<?php
$current_user = wp_get_current_user();
//echo '<pre>', var_dump($current_user), '</pre>';
//echo $current_user->ID;

global $current_user;
get_currentuserinfo();
$user_id = $current_user->ID;

$args  = array(
	'post_type'   => array(
		'naslovna_oglasi',
		'post'
	),
	'orderby'     => 'ID',
	'post_status' => 'publish',
	'order'       => 'DESC',
);
$query = new WP_Query( $args );

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();

		if ( isset( $_GET['test'] ) ) {
			echo $_GET['test'];
		}
		global $wpdb;
		$table_name  = $wpdb->prefix . 'favorite_ads';
		$user_id     = $current_user->ID;
		$post_id     = get_the_ID();
		$get_results = $wpdb->get_results( "SELECT user_id, post_id FROM {$table_name} WHERE user_id = {$user_id} AND post_id = {$post_id}" );

		if ( $get_results ) { ?>
            <div class="mls-taxonomy-wrapper">
                <div class="mls-taxonomy-top-section">
                    <div class="mls-taxonomy-logo-wrapper">
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                        <a href="<?php the_permalink() ?>"><img src="<?php echo $image[0]; ?>" alt="" class="mls-taxonomy-logo"></a>
                    </div>
                    <div class="mls-taxonomy-title-wrapper">
                        <h2 class="mls-taxonomy-title">
                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                        </h2>
                        <form id="mls-favorite-form-fav" method="post">
                            <input type="hidden" name="mls-favorites-user-id-fav" value="<?php echo $user_id ?>">
                            <input type="hidden" name="mls-favorites-post-id-fav" value="<?php echo get_the_ID() ?>">
                            <input type="submit" name="mls-favorites-submit-fav" class="mls-favorites-ads-submit" value="&#9733;">
                        </form>
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
                        <button class="mls-taxonomy-button">Pogledaj</button>
                    </a>
                    <form action="https://smederevooglasi.rs/moj-nalog/izmeni-oglas" method="get">
                        <input type="hidden" name="mls-post-id" value="<?php echo get_the_ID(); ?>">
                        <button type="submit" id="mls-open-modal" class="mls-taxonomy-button ms-5">Izmeni</button>
                    </form>

					<?php
					if ( isset( $_POST['mls-delete-post-id'] ) ) {
						$post_id = $_POST['mls-get-the-id'];
						wp_delete_post( $post_id, true );
						wp_redirect( '/moj-nalog/moji-oglasi/' );
					}
					?>
                    <form method="post" class="mls-delete-post-id">
                        <input type="hidden" value="<?php echo get_the_ID() ?>" name="mls-get-the-id">
                        <button type="submit" name="mls-delete-post-id" id="mls-delete-post-id" class="mls-taxonomy-button danger">Obriši</button>
                    </form>
                </div>
            </div>
		<?php }
		wp_reset_postdata();
	}
}
?>
<div id="mls-mymodal" class="mls-modal">

    <!-- Modal content -->
    <div class="mls-modal-content">
        <div class="mls-modal-header">
            <span class="mls-close">&times;</span>
			<?php get_template_part( 'src/config/my-account/template-parts-my-account/templates/content', 'edit-ads' ); ?>
        </div>
    </div>

</div>
