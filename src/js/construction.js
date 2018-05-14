var constructionPage = (function() {

    var conItem = $('.construction__item');
    var conGalContainer = $('.construction__gallery_container');
    var cenGal = $('.construction__central-gallery');
    var sideGal = $('.construction__side-gallery');
    var closeGal = $('.construction__close-gallery');
    var cantralGalItems = '';
    var sideGalItems = '';
    var sideGalSladesToShow = 5;
    var sideGalVerticalMode = true;

    function initGallery() {

        var windowWidth = window.innerWidth;
        var windowHeight = window.innerHeight;

        if(windowHeight < 700) {
            sideGalSladesToShow = 3
        }
        if(windowHeight < 470) {
            sideGalSladesToShow = 2
        }
        if(windowWidth < 767) { 
            sideGalVerticalMode = false;
        }
        if(windowWidth < 370) { 
            sideGalSladesToShow = 2
        }

        hideScrollBar();

        cenGal.slick({
            asNavFor: sideGal,
            nextArrow: '<div class="gallery-arrow central-gallery-arrow central-gallery-arrow_next"><div></div></div>',
            prevArrow: '<div class="gallery-arrow central-gallery-arrow central-gallery-arrow_prev"><div></div></div>'
        });

        sideGal.slick({
            slidesToShow: sideGalSladesToShow,
            asNavFor: cenGal,
            vertical: sideGalVerticalMode,
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
    };

    conItem.click(initGallery);

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