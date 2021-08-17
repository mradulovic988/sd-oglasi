<?php
/**
 * Template for Declaration page on My account
 */
include MLAB_STUDIO_DIR . 'src/config/Mls_Config.php';
include MLAB_STUDIO_DIR . 'src/config/html-templates/Mls_Html.php';
$mls_config = new Mls_Config();
$_html      = new Mls_Html();

?>
<h2>Deklaracija</h2>
<input type="radio" name="choose-person" value="Fizičko lice" onclick="openTabDeclaration(event, 'mls-declaration-person')" class="mls-choose-tab" id="mls-default-open">
<label class="mls-radio-row-choose" for="mls-default-open"><?php _e( 'Fizičko lice', 'mls' ) ?></label>
<input type="radio" name="choose-person" value="Pravno lice" onclick="openTabDeclaration(event, 'mls-declaration-company')" class="mls-choose-tab" id="mls-nondefault">
<label class="mls-radio-row-choose" for="mls-nondefault"><?php _e( 'Pravno lice', 'mls' ) ?></label>

<!-- Person declaration -->
<div id="mls-declaration-person" class="mls-tabcontent">
    <div class="mls-declaration-person-left">
        <form method="post" class="mls-declaration-person-form" enctype="multipart/form-data">
            <div class="mls-declaration-person-form-row">
                <label for="mls-declaration-person-firstname"><?php _e( 'Ime', 'mls' ) ?>
                    <span class="mls-declaration-required-sign">*</span></label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-declaration-person-firstname" name="mls-declaration-person-firstname" class="mls-declaration-person-text-field mls-declaration-person-field-row" value="<?php echo ! empty( $mls_config->mls_get_meta( 'mls_firstname' ) ) ? $mls_config->mls_get_meta( 'mls_firstname' ) : '' ?>" required>
            </div>
            <div class="mls-declaration-person-form-row">
                <label for="mls-declaration-lastname"><?php _e( 'Prezime', 'mls' ) ?>
                    <span class="mls-declaration-required-sign">*</span></label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-declaration-person-lastname" name="mls-declaration-person-lastname" class="mls-declaration-person-text-field mls-declaration-person-field-row" value="<?php echo ! empty( $mls_config->mls_get_meta( 'mls_lastname' ) ) ? $mls_config->mls_get_meta( 'mls_lastname' ) : '' ?>" required>
            </div>
            <div class="mls-declaration-person-form-row">
                <label for="mls-declaration-person-address"><?php _e( 'Adresa', 'mls' ) ?>
                    <span class="mls-declaration-required-sign">*</span></label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-declaration-person-address" name="mls-declaration-person-address" class="mls-declaration-person-text-field mls-declaration-person-field-row" value="<?php echo ! empty( $mls_config->mls_get_meta( 'mls_address' ) ) ? $mls_config->mls_get_meta( 'mls_address' ) : '' ?>" required>
            </div>
            <div class="mls-declaration-person-form-row">
                <label for="mls-declaration-person-city"><?php _e( 'Mesto', 'mls' ) ?>
                    <span class="mls-declaration-required-sign">*</span></label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-declaration-person-city" name="mls-declaration-person-city" class="mls-declaration-person-text-field mls-declaration-person-field-row" value="<?php echo ! empty( $mls_config->mls_get_meta( 'mls_city' ) ) ? $mls_config->mls_get_meta( 'mls_city' ) : '' ?>" required>
            </div>
            <div class="mls-declaration-person-form-row">
                <label for="mls-declaration-person-personalid"><?php _e( 'JMBG', 'mls' ) ?>
                    <span class="mls-declaration-required-sign">*</span></label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-declaration-person-personalid" name="mls-declaration-person-personalid" class="mls-declaration-person-text-field mls-declaration-person-field-row" pattern="^[0-9]*$" value="<?php echo ! empty( $mls_config->mls_get_meta( 'mls_personalid' ) ) ? $mls_config->mls_get_meta( 'mls_personalid' ) : '' ?>" minlength="13" maxlength="13" required>
            </div>
            <div class="mls-declaration-person-form-row">
                <input type="checkbox" id="mls-declaration-person-tos" name="mls-declaration-person-tos" class="mls-declaration-person-text-field mls-declaration-person-field-row" required>
                <label for="mls-declaration-person-tos"><?php _e( 'Prihvatam uslove korišćenja', 'mls' ) ?></label>
            </div>
            <div class="mls-declaration-person-form-row">
                <input type="checkbox" id="mls-declaration-person-guarantee" name="mls-declaration-person-guarantee" class="mls-declaration-person-text-field mls-declaration-person-field-row" required>
                <label for="mls-declaration-person-guarantee"><b><span id="mls-guarantee-who-name"></span>
                        <span id="mls-guarantee-who-lastname"></span> <?php _e( 'garantuje da su uneti podaci tačni', 'mls' ) ?>
                    </b></label>
            </div>
            <hr class="mls-hr-full">
            <div class="mls-declaration-person-form-row">
                <input type="file" id="mls-declaration-personuploadfile" name="mls-declaration-personuploadfile" class="mls-declaration-person-text-field mls-declaration-person-field-row" required>
            </div>
			<?php
			$current_user = wp_get_current_user();
			?>
            <input type="email" name="mls-declaration-person-email" value="<?php echo $current_user->user_email ?>" hidden>
            <input type="text" name="mls-declaration-person-id" value="<?php echo $current_user->ID ?>" hidden>
            <div class="mls-declaration-person-form-row">
                <input type="submit" name="mls-declaration-person-submit-person" value="Sačuvaj" class="mls-declaration-person-text-field mls-declaration-person-field-row">
            </div>
        </form>
    </div>

    <div class="mls-declaration-person-right">
        <div class="mls-declaration-person-small-row">
            <p class="mls-declaration-person-low">
                <span><i class="fas fa-info-circle"></i></span><?php _e( 'Podaci koje unosite činiće Deklaraciju, koja je po Zakonu o oglašavanju (član 19.), obavezna za oglašavanje u ovoj kategoriji. Oglašivač je dužan da prilikom postavljanja oglasa tačno popuni sve obavezne podatke. Ovi podaci neće biti javno dostupni i tretiramo ih kao poverljive u skladu sa Zakonom o zaštiti podataka o ličnosti. Deklaracija važi sve do promene podataka o oglašivaču. U slučaju promene podataka, oglašivač je dužan da tu promenu unese u Moj Halo profil/Izmenite deklaraciju.', 'mls' ) ?>
            </p>
        </div>
        <div class="mls-declaration-person-small-row">
            <p class="mls-declaration-person-low">
                <span><i class="fas fa-exclamation-circle"></i></span><b><?php _e( 'Krivični zakon Republike Srbije - računarska prevara (čl. 301)', 'mls' ) ?></b>
            </p>
            <p class="mls-declaration-person-low"><?php _e( 'Ko unese netačan podatak, propusti unošenje tačnog podatka ili na drugi način prikrije ili lažno prikaže podatak i time utiče na rezultat elektronske obrade i prenosa podataka u nameri da sebi ili drugom pribavi protivpravnu imovinsku korist i tome drugom prouzrokuje imovinsku štetu, kazniće se novčanom kaznom ili zatvorom do 3 godine.', 'mls' ) ?></p>
        </div>
    </div>
