var documentsPage = (function() {

    var documentsList = $('.js-documents__list');

    documentsList.slick({
        slidesToShow: 5,
        nextArrow: '<div class="documents-page-arrow documents-page-arrow_next"><div></div></div>',
        prevArrow: '<div class="documents-page-arrow documents-page-arrow_prev"><div></div></div>',
        responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 2
              }
            }
          ]
    })

})();