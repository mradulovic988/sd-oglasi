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
						echo '<a id="mls-buy-category-terms" class="' . $category_tax_term->term_id . '" disabled>' . $category_tax_term->name . '</a><span>(' . $category_tax_term->count . ')</span><br>';
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
                <div class="mls-w-30">
                    <div class="mls-field-wrapper">
                        <label for="mls-buy-profile-img">Postavite fotografiju</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="file" id="mls-buy-profile-img" class="mls-field" name="mls-buy-profile-img" accept=".jpg, .jpeg, .png" required>
                    </div>
                </div>
                <div class="mls-w-70">
                    <h4>Poslodavac</h4>
                    <div class="mls-field-wrapper">
                        <label for="mls-buy-title">Naziv oglasa *</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <input type="text" id="mls-buy-title" class="mls-field" name="mls-buy-title" required>
                    </div>

                    <div class="mls-field-wrapper">
                        <input type="checkbox" id="mls-buy-cv" name="mls-buy-cv">
                        <label for="mls-buy-cv">Koristi CV</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    </div>

                    <div class="mls-field-wrapper">
                        <input type="checkbox" id="mls-buy-acc-info-remember" name="mls-buy-acc-info-remember">
                        <label for="mls-buy-acc-info-remember">Koristi informacije sa mog naloga</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                    </div>

                    <div class="mls-row-form mls-mt-20">
                        <div class="mls-field-wrapper mls-mr-10">
                            <label for="mls-buy-name">Ime</label>
                            <input type="text" id="mls-buy-name" class="mls-field" name="mls-buy-name">
                        </div>
                        <div class="mls-field-wrapper mls-mr-10">
                            <label for="mls-buy-last-name">Prezime</label>
                            <input type="text" id="mls-buy-last-name" class="mls-field" name="mls-buy-last-name">
                        </div>
                        <div class="mls-field-wrapper mls-mr-10">
                            <label for="mls-buy-phone">Telefon</label>
                            <input type="text" id="mls-buy-phone" class="mls-field" name="mls-buy-phone">
                        </div>
                        <div class="mls-field-wrapper mls-mr-10">
                            <label for="mls-buy-additional-phone">Dodatni telefon</label>
                            <input type="text" id="mls-buy-additional-phone" class="mls-field" name="mls-buy-additional-phone">
                        </div>
                        <div class="mls-field-wrapper mls-mr-10">
                            <label for="mls-buy-email">E-mail</label>
                            <input type="email" id="mls-buy-email" class="mls-field" name="mls-buy-email">
                        </div>
                    </div>

                    <div class="mls-row-form mls-mt-20">
                        <div class="mls-field-wrapper mls-mr-10">
                            <label for="mls-buy-instagram">Instagram</label>
                            <input type="url" id="mls-buy-instagram" class="mls-field" name="mls-buy-instagram">
                        </div>
                        <div class="mls-field-wrapper mls-mr-10">
                            <label for="mls-buy-facebook">Facebook</label>
                            <input type="url" id="mls-buy-facebook" class="mls-field" name="mls-buy-facebook">
                        </div>
                        <div class="mls-field-wrapper mls-mr-10">
                            <label for="mls-buy-linkedin">Linkedin</label>
                            <input type="url" id="mls-buy-linkedin" class="mls-field" name="mls-buy-linkedin">
                        </div>
                        <div class="mls-field-wrapper mls-mr-10">
                            <label for="mls-buy-website">Privatni veb portal/blog</label>
                            <input type="url" id="mls-buy-website" class="mls-field" name="mls-buy-website">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-50">
                    <div class="mls-field-wrapper">
                        <label for="mls-buy-city">Grad *</label>
						<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                        <select name="mls-buy-city" class="mls-field mls-disable" id="mls-buy-city" required>
							<?php
							foreach ( $_config->mls_cities as $mls_city ) {
								echo '<option value="' . $mls_city . '">' . $mls_city . '</option>';
							}
							?>
                        </select>

                    </div>
                </div>
            </div>

            <div class="mls-w-50">
                <h4>Vozačka dozvola</h4>
                <div class="mls-row-form">
                    <div class="mls-field-wrapper mls-mr-20">
                        <input type="checkbox" id="mls-buy-driving-licence-a" name="mls-buy-driving-licence-a">
                        <label for="mls-buy-driving-licence-a">A</label>
                    </div>

                    <div class="mls-field-wrapper mls-mr-20">
                        <input type="checkbox" id="mls-buy-driving-licence-b" name="mls-buy-driving-licence-b">
                        <label for="mls-buy-driving-licence-b">B</label>
                    </div>

                    <div class="mls-field-wrapper mls-mr-20">
                        <input type="checkbox" id="mls-buy-driving-licence-c" name="mls-buy-driving-licence-c">
                        <label for="mls-buy-driving-licence-c">C</label>
                    </div>

                    <div class="mls-field-wrapper mls-mr-20">
                        <input type="checkbox" id="mls-buy-driving-licence-d" name="mls-buy-driving-licence-d">
                        <label for="mls-buy-driving-licence-d">D</label>
                    </div>

                    <div class="mls-field-wrapper">
                        <input type="checkbox" id="mls-buy-driving-licence-e" name="mls-buy-driving-licence-e">
                        <label for="mls-buy-driving-licence-e">E</label>
                    </div>
                </div>
            </div>
            <div class="mls-row-form">
                <div class="mls-w-50">
                    <div class="mls-field-wrapper">
                        <h4>Obrazovanje</h4>
                    </div>
                </div>
            </div>
            <div class="mls-row-form">
                <div class="mls-w-25">
                    <div class="mls-field-wrapper mls-mr-10">
                        <button type="button" id="mls-buy-school" class="mls-btn-orange">+ DODAJTE SREDNJU ŠKOLU</button>
                    </div>
                </div>
                <div class="mls-w-25">
                    <div class="mls-field-wrapper mls-mr-10">
                        <button type="button" id="mls-buy-high-school" class="mls-btn-orange">+ DODAJTE VISOKU ILI SREDNJU ŠKOLU</button>
                    </div>
                </div>
                <div class="mls-w-25">
                    <div class="mls-field-wrapper mls-mr-10">
                        <button type="button" id="mls-buy-college" class="mls-btn-orange">+ DODAJTE FAKULTET</button>
                    </div>
                </div>
                <div class="mls-w-25">
                    <div class="mls-field-wrapper">
                        <button type="button" id="mls-buy-after-college" class="mls-btn-orange">+ DODAJTE POSTDIPLOMSKE STUDIJE</button>
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-50">
                    <div class="mls-field-wrapper">
                        <input type="checkbox" id="mls-buy-only-lower-school" name="mls-buy-only-lower-school">
                        <label for="mls-buy-only-lower-school">Imam samo osnovnu školu</label>
                    </div>
                </div>
            </div>

            <div class="mls-buy-education-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-education-level">Stepen obrazovanja</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <select name="mls-buy-education-level" class="mls-field" id="mls-buy-education-level" required>
                                <option value="">Izaberite</option>
                                <option value="OsnovnaSkola">Osnovna škola</option>
                                <option value="SrednjaSkola">Srednja škola</option>
                                <option value="VisaSkolaVisoka">Viša škola ili Bachelor / Visoka škola</option>
                                <option value="FakultetMaster">Fakultet / Master</option>
                                <option value="Magistratura">Magistratura</option>
                                <option value="PhdDoktorat">Phd ili Doktorat</option>
                            </select>
                        </div>
                    </div>

                    <div class="mls-w-50">
                        <div class="mls-field-wrapper">
                            <br>
                            <input type="text" id="mls-buy-school-name" class="mls-field" name="mls-buy-school-name" placeholder="Naziv obrazovne ustanove">
                        </div>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-education-area">Oblast obrazovanja</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <select name="mls-buy-education-area" class="mls-field" id="mls-buy-education-area" required>
                                <option value="">Izaberite</option>
                                <option value="Arheologija">Arheologija</option>
                                <option value="ArhitekturaUrbanizam">Arhitektura/Urbanizam</option>
                                <option value="BiologijaEkologija">Biologija/Ekologija</option>
                                <option value="DefektologijaSocijalni">Defektologija/socijalni rad</option>
                                <option value="DramskeMuzicka">Dramske umetnosti/Muzička umetnost</option>
                                <option value="EkonomijaMenadzent">Ekonomija/menadžent</option>
                                <option value="Elektrotehnika">Elektrotehnika</option>
                                <option value="Farmacija">Farmacija</option>
                                <option value="FilologijaKnjizevnost">Filologija/književnost</option>
                                <option value="Filozofija">Filozofija</option>
                                <option value="FizickaKultura">Fizička kultura</option>
                                <option value="Geografija">Geografija</option>
                                <option value="GradjevinaGeodezija">Građevina/Geodezija</option>
                                <option value="Hemija">Hemija</option>
                                <option value="HotelijerstvoRestoraterstvo">Hotelijerstvo/restoraterstvo</option>
                                <option value="InformacioneTehnologije">Informatika/Informacione tehnologije</option>
                                <option value="IstorijaEtnologija">Istorija/etnologija</option>
                                <option value="LikovnaPrimenjenaUmetnost">Likovne umetnosti/Primenjene umetnosti</option>
                                <option value="Masinstvo">Mašinstvo</option>
                                <option value="Matematika">Matematika</option>
                                <option value="MedicinaStomatologija">Medicina/Stomatologija</option>
                                <option value="NovinarstvoKomunikacije">Novinarstvo/Komunikacije</option>
                                <option value="ObrazovanjePedagogija">Obrazovanje/Pedagogija</option>
                                <option value="Ostalo">Ostalo</option>
                                <option value="PolitickeNauke">Političke nauke</option>
                                <option value="PoljoprivredaSumarstvo">Poljoprivreda/Šumarstvo</option>
                                <option value="Pravo">Pravo</option>
                                <option value="Psihologija">Psihologija</option>
                                <option value="RudarstvoGeologija">Rudarstvo/geologija</option>
                                <option value="SaobracajLogistika">Saobraćaj/Logistika</option>
                                <option value="Sociologija">Sociologija</option>
                                <option value="TehnologijaMetalurgija">Tehnologija/metalurgija</option>
                                <option value="Turizam">Turizam</option>
                                <option value="Veterina">Veterina</option>
                                <option value="VojskaPolicijaKriminalistika">Vojska/Policija/Kriminalistika</option>
                            </select>
                        </div>
                    </div>

                    <div class="mls-w-50">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-year-graduated">Smer</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="text" id="mls-buy-year-graduated" class="mls-field" name="mls-buy-year-graduated">
                        </div>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-education-year">Oblast obrazovanja</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <select name="mls-buy-education-year" class="mls-field" id="mls-buy-education-year" required>
                                <option value="">Izaberite</option>
                                <option value="JosUvekStudiram">Još uvek studiram</option>
								<?php
								$current_year = (int) date( 'Y' );
								$oldest_year  = 1970;
								for ( $i = $current_year; $i >= $oldest_year; $i -- ) {
									echo '<option value="' . $i . '">' . $i . '</option>';
								}
								?>
                                <option value="Pre1970">Pre 1970</option>
                            </select>
                        </div>
                    </div>

                    <div class="mls-w-50">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-diploma-name">Stečeno zvanje</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="text" id="mls-buy-diploma-name" class="mls-field" name="mls-buy-diploma-name">
                        </div>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-100">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-additional-information">Dodatne informacije</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <textarea name="mls-buy-additional-information" id="mls-buy-additional-information" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-50">
                    <div class="mls-field-wrapper">
                        <h4>Znanje stranih jezika</h4>
                    </div>
                </div>
            </div>

            <div class="mls-buy-foreign-lang-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-50">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-foreign-lang">Strani jezik koji poznajete</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="text" id="mls-buy-foreign-lang" class="mls-field" name="mls-buy-foreign-lang">
                        </div>
                    </div>

                    <div class="mls-w-50">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-lang-level">Nivo Znanja</label>
							<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <select name="mls-buy-lang-level" class="mls-field" id="mls-buy-lang-level" required>
                                <option value="">Izaberite</option>
                                <option value="Osnovni">Osnovni</option>
                                <option value="Srednji">Srednji</option>
                                <option value="Napredni">Napredni</option>
                                <option value="Maternji">Maternji</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mls-row-form">
                    <div class="mls-w-100">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-foreign-lang-additional">Ako ste pohađali, naziv kursa koji ste završili, diplomu koji imate, itd.</label>
				            <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="text" id="mls-buy-foreign-lang-additional" class="mls-field" name="mls-buy-foreign-lang-additional">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-50">
                    <div class="mls-field-wrapper">
                        <h4>Kursevi i obuke</h4>
                    </div>
                </div>
            </div>

            <div class="mls-buy-finished-courses-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-100">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-finished-courses">Završen specijalistički kurs ili obuka</label>
					        <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="text" id="mls-buy-finished-courses" class="mls-field" name="mls-buy-finished-courses" placeholder="Upišite naziv specijalističkog kursa ili obuke koje ste završili">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-50">
                    <div class="mls-field-wrapper">
                        <h4>Veštine</h4>
                    </div>
                </div>
            </div>

            <div class="mls-buy-skills-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-100">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-skills">Veštine koje posedujete</label>
					        <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <input type="text" id="mls-buy-skills" class="mls-field" name="mls-buy-skills" placeholder="Npr. pregovaranje, vođenje timova...">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mls-row-form">
                <div class="mls-w-50">
                    <div class="mls-field-wrapper">
                        <h4>Dodatni opis</h4>
                    </div>
                </div>
            </div>

            <div class="mls-buy-skills-wrapper">
                <div class="mls-row-form">
                    <div class="mls-w-100">
                        <div class="mls-field-wrapper">
                            <label for="mls-buy-additional-description">Dodatni opis</label>
					        <?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                            <textarea name="mls-buy-additional-description" id="mls-buy-additional-description" rows="5"></textarea>
                        </div>
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
