<?php
include MLAB_STUDIO_DIR . 'src/config/Mls_Config.php';
$_config = new Mls_Config();
?>
<div class="mls-home-form-wrapper">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="get-the-id" value="" id="mls-post-id">

        <input type="hidden" name="edit-ispost" value="1"/>
        <input type="hidden" name="edit-userid" value=""/>

		<?php
		$args               = array(
			'taxonomy'     => 'naslovna',
			'hide_empty'   => false,
			'hierarchical' => 1
		);
		$category_tax_terms = get_categories( $args );
		?>

        <div class="mls-row-form">
            <div class="mls-w-70">
                <div class="mls-field-wrapper">
                    <label for="mls-title">Naslov *</label>
                    <input type="text" id="mls-title" class="mls-field" name="" value="">
                </div>
                <div class="mls-field-wrapper">
                    <label for="mls-choose-category">Odaberite Kategoriju</label>
                    <select name="" value="" id="mls-choose-category" class="mls-field">
						<?php
						foreach ( $category_tax_terms as $category_tax_term ) {
							echo '<option value="' . $category_tax_term->term_id . '">' . $category_tax_term->name . '</option>';
						}
						?>
                    </select>
                </div>

                <div class="mls-field-wrapper">
                    <label for="mls-title">Unesite tekstualni opis poslovanja *</label>
                    <textarea id="mls-description" class="mls-field" name="" value="" rows="3"></textarea>
                </div>

            </div>
            <div class="mls-w-30">
                <div class="mls-field-wrapper">
                    <label for="mls-phone">Telefon *</label>
                    <input type="text" id="mls-phone" class="mls-field" name="" value="">
                </div>

                <div class="mls-field-wrapper">
                    <label for="mls-additional-phone">Dodatni telefon</label>
                    <input type="text" id="mls-additional-phone" class="mls-field" name="" value="">
                </div>

                <div class="mls-field-wrapper">
                    <label for="mls-email">Email *</label>
                    <input type="email" id="mls-email" class="mls-field" name="" value="">
                </div>
				<?php if ( $_config->mls_is_person() ) { ?>
                    <div class="mls-field-wrapper">
                        <input type="checkbox" id="mls-company-ad" class="mls-field" name="" value="">
                        <label for="mls-company-ad">Obeležite ovo polje ukoliko se oglašavate kao pravno lice</label>
                    </div>
				<?php } ?>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-25">
                <div class="mls-field-wrapper">
                    <label for="mls-place">Mesto *</label>
                    <select name="" value="" class="mls-field mls-disable" id="mls-place">
						<?php
						foreach ( $_config->mls_cities as $mls_city ) {
							echo '<option value="' . $mls_city . '">' . $mls_city . '</option>';
						}
						?>
                    </select>

                </div>
            </div>
            <div class="mls-w-25">
                <div class="mls-field-wrapper">
                    <label for="mls-street">Ulica *</label>
                    <input type="text" id="mls-street" class="mls-field mls-disable" name="" value="">
                </div>
            </div>
            <div class="mls-w-25">
                <div class="mls-field-wrapper">
                    <label for="mls-street-number">Broj *</label>
                    <input type="text" id="mls-street-number" class="mls-field mls-disable" name="" value="">
                </div>
            </div>
            <div class="mls-w-25">
                <div class="mls-field-wrapper">
                    <input type="checkbox" id="mls-hide-location" class="mls-field" name="" value="">
                    <label for="mls-hide-location">Obeležite ovo polje ukoliko nemate fizičku lokaciju</label>
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-50">
                <div class="mls-field-wrapper">
                    <label for="mls-file">Unesite svoj logo</label>
                    <input type="file" id="mls-file" class="mls-field" name="" value="" accept=".jpg, .jpeg, .png">
                </div>
            </div>

            <div class="mls-w-50">
                <div class="mls-field-wrapper">
                    <label for="mls-photos">Unos fotografija</label>
                    <input type="file" id="mls-photos" class="mls-field" name="" value="" accept=".jpg, .jpeg, .png" multiple>
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-100">
                <div class="mls-field-wrapper">
                    <label for="mls-instagram">Instagram</label>
                    <input type="text" id="mls-instagram" class="mls-field" name="" value="">
                </div>
            </div>
            <div class="mls-w-100">
                <div class="mls-field-wrapper">
                    <label for="mls-facebook">Facebook</label>
                    <input type="text" id="mls-facebook" class="mls-field" name="" value="">
                </div>
            </div>
            <div class="mls-w-100">
                <div class="mls-field-wrapper">
                    <label for="mls-linkedin">Linkedin</label>
                    <input type="text" id="mls-linkedin" class="mls-field" name="" value="">
                </div>
            </div>
            <div class="mls-w-100">
                <div class="mls-field-wrapper">
                    <label for="mls-website">Website link</label>
                    <input type="text" id="mls-website" class="mls-field" name="" value="">
                </div>
            </div>

        </div>

        <div class="mls-row-form">
            <div class="mls-w-70 mls-p-10">
                <div class="mls-field-wrapper">
                    <label for="mls-highlightone">Istaknite proizvod/uslugu</label>
                    <input type="text" id="mls-highlightone" class="mls-field" name="" value="">
                </div>
            </div>
            <div class="mls-w-30 mls-p-10">
                <div class="mls-field-wrapper">
                    <label for="mls-highlightone-price">Cena</label>
                    <input type="text" id="mls-highlightone-price" class="mls-field" name="" value="">
                </div>
            </div>
        </div>
        <div class="mls-row-form">
            <div class="mls-w-70 mls-p-10">
                <div class="mls-field-wrapper">
                    <label for="mls-highlighttwo">Istaknite proizvod/uslugu</label>
                    <input type="text" id="mls-highlighttwo" class="mls-field" name="" value="">
                </div>
            </div>
            <div class="mls-w-30 mls-p-10">
                <div class="mls-field-wrapper">
                    <label for="mls-highlighttwo-price">Cena</label>
                    <input type="text" id="mls-highlighttwo-price" class="mls-field" name="" value="">
                </div>
            </div>
        </div>
        <div class="mls-row-form">
            <div class="mls-w-70 mls-p-10">
                <div class="mls-field-wrapper">
                    <label for="mls-highlightthree">Istaknite proizvod/uslugu</label>
                    <input type="text" id="mls-highlightthree" class="mls-field" name="" value="">
                </div>
            </div>
            <div class="mls-w-30 mls-p-10">
                <div class="mls-field-wrapper">
                    <label for="mls-highlightthree-price">Cena</label>
                    <input type="text" id="mls-highlightthree-price" class="mls-field" name="" value="">
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-100">
                <input type="submit" name="" value="Ažuriraj oglas">
            </div>
        </div>
    </form>
</div>