var contactsMap = (function() {

    var xmlhttp = new XMLHttpRequest();
    var url = "/js/map.style.json";
    var globalStyles;

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var styles = JSON.parse(this.responseText);
            globalStyles = styles;
            initMap(styles);
        };
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();


    function initMap(styles) {

        var mapContainer = document.querySelector('.js-contacts-page__map');
        var mapCenter = {lat: 50.431930, lng: 30.541455};
        var infowindow = null;
        var zoom = 14;

        var windowWidth = window.innerWidth;
        if(windowWidth < 900) {
            //zoom = 14;
        } 
        if(windowWidth < 767) {
            zoom = 13;
            mapCenter = {lat: 50.410930, lng: 30.541455};
        }

        var icons = {
            sales_dep: {
                icon: '../img/contacts/sales_dep.png'
            },
            main: {
                icon: '../img/contacts/main.png'
            }
        };
        //lat: 50.414614, lng: 30.526581
        var markers = [
            {lat: 50.414614, lng: 30.526581, type: 'sales_dep', message:'<span class="contacts__infowindow">вул. Арсенальна 45</span>'},
            {lat: 50.4362216, lng: 30.544073, type: 'main', message:'<span class="contacts__infowindow">вул. Арсенальна 45</span>'}
        ];
    
        var map = new google.maps.Map(mapContainer, {
            zoom: zoom,
            center: mapCenter,
            disableDefaultUI: true,
            styles: styles
        });

        markers.forEach(function(marker) {
    
            var marker = new google.maps.Marker({
                position: {lat: marker.lat, lng: marker.lng},
                map: map,
                icon: icons[marker.type].icon,
                message: marker.message
            });
    
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

    };//end initMap

    window.addEventListener('resize', debounce(function() {
        initMap(globalStyles);
    }, 100));

})();