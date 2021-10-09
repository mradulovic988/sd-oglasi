<?php
include MLAB_STUDIO_DIR . 'src/config/Mls_Config.php';
include MLAB_STUDIO_DIR . 'src/admin/settings-api/Mls_Settings_Api_Dashboard.php';
include MLAB_STUDIO_DIR . 'src/config/html-templates/Mls_Html.php';

$_config = new Mls_Config();
$_api    = new Mls_Settings_Api_Dashboard();
$_html   = new Mls_Html();
?>
<div class="mls-home-form-wrapper">
    <small>Polja označena <span style="color: red">*</span> su obavezna za unos</small>
    <form class="mls-jobs" method="post" id="mls-test" enctype="multipart/form-data">
        <input type="hidden" name="ispost_jobs" value="1"/>
        <input type="hidden" name="userid_jobs" value=""/>

        <!-- Categories - First page -->
        <div id="mls-first-load-jobs-buy">
            <div class="mls-row-70">
                <h4 class="mls-pt-20 mls-pb-20 mls-pl-5">Odaberi Kategoriju</h4>
                <div class="mls-field-wrapper">
                    <!--                <label for="mls-category">Odaberi Kategoriju *</label>-->
					<?php
					$args               = array(
						'parent'       => 857,
						'taxonomy'     => 'poslovi',
						'hide_empty'   => false,
						'hierarchical' => 1
					);
					$category_tax_terms = get_categories( $args );
					foreach ( $category_tax_terms as $category_tax_term ) {
						echo '<a id="mls-category-terms" class="' . $category_tax_term->term_id . '" disabled>' . $category_tax_term->name . '</a><span>(' . $category_tax_term->count . ')</span><br>';
					}
					?>
                    <input type="hidden" value="" name="mls-get-categories-jobs" id="mls-get-categories-jobs">
                </div>
            </div>
            <div class="mls-row-30">
                <button type="button" id="mls-next-to-second-load-jobs-buy" class="mls-mt-20">Dalje</button>
            </div>
        </div> <!-- End Categories - First page -->

        <!-- Form - Second page -->
        <div id="mls-second-load-jobs-buy">
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
                        <label for="mls-buy-street">Ulica *</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-buy-street" class="mls-field mls-disable" name="mls-buy-street" required>
                    </div>
                </div>
                <div class="mls-w-25">
                    <div class="mls-field-wrapper">
                        <label for="mls-buy-street-number">Broj *</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-buy-street-number" class="mls-field mls-disable" name="mls-buy-street-number" required>
                    </div>
                </div>
                <div class="mls-w-25">
                    <div class="mls-field-wrapper">
                        <input type="checkbox" id="mls-buy-hide-location" class="mls-field" name="mls-buy-hide-location">
                        <label for="mls-buy-hide-location">Obeležite ovo polje ukoliko nemate fizičku lokaciju</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-25">
                    <div class="mls-field-wrapper">
                        <input type="checkbox" id="mls-buy-remote" class="" name="mls-buy-remote">
                        <label for="mls-buy-remote">Remote</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-50">
                    <div class="mls-field-wrapper">
                        <label for="mls-buy-salary">Plata</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-buy-salary" class="mls-field" name="mls-buy-salary">
                    </div>
                </div>

                <div class="mls-w-25">
                    <div class="mls-field-wrapper">
                        <div class="mls-w-100 mls-padding-0">
                            <input type="radio" id="mls-buy-pay-rsd" class="" name="mls-buy-pay" value="RSD">
                            <label for="mls-buy-pay-rsd">RSD</label>
                        </div>
                        <div class="mls-w-100 mls-padding-0">
                            <input type="radio" id="mls-buy-pay-eur" class="" name="mls-buy-pay" value="EUR">
                            <label for="mls-buy-pay-eur">EUR</label>
                        </div>
                    </div>
                </div>

                <div class="mls-w-25">
                    <div class="mls-field-wrapper">
                        <div class="mls-w-100 mls-padding-0">
                            <input type="radio" id="mls-buy-pay-method-hour" class="" name="mls-buy-pay-method" value="Po satu">
                            <label for="mls-buy-pay-method-hour">Po satu</label>
                        </div>
                        <div class="mls-w-100 mls-padding-0">
                            <input type="radio" id="mls-buy-pay-method-day" class="" name="mls-buy-pay-method" value="Po danu">
                            <label for="mls-buy-pay-method-day">Po danu</label>
                        </div>

                        <div class="mls-w-100 mls-padding-0">
                            <input type="radio" id="mls-buy-pay-method-month" class="" name="mls-buy-pay-method" value="Mesečna plata">
                            <label for="mls-buy-pay-method-month">Mesečna plata</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-50">
                    <div class="mls-field-wrapper">
                        <label for="mls-buy-file">Unesite svoj logo</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="file" id="mls-buy-file" class="mls-field" name="mls-buy-file" accept=".jpg, .jpeg, .png" required>
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-100">
                    <div class="mls-field-wrapper">
                        <label for="mls-buy-instagram">Instagram</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="url" id="mls-buy-instagram" class="mls-field" name="mls-buy-instagram">
                    </div>
                </div>
                <div class="mls-w-100">
                    <div class="mls-field-wrapper">
                        <label for="mls-buy-facebook">Facebook</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="url" id="mls-buy-facebook" class="mls-field" name="mls-buy-facebook">
                    </div>
                </div>
                <div class="mls-w-100">
                    <div class="mls-field-wrapper">
                        <label for="mls-buy-linkedin">Linkedin</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="url" id="mls-buy-linkedin" class="mls-field" name="mls-buy-linkedin">
                    </div>
                </div>
                <div class="mls-w-100">
                    <div class="mls-field-wrapper">
                        <label for="mls-buy-website">Website link</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="url" id="mls-buy-website" class="mls-field" name="mls-buy-website">
                    </div>
                </div>

            </div>

            <div class="mls-row-form">
                <div class="mls-w-100">
                    <button type="button" id="mls-back-to-first-load-jobs-buy">Prethodna</button>
                    <button type="button" id="mls-next-to-third-load-jobs-buy">Dalje ( Izbor tipa oglasa )</button>
                </div>
            </div>
        </div> <!-- End Form - Second page -->

        <!-- Ads - Third page -->
        <div id="mls-third-load-jobs-buy">
            <h2>Izaberite tip oglasa</h2>
            <div class="mls-w-100">
                <button type="button" id="mls-back-to-second-load-jobs-buy">Prethodna</button>
                <input type="submit" name="mls-form-submit-jobs" value="Objavi oglas">
            </div>
        </div><!-- End Ads - Third page -->
    </form>
</div>
