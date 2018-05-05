var developerPage = (function() {

    var devGal = $('.developer__gallery');

    devGal.slick({
        slidesToShow: 6,
        nextArrow: $('.developer__slider-arrow_right'),
        prevArrow: $('.developer__slider-arrow_left')
    })

})();