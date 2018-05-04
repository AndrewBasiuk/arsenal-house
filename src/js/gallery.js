var galleryPage = (function() {

    var mainGal = $('.gallery-main');

    mainGal.slick({
        nextArrow: '<div class="gallery-page-arrow gallery-page-arrow_main gallery-page-arrow_next"><div></div></div>',
        prevArrow: '<div class="gallery-page-arrow gallery-page-arrow_main gallery-page-arrow_prev"><div></div></div>'
    });

})();