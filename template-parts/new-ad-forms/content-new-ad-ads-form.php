<?php
include MLAB_STUDIO_DIR . 'src/config/Mls_Config.php';
include MLAB_STUDIO_DIR . 'src/admin/settings-api/Mls_Settings_Api_Dashboard.php';
include MLAB_STUDIO_DIR . 'src/config/html-templates/Mls_Html.php';

$_config = new Mls_Config();
$_api    = new Mls_Settings_Api_Dashboard();
$_html   = new Mls_Html();
?>

<h2>Oglasi</h2>
<div class="mls-home-form-wrapper">
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

            <div class="mls-row-24">
                <button type="button" id="mls-next-to-second-load-ads" class="mls-mt-20">Dalje</button>
            </div>
        </div> <!-- End Categories - First page -->

        <!-- Form - Second page -->
        <div id="mls-second-load-ads">

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
</div>
