var infrastructurePage = (function() {

    var xmlhttp = new XMLHttpRequest();
    var url = "/js/map.style.json";

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var styles = JSON.parse(this.responseText);
            initMap(styles);
        };
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();

    var mapStyles;

    function initMap(styles) {

        mapStyles =  styles;

        var mapContainer = document.querySelector('.js-infrastructure-page__map');
        var filter = document.querySelector('.infrastructure__filter');
        var mapCenter = {lat: 50.4399011, lng: 30.5462197};
        var infowindow = null;
        var initMarkers = [];
        var filterState = {
            sales_dep: true,
            main: true,
            bank: true,
            cafe_restaraunts: true,
            dentist: true,
            gift_shop: true,
            higher_education_establishment: true,
            pharmacy: true,
            school: true,
            shopping_mall: true,
            sport_complex: true,
            supermarket: true,
            toy_store: true
        };

        var pinsServerLocation = '/img/infrastructure/';

        var icons = {
            sales_dep: pinsServerLocation + 'sales_dep.png',
            main: pinsServerLocation + 'main.png',
            bank: pinsServerLocation + 'bank.png',
            cafe_restaraunts: pinsServerLocation + 'cafe_restaraunts.png',
            dentist: pinsServerLocation + 'dentist.png',
            gift_shop: pinsServerLocation + 'gift_shop.png',
            higher_education_establishment: pinsServerLocation + 'higher_education_establishment.png',
            pharmacy: pinsServerLocation + 'pharmacy.png',
            school: pinsServerLocation + 'school.png',
            shopping_mall: pinsServerLocation + 'shopping_mall.png',
            sport_complex: pinsServerLocation + 'sport_complex.png',
            supermarket: pinsServerLocation + 'supermarket.png',
            toy_store: pinsServerLocation + 'toy_store.png'
        };
        var markers = [
            //{lat: 50.421205, lng: 30.543275, type: 'sales_dep', message:'<span class="contacts__infowindow">вул. Арсенальна 45</span>'},
            {lat: 50.440169, lng: 30.545682, type: 'main', message:'<span class="infrastructure__infowindow">Main building</span>'},
            {lat: 50.442176, lng: 30.540265, type: 'gift_shop', message: '<span class="infrastructure__infowindow">Gift shop name</span>'},
            {lat: 50.441191, lng: 30.539514, type: 'sport_complex', message: '<span class="infrastructure__infowindow">Sport complex name</span>'},
            {lat: 50.440452, lng: 30.540415, type: 'higher_education_establishment', message: '<span class="infrastructure__infowindow">Higher educational establishment name</span>'},
            {lat: 50.440253, lng: 30.539031, type: 'toy_store', message: '<span class="infrastructure__infowindow">Toy store name</span>'},
            {lat: 50.438995, lng: 30.541005, type: 'cafe_restaraunts', message: '<span class="infrastructure__infowindow">Cafe/Restaraunt name</span>'},
            {lat: 50.437901, lng: 30.539288, type: 'school', message: '<span class="infrastructure__infowindow">School name</span>'},
            {lat: 50.439047, lng: 30.546454, type: 'bank', message: '<span class="infrastructure__infowindow">Bank name</span>'},
            {lat: 50.442162, lng: 30.551003, type: 'supermarket', message: '<span class="infrastructure__infowindow">Super market name</span>'},
            {lat: 50.438499, lng: 30.551947, type: 'pharmacy', message: '<span class="infrastructure__infowindow">Pharmacy name</span>'},
            {lat: 50.437022, lng: 30.549072, type: 'dentist', message: '<span class="infrastructure__infowindow">Dentist name</span>'},
            {lat: 50.435248, lng: 30.547223, type: 'shopping_mall', message: '<span class="infrastructure__infowindow">Shopping mall name</span>'},

        ];
    
        var map = new google.maps.Map(mapContainer, {
            zoom: 16,
            center: mapCenter,
            disableDefaultUI: true,
            styles: styles
        });

        markers.forEach(function(marker) {
    
            var marker = new google.maps.Marker({
                position: {lat: marker.lat, lng: marker.lng},
                map: map,
                icon: icons[marker.type],
                type: marker.type,
                message: marker.message
            });

            initMarkers.push(marker);
    
            infowindow = new google.maps.InfoWindow({
                content: marker.message
            });
            
            marker.addListener('click', function() {
                if(infowindow) {
                    infowindow.close();
                }
                infowindow.setContent(this.message);
                infowindow.open(map, marker);
            });
        });

        filter.addEventListener('change', function(e) {
            filterState[e.target.id] = e.target.checked ? true : false;
            initMarkers.forEach(function(marker) {
                if(filterState[marker.type]) {
                    if(!marker.getMap()) {
                        marker.setMap(map);
                    }
                } else {
                    marker.setMap(null);
                }
            });
        });

    }; // end initMap

    


})();