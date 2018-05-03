var contactsMap = (function() {

    var mapContainer = document.querySelector('.js-contacts-page__map');

    var mapCenter = {lat: 50.4214105, lng: 30.5322675};

    var map = new google.maps.Map(mapContainer, {
        zoom: 15,
        center: mapCenter
    });

})();