var map;
var advancedMarker;
var imageUrl = '{{ asset("img/venta.jpg") }}';

async function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 19,
        center: { lat: 0, lng: 0 },
        mapId: 'bb17fd1826993a06', 
        mapTypeControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        streetViewControl: false,
        zoomControl: false
    });

    const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(updatePosition, handleLocationError, {
            enableHighAccuracy: true,
            timeout: 1000,
            maximumAge: 0
        });
        navigator.geolocation.watchPosition(updatePosition, handleLocationError, {
            enableHighAccuracy: true,
            timeout: 1000,
            maximumAge: 0
        });
    } else {
        handleLocationError(false, map.getCenter());
    }

    function updatePosition(position) {
        var pos = { lat: position.coords.latitude, lng: position.coords.longitude };
        map.setCenter(pos);
        addMarker(pos);
    }

    function addMarker(position) 
    { 
        if (advancedMarker) 
            { 
            advancedMarker.position = position; 
        } else { 
            const contentDiv = document.createElement('div'); 
            contentDiv.innerHTML = ` 
            <div class="puntodeventa"> 
                <div class="circle"> 
                    <div id="imagecircle"> 
                        <img src="${imageUrl}" alt="Descripción de la Imagen" class="ronded_image"> 
                    </div> 
                </div> 
                <div class="triangle">
                </div> 
            </div> 
            `;
                advancedMarker = new AdvancedMarkerElement({
                position: position,
                content: contentDiv,
                map: map,
                draggable: true
            });

            google.maps.event.addListener(advancedMarker, 'dragend', function(event) {
                document.getElementById("latitude").value = event.latLng.lat();
                document.getElementById("longitude").value = event.latLng.lng();
            });
        }
    }


    function handleLocationError(browserHasGeolocation, pos) {
        console.log(browserHasGeolocation ?
            "Error: El servicio de geolocalización falló." :
            "Error: Tu navegador no soporta geolocalización.");
    }

    google.maps.event.addDomListener(window, 'load', initMap);
}
