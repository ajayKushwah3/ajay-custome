jQuery(document).ready(function() {
    /* ------------------------------------------------------ 
  SignProductImageThumb slider start  
 ------------------------------------------------------ */
    var SignProductImageThumb = jQuery('.SPImageThumb');
    SignProductImageThumb.slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '0px',
        dots: false,
        focusOnSelect: true
    });
    /* ------------------------------------------------------ 
  magnificPopup in main mainge click 
 ------------------------------------------------------ */
    jQuery('.SPMineImageView .SPIitem').on('click', function() {
        jQuery(this).find('.SPIGalleryPopup').magnificPopup('open');
    });

    jQuery('.SPIGalleryPopup').each(function() {
        jQuery(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    });
    /* ------------------------------------------------------ 
  Drift zoom 
 ------------------------------------------------------ */
    if (jQuery('.drift-demo-trigger').length) {
        new Drift(document.querySelector('.drift-demo-trigger'), {
            paneContainer: document.querySelector('.SPRightCart'),
            inlinePane: 900,
            inlineOffsetY: -85,
            containInline: true,
            hoverBoundingBox: true
        });
    }
    /* ------------------------------------------------------ 
        slick-arrow click and get src
     ------------------------------------------------------ */
    jQuery(document).on('click', '.slick-arrow, .SPItemThumb', function() {
        var currentSlide = SignProductImageThumb.slick('slickCurrentSlide');
        var imgSrca = jQuery('[data-slick-index="' + currentSlide + '"]').find('img').attr("data-src");
        jQuery('.SignProductImage').attr('src', imgSrca);
        jQuery('.SignProductImage').attr('data-zoom', imgSrca);
        jQuery('.SignProductImage').parent().attr('href', imgSrca);
    });

    /* ------------------------------------------------------ 
    slick-arrow swipe and get src
 ------------------------------------------------------ */
    SignProductImageThumb.on('swipe', function() {
        var currentSlide = SignProductImageThumb.slick('slickCurrentSlide');
        var imgSrca = jQuery('[data-slick-index="' + currentSlide + '"]').find('img').attr("data-src");
        jQuery('.SignProductImage').attr('src', imgSrca);
        jQuery('.SignProductImage').attr('data-zoom', imgSrca);
        jQuery('.SignProductImage').parent().attr('href', imgSrca);

    });

    /* ------------------------------------------------------ 
    SPItemThumb click and get src
 ------------------------------------------------------ */

    jQuery(document).on('click', '.SPItemThumb img', function() {
        var imgSrc = jQuery(this).attr('data-src');
        jQuery('.SignProductImage').attr('src', imgSrc);
        jQuery('.SignProductImage').attr('data-zoom', imgSrc);
        jQuery('.SignProductImage').parent().attr('href', imgSrc);
    });

});