var constructionPage = (function() {

    var conItem = $('.construction__item');
    var conGalContainer = $('.construction__gallery_container');
    var cenGal = $('.construction__central-gallery');
    var sideGal = $('.construction__side-gallery');
    var closeGal = $('.construction__close-gallery');
    var cantralGalItems = '';
    var sideGalItems = '';

    conItem.click(function() {

        hideScrollBar();

        cenGal.slick({
            //asNavFor: '.construction__side-gallery',
            nextArrow: '<div class="gallery-arrow central-gallery-arrow central-gallery-arrow_next"><div></div></div>',
            prevArrow: '<div class="gallery-arrow central-gallery-arrow central-gallery-arrow_prev"><div></div></div>'
        });

        sideGal.slick({
            slidesToShow: 5,
            asNavFor: '.construction__central-gallery',
            vertical: true,
            focusOnSelect: true,
            nextArrow: '<div class="gallery-arrow side-gallery-arrow side-gallery-arrow_next"><div></div></div>',
            prevArrow: '<div class="gallery-arrow side-gallery-arrow side-gallery-arrow_prev"><div></div></div>'
        });

        cantralGalItems = Array.prototype.reduce.call($(this).find('img'), function(a, img){
            a += '<div><img class="costruction__central-gallery_image" src="' + img.src + '"></div>';
            return a;
        },'');

        sideGalItems = Array.prototype.reduce.call($(this).find('img'), function(a, img){
            a += '<div><img class="costruction__side-gallery_image" src="' + img.src + '"></div>';
            return a;
        },'');

        cenGal.slick('slickAdd', cantralGalItems);

        sideGal.slick('slickAdd', sideGalItems)

        conGalContainer.removeClass('construction__gallery_hidden');
    });

    closeGal.click(function() {
        showScrollBar();
        sideGalItems = '';
        cantralGalItems = '';
        cenGal.slick('unslick');
        sideGal.slick('unslick');
        cenGal.html('');
        sideGal.html('');
        conGalContainer.addClass('construction__gallery_hidden');
    });


})();