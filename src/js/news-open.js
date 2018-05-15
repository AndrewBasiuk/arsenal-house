var newsOpen = (function() {

    var imgContaner = $('.js-news-open__image');
    var bottomGal = $('.js-news-open__gallery-thumb-list');


    if(imgContaner.children().length>1) {
        initGalleries();
    };

    function initGalleries() {


        var finalString = Array.prototype.reduce.call(imgContaner.children(), function(final, img) {
            final +='<div class="news-open__gallery-thumb"><img src="'+ img.src +'"/></div>';
            return final;
        },'');

        bottomGal.html(finalString);

        imgContaner.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: bottomGal,
            focusOnSelect: true,
        });

        bottomGal.slick({
            slidesToShow: 7,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: imgContaner,
            focusOnSelect: true,
            centerMode: false,
            responsive: [
                {
                  breakpoint: 670,
                  settings: {
                    slidesToShow: 4
                  }
                },
                {
                    breakpoint: 400,
                    settings: {
                      slidesToShow: 3
                    }
                }
              ]
        })
    };

})();