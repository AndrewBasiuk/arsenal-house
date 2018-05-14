var galleryPage = (function() {

    var mainGal = $('.gallery-main');
    var sideGal = $('.gallery-side');

    function initGallerry() {

        var windowHeight = window.innerHeight;
        var windowWidth = window.innerWidth;
        var sideGalSlidesToShow = 5 
        if(windowHeight < 870 && windowWidth > 767) {
            sideGalSlidesToShow = 4;
        }
        if(windowHeight < 780 && windowWidth > 767) {
            sideGalSlidesToShow = 3;
        }
        if(windowHeight < 670 && windowWidth > 767) {
            sideGalSlidesToShow = 2;
        }
        mainGal.slick({
            asNavFor: sideGal,
            nextArrow: '<div class="gallery-page-arrow gallery-page-arrow_main gallery-page-arrow_next"><div></div></div>',
            prevArrow: '<div class="gallery-page-arrow gallery-page-arrow_main gallery-page-arrow_prev"><div></div></div>'
        });
    
        sideGal.slick({
            slidesToShow: sideGalSlidesToShow,
            focusOnSelect: true,
            vertical: true,
            asNavFor: mainGal,
            nextArrow: '<div class="gallery-page-arrow_side gallery-page_side-arrow-next"><div></div></div>',
            prevArrow: '<div class="gallery-page-arrow_side gallery-page_side-arrow-prev"><div></div></div>',
            responsive: [
                {
                  breakpoint: 767,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    vertical: false,
                  }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        vertical: false,
                    }
                }
              ]
        });
    }
    initGallerry();
    window.addEventListener('resize', function() {
        mainGal.slick('unslick');
        sideGal.slick('unslick');
        initGallerry(); 
    })

})();