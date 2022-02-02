<?php
include MLAB_STUDIO_DIR . 'src/config/Mls_Config.php';
include MLAB_STUDIO_DIR . 'src/admin/settings-api/Mls_Settings_Api_Dashboard.php';
include MLAB_STUDIO_DIR . 'src/config/html-templates/Mls_Html.php';

$_config = new Mls_Config();
$_api    = new Mls_Settings_Api_Dashboard();
$_html   = new Mls_Html();
?>

<small>Polja označena <span style="color: red">*</span> su obavezna za unos</small>
<form class="mls-market-ads" method="post" id="mls-market-ads" enctype="multipart/form-data">
    <input type="hidden" name="ispost_ads" value="1"/>
    <input type="hidden" name="userid_ads" value=""/>

    <!-- Categories - First page -->
    <div id="mls-first-load-market-ads">
        <div class="mls-row-24">
            <h4 class="mls-pt-20 mls-pb-20 mls-pl-5">Odaberi Kategoriju</h4>
            <div class="mls-field-wrapper">
                <!--                <label for="mls-category">Odaberi Kategoriju *</label>-->
				<?php
				//				$args               = array(
				//					'taxonomy'     => 'trziste',
				//					'hide_empty'   => false,
				//					'hierarchical' => 1,
				//					'orderby'      => 'term_group',
				//					'order'        => 'ASC'
				//				);
				//				$category_tax_terms = get_categories( $args );
				//				foreach ( $category_tax_terms as $category_tax_term ) {
				//					echo $category_tax_term->name . '<br>';
				//				}

				$args = array(
					'taxonomy'     => 'trziste',
					'hide_empty'   => false,
					'hierarchical' => 1
				);
				wp_dropdown_categories( $args );
				?>
                <input type="hidden" value="" name="mls-get-categories-market-ads" id="mls-get-categories-market-ads">
            </div>
            <button type="button" id="mls-next-to-second-load-market-ads" class="mls-mt-20">Dalje</button>
        </div>

        <div class="mls-row-24">
            <div id="mls-market-ads-second-level-wrapper"></div>
        </div>

        <div class="mls-row-24">
            <div id="mls-market-ads-third-level-wrapper"></div>
        </div>

        <div class="mls-row-24">
            <div id="mls-market-ads-fourth-level-wrapper"></div>
        </div>
    </div> <!-- End Categories - First page -->

    <!-- Form - Second page -->
    <div id="mls-second-load-market-ads">
        <div class="mls-row-form">
            <div class="mls-w-70">
                <div class="mls-field-wrapper">
                    <label for="mls-market-ads-title">Naslov</label>
					<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    <input type="text" id="mls-market-ads-title" class="mls-field" name="mls-market-ads-title">
                </div>
            </div>

            <div class="mls-w-30">
                <div class="mls-field-wrapper mls-pt-35">
                    <label for="mls-market-ads-sell">Nudim</label>
                    <input type="radio" id="mls-market-ads-sell" class="mls-field mls-w-10" name="mls-market-ads-sell-buy" value="Nudim">

                    <label for="mls-market-ads-buy">Tražim</label>
                    <input type="radio" id="mls-market-ads-buy" class="mls-field mls-w-10" name="mls-market-ads-sell-buy" value="Tražim">
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
                    <label for="mls-market-ads-description">Opis</label>
					<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    <textarea id="mls-market-ads-description" class="mls-field" name="mls-market-ads-description" rows="3"></textarea>
                </div>
            </div>
        </div>

        <div id="mls-market-ads-price-wrapper">
            <div class="mls-row-form">
                <div class="mls-w-30">
                    <div class="mls-field-wrapper">
                        <label for="mls-market-ads-price">Cena</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-market-ads-price" class="mls-field" name="mls-market-ads-price">
                    </div>
                </div>

                <div class="mls-w-20">
                    <div class="mls-field-wrapper">
                        <label for="mls-market-ads-currency">Valuta</label>
                        <select name="mls-market-ads-currency" id="mls-market-ads-currency" class="mls-field">
                            <option value="EUR">EUR</option>
                            <option value="RSD">RSD</option>
                        </select>
                    </div>
                </div>

                <div class="mls-w-50">
                    <div class="mls-field-wrapper mls-pt-35">
                        <input type="checkbox" id="mls-market-ads-deal" class="mls-market-ads-deal" name="mls-market-ads-deal">
                        <label for="mls-market-ads-deal" class="mls-mr-10">Dogovor</label>

                        <input type="checkbox" id="mls-market-ads-fixed" class="mls-market-ads-fixed" name="mls-market-ads-fixed">
                        <label for="mls-market-ads-fixed" class="mls-mr-10">Fiksno</label>

                        <input type="checkbox" id="mls-market-ads-free" class="mls-market-ads-free" name="mls-market-ads-free">
                        <label for="mls-market-ads-free" class="mls-mr-10">Besplatno</label>

                        <input type="checkbox" id="mls-market-ads-accept-change" class="mls-market-ads-accept-change" name="mls-market-ads-accept-change">
                        <label for="mls-market-ads-accept-change" class="mls-mr-10">Prihvatam zamenu</label>
                    </div>
                </div>
            </div>
        </div>


        <!-----------------------------
        -------- Osnovna polja --------
        ------------------------------->
        <div class="mls-row-form">
            <div class="mls-w-50">
                <div class="mls-field-wrapper">
                    <label for="mls-market-ads-current-shape">Stanje</label><br>
                    <select name="mls-market-ads-current-shape" id="mls-market-ads-current-shape" class="mls-field">
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
                    <label for="mls-market-ads-place">Mesto Prodaje*</label>
					<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    <select name="mls-market-ads-place" class="mls-field mls-disable" id="mls-market-ads-place" required>
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
        <!-----------------------------
        -------- End Osnovna polja ----
        ------------------------------->

        <!-----------------------------
        -------- Nekretnine Lokal ----
        ------------------------------->
        <div class="Lokal">
            <div id="mls-market-ads-locale-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-locale-type">Tip nekretnine</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="text" id="mls-market-ads-locale-type" class="mls-field" value="Lokal" name="mls-market-ads-locale-type" disabled>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-locale-size">Kvadratura</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="number" id="mls-market-ads-locale-size" class="mls-field" name="mls-market-ads-locale-size">
                        </div>
                    </div>
                </div>
            </div>
            <div id="mls-market-ads-locale-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-locale-ads">Oglašivač</label><br>
                            <select name="mls-market-ads-locale-ads" id="mls-market-ads-locale-ads" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-locale-object-type">Tip objekta</label><br>
                            <select name="mls-market-ads-locale-object-type" id="mls-market-ads-locale-object-type" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div id="mls-market-ads-locale-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-locale-deal" class="mls-market-ads-locale-deal" name="mls-market-ads-locale-deal">
                            <label for="mls-market-ads-locale-deal" class="mls-mr-10">Uknjiženo</label>

                            <input type="checkbox" id="mls-market-ads-locale-fixed" class="mls-market-ads-locale-fixed" name="mls-market-ads-locale-fixed">
                            <label for="mls-market-ads-locale-fixed" class="mls-mr-10">Može zamena</label>

                            <input type="checkbox" id="mls-market-ads-locale-free" class="mls-market-ads-locale-free" name="mls-market-ads-locale-free">
                            <label for="mls-market-ads-locale-free" class="mls-mr-10">Hitna prodaja</label>

                            <input type="checkbox" id="mls-market-ads-locale-accept-change" class="mls-market-ads-locale-accept-change" name="mls-market-ads-locale-accept-change">
                            <label for="mls-market-ads-locale-accept-change" class="mls-mr-10">Pod hipotekom</label>
                        </div>
                    </div>
                </div>
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-locale-wather" class="mls-market-ads-locale-wather" name="mls-market-ads-locale-wather">
                            <label for="mls-market-ads-locale-wather" class="mls-mr-10">Voda</label>

                            <input type="checkbox" id="mls-market-ads-locale-electricity" class="mls-market-ads-locale-electricity" name="mls-market-ads-locale-electricity">
                            <label for="mls-market-ads-locale-electricity" class="mls-mr-10">Struja</label>

                            <input type="checkbox" id="mls-market-ads-locale-video" class="mls-market-ads-locale-video" name="mls-market-ads-locale-video">
                            <label for="mls-market-ads-locale-video" class="mls-mr-10">Video Nadzor</label>

                            <input type="checkbox" id="mls-market-ads-locale-open" class="mls-market-ads-locale-open" name="mls-market-ads-locale-open">
                            <label for="mls-market-ads-locale-open" class="mls-mr-10">Daljinsko otvaranje</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mls-market-ads-locale-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <label for="mls-market-ads-locale-additional">Dodatni opis</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <textarea id="mls-market-ads-locale-additional" class="mls-field" name="mls-market-ads-locale-additional" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------------------
        ----- End Nekretnine Lokal ----
        ------------------------------->

        <!-----------------------------
        -------- Nekretnine poslovna zgrada ----
        ------------------------------->
        <div class="Poslovnazgrada">
            <div id="mls-market-ads-business-building-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-business-building-type">Tip nekretnine</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="text" id="mls-market-ads-business-building-type" class="mls-field" value="Poslovna zgrada" name="mls-market-ads-business-building-type" disabled>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-business-building-size">Kvadratura</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="number" id="mls-market-ads-business-building-size" class="mls-field" name="mls-market-ads-business-building-size">
                        </div>
                    </div>
                </div>
            </div>
            <div id="mls-market-ads-business-building-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-business-building-ads">Oglašivač</label><br>
                            <select name="mls-market-ads-business-building-ads" id="mls-market-ads-business-building-ads" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-business-building-object-type">Tip objekta</label><br>
                            <select name="mls-market-ads-business-building-object-type" id="mls-market-ads-business-building-object-type" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div id="mls-market-ads-business-building-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-business-building-deal" class="mls-market-ads-business-building-deal" name="mls-market-ads-business-building-deal">
                            <label for="mls-market-ads-business-building-deal" class="mls-mr-10">Uknjiženo</label>

                            <input type="checkbox" id="mls-market-ads-business-building-fixed" class="mls-market-ads-business-building-fixed" name="mls-market-ads-business-building-fixed">
                            <label for="mls-market-ads-business-building-fixed" class="mls-mr-10">Može zamena</label>

                            <input type="checkbox" id="mls-market-ads-business-building-free" class="mls-market-ads-business-building-free" name="mls-market-ads-business-building-free">
                            <label for="mls-market-ads-business-building-free" class="mls-mr-10">Hitna prodaja</label>

                            <input type="checkbox" id="mls-market-ads-business-building-accept-change" class="mls-market-ads-business-building-accept-change" name="mls-market-ads-business-building-accept-change">
                            <label for="mls-market-ads-business-building-accept-change" class="mls-mr-10">Pod hipotekom</label>
                        </div>
                    </div>
                </div>
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-business-building-wather" class="mls-market-ads-business-building-wather" name="mls-market-ads-business-building-wather">
                            <label for="mls-market-ads-business-building-wather" class="mls-mr-10">Voda</label>

                            <input type="checkbox" id="mls-market-ads-business-building-electricity" class="mls-market-ads-business-building-electricity" name="mls-market-ads-business-building-electricity">
                            <label for="mls-market-ads-business-building-electricity" class="mls-mr-10">Struja</label>

                            <input type="checkbox" id="mls-market-ads-business-building-video" class="mls-market-ads-business-building-video" name="mls-market-ads-business-building-video">
                            <label for="mls-market-ads-business-building-video" class="mls-mr-10">Video Nadzor</label>

                            <input type="checkbox" id="mls-market-ads-business-building-open" class="mls-market-ads-business-building-open" name="mls-market-ads-business-building-open">
                            <label for="mls-market-ads-business-building-open" class="mls-mr-10">Daljinsko otvaranje</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mls-market-ads-business-building-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <label for="mls-market-ads-business-building-additional">Dodatni opis</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <textarea id="mls-market-ads-business-building-additional" class="mls-field" name="mls-market-ads-business-building-additional" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------------------
        ----- End Nekretnine Poslovna zgrada ----
        ------------------------------->

        <!-----------------------------
        -------- Nekretnine poslovna prostor ----
        ------------------------------->
        <div class="Poslovniprostor">
            <div id="mls-market-ads-business-space-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-business-space-type">Tip nekretnine</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="text" id="mls-market-ads-business-space-type" class="mls-field" value="Poslovni prostor" name="mls-market-ads-business-space-type" disabled>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-business-space-size">Kvadratura</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="number" id="mls-market-ads-business-space-size" class="mls-field" name="mls-market-ads-business-space-size">
                        </div>
                    </div>
                </div>
            </div>
            <div id="mls-market-ads-business-space-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-business-space-ads">Oglašivač</label><br>
                            <select name="mls-market-ads-business-space-ads" id="mls-market-ads-business-space-ads" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-business-space-object-type">Tip objekta</label><br>
                            <select name="mls-market-ads-business-space-object-type" id="mls-market-ads-business-space-object-type" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div id="mls-market-ads-business-space-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-business-space-deal" class="mls-market-ads-business-space-deal" name="mls-market-ads-business-space-deal">
                            <label for="mls-market-ads-business-space-deal" class="mls-mr-10">Uknjiženo</label>

                            <input type="checkbox" id="mls-market-ads-business-space-fixed" class="mls-market-ads-business-space-fixed" name="mls-market-ads-business-space-fixed">
                            <label for="mls-market-ads-business-space-fixed" class="mls-mr-10">Može zamena</label>

                            <input type="checkbox" id="mls-market-ads-business-space-free" class="mls-market-ads-business-space-free" name="mls-market-ads-business-space-free">
                            <label for="mls-market-ads-business-space-free" class="mls-mr-10">Hitna prodaja</label>

                            <input type="checkbox" id="mls-market-ads-business-space-accept-change" class="mls-market-ads-business-space-accept-change" name="mls-market-ads-business-space-accept-change">
                            <label for="mls-market-ads-business-space-accept-change" class="mls-mr-10">Pod hipotekom</label>
                        </div>
                    </div>
                </div>
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-business-space-wather" class="mls-market-ads-business-space-wather" name="mls-market-ads-business-space-wather">
                            <label for="mls-market-ads-business-space-wather" class="mls-mr-10">Voda</label>

                            <input type="checkbox" id="mls-market-ads-business-space-electricity" class="mls-market-ads-business-space-electricity" name="mls-market-ads-business-space-electricity">
                            <label for="mls-market-ads-business-space-electricity" class="mls-mr-10">Struja</label>

                            <input type="checkbox" id="mls-market-ads-business-space-video" class="mls-market-ads-business-space-video" name="mls-market-ads-business-space-video">
                            <label for="mls-market-ads-business-space-video" class="mls-mr-10">Video Nadzor</label>

                            <input type="checkbox" id="mls-market-ads-business-space-open" class="mls-market-ads-business-space-open" name="mls-market-ads-business-space-open">
                            <label for="mls-market-ads-business-space-open" class="mls-mr-10">Daljinsko otvaranje</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mls-market-ads-business-space-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <label for="mls-market-ads-business-space-additional">Dodatni opis</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <textarea id="mls-market-ads-business-space-additional" class="mls-field" name="mls-market-ads-business-space-additional" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------------------
        ----- End Nekretnine Poslovna prostor ----
        ------------------------------->

        <!-----------------------------
        -------- Nekretnine hala ----
        ------------------------------->
        <div class="Hala">
            <div id="mls-market-ads-hala-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-hala-type">Tip nekretnine</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="text" id="mls-market-ads-hala-type" class="mls-field" value="Hala" name="mls-market-ads-hala-type" disabled>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-hala-size">Kvadratura</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="number" id="mls-market-ads-hala-size" class="mls-field" name="mls-market-ads-hala-size">
                        </div>
                    </div>
                </div>
            </div>
            <div id="mls-market-ads-hala-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-hala-ads">Oglašivač</label><br>
                            <select name="mls-market-ads-hala-ads" id="mls-market-ads-hala-ads" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-hala-object-type">Tip objekta</label><br>
                            <select name="mls-market-ads-hala-object-type" id="mls-market-ads-hala-object-type" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div id="mls-market-ads-hala-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-hala-deal" class="mls-market-ads-hala-deal" name="mls-market-ads-hala-deal">
                            <label for="mls-market-ads-hala-deal" class="mls-mr-10">Uknjiženo</label>

                            <input type="checkbox" id="mls-market-ads-hala-fixed" class="mls-market-ads-hala-fixed" name="mls-market-ads-hala-fixed">
                            <label for="mls-market-ads-hala-fixed" class="mls-mr-10">Može zamena</label>

                            <input type="checkbox" id="mls-market-ads-hala-free" class="mls-market-ads-hala-free" name="mls-market-ads-hala-free">
                            <label for="mls-market-ads-hala-free" class="mls-mr-10">Hitna prodaja</label>

                            <input type="checkbox" id="mls-market-ads-hala-accept-change" class="mls-market-ads-hala-accept-change" name="mls-market-ads-hala-accept-change">
                            <label for="mls-market-ads-hala-accept-change" class="mls-mr-10">Pod hipotekom</label>
                        </div>
                    </div>
                </div>
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-hala-wather" class="mls-market-ads-hala-wather" name="mls-market-ads-hala-wather">
                            <label for="mls-market-ads-hala-wather" class="mls-mr-10">Voda</label>

                            <input type="checkbox" id="mls-market-ads-hala-electricity" class="mls-market-ads-hala-electricity" name="mls-market-ads-hala-electricity">
                            <label for="mls-market-ads-hala-electricity" class="mls-mr-10">Struja</label>

                            <input type="checkbox" id="mls-market-ads-hala-video" class="mls-market-ads-hala-video" name="mls-market-ads-hala-video">
                            <label for="mls-market-ads-hala-video" class="mls-mr-10">Video Nadzor</label>

                            <input type="checkbox" id="mls-market-ads-hala-open" class="mls-market-ads-hala-open" name="mls-market-ads-hala-open">
                            <label for="mls-market-ads-hala-open" class="mls-mr-10">Daljinsko otvaranje</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mls-market-ads-hala-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <label for="mls-market-ads-hala-additional">Dodatni opis</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <textarea id="mls-market-ads-hala-additional" class="mls-field" name="mls-market-ads-hala-additional" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------------------
        ----- End Nekretnine Hala ----
        ------------------------------->

        <!-----------------------------
        -------- Nekretnine ugostiteljski objekat ----
        ------------------------------->
        <div class="Ugostiteljskiobjekat">
            <div id="mls-market-ads-restoran-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-restoran-type">Tip nekretnine</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="text" id="mls-market-ads-restoran-type" class="mls-field" value="Ugostiteljski objekat" name="mls-market-ads-restoran-type" disabled>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-restoran-size">Kvadratura</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="number" id="mls-market-ads-restoran-size" class="mls-field" name="mls-market-ads-restoran-size">
                        </div>
                    </div>
                </div>
            </div>
            <div id="mls-market-ads-restoran-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-restoran-ads">Oglašivač</label><br>
                            <select name="mls-market-ads-restoran-ads" id="mls-market-ads-restoran-ads" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-restoran-object-type">Tip objekta</label><br>
                            <select name="mls-market-ads-restoran-object-type" id="mls-market-ads-restoran-object-type" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div id="mls-market-ads-restoran-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-restoran-deal" class="mls-market-ads-restoran-deal" name="mls-market-ads-restoran-deal">
                            <label for="mls-market-ads-restoran-deal" class="mls-mr-10">Uknjiženo</label>

                            <input type="checkbox" id="mls-market-ads-restoran-fixed" class="mls-market-ads-restoran-fixed" name="mls-market-ads-restoran-fixed">
                            <label for="mls-market-ads-restoran-fixed" class="mls-mr-10">Može zamena</label>

                            <input type="checkbox" id="mls-market-ads-restoran-free" class="mls-market-ads-restoran-free" name="mls-market-ads-restoran-free">
                            <label for="mls-market-ads-restoran-free" class="mls-mr-10">Hitna prodaja</label>

                            <input type="checkbox" id="mls-market-ads-restoran-accept-change" class="mls-market-ads-restoran-accept-change" name="mls-market-ads-restoran-accept-change">
                            <label for="mls-market-ads-restoran-accept-change" class="mls-mr-10">Pod hipotekom</label>
                        </div>
                    </div>
                </div>
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-restoran-wather" class="mls-market-ads-restoran-wather" name="mls-market-ads-restoran-wather">
                            <label for="mls-market-ads-restoran-wather" class="mls-mr-10">Voda</label>

                            <input type="checkbox" id="mls-market-ads-restoran-electricity" class="mls-market-ads-restoran-electricity" name="mls-market-ads-restoran-electricity">
                            <label for="mls-market-ads-restoran-electricity" class="mls-mr-10">Struja</label>

                            <input type="checkbox" id="mls-market-ads-restoran-video" class="mls-market-ads-restoran-video" name="mls-market-ads-restoran-video">
                            <label for="mls-market-ads-restoran-video" class="mls-mr-10">Video Nadzor</label>

                            <input type="checkbox" id="mls-market-ads-restoran-open" class="mls-market-ads-restoran-open" name="mls-market-ads-restoran-open">
                            <label for="mls-market-ads-restoran-open" class="mls-mr-10">Daljinsko otvaranje</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mls-market-ads-restoran-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <label for="mls-market-ads-restoran-additional">Dodatni opis</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <textarea id="mls-market-ads-restoran-additional" class="mls-field" name="mls-market-ads-restoran-additional" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------------------
        ----- End Nekretnine ugostiteljski prostor ----
        ------------------------------->

        <!-----------------------------
        -------- Nekretnine ugostiteljski objekat ----
        ------------------------------->
        <div class="Kiosk">
            <div id="mls-market-ads-small-storeprice-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-small-storetype">Tip nekretnine</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="text" id="mls-market-ads-small-storetype" class="mls-field" value="Kiosk" name="mls-market-ads-small-storetype" disabled>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-small-storesize">Kvadratura</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="number" id="mls-market-ads-small-storesize" class="mls-field" name="mls-market-ads-small-storesize">
                        </div>
                    </div>
                </div>
            </div>
            <div id="mls-market-ads-small-storeprice-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-small-storeads">Oglašivač</label><br>
                            <select name="mls-market-ads-small-storeads" id="mls-market-ads-small-storeads" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-small-storeobject-type">Tip objekta</label><br>
                            <select name="mls-market-ads-small-storeobject-type" id="mls-market-ads-small-storeobject-type" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div id="mls-market-ads-small-storeprice-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-small-storedeal" class="mls-market-ads-small-storedeal" name="mls-market-ads-small-storedeal">
                            <label for="mls-market-ads-small-storedeal" class="mls-mr-10">Uknjiženo</label>

                            <input type="checkbox" id="mls-market-ads-small-storefixed" class="mls-market-ads-small-storefixed" name="mls-market-ads-small-storefixed">
                            <label for="mls-market-ads-small-storefixed" class="mls-mr-10">Može zamena</label>

                            <input type="checkbox" id="mls-market-ads-small-storefree" class="mls-market-ads-small-storefree" name="mls-market-ads-small-storefree">
                            <label for="mls-market-ads-small-storefree" class="mls-mr-10">Hitna prodaja</label>

                            <input type="checkbox" id="mls-market-ads-small-storeaccept-change" class="mls-market-ads-small-storeaccept-change" name="mls-market-ads-small-storeaccept-change">
                            <label for="mls-market-ads-small-storeaccept-change" class="mls-mr-10">Pod hipotekom</label>
                        </div>
                    </div>
                </div>
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-small-storewather" class="mls-market-ads-small-storewather" name="mls-market-ads-small-storewather">
                            <label for="mls-market-ads-small-storewather" class="mls-mr-10">Voda</label>

                            <input type="checkbox" id="mls-market-ads-small-storeelectricity" class="mls-market-ads-small-storeelectricity" name="mls-market-ads-small-storeelectricity">
                            <label for="mls-market-ads-small-storeelectricity" class="mls-mr-10">Struja</label>

                            <input type="checkbox" id="mls-market-ads-small-storevideo" class="mls-market-ads-small-storevideo" name="mls-market-ads-small-storevideo">
                            <label for="mls-market-ads-small-storevideo" class="mls-mr-10">Video Nadzor</label>

                            <input type="checkbox" id="mls-market-ads-small-storeopen" class="mls-market-ads-small-storeopen" name="mls-market-ads-small-storeopen">
                            <label for="mls-market-ads-small-storeopen" class="mls-mr-10">Daljinsko otvaranje</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mls-market-ads-small-storeprice-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <label for="mls-market-ads-small-storeadditional">Dodatni opis</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <textarea id="mls-market-ads-small-storeadditional" class="mls-field" name="mls-market-ads-small-storeadditional" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------------------
        ----- End Nekretnine Kiosk ----
        ------------------------------->

        <!-----------------------------
        -------- Nekretnine ugostiteljski objekat ----
        ------------------------------->
        <div class="Stovarište">
            <div id="mls-market-ads-stovariste-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-stovariste-type">Tip nekretnine</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="text" id="mls-market-ads-stovariste-type" class="mls-field" value="Stovarište" name="mls-market-ads-stovariste-type" disabled>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-stovariste-size">Kvadratura</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="number" id="mls-market-ads-stovariste-size" class="mls-field" name="mls-market-ads-stovariste-size">
                        </div>
                    </div>
                </div>
            </div>
            <div id="mls-market-ads-stovariste-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-stovariste-ads">Oglašivač</label><br>
                            <select name="mls-market-ads-stovariste-ads" id="mls-market-ads-stovariste-ads" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-stovariste-object-type">Tip objekta</label><br>
                            <select name="mls-market-ads-stovariste-object-type" id="mls-market-ads-stovariste-object-type" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div id="mls-market-ads-stovariste-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-stovariste-deal" class="mls-market-ads-stovariste-deal" name="mls-market-ads-stovariste-deal">
                            <label for="mls-market-ads-stovariste-deal" class="mls-mr-10">Uknjiženo</label>

                            <input type="checkbox" id="mls-market-ads-stovariste-fixed" class="mls-market-ads-stovariste-fixed" name="mls-market-ads-stovariste-fixed">
                            <label for="mls-market-ads-stovariste-fixed" class="mls-mr-10">Može zamena</label>

                            <input type="checkbox" id="mls-market-ads-stovariste-free" class="mls-market-ads-stovariste-free" name="mls-market-ads-stovariste-free">
                            <label for="mls-market-ads-stovariste-free" class="mls-mr-10">Hitna prodaja</label>

                            <input type="checkbox" id="mls-market-ads-stovariste-accept-change" class="mls-market-ads-stovariste-accept-change" name="mls-market-ads-stovariste-accept-change">
                            <label for="mls-market-ads-stovariste-accept-change" class="mls-mr-10">Pod hipotekom</label>
                        </div>
                    </div>
                </div>
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-stovariste-wather" class="mls-market-ads-stovariste-wather" name="mls-market-ads-stovariste-wather">
                            <label for="mls-market-ads-stovariste-wather" class="mls-mr-10">Voda</label>

                            <input type="checkbox" id="mls-market-ads-stovariste-electricity" class="mls-market-ads-stovariste-electricity" name="mls-market-ads-stovariste-electricity">
                            <label for="mls-market-ads-stovariste-electricity" class="mls-mr-10">Struja</label>

                            <input type="checkbox" id="mls-market-ads-stovariste-video" class="mls-market-ads-stovariste-video" name="mls-market-ads-stovariste-video">
                            <label for="mls-market-ads-stovariste-video" class="mls-mr-10">Video Nadzor</label>

                            <input type="checkbox" id="mls-market-ads-stovariste-open" class="mls-market-ads-stovariste-open" name="mls-market-ads-stovariste-open">
                            <label for="mls-market-ads-stovariste-open" class="mls-mr-10">Daljinsko otvaranje</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mls-market-ads-stovariste-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <label for="mls-market-ads-stovariste-additional">Dodatni opis</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <textarea id="mls-market-ads-stovariste-additional" class="mls-field" name="mls-market-ads-stovariste-additional" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------------------
        ----- End Nekretnine Stovariste ----
        ------------------------------->

        <!-----------------------------
        -------- Nekretnine Garaža ----
        ------------------------------->
        <div class="Garaža">
            <div class="mls-row-form">
                <div class="mls-w-100">
                    <div class="mls-field-wrapper">
                        <h4>Osnovni podaci</h4>
                    </div>
                </div>
            </div>
            <div id="mls-market-ads-garage-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-garage-type">Tip nekretnine</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="text" id="mls-market-ads-garage-type" class="mls-field" value="Garaža" name="mls-market-ads-garage-type" disabled>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-garage-size">Kvadratura garaza</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="number" id="mls-market-ads-garage-size" class="mls-field" name="mls-market-ads-garage-size">
                        </div>
                    </div>
                </div>
            </div>
            <div id="mls-market-ads-garage-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-garage-ads">Oglašivač</label><br>
                            <select name="mls-market-ads-garage-ads" id="mls-market-ads-garage-ads" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-garage-object-type">Tip objekta</label><br>
                            <select name="mls-market-ads-garage-object-type" id="mls-market-ads-garage-object-type" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div id="mls-market-ads-garage-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-garage-deal" class="mls-market-ads-garage-deal" name="mls-market-ads-garage-deal">
                            <label for="mls-market-ads-garage-deal" class="mls-mr-10">Uknjiženo</label>

                            <input type="checkbox" id="mls-market-ads-garage-fixed" class="mls-market-ads-garage-fixed" name="mls-market-ads-garage-fixed">
                            <label for="mls-market-ads-garage-fixed" class="mls-mr-10">Može zamena</label>

                            <input type="checkbox" id="mls-market-ads-garage-free" class="mls-market-ads-garage-free" name="mls-market-ads-garage-free">
                            <label for="mls-market-ads-garage-free" class="mls-mr-10">Hitna prodaja</label>

                            <input type="checkbox" id="mls-market-ads-garage-accept-change" class="mls-market-ads-garage-accept-change" name="mls-market-ads-garage-accept-change">
                            <label for="mls-market-ads-garage-accept-change" class="mls-mr-10">Pod hipotekom</label>
                        </div>
                    </div>
                </div>
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-garage-wather" class="mls-market-ads-garage-wather" name="mls-market-ads-garage-wather">
                            <label for="mls-market-ads-garage-wather" class="mls-mr-10">Voda</label>

                            <input type="checkbox" id="mls-market-ads-garage-electricity" class="mls-market-ads-garage-electricity" name="mls-market-ads-garage-electricity">
                            <label for="mls-market-ads-garage-electricity" class="mls-mr-10">Struja</label>

                            <input type="checkbox" id="mls-market-ads-garage-video" class="mls-market-ads-garage-video" name="mls-market-ads-garage-video">
                            <label for="mls-market-ads-garage-video" class="mls-mr-10">Video Nadzor</label>

                            <input type="checkbox" id="mls-market-ads-garage-open" class="mls-market-ads-garage-open" name="mls-market-ads-garage-open">
                            <label for="mls-market-ads-garage-open" class="mls-mr-10">Daljinsko otvaranje</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mls-market-ads-garage-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <label for="mls-market-ads-garage-additional">Dodatni opis</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <textarea id="mls-market-ads-garage-additional" class="mls-field" name="mls-market-ads-garage-additional" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <!-----------------------------
        ------ End Nekretnine Garaža --
        ------------------------------->
        <!-----------------------------
        -------- Nekretnine Ostalo ----
        ------------------------------->
        <div class="Ostalo">
            <div class="mls-row-form">
                <div class="mls-w-100">
                    <div class="mls-field-wrapper">
                        <h4>Osnovni podaci</h4>
                    </div>
                </div>
            </div>
            <div class="Autobusiiminibusevi" id="mls-market-ads-garage-misc-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-garage-misc-type">Tip nekretnine test</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="text" id="mls-market-ads-garage-misc-type" class="mls-field" value="Garaža" name="mls-market-ads-garage-misc-type" disabled>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-garage-misc-size">Površina</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="number" id="mls-market-ads-garage-misc-size" class="mls-field" name="mls-market-ads-garage-misc-size">
                        </div>
                    </div>
                </div>
            </div>
            <div id="mls-market-ads-garage-misc-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-garage-misc-ads">Oglašivač</label><br>
                            <select name="mls-market-ads-garage-misc-ads" id="mls-market-ads-garage-misc-ads" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div id="mls-market-ads-garage-misc-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-garage-misc-deal" class="mls-market-ads-garage-misc-deal" name="mls-market-ads-garage-misc-deal">
                            <label for="mls-market-ads-garage-misc-deal" class="mls-mr-10">Uknjiženo</label>

                            <input type="checkbox" id="mls-market-ads-garage-misc-fixed" class="mls-market-ads-garage-misc-fixed" name="mls-market-ads-garage-misc-fixed">
                            <label for="mls-market-ads-garage-misc-fixed" class="mls-mr-10">Može zamena</label>

                            <input type="checkbox" id="mls-market-ads-garage-misc-free" class="mls-market-ads-garage-misc-free" name="mls-market-ads-garage-misc-free">
                            <label for="mls-market-ads-garage-misc-free" class="mls-mr-10">Hitna prodaja</label>

                            <input type="checkbox" id="mls-market-ads-garage-misc-accept-change" class="mls-market-ads-garage-misc-accept-change" name="mls-market-ads-garage-misc-accept-change">
                            <label for="mls-market-ads-garage-misc-accept-change" class="mls-mr-10">Pod hipotekom</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mls-market-ads-garage-misc-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <label for="mls-market-ads-garage-misc-additional">Dodatni opis</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <textarea id="mls-market-ads-garage-misc-additional" class="mls-field" name="mls-market-ads-garage-misc-additional" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------------------
        ------ End Nekretnine Osnovno --
        ------------------------------->
        <!-----------------------------
        -------- Nekretnine Ostalo ----
        ------------------------------->
        <div class="Ostalo">
            <div class="mls-row-form">
                <div class="mls-w-100">
                    <div class="mls-field-wrapper">
                        <h4>Osnovni podaci</h4>
                    </div>
                </div>
            </div>
            <div id="mls-market-ads-garage-land-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-garage-land-type">Tip nekretnine</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="text" id="mls-market-ads-garage-land-type" class="mls-field" value="Garaža" name="mls-market-ads-garage-land-type" disabled>
                        </div>
                    </div>

                    <div class="mls-w-20">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-garage-land-size">Površina</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="number" id="mls-market-ads-garage-land-size" class="mls-field" name="mls-market-ads-garage-land-size">
                        </div>
                    </div>
                </div>
            </div>
            <div id="mls-market-ads-garage-land-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-garage-land-ads">Oglašivač</label><br>
                            <select name="mls-market-ads-garage-land-ads" id="mls-market-ads-garage-land-ads" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>
                    <div class="mls-w-30">
                        <div class="mls-field-wrapper">
                            <label for="mls-market-ads-garage-land-ads">Vrsta zemljišta</label><br>
                            <select name="mls-market-ads-garage-land-ads" id="mls-market-ads-garage-land-ads" class="mls-field">
                                <option value="">-- Izaberite --</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div id="mls-market-ads-garage-land-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-garage-land-deal" class="mls-market-ads-garage-land-deal" name="mls-market-ads-garage-land-deal">
                            <label for="mls-market-ads-garage-land-deal" class="mls-mr-10">Uknjižen</label>

                            <input type="checkbox" id="mls-market-ads-garage-land-fixed" class="mls-market-ads-garage-land-fixed" name="mls-market-ads-garage-land-fixed">
                            <label for="mls-market-ads-garage-land-fixed" class="mls-mr-10">Može zamena</label>

                            <input type="checkbox" id="mls-market-ads-garage-land-free" class="mls-market-ads-garage-land-free" name="mls-market-ads-garage-land-free">
                            <label for="mls-market-ads-garage-land-free" class="mls-mr-10">Hitna prodaja</label>

                            <input type="checkbox" id="mls-market-ads-garage-land-accept-change" class="mls-market-ads-garage-land-accept-change" name="mls-market-ads-garage-land-accept-change">
                            <label for="mls-market-ads-garage-land-accept-change" class="mls-mr-10">Pod hipotekom</label>
                        </div>
                    </div>
                </div>
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-garage-land-approved" class="mls-market-ads-garage-land-approved" name="mls-market-ads-garage-land-approved">
                            <label for="mls-market-ads-garage-land-approved" class="mls-mr-10">Dozvoljena gradnja</label>

                            <input type="checkbox" id="mls-market-ads-garage-land-started" class="mls-market-ads-garage-land-started" name="mls-market-ads-garage-land-started">
                            <label for="mls-market-ads-garage-land-started" class="mls-mr-10">Započeta gradnja</label>

                            <input type="checkbox" id="mls-market-ads-garage-land-multiplied" class="mls-market-ads-garage-land-multiplied" name="mls-market-ads-garage-land-multiplied">
                            <label for="mls-market-ads-garage-land-multiplied" class="mls-mr-10">Deljiv</label>
                        </div>
                    </div>
                </div>
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-garage-land-water" class="mls-market-ads-garage-land-water" name="mls-market-ads-garage-land-water">
                            <label for="mls-market-ads-garage-land-water" class="mls-mr-10">Voda</label>

                            <input type="checkbox" id="mls-market-ads-garage-land-sewage" class="mls-market-ads-garage-land-sewage" name="mls-market-ads-garage-land-sewage">
                            <label for="mls-market-ads-garage-land-sewage" class="mls-mr-10">Kanalizacija</label>

                            <input type="checkbox" id="mls-market-ads-garage-land-electricity" class="mls-market-ads-garage-land-electricity" name="mls-market-ads-garage-land-electricity">
                            <label for="mls-market-ads-garage-land-electricity" class="mls-mr-10">Struja</label>

                            <input type="checkbox" id="mls-market-ads-garage-land-phone" class="mls-market-ads-garage-land-phone" name="mls-market-ads-garage-land-phone">
                            <label for="mls-market-ads-garage-land-phone" class="mls-mr-10">Telefon</label>

                            <input type="checkbox" id="mls-market-ads-garage-land-road" class="mls-market-ads-garage-land-road" name="mls-market-ads-garage-land-road">
                            <label for="mls-market-ads-garage-land-road" class="mls-mr-10">Asfalt</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mls-market-ads-garage-land-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <label for="mls-market-ads-garage-land-additional">Dodatni opis</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <textarea id="mls-market-ads-garage-land-additional" class="mls-field" name="mls-market-ads-garage-land-additional" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="mls-row-form">
                <div class="mls-w-100">
                    <div class="mls-field-wrapper">
                        <h4>Dodatno</h4>
                    </div>
                </div>
            </div>
            <div id="mls-market-ads-add-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-70 mls-padding-0">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-add-apartment-day" class="mls-market-ads-add-apartment-day" name="mls-market-ads-add-apartment-day">
                            <label for="mls-market-ads-add-apartment-day" class="mls-mr-10">Stan na dan</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-now" class="mls-market-ads-add-apartment-now" name="mls-market-ads-add-apartment-now">
                            <label for="mls-market-ads-add-apartment-now" class="mls-mr-10">Odmah useljiv</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-not-flor" class="mls-market-ads-add-apartment-not-flor" name="mls-market-ads-add-apartment-not-flor">
                            <label for="mls-market-ads-add-apartment-not-flor" class="mls-mr-10">Nije poslednji sprat</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-in-house" class="mls-market-ads-add-apartment-in-house" name="mls-market-ads-add-apartment-in-house">
                            <label for="mls-market-ads-add-apartment-in-house" class="mls-mr-10">Nije stan u kuci</label>
                        </div>
                    </div>
                </div>
                <div class="mls-row-form">
                    <div class="mls-w-70 mls-padding-0">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-add-apartment-dep" class="mls-market-ads-add-apartment-dep" name="mls-market-ads-add-apartment-dep">
                            <label for="mls-market-ads-add-apartment-dep" class="mls-mr-10">Depozit</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-smokers" class="mls-market-ads-add-apartment-smokers" name="mls-market-ads-add-apartment-smokers">
                            <label for="mls-market-ads-add-apartment-smokers" class="mls-mr-10">Za pušače</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-non-smoker" class="mls-market-ads-add-apartment-non-smoker" name="mls-market-ads-add-apartment-non-smoker">
                            <label for="mls-market-ads-add-apartment-non-smoker" class="mls-mr-10">Za nepušače</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-students" class="mls-market-ads-add-apartment-students" name="mls-market-ads-add-apartment-students">
                            <label for="mls-market-ads-add-apartment-students" class="mls-mr-10">Za studente</label>
                        </div>
                    </div>
                </div>
                <div class="mls-row-form">
                    <div class="mls-w-70 mls-padding-0">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-add-apartment-maintain" class="mls-market-ads-add-apartment-maintain" name="mls-market-ads-add-apartment-maintain">
                            <label for="mls-market-ads-add-apartment-maintain" class="mls-mr-10">Smeštaj za radnike</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-pets" class="mls-market-ads-add-apartment-pets" name="mls-market-ads-add-apartment-pets">
                            <label for="mls-market-ads-add-apartment-pets" class="mls-mr-10">Dozvoljeni kućni ljubimci</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-lux" class="mls-market-ads-add-apartment-lux" name="mls-market-ads-add-apartment-lux">
                            <label for="mls-market-ads-add-apartment-lux" class="mls-mr-10">Salonski</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-duplex" class="mls-market-ads-add-apartment-duplex" name="mls-market-ads-add-apartment-duplex">
                            <label for="mls-market-ads-add-apartment-duplex" class="mls-mr-10">Duplex</label>
                        </div>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-70 mls-padding-0">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-add-apartment-penthouse" class="mls-market-ads-add-apartment-penthouse" name="mls-market-ads-add-apartment-penthouse">
                            <label for="mls-market-ads-add-apartment-penthouse" class="mls-mr-10">Penthaus</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-up-flor" class="mls-market-ads-add-apartment-up-flor" name="mls-market-ads-add-apartment-up-flor">
                            <label for="mls-market-ads-add-apartment-up-flor" class="mls-mr-10">Potkrovlje</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mls-market-ads-add-price-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-70 mls-padding-0">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-add-apartment-balcon" class="mls-market-ads-add-apartment-balcon" name="mls-market-ads-add-apartment-balcon">
                            <label for="mls-market-ads-add-apartment-balcon" class="mls-mr-10">Terasa</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-fr-balcon" class="mls-market-ads-add-apartment-fr-balcon" name="mls-market-ads-add-apartment-fr-balcon">
                            <label for="mls-market-ads-add-apartment-fr-balcon" class="mls-mr-10">Francuski balkon</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-lodja" class="mls-market-ads-add-apartment-lodja" name="mls-market-ads-add-apartment-lodja">
                            <label for="mls-market-ads-add-apartment-lodja" class="mls-mr-10">Lođa</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-es" class="mls-market-ads-add-apartment-es" name="mls-market-ads-add-apartment-es">
                            <label for="mls-market-ads-add-apartment-es" class="mls-mr-10">Klima</label>
                        </div>
                    </div>
                </div>
                <div class="mls-row-form">
                    <div class="mls-w-70 mls-padding-0">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-add-apartment-elevator" class="mls-market-ads-add-apartment-elevator" name="mls-market-ads-add-apartment-elevator">
                            <label for="mls-market-ads-add-apartment-elevator" class="mls-mr-10">Lift</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-basement" class="mls-market-ads-add-apartment-basement" name="mls-market-ads-add-apartment-basement">
                            <label for="mls-market-ads-add-apartment-basement" class="mls-mr-10">Podrum</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-hot-wather" class="mls-market-ads-add-apartment-hot-wather" name="mls-market-ads-add-apartment-hot-wather">
                            <label for="mls-market-ads-add-apartment-hot-wather" class="mls-mr-10">Topla voda</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-phone" class="mls-market-ads-add-apartment-phone" name="mls-market-ads-add-apartment-phone">
                            <label for="mls-market-ads-add-apartment-phone" class="mls-mr-10">Telefon</label>
                        </div>
                    </div>
                </div>
                <div class="mls-row-form">
                    <div class="mls-w-70 mls-padding-0">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-add-apartment-tv" class="mls-market-ads-add-apartment-tv" name="mls-market-ads-add-apartment-tv">
                            <label for="mls-market-ads-add-apartment-tv" class="mls-mr-10">KATV</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-internet" class="mls-market-ads-add-apartment-internet" name="mls-market-ads-add-apartment-internet">
                            <label for="mls-market-ads-add-apartment-internet" class="mls-mr-10">Internet</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-interfon" class="mls-market-ads-add-apartment-interfon" name="mls-market-ads-add-apartment-interfon">
                            <label for="mls-market-ads-add-apartment-interfon" class="mls-mr-10">Interfon</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-video-secure" class="mls-market-ads-add-apartment-video-secure" name="mls-market-ads-add-apartment-video-secure">
                            <label for="mls-market-ads-add-apartment-video-secure" class="mls-mr-10">Video nadzor</label>
                        </div>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-70 mls-padding-0">
                        <div class="mls-field-wrapper mls-pt-35">
                            <input type="checkbox" id="mls-market-ads-add-apartment-fire" class="mls-market-ads-add-apartment-fire" name="mls-market-ads-add-apartment-fire">
                            <label for="mls-market-ads-add-apartment-fire" class="mls-mr-10">Kamin</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-rest-garage" class="mls-market-ads-add-apartment-rest-garage" name="mls-market-ads-add-apartment-rest-garage">
                            <label for="mls-market-ads-add-apartment-rest-garage" class="mls-mr-10">Garaža</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-parking" class="mls-market-ads-add-apartment-parking" name="mls-market-ads-add-apartment-parking">
                            <label for="mls-market-ads-add-apartment-parking" class="mls-mr-10">Parking</label>

                            <input type="checkbox" id="mls-market-ads-add-apartment-garden" class="mls-market-ads-add-apartment-garden" name="mls-market-ads-add-apartment-garden">
                            <label for="mls-market-ads-add-apartment-garden" class="mls-mr-10">Sa baštom</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------------------
		------ End Nekretnine Osnovno --
		------------------------------->

        <!-----------------------------
        -------- Automobili ----
        ------------------------------->
		<?php include MLAB_STUDIO_DIR . 'template-parts/new-ad-forms/ads-market/vehicle-template-parts/content-car-form.php'; ?>
        <!-----------------------------
		------ End Automobili -----
		------------------------------->
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
                    <label for="mls-market-ads-photos">Fotografije doprinose da prodaja bude brža i uspešnija. Oglasu možete dodati 20 fotografija.
                        <a href="#">Kako postaviti fotografije</a></label>
					<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    <input type="file" id="mls-market-ads-photos" class="mls-field" name="mls-market-ads-photos[]" accept=".jpg, .jpeg, .png" required multiple>
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
                    <label for="mls-market-ads-video">Uz oglas možete dodati i video snimak. Unesite URL adresu snimka koji ste postavili na YouTube.
                        <a href="#">Kako postaviti video na YouTube?</a></label>
					<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    <input type="url" id="mls-market-ads-video" class="mls-field" name="mls-market-ads-video">
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
                    <label for="mls-market-ads-phone">Telefon</label>
					<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    <input type="text" id="mls-market-ads-phone" class="mls-field" name="mls-market-ads-phone">
                </div>
            </div>
            <div class="mls-w-50">
                <div class="mls-field-wrapper mls-pt-35">
                    <input type="checkbox" id="mls-market-ads-phone-visibility" class="mls-market-ads-phone-visibility" name="mls-market-ads-phone-visibility">
                    <label for="mls-market-ads-phone-visibility">Želim da mi se telefon prikazuje na oglasu</label>
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-50">
                <div class="mls-field-wrapper">
                    <label for="mls-market-ads-additional-phone">Dodatni telefon</label>
					<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    <input type="text" id="mls-market-ads-additional-phone" class="mls-field" name="mls-market-ads-additional-phone">
                </div>
            </div>
            <div class="mls-w-50">
                <div class="mls-field-wrapper mls-pt-35">
                    <input type="checkbox" id="mls-market-ads-data-from-profile" class="mls-market-ads-data-from-profile" name="mls-market-ads-data-from-profile">
                    <label for="mls-market-ads-data-from-profile">Koristi podatke sa mog profila</label>
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-50">
                <div class="mls-field-wrapper">
                    <label for="mls-market-ads-email">Email</label>
					<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    <input type="email" id="mls-market-ads-email" class="mls-field" name="mls-market-ads-email">
                </div>
            </div>
        </div>

        <div class="mls-row-form">
            <div class="mls-w-100">
                <div class="mls-field-wrapper mls-align-right">
                    <input type="checkbox" id="mls-market-ads-show-this-ad" class="mls-market-ads-show-this-ad" name="mls-market-ads-show-this-ad">
                    <label for="mls-market-ads-show-this-ad" class="mls-small-text">Prikazuj ovaj oglas u listi "Vidi sve oglase ovog oglašivača"</label>
                </div>
            </div>
        </div>

        <button type="button" class="mls-back-to-first-restart" id="mls-back-to-first-market-ads">Prethodna</button>
        <button type="button" id="mls-next-to-third-market-ads" class="mls-mt-20">Dalje</button>
    </div> <!-- End Form - Second page -->

    <!-- Ads - Third page -->
    <div id="mls-third-load-market-ads">
        <h2>Izaberite tip oglasa</h2>
        <div class="mls-w-100">
            <button type="button" id="mls-back-to-second-market-ads">Prethodna</button>
            <input type="submit" name="mls-form-submit-market-ads" value="Objavi oglas">
        </div>
    </div><!-- End Ads - Third page -->
</form>