</div>

<!-- Company declaration -->
<div id="mls-declaration-company" class="mls-tabcontent">
    <div class="mls-declaration-person-left">
        <form method="post" class="mls-declaration-person-form" enctype="multipart/form-data">
            <div class="mls-declaration-person-form-row">
                <label for="mls-declaration-company-companyname"><?php _e( 'Naziv Firme', 'mls' ) ?>
                    <span class="mls-declaration-required-sign">*</span></label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-declaration-company-companyname" name="mls-declaration-company-companyname" class="mls-declaration-person-text-field mls-declaration-person-field-row" value="<?php echo ! empty( $mls_config->mls_get_meta( 'mls_company_companyname' ) ) ? $mls_config->mls_get_meta( 'mls_company_companyname' ) : '' ?>" required>
            </div>
            <div class="mls-declaration-person-form-row">
                <label for="mls-declaration-company-address"><?php _e( 'Adresa', 'mls' ) ?>
                    <span class="mls-declaration-required-sign">*</span></label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-declaration-company-address" name="mls-declaration-company-address" class="mls-declaration-person-text-field mls-declaration-person-field-row" value="<?php echo ! empty( $mls_config->mls_get_meta( 'mls_company_address' ) ) ? $mls_config->mls_get_meta( 'mls_company_address' ) : '' ?>" required>
            </div>
            <div class="mls-declaration-person-form-row">
                <label for="mls-declaration-company-place"><?php _e( 'Mesto', 'mls' ) ?>
                    <span class="mls-declaration-required-sign">*</span></label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-declaration-company-place" name="mls-declaration-company-place" class="mls-declaration-person-text-field mls-declaration-person-field-row" value="<?php echo ! empty( $mls_config->mls_get_meta( 'mls_company_place' ) ) ? $mls_config->mls_get_meta( 'mls_company_place' ) : '' ?>" required>
            </div>
            <div class="mls-declaration-person-form-row">
                <label for="mls-declaration-company-pib"><?php _e( 'PIB', 'mls' ) ?>
                    <span class="mls-declaration-required-sign">*</span></label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-declaration-company-pib" name="mls-declaration-company-pib" class="mls-declaration-person-text-field mls-declaration-person-field-row" value="<?php echo ! empty( $mls_config->mls_get_meta( 'mls_company_pib' ) ) ? $mls_config->mls_get_meta( 'mls_company_pib' ) : '' ?>" minlength="9" maxlength="9" pattern="^[0-9]*$" required>
            </div>
            <div class="mls-declaration-person-form-row">
                <label for="mls-declaration-company-uniqnumber"><?php _e( 'Matični broj', 'mls' ) ?>
                    <span class="mls-declaration-required-sign">*</span></label>
				<?php echo $_html->mls_html_tooltip( 'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.' ); ?>
                <input type="text" id="mls-declaration-company-uniqnumber" name="mls-declaration-company-uniqnumber" class="mls-declaration-person-text-field mls-declaration-person-field-row" value="<?php echo ! empty( $mls_config->mls_get_meta( 'mls_company_uniqnumber' ) ) ? $mls_config->mls_get_meta( 'mls_company_uniqnumber' ) : '' ?>" minlength="8" maxlength="8" pattern="^[0-9]*$" required>
            </div>
            <div class="mls-declaration-person-form-row">
                <input type="checkbox" id="mls-declaration-company-guarantee" name="mls-declaration-company-guarantee" class="mls-declaration-person-text-field mls-declaration-person-field-row" required>
                <label for="mls-declaration-company-guarantee"><b><span id="mls-guarantee-who-name"></span>
                        <span id="mls-guarantee-who-lastname"></span> <?php _e( 'Garantujemo da su uneti podaci tačni', 'mls' ) ?>
                    </b></label>
            </div>
            <hr class="mls-hr-full">
			<?php
			$current_user = wp_get_current_user();
			?>
            <input type="email" name="mls-declaration-company-email" value="<?php echo $current_user->user_email ?>" hidden>
            <input type="text" name="mls-declaration-company-personalid" value="<?php echo $current_user->ID ?>" hidden>
            <div class="mls-declaration-company-form-row">
                <input type="submit" name="mls-declaration-company-submit-person" value="Sačuvaj" class="mls-declaration-person-text-field mls-declaration-person-field-row">
            </div>
        </form>
    </div>
    <div class="mls-declaration-person-right">
        <div class="mls-declaration-person-small-row">
            <p class="mls-declaration-person-low">
                <span><i class="fas fa-info-circle"></i></span><?php _e( 'Podaci koje unosite činiće Deklaraciju, koja je po Zakonu o oglašavanju (član 19.), obavezna za oglašavanje u ovoj kategoriji. Oglašivač je dužan da prilikom postavljanja oglasa tačno popuni sve obavezne podatke. Ovi podaci neće biti javno dostupni i tretiramo ih kao poverljive u skladu sa Zakonom o zaštiti podataka o ličnosti. Deklaracija važi sve do promene podataka o oglašivaču. U slučaju promene podataka, oglašivač je dužan da tu promenu unese u Moj Halo profil/Izmenite deklaraciju.', 'mls' ) ?>
            </p>
        </div>
        <div class="mls-declaration-person-small-row">
            <p class="mls-declaration-person-low">
                <span><i class="fas fa-exclamation-circle"></i></span><b><?php _e( 'Krivični zakon Republike Srbije - računarska prevara (čl. 301)', 'mls' ) ?></b>
            </p>
            <p class="mls-declaration-person-low"><?php _e( 'Ko unese netačan podatak, propusti unošenje tačnog podatka ili na drugi način prikrije ili lažno prikaže podatak i time utiče na rezultat elektronske obrade i prenosa podataka u nameri da sebi ili drugom pribavi protivpravnu imovinsku korist i tome drugom prouzrokuje imovinsku štetu, kazniće se novčanom kaznom ili zatvorom do 3 godine.', 'mls' ) ?></p>
        </div>
    </div>
</div>


<script>
    const openTabDeclaration = (e, t) => {
        let a, l, s;
        l = document.getElementsByClassName("mls-tabcontent");
        for (let e = 0; e < l.length; e++) l[e].style.display = "none";
        for (s = document.getElementsByClassName("mls-choose-tab"), a = 0; a < s.length; a++) s[a].className = s[a].className.replace(" mls-active", "");
        document.getElementById(t).style.display = "inline-flex", e.currentTarget.className += " mls-active";
    };
    document.getElementById("mls-default-open").click();
</script>