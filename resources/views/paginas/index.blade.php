<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styledropdown.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylepuntoventa.css') }}">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYmACEm27EsXqoSQwUekt2L0J9YP35AMw&signature=EyR1ee5F9hyIergb7poOdw-s9Us="></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @laravelPWA

</head>
<body>
    <div>
        <x-dropdown/>
        @extends('components.dropdown')
    </div>
    
    <div class="container" style="width:100%, height:100%">
        @extends('components.mapa')
        {{-- @extends('components.puntoventa') --}}
    </div>

{{--     <button class="btn" id="addPuntoDeVenta" title="añadir punto de venta">Agregar Punto de Venta</button>
 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="{{asset('js/map.js')}}"></script>
</body>
</html>