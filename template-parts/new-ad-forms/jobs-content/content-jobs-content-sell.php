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
        <div id="mls-first-load-jobs">
            <div class="mls-row-30">
                <h4 class="mls-pt-20 mls-pb-20 mls-pl-5">Odaberi Kategoriju</h4>
                <div class="mls-field-wrapper">
                    <!--                <label for="mls-category">Odaberi Kategoriju *</label>-->
					<?php

					$args               = array(
						'child_of'     => 655,
						'taxonomy'     => 'poslovi',
						'hide_empty'   => false,
						'hierarchical' => 1,
					);
					$category_tax_terms = get_categories( $args );
					//					echo '<pre>', var_dump( $category_tax_terms ), '</pre>';
					foreach ( $category_tax_terms as $category_tax_term ) {
						echo '<div data-term-id="' . $category_tax_term->term_id . '"  data-parent="' . $category_tax_term->parent . '" class="mls-sell-category-wrapper"<a id="mls-sell-category-terms" data-cat-parent="' . $category_tax_term->category_parent . '" data-parent="' . $category_tax_term->parent . '" class="' . $category_tax_term->term_id . '" disabled>' . $category_tax_term->name . '</a></div>';
					}

					?>
                    <input type="hidden" value="" name="mls-get-categories-jobs" id="mls-get-categories-jobs">
                </div>
            </div>

            <div class="mls-row-30">
                <div id="mls-second-level-wrapper"></div>
            </div>
            <div class="mls-row-30">
                <button type="button" id="mls-next-to-second-load-jobs" class="mls-mt-20">Dalje</button>
            </div>
        </div> <!-- End Categories - First page -->

        <!-- Form - Second page -->
        <div id="mls-second-load-jobs">
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
                        <label for="mls-sell-street">Ulica *</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-sell-street" class="mls-field mls-disable" name="mls-sell-street" required>
                    </div>
                </div>
                <div class="mls-w-25">
                    <div class="mls-field-wrapper">
                        <label for="mls-sell-street-number">Broj *</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-sell-street-number" class="mls-field mls-disable" name="mls-sell-street-number" required>
                    </div>
                </div>
                <div class="mls-w-25">
                    <div class="mls-field-wrapper">
                        <input type="checkbox" id="mls-sell-hide-location" class="mls-field" name="mls-sell-hide-location">
                        <label for="mls-sell-hide-location">Obeležite ovo polje ukoliko nemate fizičku lokaciju</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-25">
                    <div class="mls-field-wrapper">
                        <input type="checkbox" id="mls-sell-remote" class="" name="mls-sell-remote">
                        <label for="mls-sell-remote">Remote</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-50">
                    <div class="mls-field-wrapper">
                        <label for="mls-sell-salary">Plata</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-sell-salary" class="mls-field" name="mls-sell-salary">
                    </div>
                </div>

                <div class="mls-w-25">
                    <div class="mls-field-wrapper">
                        <div class="mls-w-100 mls-padding-0">
                            <input type="radio" id="mls-sell-pay-rsd" class="" name="mls-sell-pay" value="RSD">
                            <label for="mls-sell-pay-rsd">RSD</label>
                        </div>
                        <div class="mls-w-100 mls-padding-0">
                            <input type="radio" id="mls-sell-pay-eur" class="" name="mls-sell-pay" value="EUR">
                            <label for="mls-sell-pay-eur">EUR</label>
                        </div>
                    </div>
                </div>

                <div class="mls-w-25">
                    <div class="mls-field-wrapper">
                        <div class="mls-w-100 mls-padding-0">
                            <input type="radio" id="mls-sell-pay-method-hour" class="" name="mls-sell-pay-method" value="Po satu">
                            <label for="mls-sell-pay-method-hour">Po satu</label>
                        </div>
                        <div class="mls-w-100 mls-padding-0">
                            <input type="radio" id="mls-sell-pay-method-day" class="" name="mls-sell-pay-method" value="Po danu">
                            <label for="mls-sell-pay-method-day">Po danu</label>
                        </div>

                        <div class="mls-w-100 mls-padding-0">
                            <input type="radio" id="mls-sell-pay-method-month" class="" name="mls-sell-pay-method" value="Mesečna plata">
                            <label for="mls-sell-pay-method-month">Mesečna plata</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-50">
                    <div class="mls-field-wrapper">
                        <label for="mls-sell-file">Unesite svoj logo</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="file" id="mls-sell-file" class="mls-field" name="mls-sell-file" accept=".jpg, .jpeg, .png" required>
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-100">
                    <div class="mls-field-wrapper">
                        <label for="mls-sell-instagram">Instagram</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="url" id="mls-sell-instagram" class="mls-field" name="mls-sell-instagram">
                    </div>
                </div>
                <div class="mls-w-100">
                    <div class="mls-field-wrapper">
                        <label for="mls-sell-facebook">Facebook</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="url" id="mls-sell-facebook" class="mls-field" name="mls-sell-facebook">
                    </div>
                </div>
                <div class="mls-w-100">
                    <div class="mls-field-wrapper">
                        <label for="mls-sell-linkedin">Linkedin</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="url" id="mls-sell-linkedin" class="mls-field" name="mls-sell-linkedin">
                    </div>
                </div>
                <div class="mls-w-100">
                    <div class="mls-field-wrapper">
                        <label for="mls-sell-website">Website link</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="url" id="mls-sell-website" class="mls-field" name="mls-sell-website">
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-100">
                    <button type="button" id="mls-additional-details-jobs">Detaljnije</button>
                </div>
            </div>

            <div class="mls-additional-details">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-number-people">Broj izvršioca</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <select name="mls-buy-number-people" class="mls-field mls-disable" id="mls-buy-number-people">
                                <option value="">- Izaberite -</option>
                                <option value="1">1</option>
                                <option value="od2do5">od 2 do 5</option>
                                <option value="od5do10">od 5 do 10</option>
                                <option value="preko10">preko 10</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-working-hours">Radno vreme</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <select name="mls-buy-working-hours" class="mls-field mls-disable" id="mls-buy-working-hours">
                                <option value="parSatiDnevno">Par sati dnevno</option>
                                <option value="parSatiNedeljno">Par sati nedeljno</option>
                                <option value="polaRadnogVremena">Pola radnog vremena</option>
                                <option value="punoRadnoVreme">Puno radno vreme</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-period-engagement">Period angažovanja</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <select name="mls-buy-period-engagement" class="mls-field mls-disable" id="mls-buy-period-engagement">
                                <option value="">- Izaberite -</option>
                                <option value="zaposlenjePrekoZadruge">Zaposlenje preko zadruge</option>
                                <option value="zaposlenjeZaStalno">Zaposlenje za stalno</option>
                                <option value="honorarniPosao">Honorarni posao</option>
                                <option value="kratkorocnoZaposlenje">Kratkorocno zaposlenje</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-qualification">Kvalifikacije</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <select name="mls-buy-qualification" class="mls-field mls-disable" id="mls-buy-qualification">
                                <option value="">- Izaberite -</option>
                                <option value="osnovnaSkola">Osnovna škola</option>
                                <option value="srednjaSkola">Srednja škola</option>
                                <option value="visaFakultet">Viša/Fakultet</option>
                                <option value="masterDoktor">Master/Doktor</option>
                                <option value="kurs">Kurs</option>
                                <option value="bezKvalifikacije">Bez kvalifikacije</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-experience">Iskustvo</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <select name="mls-buy-experience" class="mls-field mls-disable" id="mls-buy-experience">
                                <option value="">- Izaberite -</option>
                                <option value="bezIskustva">Bez iskustva</option>
                                <option value="1-3">1-3 godine</option>
                                <option value="2-5">2-5 godine</option>
                                <option value="5-10">5-10 godine</option>
                                <option value="preko10">Preko 10 godina</option>
                            </select>
                        </div>
                    </div>

                    <div class="mls-w-50">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-additional-buy-photos">DODATNE SLIKE</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="file" id="mls-sell-additional-buy-photos" class="mls-field" name="mls-sell-additional-buy-photos" accept=".jpg, .jpeg, .png" required>
                        </div>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-100">
                        <h4>Opis posla</h4>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-100">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-job-description">Unesite opis posla</label>
							<?php echo $_html->mls_html_tooltip( 'Opsirniji opis poslovanja, potrebnim kvalifikacijama, zaduzenjima, i svime ostalim' ); ?>
                            <textarea id="mls-buy-job-description" class="mls-field" name="mls-buy-job-description" rows="3" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-100">
                        <h4>Zahtevi radnog mesta</h4>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-100">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-practice">Znanje i veštine</label>
							<?php echo $_html->mls_html_tooltip( 'tekst o opisu zahteva radnog mesta' ); ?>
                            <textarea id="mls-buy-practice" class="mls-field" name="mls-buy-practice" rows="3" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-100">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-work-experience">Radno iskustvo</label>
							<?php echo $_html->mls_html_tooltip( 'kakvo radno iskustvo je potrebo za poziciju na poslu.' ); ?>
                            <textarea id="mls-buy-work-experience" class="mls-field" name="mls-buy-work-experience" rows="3" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-100">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-candidate-profile">Profil kandidata</label>
							<?php echo $_html->mls_html_tooltip( 'licne osobine koje kandidat treba da poseduje.' ); ?>
                            <textarea id="mls-buy-candidate-profile" class="mls-field" name="mls-buy-candidate-profile" rows="3" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-100">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-offer">Nudimo</label>
							<?php echo $_html->mls_html_tooltip( 'Šta nudi poslodavac kao uslove rada.' ); ?>
                            <textarea id="mls-buy-offer" class="mls-field" name="mls-buy-offer" rows="3" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-100">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-notice">Napomena</label>
							<?php echo $_html->mls_html_tooltip( 'nesto sto napominje poslodavac' ); ?>
                            <textarea id="mls-buy-notice" class="mls-field" name="mls-buy-notice" rows="3" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-100">
                        <div class="mls-field-wrapper mls-align-right">
                            <input type="checkbox" id="mls-sell-choose-position-display" class="" name="mls-sell-choose-position-display">
                            <label for="mls-sell-choose-position-display">Prikazuj oglas u listi "Vidi sve oglase ovog oglašivača"</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-100">
                    <button type="button" id="mls-back-to-first-load-jobs">Prethodna</button>
                    <button type="button" id="mls-next-to-third-load-jobs">Dalje ( Izbor tipa oglasa )</button>
                </div>
            </div>

        </div> <!-- End Form - Second page -->

        <!-- Ads - Third page -->
        <div id="mls-third-load-jobs">
            <h2>Izaberite tip oglasa</h2>
            <div class="mls-w-100">
                <button type="button" id="mls-back-to-second-load-jobs">Prethodna</button>
                <input type="submit" name="mls-form-submit-jobs" value="Objavi oglas">
            </div>
        </div><!-- End Ads - Third page -->
    </form>
</div>
