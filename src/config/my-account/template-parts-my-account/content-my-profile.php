<?php
/**
 * Template for Declaration page on My account
 */
include MLAB_STUDIO_DIR . 'src/config/Mls_Config.php';
$mls_config = new Mls_Config();

if ( ! empty( $mls_config->mls_get_meta( 'mls_person' ) ) ) { ?>
    <div class="mls-wrapper">
        <p class="mls-data-declaration-text">Tip Korisnika:
            <span><?php echo ! empty( $mls_config->mls_get_meta( 'mls_person' ) ) ? $mls_config->mls_get_meta( 'mls_person' ) : '<a href="/moj-nalog/deklaracija">Unesite Tip korisnika</a>' ?></span>
            <small><a href="/moj-nalog/deklaracija">Promeni</a></small></p>
        <p class="mls-data-declaration-text">Ime:
            <span><?php echo ! empty( $mls_config->mls_get_meta( 'mls_firstname' ) ) ? $mls_config->mls_get_meta( 'mls_firstname' ) : '<a href="/moj-nalog/deklaracija">Unesite Ime</a>' ?></span>
            <small><a href="/moj-nalog/deklaracija">Promeni</a></small></p>
        <p class="mls-data-declaration-text">Prezime:
            <span><?php echo ! empty( $mls_config->mls_get_meta( 'mls_lastname' ) ) ? $mls_config->mls_get_meta( 'mls_lastname' ) : '<a href="/moj-nalog/deklaracija">Unesite Prezime</a>' ?></span>
            <small><a href="/moj-nalog/deklaracija">Promeni</a></small></p>
        <p class="mls-data-declaration-text">Adresa:
            <span><?php echo ! empty( $mls_config->mls_get_meta( 'mls_address' ) ) ? $mls_config->mls_get_meta( 'mls_address' ) : '<a href="/moj-nalog/deklaracija">Unesite Adresu</a>' ?></span>
            <small><a href="/moj-nalog/deklaracija">Promeni</a></small></p>
        <p class="mls-data-declaration-text">Mesto:
            <span><?php echo ! empty( $mls_config->mls_get_meta( 'mls_city' ) ) ? $mls_config->mls_get_meta( 'mls_city' ) : '<a href="/moj-nalog/deklaracija">Unesite Mesto</a>' ?></span>
            <small><a href="/moj-nalog/deklaracija">Promeni</a></small></p>
        <p class="mls-data-declaration-text">JMBG:
            <span><?php echo ! empty( $mls_config->mls_get_meta( 'mls_personalid' ) ) ? $mls_config->mls_get_meta( 'mls_personalid' ) : '<a href="/moj-nalog/deklaracija">Unesite JMBG</a>' ?></span>
            <small><a href="/moj-nalog/deklaracija">Promeni</a></small></p>
    </div>
	<?php
}

if ( ! empty( $mls_config->mls_get_meta( 'mls_company_person' ) ) ) { ?>
    <div class="mls-wrapper">
        <p class="mls-data-declaration-text">Tip Korisnika:
            <span><?php echo ! empty( $mls_config->mls_get_meta( 'mls_company_person' ) ) ? $mls_config->mls_get_meta( 'mls_company_person' ) : '<a href="/moj-nalog/deklaracija">Unesite Tip korisnika</a>' ?></span>
            <small><a href="/moj-nalog/deklaracija">Promeni</a></small></p>
        <p class="mls-data-declaration-text">Naziv Firme:
            <span><?php echo ! empty( $mls_config->mls_get_meta( 'mls_company_companyname' ) ) ? $mls_config->mls_get_meta( 'mls_company_companyname' ) : '<a href="/moj-nalog/deklaracija">Unesite Ime Kompanije</a>' ?></span>
            <small><a href="/moj-nalog/deklaracija">Promeni</a></small></p>
        <p class="mls-data-declaration-text">Adresa:
            <span><?php echo ! empty( $mls_config->mls_get_meta( 'mls_company_address' ) ) ? $mls_config->mls_get_meta( 'mls_company_address' ) : '<a href="/moj-nalog/deklaracija">Unesite Adresu Kompanije</a>' ?></span>
            <small><a href="/moj-nalog/deklaracija">Promeni</a></small></p>
        <p class="mls-data-declaration-text">Mesto:
            <span><?php echo ! empty( $mls_config->mls_get_meta( 'mls_company_place' ) ) ? $mls_config->mls_get_meta( 'mls_company_place' ) : '<a href="/moj-nalog/deklaracija">Unesite Mesto Kompanije</a>' ?></span>
            <small><a href="/moj-nalog/deklaracija">Promeni</a></small></p>
        <p class="mls-data-declaration-text">PIB:
            <span><?php echo ! empty( $mls_config->mls_get_meta( 'mls_company_pib' ) ) ? $mls_config->mls_get_meta( 'mls_company_pib' ) : '<a href="/moj-nalog/deklaracija">Unesite PIB</a>' ?></span>
            <small><a href="/moj-nalog/deklaracija">Promeni</a></small></p>
        <p class="mls-data-declaration-text">Matični Broj:
            <span><?php echo ! empty( $mls_config->mls_get_meta( 'mls_company_uniqnumber' ) ) ? $mls_config->mls_get_meta( 'mls_company_uniqnumber' ) : '<a href="/moj-nalog/deklaracija">Unesite Matični Broj</a>' ?></span>
            <small><a href="/moj-nalog/deklaracija">Promeni</a></small></p>
    </div>
<?php }


