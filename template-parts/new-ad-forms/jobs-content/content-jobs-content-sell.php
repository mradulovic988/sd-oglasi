<div class="mls-home-form-wrapper">
    <small>Polja označena <span style="color: red">*</span> su obavezna za unos</small>
    <form class="mls-jobs" method="post" enctype="multipart/form-data">
        <input type="hidden" name="ispost_jobs" value="1"/>
        <input type="hidden" name="userid_jobs" value=""/>

        <!-- Categories - First page -->
        <div id="mls-first-load-jobs">
            <div class="mls-row-70">
                <h4 class="mls-pt-20 mls-pb-20 mls-pl-5">Odaberi Kategoriju</h4>
                <div class="mls-field-wrapper">
                    <!--                <label for="mls-category">Odaberi Kategoriju *</label>-->
					<?php
					$args               = array(
						'parent'       => 655,
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
                <button type="button" id="mls-next-to-second-load-jobs" class="mls-mt-20">Dalje</button>
            </div>
        </div> <!-- End Categories - First page -->

        <!-- Form - Second page -->
        <div id="mls-second-load-jobs">
            <div class="mls-row-form">
                <div class="mls-w-70">
                </div>
            </div>
            <!-- Content below -->

            <div class="mls-row-form">
                <div class="mls-w-100">
                    <button type="button" id="mls-back-to-first-load-jobs">Prethodna</button>
                    <button type="button" id="mls-next-to-third-load-jobs">Dalje ( Izbor tipa oglasa )</button>
                </div>
            </div>
        </div><!-- End Form - Second page -->

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