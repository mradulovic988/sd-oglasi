<?php
include MLAB_STUDIO_DIR . 'src/config/Mls_Config.php';
include MLAB_STUDIO_DIR . 'src/admin/settings-api/Mls_Settings_Api_Dashboard.php';
include MLAB_STUDIO_DIR . 'src/config/html-templates/Mls_Html.php';

$_config = new Mls_Config();
$_api    = new Mls_Settings_Api_Dashboard();
$_html   = new Mls_Html();
?>
<small>Polja označena <span style="color: red">*</span> su obavezna za unos</small>
<form class="mls-ads" method="post" id="mls-ads" enctype="multipart/form-data">
    <input type="hidden" name="ispost_ads" value="1"/>
    <input type="hidden" name="userid_ads" value=""/>

    <!-- Categories - First page -->
    <div id="mls-first-load-ads">
        <div class="mls-row-24">
            <h4 class="mls-pt-20 mls-pb-20 mls-pl-5">Odaberi Kategoriju</h4>
            <div class="mls-field-wrapper">
                <!--                <label for="mls-category">Odaberi Kategoriju *</label>-->
				<?php
				$args               = array(
					'taxonomy'     => 'oglasi_tax',
					'hide_empty'   => false,
					'hierarchical' => 1,
					'orderby'      => 'term_group',
					'order'        => 'ASC'
				);
				$category_tax_terms = get_categories( $args );
				foreach ( $category_tax_terms as $category_tax_term ) {
					echo '<div class="mls-ads-category-wrapper"  data-term-id="' . $category_tax_term->term_id . '" data-parent="' . $category_tax_term->parent . '"<a id="mls-ads-category-terms" class="' . $category_tax_term->term_id . '" disabled>' . $category_tax_term->name . '</a><span> (' . $category_tax_term->count . ') </span></div>';
				}
				?>
                <input type="hidden" value="" name="mls-get-categories-ads" id="mls-get-categories-ads">
            </div>
            <button type="button" id="mls-next-to-second-load-ads" class="mls-mt-20">Dalje</button>
        </div>

        <div class="mls-row-24">
            <div id="mls-ads-second-level-wrapper"></div>
        </div>

        <div class="mls-row-24">
            <div id="mls-ads-third-level-wrapper"></div>
        </div>

        <div class="mls-row-24">
            <div id="mls-ads-fourth-level-wrapper"></div>
        </div>
    </div> <!-- End Categories - First page -->

    <!-- Form - Second page -->
    <div id="mls-second-load-ads">
        <div class="mls-row-form">
            <div class="mls-w-70">
                <div class="mls-field-wrapper">
                    <label for="mls-ads-title">Naslov</label>
					<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    <input type="text" id="mls-ads-title" class="mls-field" name="mls-ads-title">
                </div>
            </div>

            <div class="mls-w-30">
                <div class="mls-field-wrapper mls-pt-35">
                    <label for="mls-ads-sell">Nudim</label>
                    <input type="radio" id="mls-ads-sell" class="mls-field mls-w-10" name="mls-ads-sell-buy" value="Nudim">

                    <label for="mls-ads-buy">Tražim</label>
                    <input type="radio" id="mls-ads-buy" class="mls-field mls-w-10" name="mls-ads-sell-buy" value="Tražim">
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-100">
                <div class="mls-field-wrapper">
                    <h4>Podaci o oglasu</h4>
                </div>
            </div>
        </div>


        <div class="mls-row-form">
            <div class="mls-w-100">
                <div class="mls-field-wrapper">
                    <label for="mls-ads-description">Opis</label>
					<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    <textarea id="mls-ads-description" class="mls-field" name="mls-ads-description" rows="3"></textarea>
                </div>
            </div>
        </div>

        <div id="mls-ads-price-wrapper">
            <div class="mls-row-form">
                <div class="mls-w-30">
                    <div class="mls-field-wrapper">
                        <label for="mls-ads-price">Cena</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-ads-price" class="mls-field" name="mls-ads-price">
                    </div>
                </div>

                <div class="mls-w-20">
                    <div class="mls-field-wrapper">
                        <label for="mls-ads-currency">Valuta</label>
                        <select name="mls-ads-currency" id="mls-ads-currency" class="mls-field">
                            <option value="EUR">EUR</option>
                            <option value="RSD">RSD</option>
                        </select>
                    </div>
                </div>

                <div class="mls-w-50">
                    <div class="mls-field-wrapper mls-pt-35">
                        <input type="checkbox" id="mls-ads-deal" class="mls-ads-deal" name="mls-ads-deal">
                        <label for="mls-ads-deal" class="mls-mr-10">Dogovor</label>

                        <input type="checkbox" id="mls-ads-fixed" class="mls-ads-fixed" name="mls-ads-fixed">
                        <label for="mls-ads-fixed" class="mls-mr-10">Fiksno</label>

                        <input type="checkbox" id="mls-ads-free" class="mls-ads-free" name="mls-ads-free">
                        <label for="mls-ads-free" class="mls-mr-10">Besplatno</label>

                        <input type="checkbox" id="mls-ads-accept-change" class="mls-ads-accept-change" name="mls-ads-accept-change">
                        <label for="mls-ads-accept-change" class="mls-mr-10">Prihvatam zamenu</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-50">
                <div class="mls-field-wrapper">
                    <label for="mls-ads-current-shape">Stanje</label><br>
                    <select name="mls-ads-current-shape" id="mls-ads-current-shape" class="mls-field">
                        <option value="">-- Izaberite --</option>
                        <option value="Novo">Novo</option>
                        <option value="KaoNovo">Kao Novo</option>
                        <option value="Polovno">Polovno</option>
                        <option value="OštećenoNeispravno">Oštećeno/Neispravno</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-100">
                <div class="mls-field-wrapper">
                    <h4>Lokacija</h4>
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-50">
                <div class="mls-field-wrapper">
                    <label for="mls-ads-place">Mesto Prodaje*</label>
					<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    <select name="mls-ads-place" class="mls-field mls-disable" id="mls-ads-place" required>
						<?php
						echo '<option value="">-- Izaberite --</option>';
						foreach ( $_config->mls_cities as $mls_city ) {
							echo '<option value="' . $mls_city . '">' . $mls_city . '</option>';
						}
						?>
                    </select>
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-100">
                <div class="mls-field-wrapper">
                    <h4>Unos fotografija</h4>
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-50">
                <div class="mls-field-wrapper">
                    <label for="mls-ads-photos">Fotografije doprinose da prodaja bude brža i uspešnija. Oglasu možete dodati 20 fotografija.
                        <a href="#">Kako postaviti fotografije</a></label>
					<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    <input type="file" id="mls-ads-photos" class="mls-field" name="mls-ads-photos[]" accept=".jpg, .jpeg, .png" required multiple>
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-100">
                <div class="mls-field-wrapper">
                    <h4>Unos videa</h4>
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-50">
                <div class="mls-field-wrapper">
                    <label for="mls-ads-video">Uz oglas možete dodati i video snimak. Unesite URL adresu snimka koji ste postavili na YouTube.
                        <a href="#">Kako postaviti video na YouTube?</a></label>
					<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    <input type="url" id="mls-ads-video" class="mls-field" name="mls-ads-video">
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-100">
                <div class="mls-field-wrapper">
                    <h4>Kontakt podaci</h4>
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-50">
                <div class="mls-field-wrapper">
                    <label for="mls-ads-phone">Telefon</label>
					<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    <input type="text" id="mls-ads-phone" class="mls-field" name="mls-ads-phone">
                </div>
            </div>
            <div class="mls-w-50">
                <div class="mls-field-wrapper mls-pt-35">
                    <input type="checkbox" id="mls-ads-phone-visibility" class="mls-ads-phone-visibility" name="mls-ads-phone-visibility">
                    <label for="mls-ads-phone-visibility">Želim da mi se telefon prikazuje na oglasu</label>
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-50">
                <div class="mls-field-wrapper">
                    <label for="mls-ads-additional-phone">Dodatni telefon</label>
					<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    <input type="text" id="mls-ads-additional-phone" class="mls-field" name="mls-ads-additional-phone">
                </div>
            </div>
            <div class="mls-w-50">
                <div class="mls-field-wrapper mls-pt-35">
                    <input type="checkbox" id="mls-ads-data-from-profile" class="mls-ads-data-from-profile" name="mls-ads-data-from-profile">
                    <label for="mls-ads-data-from-profile">Koristi podatke sa mog profila</label>
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-50">
                <div class="mls-field-wrapper">
                    <label for="mls-ads-email">Email</label>
					<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    <input type="email" id="mls-ads-email" class="mls-field" name="mls-ads-email">
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-100">
                <div class="mls-field-wrapper mls-align-right">
                    <input type="checkbox" id="mls-ads-show-this-ad" class="mls-ads-show-this-ad" name="mls-ads-show-this-ad">
                    <label for="mls-ads-show-this-ad" class="mls-small-text">Prikazuj ovaj oglas u listi "Vidi sve oglase ovog oglašivača"</label>
                </div>
            </div>
        </div>

        <button type="button" id="mls-back-to-first-ads">Prethodna</button>
        <button type="button" id="mls-next-to-third-ads" class="mls-mt-20">Dalje</button>
    </div> <!-- End Form - Second page -->

    <!-- Ads - Third page -->
    <div id="mls-third-load-ads">
        <h2>Izaberite tip oglasa</h2>
        <div class="mls-w-100">
            <button type="button" id="mls-back-to-second-ads">Prethodna</button>
            <input type="submit" name="mls-form-submit-ads" value="Objavi oglas">
        </div>
    </div><!-- End Ads - Third page -->
</form>