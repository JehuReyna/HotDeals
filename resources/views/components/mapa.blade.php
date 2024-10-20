<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styledropdown.css') }}">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYmACEm27EsXqoSQwUekt2L0J9YP35AMw"></script>
    <script>
        function initMap() {

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 18,
                center: {
                    lat: 0,
                    lng: 0
                },
                /* mapTypeId: 'terrain', // Modo relieve */
                mapTypeControl: false,
                scrollwheel: false, // Desactiva el zoom con la rueda del ratón
                disableDoubleClickZoom: true, // Desactiva el zoom con doble clic
                streetViewControl: false, // Desactiva el control de Street View
                /* draggable: false, // Desactiva el arrastre del mapa */
                zoomControl: false // Oculta los controles de zoom
            });


                /* getCurrentPosition PARA VER LA POSICIÓN ACTUAL DEL USUARIO */

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    var marker = new google.maps.Marker({
                        position: pos,
                        map: map
                    });

                    map.setCenter(pos);


                    }, function() {
                        handleLocationError(true, map.getCenter());
                    }, 
                        /* INTENTO DE ALTA PRESICIÓN */
                    {
                        enableHighAccuracy: true,
                        timeout: 2000,
                        maximumAge: 0
                    }
                );

                    /* watchPosition PARA SEGUIR AL USUARIO */

                navigator.geolocation.watchPosition(
                    function(position) {
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        var marker = new google.maps.Marker({
                            position: pos,
                            map: map
                        });
                        map.setCenter(pos);
                    }, 
                    function() {
                        handleLocationError(true, map.getCenter());
                    }, 
                        // INTENTO DE ALTA PRESICIÓN
                    {
                        enableHighAccuracy: true, 
                        timeout: 2000, 
                        maximumAge: 0
                    }
                );


            } else {
                handleLocationError(false, map.getCenter());
            }
        }

        function handleLocationError(browserHasGeolocation, pos) {
            console.log(browserHasGeolocation ? "Error: El servicio de geolocalización falló." :
                "Error: Tu navegador no soporta geolocalización.");

            var styles = [{
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "transit",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "transit",
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "landscape",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "administrative",
                    "elementType": "labels",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "water",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "labels",
                    "stylers": [{
                        "visibility": "on"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [{
                        "visibility": "on"
                    }]
                }
            ];

        }
    </script>
</head>
{{-- 735px --}}

<body onload="initMap()">
    <div id="map" style="width:100%;height:100vh;"></div>
</body>

</html>
