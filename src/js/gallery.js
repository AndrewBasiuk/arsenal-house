var galleryPage = (function() {

    var mainGal = $('.gallery-main');
    var sideGal = $('.gallery-side');

    mainGal.slick({
        asNavFor: sideGal,
        nextArrow: '<div class="gallery-page-arrow gallery-page-arrow_main gallery-page-arrow_next"><div></div></div>',
        prevArrow: '<div class="gallery-page-arrow gallery-page-arrow_main gallery-page-arrow_prev"><div></div></div>'
    });

    sideGal.slick({
        slidesToShow: 5,
        focusOnSelect: true,
        vertical: true,
        asNavFor: mainGal,
        nextArrow: '<div class="gallery-page-arrow_side gallery-page_side-arrow-next"><div></div></div>',
        prevArrow: '<div class="gallery-page-arrow_side gallery-page_side-arrow-prev"><div></div></div>'
    });

})();