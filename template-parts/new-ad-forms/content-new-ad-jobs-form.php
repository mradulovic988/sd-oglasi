<div class="mls-full-width mls-choose-form-wrapper-jobs">
    <div class="mls-container mls-mt-20">
        <button class="mls-choose-form-jobs active" data-idjobs="mls-sell">Nudim Posao</button>
        <button class="mls-choose-form-jobs" data-idjobs="mls-buy">Tražim Posao</button>
    </div>

    <div class="mls-content-form-jobs active" id="mls-sell">
	    <?php get_template_part( 'template-parts/new-ad-forms/jobs-content/content', 'jobs-content-sell' ); ?>
    </div>
    <div class="mls-content-form-jobs" id="mls-buy">
	    <?php get_template_part( 'template-parts/new-ad-forms/jobs-content/content', 'jobs-content-buy' ); ?>
    </div>
</div>