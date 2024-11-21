function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            const lat = position.coords.latitude;
            const lng = position.coords.longitude;
            document.getElementById("latitude").value = lat;
            document.getElementById("longitude").value = lng;
            alert('Ubicación guardada: Latitud ' + lat + ', Longitud ' + lng);
        }, function(error) {
            console.error("Error de geolocalización: ", error);
            alert('Error obteniendo la ubicación');
        }, {
            enableHighAccuracy: true,
            timeout: 10000,
            maximumAge: 0
        });
    } else {
        alert("La geolocalización no es soportada por este navegador.");
    }
}
