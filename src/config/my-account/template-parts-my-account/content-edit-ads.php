<?php
/**
 * Template for Editing post on My account
 */

include MLAB_STUDIO_DIR . 'src/config/Mls_Config.php';
include MLAB_STUDIO_DIR . 'src/config/html-templates/Mls_Html.php';
$mls_config = new Mls_Config();
$_html   = new Mls_Html();

if ( isset( $_GET['mls-post-id'] ) ) {
	$post_id = $_GET['mls-post-id'];
}

if ( isset( $_POST['mls-edit-home-form-submit'] ) ) {
	global $current_user;
	get_currentuserinfo();

	$user_login     = $current_user->user_login;
	$user_email     = $current_user->user_email;
	$user_firstname = $current_user->user_firstname;
	$user_lastname  = $current_user->user_lastname;
	$user_id        = $current_user->ID;

	$post_title                = $_POST['mls-edit-title'];
	$post_category             = (int) $_POST['mls-edit-category'];
	$post_phone                = $_POST['mls-edit-phone'];
	$post_additional_phone     = $_POST['mls-edit-additional-phone'];
	$post_email                = $_POST['mls-edit-email'];
	$post_place                = $_POST['mls-edit-place'];
	$post_street               = $_POST['mls-edit-street'];
	$post_street_number        = $_POST['mls-edit-street-number'];
	$post_instagram            = $_POST['mls-edit-instagram'];
	$post_facebook             = $_POST['mls-edit-facebook'];
	$post_linkedin             = $_POST['mls-edit-linkedin'];
	$post_website              = $_POST['mls-edit-website'];
	$post_description          = $_POST['mls-edit-description'];
	$post_highlightone         = $_POST['mls-edit-highlightone'];
	$post_highlighttwo         = $_POST['mls-edit-highlighttwo'];
	$post_highlightthree       = $_POST['mls-edit-highlightthree'];
	$post_highlightone_price   = $_POST['mls-edit-highlightone-price'];
	$post_highlighttwo_price   = $_POST['mls-edit-highlighttwo-price'];
	$post_highlightthree_price = $_POST['mls-edit-highlightthree-price'];
	$post_type                 = 'naslovna_oglasi';


	$new_post = array(
		'ID'           => $post_id,
		'post_title'   => $post_title,
		'post_content' => $post_description, // Change this to dynamic content
		'post_status'  => 'publish',
		'post_name'    => str_replace( ' ', '-', $post_title ),
		'post_type'    => 'naslovna_oglasi',
		'post_author'  => $user_login,
	);

	$pid = wp_insert_post( $new_post );
	wp_set_object_terms( $pid, $post_category, 'naslovna' );
	update_post_meta( $pid, 'meta_key', true );
	update_post_meta( $pid, '_mls_naslovna_phone', $post_phone );
	update_post_meta( $pid, '_mls_naslovna_additional_phone', $post_additional_phone );
	update_post_meta( $pid, '_mls_naslovna_email', $post_email );
	update_post_meta( $pid, '_mls_naslovna_place', $post_place );
	update_post_meta( $pid, '_mls_naslovna_place', $post_place );
	update_post_meta( $pid, '_mls_naslovna_street', $post_street );
	update_post_meta( $pid, '_mls_naslovna_street_number', $post_street_number );
	update_post_meta( $pid, '_mls_naslovna_instagram', $post_instagram );
	update_post_meta( $pid, '_mls_naslovna_facebook', $post_facebook );
	update_post_meta( $pid, '_mls_naslovna_linkedin', $post_linkedin );
	update_post_meta( $pid, '_mls_naslovna_website', $post_website );
	update_post_meta( $pid, '_mls_naslovna_highlightone', $post_highlightone );
	update_post_meta( $pid, '_mls_naslovna_highlighttwo', $post_highlighttwo );
	update_post_meta( $pid, '_mls_naslovna_highlightthree', $post_highlightthree );
	update_post_meta( $pid, '_mls_naslovna_highlightone_price', $post_highlightone_price );
	update_post_meta( $pid, '_mls_naslovna_highlighttwo_price', $post_highlighttwo_price );
	update_post_meta( $pid, '_mls_naslovna_highlightthree_price', $post_highlightthree_price );
	update_post_meta( $pid, '_mls_naslovna_user_id', $user_id );

	if ( ! function_exists( 'wp_generate_attachment_metadata' ) ) {
		require_once( ABSPATH . "wp-admin" . '/includes/image.php' );
		require_once( ABSPATH . "wp-admin" . '/includes/file.php' );
		require_once( ABSPATH . "wp-admin" . '/includes/media.php' );
	}

	$file_logo = media_handle_upload( 'mls-edit-file', $pid );
	if ( $file_logo > 0 ) {
		update_post_meta( $pid, '_thumbnail_id', $file_logo );
	}

	$files = $_FILES["mls-edit-photos"];
	foreach ( $files['name'] as $key => $value ) {
		set_time_limit( 0 );

		if ( $files['name'][ $key ] ) {
			$file          = array(
				'name'     => $files['name'][ $key ],
				'type'     => $files['type'][ $key ],
				'tmp_name' => $files['tmp_name'][ $key ],
				'error'    => $files['error'][ $key ],
				'size'     => $files['size'][ $key ]
			);
			$_FILES        = array( "upload_file" => $file );
			$attachment_id = media_handle_upload( "upload_file", $pid );

			if ( is_wp_error( $attachment_id ) ) {
				echo "Došlo je do greške. Pokušajte ponovo.";
			} else {
				echo "Oglas je uspešno izmenjen.";
//				echo wp_get_attachment_image($attachment_id, array(800, 600)) . "<br>";
			}
		}
	}
	wp_redirect( '/moj-nalog/moji-oglasi/' );
}
?>

