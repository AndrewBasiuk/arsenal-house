var developerPage = (function() {

    var devGal = $('.developer__gallery');

    devGal.slick({
        slidesToShow: 6,
        nextArrow: $('.developer__slider-arrow_right'),
        prevArrow: $('.developer__slider-arrow_left'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2
                }
            }
          ]
    })

})();