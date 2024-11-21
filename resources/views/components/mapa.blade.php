<body onload="initMap()">
    <div id="map" style="width:100%;height:100vh;"></div>
    <input type="hidden" id="latitude"> 
    <input type="hidden" id="longitude">
    <div id="puntodeventa-data" data-image-url="{{ asset('img/venta.jpg') }}" {{-- data-latitude="{{ $puntodeventa->latitude }}" data-longitude="{{ $puntodeventa->longitude }}" --}}></div>
</body>
