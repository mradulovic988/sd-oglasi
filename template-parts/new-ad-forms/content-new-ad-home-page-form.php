<?php
include MLAB_STUDIO_DIR . 'src/config/Mls_Config.php';
include MLAB_STUDIO_DIR . 'src/admin/settings-api/Mls_Settings_Api_Dashboard.php';
include MLAB_STUDIO_DIR . 'src/config/html-templates/Mls_Html.php';
include MLAB_STUDIO_DIR . 'template-parts/new-ad-forms/form-processing/home-page-form.php';
$_config = new Mls_Config();
$_api    = new Mls_Settings_Api_Dashboard();
$_html   = new Mls_Html();
?>

<div class="mls-home-form-wrapper">
    <small>Polja označena <span style="color: red">*</span> su obavezna za unos</small>
    <form class="mls-home" method="post" enctype="multipart/form-data">

        <input type="hidden" name="ispost" value="1"/>
        <input type="hidden" name="userid" value=""/>

        <!-- Categories - First page -->
        <div id="mls-first-load">
            <div class="mls-row-70">
                <h4 class="mls-pt-20 mls-pb-20 mls-pl-5">Odaberi Kategoriju</h4>
                <div class="mls-field-wrapper">
                    <!--                <label for="mls-category">Odaberi Kategoriju *</label>-->
					<?php
					$args               = array(
						'taxonomy'     => 'naslovna',
						'hide_empty'   => false,
						'hierarchical' => 1
					);
					$category_tax_terms = get_categories( $args );
					foreach ( $category_tax_terms as $category_tax_term ) {
						echo '<a id="mls-category-terms" class="' . $category_tax_term->term_id . '" disabled>' . $category_tax_term->name . '</a><span>(' . $category_tax_term->count . ')</span><br>';
					}
					?>
                    <input type="hidden" value="" name="mls-get-categories" id="mls-get-categories">
                </div>
            </div>
            <div class="mls-row-30">
                <button type="button" id="mls-next-to-second-load" class="mls-mt-20">Dalje</button>
            </div>
        </div> <!-- End Categories - First page -->

        <!-- Form - Second page -->
        <div id="mls-second-load">
            <div class="mls-row-form">
                <div class="mls-w-70">
                    <div class="mls-field-wrapper">
                        <label for="mls-title">Naslov *</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-title" class="mls-field" name="mls-title" required>
                    </div>

                    <div class="mls-field-wrapper">
                        <label for="mls-title">Unesite tekstualni opis poslovanja *</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <textarea id="mls-description" class="mls-field" name="mls-description" rows="3" required></textarea>
                    </div>

                </div>
                <div class="mls-w-30">
                    <div class="mls-field-wrapper">
                        <label for="mls-phone">Telefon *</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-phone" class="mls-field" name="mls-phone" required>
                    </div>

                    <div class="mls-field-wrapper">
                        <label for="mls-additional-phone">Dodatni telefon</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-additional-phone" class="mls-field" name="mls-additional-phone">
                    </div>

                    <div class="mls-field-wrapper">
                        <label for="mls-email">Email *</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="email" id="mls-email" class="mls-field" name="mls-email" required>
                    </div>
					<?php if ( $_config->mls_is_person() ) { ?>
                        <div class="mls-field-wrapper">
                            <input type="checkbox" id="mls-company-ad" class="mls-field" name="mls-company-ad">
                            <label for="mls-company-ad">Obeležite ovo polje ukoliko se oglašavate kao pravno lice</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        </div>
					<?php } ?>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-25">
                    <div class="mls-field-wrapper">
                        <label for="mls-place">Mesto *</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <select name="mls-place" class="mls-field mls-disable" id="mls-place" required>
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
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-street" class="mls-field mls-disable" name="mls-street" required>
                    </div>
                </div>
                <div class="mls-w-25">
                    <div class="mls-field-wrapper">
                        <label for="mls-street-number">Broj *</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-street-number" class="mls-field mls-disable" name="mls-street-number" required>
                    </div>
                </div>
                <div class="mls-w-25">
                    <div class="mls-field-wrapper">
                        <input type="checkbox" id="mls-hide-location" class="mls-field" name="mls-hide-location">
                        <label for="mls-hide-location">Obeležite ovo polje ukoliko nemate fizičku lokaciju</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-50">
                    <div class="mls-field-wrapper">
                        <label for="mls-file">Unesite svoj logo</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="file" id="mls-file" class="mls-field" name="mls-file" accept=".jpg, .jpeg, .png" required>
                    </div>
                </div>

                <div class="mls-w-50">
                    <div class="mls-field-wrapper">
                        <label for="mls-photos">Unos fotografija</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="file" id="mls-photos" class="mls-field" name="mls-photos[]" accept=".jpg, .jpeg, .png" required multiple>
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-100">
                    <div class="mls-field-wrapper">
                        <label for="mls-instagram">Instagram</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="url" id="mls-instagram" class="mls-field" name="mls-instagram">
                    </div>
                </div>
                <div class="mls-w-100">
                    <div class="mls-field-wrapper">
                        <label for="mls-facebook">Facebook</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="url" id="mls-facebook" class="mls-field" name="mls-facebook">
                    </div>
                </div>
                <div class="mls-w-100">
                    <div class="mls-field-wrapper">
                        <label for="mls-linkedin">Linkedin</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="url" id="mls-linkedin" class="mls-field" name="mls-linkedin">
                    </div>
                </div>
                <div class="mls-w-100">
                    <div class="mls-field-wrapper">
                        <label for="mls-website">Website link</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="url" id="mls-website" class="mls-field" name="mls-website">
                    </div>
                </div>

            </div>

            <div class="mls-row-form">
                <div class="mls-w-70 mls-p-10">
                    <div class="mls-field-wrapper">
                        <label for="mls-highlightone">Istaknite proizvod/uslugu</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-highlightone" class="mls-field" name="mls-highlightone">
                    </div>
                </div>
                <div class="mls-w-30 mls-p-10">
                    <div class="mls-field-wrapper">
                        <label for="mls-highlightone-price">Cena</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-highlightone-price" class="mls-field" name="mls-highlightone-price">
                    </div>
                </div>
            </div>
            <div class="mls-row-form">
                <div class="mls-w-70 mls-p-10">
                    <div class="mls-field-wrapper">
                        <label for="mls-highlighttwo">Istaknite proizvod/uslugu</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-highlighttwo" class="mls-field" name="mls-highlighttwo">
                    </div>
                </div>
                <div class="mls-w-30 mls-p-10">
                    <div class="mls-field-wrapper">
                        <label for="mls-highlighttwo-price">Cena</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-highlighttwo-price" class="mls-field" name="mls-highlighttwo-price">
                    </div>
                </div>
            </div>
            <div class="mls-row-form">
                <div class="mls-w-70 mls-p-10">
                    <div class="mls-field-wrapper">
                        <label for="mls-highlightthree">Istaknite proizvod/uslugu</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-highlightthree" class="mls-field" name="mls-highlightthree">
                    </div>
                </div>
                <div class="mls-w-30 mls-p-10">
                    <div class="mls-field-wrapper">
                        <label for="mls-highlightthree-price">Cena</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-highlightthree-price" class="mls-field" name="mls-highlightthree-price">
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-100">
                    <button type="button" id="mls-back-to-first-load">Prethodna</button>
                    <button type="button" id="mls-next-to-third-load">Dalje ( Izbor tipa oglasa )</button>
                </div>
            </div>
        </div> <!-- End Form - Second page -->

        <!-- Ads - Third page -->
        <div id="mls-third-load">
            <h2>Izaberite tip oglasa</h2>

            <!-- Free Promotions -->
            <div class="mls-w-100 mls-promotion mls-border-1-gray mls-border-left-5-gray mls-padding-0 mls-mb-20 mls-mt-20">

                <!-- Ad name -->
                <div class="mls-w-30">
                    <label for="mls-promotion-free" class="mls-bold-weight">
                        <input id="mls-promotion-free" name="mls-promotion-free" class="mls-promotion-field mls-toggle-me" type="checkbox" checked>Besplatan oglas
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    </label>
                </div><!-- End ad name -->

                <!-- Number of days -->
                <div class="mls-w-40 mls-align-right">
                    <label for="mls-promotion-free-days">
                        <select name="mls-promotion-free-days" id="mls-promotion-free-days" class="mls-promotion-select-field">
                            <option value="30">30 dana</option>
                        </select>
                    </label>
                </div><!-- End number of days -->

                <!-- Price -->
                <div class="mls-w-30 mls-align-right">
                    <span class="mls-promotion-free-span-price mls-bold-weight">0,00 RSD</span>
                </div><!-- End price -->
            </div><!-- End free Promotions -->

            <!-- Priority Promotions -->
            <div class="mls-w-100 mls-promotion mls-border-1-gray mls-border-left-5-yellow mls-padding-0 mls-mb-20">

                <!-- Ad name -->
                <div class="mls-w-30">
                    <label for="mls-promotion-priority" class="mls-bold-weight">
                        <input id="mls-promotion-priority" name="mls-promotion-priority" class="mls-promotion-field mls-toggle-me" type="checkbox">Prioritetni oglas
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    </label>
                </div><!-- End ad name -->

                <!-- Number of days -->
                <div class="mls-w-40 mls-align-right">
                    <label for="mls-promotion-priority-days">
                        <select name="mls-promotion-priority-days" id="mls-promotion-priority-days" class="mls-promotion-select-field">
                            <option value="">Odaberi broj dana</option>
                            <option value="15">15 dana</option>
                            <option value="30">30 dana</option>
                        </select>
                    </label>
                </div><!-- End number of days -->

                <!-- Price -->
                <div class="mls-w-30 mls-align-right">
                    <span class="mls-promotion-priority-span-price mls-bold-weight">0,00 RSD</span>
                </div><!-- End price -->
            </div><!-- End priority Promotions -->

            <!-- Standard Promotions -->
            <div class="mls-w-100 mls-promotion mls-border-1-gray mls-border-left-5-orange mls-padding-0 mls-mb-20">

                <!-- Ad name -->
                <div class="mls-w-30">
                    <label for="mls-promotion-standard" class="mls-bold-weight">
                        <input id="mls-promotion-standard" name="mls-promotion-standard" class="mls-promotion-field mls-toggle-me" type="checkbox">Standardni oglas
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    </label>
                </div><!-- End ad name -->

                <!-- Number of days -->
                <div class="mls-w-40 mls-align-right">
                    <label for="mls-promotion-standard-days">
                        <select name="mls-promotion-standard-days" id="mls-promotion-standard-days" class="mls-promotion-select-field">
                            <option value="">Odaberi broj dana</option>
                            <option value="30">30 dana</option>
                        </select>
                    </label>
                </div><!-- End number of days -->

                <!-- Price -->
                <div class="mls-w-30 mls-align-right">
                    <span class="mls-promotion-standard-span-price mls-bold-weight">0,00 RSD</span>
                </div><!-- End price -->
            </div><!-- End standard Promotions -->

            <!-- Lead Promotions -->
            <div class="mls-w-100 mls-promotion mls-border-1-gray mls-border-left-5-blue mls-padding-0 mls-mb-20">

                <!-- Ad name -->
                <div class="mls-w-30">
                    <label for="mls-promotion-lead" class="mls-bold-weight">
                        <input id="mls-promotion-lead" name="mls-promotion-lead" class="mls-promotion-field mls-toggle-me" type="checkbox">Glavni oglas
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    </label>
                </div><!-- End ad name -->

                <!-- Number of days -->
                <div class="mls-w-40 mls-align-right">
                    <label for="mls-promotion-lead-days">
                        <select name="mls-promotion-lead-days" id="mls-promotion-lead-days" class="mls-promotion-select-field">
                            <option value="">Odaberi broj dana</option>
                            <option value="15">15 dana</option>
                            <option value="30">30 dana</option>
                        </select>
                    </label>
                </div><!-- End number of days -->

                <!-- Price -->
                <div class="mls-w-30 mls-align-right">
                    <span class="mls-promotion-lead-span-price mls-bold-weight">0,00 RSD</span>
                </div><!-- End price -->
            </div><!-- End lead Promotions -->

            <!-- Diamant Promotions -->
            <div class="mls-w-100 mls-promotion mls-border-1-gray mls-border-left-5-green mls-padding-0 mls-mb-20">

                <!-- Ad name -->
                <div class="mls-w-30">
                    <label for="mls-promotion-diamant" class="mls-bold-weight">
                        <input id="mls-promotion-diamant" name="mls-promotion-diamant" class="mls-promotion-field mls-toggle-me" type="checkbox">Dijamant oglas
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    </label>
                </div><!-- End ad name -->

                <!-- Number of days -->
                <div class="mls-w-40 mls-align-right">
                    <label for="mls-promotion-diamant-days">
                        <select name="mls-promotion-diamant-days" id="mls-promotion-diamant-days" class="mls-promotion-select-field">
                            <option value="">Odaberi broj dana</option>
                            <option value="7">7 dana</option>
                            <option value="15">15 dana</option>
                            <option value="30">30 dana</option>
                        </select>
                    </label>
                </div><!-- End number of days -->

                <!-- Price -->
                <div class="mls-w-30 mls-align-right">
                    <span class="mls-promotion-diamant-span-price mls-bold-weight">0,00 RSD</span>
                </div><!-- End price -->
            </div><!-- End Diamant Promotions -->

            <!-- Ads paying -->
            <div class="mls-w-100 mls-border-1-gray mls-padding-0">
                <div class="mls-paying-top-wrapper mls-d-inline-flex mls-w-100">
                    <div class="mls-paying-left mls-w-50 mls-padding-0">
                        <h3 class="mls-margin-0">Plaćanje oglasa</h3>
                    </div>
                    <div class="mls-paying-right mls-w-50 mls-padding-0">
                        <p class="mls-margin-0">Trenutno na Vašem računu:
                            <span class="mls-current-price mls-bold-weight">0,00 RSD</span> (<a href="#">dopuni račun</a>)
                        </p>
                    </div>
                </div>

                <div class="mls-paying-bottom-wrapper mls-d-inline-flex mls-w-100">
                    <div class="mls-paying-bottom-left mls-w-50 mls-padding-0">
                        <div class="mls-paying-bottom-up">
                            <small class="mls-margin-0">Vaš kredit će biti umanjen za cenu izabranog oglasa. U cenu je uračunat PDV.</small>
                        </div>

                        <div class="mls-paying-bottom-top">
                            <label for="mls-paying-agree">
                                <input id="mls-paying-agree" type="checkbox" class="mls-mr-10" required>Saglasan sam sa:
                                <a href="#">Pravila i uslovi korišćenja</a>
                            </label>
                        </div>
                    </div>
                    <div class="mls-paying-bottom-right mls-w-50 mls-padding-0">
                        <h4 class="mls-margin-0">Ukupno:
                            <span class="mls-total-price mls-bold-weight mls-border-bottom-red">0,00 RSD</span></h4>
                    </div>
                </div>
            </div> <!-- End ads paying -->

            <div class="mls-w-100">
                <button type="button" id="mls-back-to-second-load">Prethodna</button>
                <input type="submit" name="mls-home-form-submit" value="Objavi oglas">
            </div>
        </div> <!-- End Ads - Third page -->
    </form>
</div>