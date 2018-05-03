var documentsPage = (function() {

    var modalOpen = false;

    var documentsList = document.querySelector('.js-documents__list');
    var modal = document.querySelector('.js-document__modal');
    var modalImage = document.querySelector('.js-document__modal_image');

    function showDocumentModal(e) {
        if(!modalOpen) {
            modalOpen = !modalOpen;
            modalImage.src = e.target.src;
            modal.classList.remove('document__modal_hidden');
            documentsList.removeEventListener('click', showDocumentModal);
        }
    };

    function closeDocumentModal(e) {
        modalOpen = !modalOpen;
        modal.classList.add('document__modal_hidden');
        documentsList.addEventListener('click', showDocumentModal);
    };

    modal.addEventListener('click', closeDocumentModal);
    documentsList.addEventListener('click', showDocumentModal);

})();