<h2>Izmeni oglas: <b><?php echo get_the_title( $post_id ); ?></b></h2>
<form method="post" enctype="multipart/form-data">
    <div class="mls-row-form">
        <div class="mls-w-70">
            <div class="mls-field-wrapper">
                <label for="mls-edit-title">Naslov *</label>
	            <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-edit-title" class="mls-field" name="mls-edit-title" value="<?php echo get_the_title( $post_id ); ?>" required>
            </div>

            <div class="mls-field-wrapper">
                <label for="mls-edit-category">Odaberi Kategoriju</label>
                <select name="mls-edit-category" id="mls-edit-category" class="mls-field" required>

					<?php
					$args               = array(
						'taxonomy'     => 'naslovna',
						'hide_empty'   => false,
						'hierarchical' => 1
					);
					$category_tax_terms = get_categories( $args );
					foreach ( $category_tax_terms as $category_tax_term ) {
						echo '<option value="' . $category_tax_term->term_id . '">' . $category_tax_term->name . '</option>';
					}
					?>

                    <option value="<?php ?>"><?php ?></option>
                </select>
            </div>

            <div class="mls-field-wrapper">
                <label for="mls-title">Unesite tekstualni opis poslovanja *</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <textarea id="mls-edit-description" class="mls-field" name="mls-edit-description" rows="3" required><?php echo get_the_content( '', '', $post_id ); ?></textarea>
            </div>

        </div>
        <div class="mls-w-30">
            <div class="mls-field-wrapper">
                <label for="mls-edit-phone">Telefon *</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-edit-phone" class="mls-field" name="mls-edit-phone" value="<?php $mls_config->mls_get_edit_meta( $post_id, '_mls_naslovna_phone' ); ?>" required>
            </div>

            <div class="mls-field-wrapper">
                <label for="mls-edit-additional-phone">Dodatni telefon</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-edit-additional-phone" class="mls-field" name="mls-edit-additional-phone" value="<?php $mls_config->mls_get_edit_meta( $post_id, '_mls_naslovna_additional_phone' ); ?>">
            </div>

            <div class="mls-field-wrapper">
                <label for="mls-edit-email">Email *</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="email" id="mls-edit-email" class="mls-field" name="mls-edit-email" value="<?php $mls_config->mls_get_edit_meta( $post_id, '_mls_naslovna_email' ); ?>" required>
            </div>
			<?php if ( $mls_config->mls_is_person() ) { ?>
                <div class="mls-field-wrapper">
                    <input type="checkbox" id="mls-edit-company-ad" class="mls-field" name="mls-edit-company-ad">
                    <label for="mls-edit-company-ad">Obeležite ovo polje ukoliko se oglašavate kao pravno lice</label>
                    <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                </div>
			<?php } ?>
        </div>
    </div>

    <div class="mls-row-form">
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="mls-edit-place">Mesto *</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <select name="mls-edit-place" class="mls-field mls-disable" id="mls-edit-place" required>
					<?php
					foreach ( $mls_config->mls_cities as $mls_city ) {
						echo '<option value="' . $mls_city . '">' . $mls_city . '</option>';
					}
					?>
                </select>

            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="mls-edit-street">Ulica *</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-edit-street" class="mls-field mls-disable" name="mls-edit-street" value="<?php $mls_config->mls_get_edit_meta( $post_id, '_mls_naslovna_street' ); ?>" required>
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <label for="mls-edit-street-number">Broj *</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-edit-street-number" class="mls-field mls-disable" name="mls-edit-street-number" value="<?php $mls_config->mls_get_edit_meta( $post_id, '_mls_naslovna_street_number' ); ?>" required>
            </div>
        </div>
        <div class="mls-w-25">
            <div class="mls-field-wrapper">
                <input type="checkbox" id="mls-edit-hide-location" class="mls-field" name="mls-edit-hide-location">
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <label for="mls-edit-hide-location">Obeležite ovo polje ukoliko nemate fizičku lokaciju</label>
            </div>
        </div>
    </div>

    <div class="mls-row-form">
        <div class="mls-w-50">
            <div class="mls-field-wrapper">
                <label for="mls-edit-file">Unesite svoj logo</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="file" id="mls-edit-file" class="mls-field" name="mls-edit-file" accept=".jpg, .jpeg, .png" required>
            </div>
        </div>

        <div class="mls-w-50">
            <div class="mls-field-wrapper">
                <label for="mls-edit-photos">Unos fotografija</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="file" id="mls-edit-photos" class="mls-field" name="mls-edit-photos[]" accept=".jpg, .jpeg, .png" required multiple>
            </div>
        </div>
    </div>

    <div class="mls-row-form">
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <label for="mls-edit-instagram">Instagram</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="url" id="mls-edit-instagram" class="mls-field" name="mls-edit-instagram" value="<?php $mls_config->mls_get_edit_meta( $post_id, '_mls_naslovna_instaram' ); ?>">
            </div>
        </div>
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <label for="mls-edit-facebook">Facebook</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="url" id="mls-edit-facebook" class="mls-field" name="mls-edit-facebook" value="<?php $mls_config->mls_get_edit_meta( $post_id, '_mls_naslovna_facebook' ); ?>">
            </div>
        </div>
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <label for="mls-edit-linkedin">Linkedin</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="url" id="mls-edit-linkedin" class="mls-field" name="mls-edit-linkedin" value="<?php $mls_config->mls_get_edit_meta( $post_id, '_mls_naslovna_linkedin' ); ?>">
            </div>
        </div>
        <div class="mls-w-100">
            <div class="mls-field-wrapper">
                <label for="mls-edit-website">Website link</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="url" id="mls-edit-website" class="mls-field" name="mls-edit-website" value="<?php $mls_config->mls_get_edit_meta( $post_id, '_mls_naslovna_website' ); ?>">
            </div>
        </div>

    </div>

    <div class="mls-row-form">
        <div class="mls-w-70 mls-p-10">
            <div class="mls-field-wrapper">
                <label for="mls-edit-highlightone">Istaknite proizvod/uslugu</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-edit-highlightone" class="mls-field" name="mls-edit-highlightone" value="<?php $mls_config->mls_get_edit_meta( $post_id, '_mls_naslovna_highlightone' ); ?>">
            </div>
        </div>
        <div class="mls-w-30 mls-p-10">
            <div class="mls-field-wrapper">
                <label for="mls-edit-highlightone-price">Cena</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-edit-highlightone-price" class="mls-field" name="mls-edit-highlightone-price" value="<?php $mls_config->mls_get_edit_meta( $post_id, '_mls_naslovna_highlightone_price' ); ?>">
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-70 mls-p-10">
            <div class="mls-field-wrapper">
                <label for="mls-edit-highlighttwo">Istaknite proizvod/uslugu</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-edit-highlighttwo" class="mls-field" name="mls-edit-highlighttwo" value="<?php $mls_config->mls_get_edit_meta( $post_id, '_mls_naslovna_highlighttwo' ); ?>">
            </div>
        </div>
        <div class="mls-w-30 mls-p-10">
            <div class="mls-field-wrapper">
                <label for="mls-edit-highlighttwo-price">Cena</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-edit-highlighttwo-price" class="mls-field" name="mls-edit-highlighttwo-price" value="<?php $mls_config->mls_get_edit_meta( $post_id, '_mls_naslovna_highlighttwo_price' ); ?>">
            </div>
        </div>
    </div>
    <div class="mls-row-form">
        <div class="mls-w-70 mls-p-10">
            <div class="mls-field-wrapper">
                <label for="mls-edit-highlightthree">Istaknite proizvod/uslugu</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-edit-highlightthree" class="mls-field" name="mls-edit-highlightthree" value="<?php $mls_config->mls_get_edit_meta( $post_id, '_mls_naslovna_highlightthree' ); ?>">
            </div>
        </div>
        <div class="mls-w-30 mls-p-10">
            <div class="mls-field-wrapper">
                <label for="mls-edit-highlightthree-price">Cena</label>
                <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-edit-highlightthree-price" class="mls-field" name="mls-edit-highlightthree-price" value="<?php $mls_config->mls_get_edit_meta( $post_id, '_mls_naslovna_highlightthree_price' ); ?>">
            </div>
        </div>
    </div>

    <div class="mls-row-form">
        <div class="mls-w-100">
            <input type="submit" name="mls-edit-home-form-submit" value="Izmeni oglas">
        </div>
    </div>
</form>