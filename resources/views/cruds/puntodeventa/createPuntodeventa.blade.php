<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/CPdVstyle.css') }}">
    <title>Document</title>
</head>

<body>

    <div class="row" id="row">
        <div class="col-4">
            <div class="container-1">
                <h1>Crear Punto de Venta</h1>
                <hr>

                <form action="{{ route('puntosdeventa.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">
                            Nombre
                        </label>
                        <input type="text" name="nombre" class="form-control" id="nombre"required>
                    </div>

                    <br>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">
                            Descripción
                        </label>
                        <input type="text" name="descripcion" class="form-control" id="descripcion" required>
                    </div>

                    <div class="mb-3">
                        <label for="ubicacion" class="form-label">
                            Ubicación
                        </label>
                        <input type="text" name="ubicacion" class="form-control" id="ubicacion" required>
                    </div>

                    <br>

                    <div class="mb-3">
                        <label for="categoria_id" class="form-label">
                            Categoría
                        </label>
                        <select name="categoria_id" class="form-control" id="categoria_id" required>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <br>

                    <div class="mb-3">
                        <label for="latitude" class="form-label">
                            Latitud
                        </label>
                        <input type="text" name="latitude" class="form-control" id="latitude" required>
                    </div>

                    <br>

                    <div class="mb-3">
                        <label for="longitude" class="form-label">
                            Longitud
                        </label>
                        <input type="text" name="longitude" class="form-control" id="longitude" required>
                    </div>

                    <br>

                    <div class="mb-3">
                        <label for="foto" class="form-label">
                            Foto
                        </label>
                        <input type="file" name="foto" class="form-control" id="foto" accept="image/*"
                            capture="environment">
                    </div>

                    <br>
                    <div id="buttons-group">
                        <button type="button" id="locate" class="btn btn-secondary" onclick="getLocation()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-crosshair" viewBox="0 0 16 16">
                                <path
                                    d="M8.5.5a.5.5 0 0 0-1 0v.518A7 7 0 0 0 1.018 7.5H.5a.5.5 0 0 0 0 1h.518A7 7 0 0 0 7.5 14.982v.518a.5.5 0 0 0 1 0v-.518A7 7 0 0 0 14.982 8.5h.518a.5.5 0 0 0 0-1h-.518A7 7 0 0 0 8.5 1.018zm-6.48 7A6 6 0 0 1 7.5 2.02v.48a.5.5 0 0 0 1 0v-.48a6 6 0 0 1 5.48 5.48h-.48a.5.5 0 0 0 0 1h.48a6 6 0 0 1-5.48 5.48v-.48a.5.5 0 0 0-1 0v.48A6 6 0 0 1 2.02 8.5h.48a.5.5 0 0 0 0-1zM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4">
                                </path>
                            </svg>
                            
                        </button>
    
                        <button type="submit" id="submit" class="btn btn-primary">
                            Guardar Puntode Venta
                        </button>
                    </div>
                    
                    <br>
                    <br>
                </form>
                <a href="/venta" id="a">
                    volver
                </a>
            </div>
        </div>
    </div>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYmACEm27EsXqoSQwUekt2L0J9YP35AMw"></script>
    <script src="{{ asset('js/geolocate.js') }}"></script>
</body>

</html>
