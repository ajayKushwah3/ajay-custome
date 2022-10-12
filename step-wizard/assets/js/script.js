jQuery(document).on('click', '.prev_action', function() {
    var nextstap = jQuery(this).attr('data-step');
    var currentstep = nextstap - 1;
    jQuery('.wizard-stape-cart').hide();
    jQuery('#wizard_stape_' + currentstep).show();
    jQuery('.pSteps[ data-tab-id="' + currentstep + '"]').removeClass("completeStep");
    jQuery('.pSteps[ data-tab-id="' + currentstep + '"]').addClass("activeStep");
    jQuery('.pSteps[ data-tab-id="' + nextstap + '"]').removeClass("activeStep");
    jQuery('html, body').animate({
        scrollTop: jQuery("body").offset().top
    }, 1200);
});

jQuery(document).on('click', '.back-step', function() {
    var backstap = parseInt(jQuery(this).attr('data-tab-id'));
    var currentstep = jQuery('.progressBar ul li').length + 1;
    jQuery('.wizard-stape-cart').hide();
    jQuery('#wizard_stape_' + backstap).show();
    jQuery('.pSteps[ data-tab-id="' + backstap + '"]').addClass("activeStep");
    jQuery('.pSteps[ data-tab-id="' + backstap + '"]').removeClass("completeStep");
    jQuery('html, body').animate({
        scrollTop: jQuery("body").offset().top
    }, 1200);
    for (i = 1; i < currentstep; i++) {
        if (backstap < i) {
            jQuery('.pSteps[ data-tab-id="' + i + '"]').removeClass("completeStep");
            jQuery('.pSteps[ data-tab-id="' + i + '"]').removeClass("activeStep");
        }
    }
});

jQuery(document).on('click', '.next-step', function() {
    var currentstep = parseInt(jQuery(this).attr('data-step'));
    var nextstap = currentstep + 1;
    jQuery('.wizard-stape-cart').hide();
    jQuery('#wizard_stape_' + nextstap).show();
    jQuery('.pSteps[ data-tab-id="' + currentstep + '"]').addClass("completeStep");
    jQuery('.pSteps[ data-tab-id="' + nextstap + '"]').addClass("activeStep");
    jQuery('.pSteps[ data-tab-id="' + currentstep + '"]').removeClass("activeStep");
    jQuery('html, body').animate({
        scrollTop: jQuery("body").offset().top
    }, 1200);
});