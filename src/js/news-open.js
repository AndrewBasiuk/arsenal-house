var newsOpen = (function() {

    var imgContaner = $('.js-news-open__image');

    if(imgContaner.children().length>1) {
        initGalleries();
    };

    function initGalleries() {

        var bottomGal = $('.js-news-open__gallery-thumb-list');

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
        })
    };

})();