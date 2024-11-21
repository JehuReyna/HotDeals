<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/SPdVstyle.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="px-3 py-2 border-bottom" id="header">
            <div class="container">
                <a class="btn me-2" id="userAcomodado" href="/perfil">{{ auth()->user()->user }}</a>

                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/"
                        class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                    </a>

                    {{-- Vista disponible para todos los tipos de usuarios --}}

                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                        <li>
                            <a href="/" class="nav-link text-white mx-2" id="tipografia">
                                <div class="row">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="row">
                                    Inicio
                                </div>
                            </a>
                        </li>


                        {{-- Este apartado solo lo podrá ver el usuario de tipo vendedor --}}

                        <li>
                            <a href="/venta" class="nav-link text-white mx-2" id="tipografia">
                                <div class="row">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white"
                                        class="bi bi-shop" viewBox="0 0 16 16">
                                        <path
                                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="row">
                                    Tienda
                                </div>
                            </a>
                        </li>

                        {{-- Vista disponible para todos los tipos de usuarios --}}

                        <li>
                            <a href="/" class="nav-link text-white mx-2" id="tipografia">
                                <div class="row">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white"
                                        class="bi bi-person-heart" viewBox="0 0 16 16">
                                        <path
                                            d="M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="row">
                                    Seguidos
                                </div>
                            </a>
                        </li>

                        {{-- Vista disponible para todos los tipos de usuarios --}}

                        <li>
                            <a href="/" class="nav-link text-white mx-2" id="tipografia">
                                <div class="row">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white"
                                        class="bi bi-info-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16">
                                        </path>
                                        <path
                                            d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0">
                                        </path>
                                    </svg>
                                </div>
                                <div class="row">
                                    Información
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    {{-- ESTO SOLO LO PUEDEN VER LOS VENDEDORES, PERO LOS VENDEDORES DUEÑOS DEL PUNTO DE VENTA --}}

    @if ($puntodeventa->user_id === Auth::id())

        {{-- PUNTO DE VENTA --}}

        <div class="tablecontainer">
            <div class="card" id="card2">
                <div class="row">
                    <div class="col-9">
                        <div class="title">Agregar productos a mi punto de venta</div>
                    </div>
                    <div class="col-3">
                        <a href="{{ route('puntosdeventa.create') }}" class="btn btn-success">Agregar</a>
                    </div>
                </div>

                <div class="content">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Ubicación</th>
                                <th scope="col">Latitude</th>
                                <th scope="col">Longitud</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row">{{ $puntodeventa->id }}</th>
                                <td>{{ $puntodeventa->nombre }}</td>
                                <td>{{ $puntodeventa->categoria->nombre }}</td>
                                <td>{{ $puntodeventa->descripcion }}</td>
                                <td>{{ $puntodeventa->ubicacion }}</td>
                                <td>{{ $puntodeventa->latitude }}</td>
                                <td>{{ $puntodeventa->longitude }}</td>
                                <td>
                                    <a href="{{ route('puntosdeventa.edit', $puntodeventa->id) }}"
                                        class="btn btn-warning">
                                        Editar
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('puntosdeventa.destroy', $puntodeventa->id) }}"
                                        method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- PRODUCTOS --}}

        <div class="tablecontainer">
            <div class="card" id="card2">
                <div class="row">
                    <div class="col-3">
                        <a href="{{ route('productos.create', $puntodeventa->id) }}" class="btn btn-success">Agregar
                            Producto
                        </a>
                    </div>
                </div>
                <div class="content">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($puntodeventa->productos as $producto)
                                <tr>
                                    <th scope="row">{{ $producto->id }}</th>
                                    <td>{{ $producto->nomprod }}</td>
                                    <td>{{ $producto->marca }}</td>
                                    <td>{{ $producto->descripcion }}</td>
                                    <td>${{ number_format($producto->precio, 2) }}</td>
                                    <td> <a href="{{ route('productos.edit', ['puntodeventa' => $puntodeventa->id, 'producto' => $producto->id]) }}"
                                            class="btn btn-warning">Editar</a> </td>
                                    <td>
                                        <form
                                            action="{{ route('productos.destroy', ['puntodeventa' => $puntodeventa->id, 'producto' => $producto->id]) }}"
                                            method="POST" class="d-inline">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endif


    {{-- TIENDA QUE VEN TODOS LOS USUARIOS SIN IMPORTAR EL TIPO --}}


    <div class="row " id="row">
        <h>Tienda {{ $puntodeventa->nombre }}</h>
    </div>

    <div class="row" id="row2">
        <div class="col-6">
            <div class="container">
                <div id="container-ronded">
                    <div class="ronded-image">
                        <img src="{{ asset($puntodeventa->foto) }}" alt="Descripción de la Imagen" class="img-fluid"
                            style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                </div>
            </div>
        </div>


        <div class="col-6">
            <div class="container" id="container-descripcion">
                <h id="text-nombre-dueño">Bienvenido a la tienda de {{ $puntodeventa->user->user }}</h>
                <br>
                <h id="text-categoria">{{ $puntodeventa->categoria->nombre }}</h>
                <h id="text-description">{{ $puntodeventa->descripcion }}</h>
                <a id="text-ubicacion" href="/">{{ $puntodeventa->ubicacion }}. ir</a>
                <h></h>

                <br>


                <div class="container" id="button-group">
                    @if ($puntodeventa->user_id === Auth::id())
                        <div class="container">
                            <a href="{{ route('puntosdeventa.edit', $puntodeventa->id) }}" class="btn btn-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z">
                                    </path>
                                </svg>
                            </a>
                    @endif
                    <a href="/venta" class="btn btn-primary" id="backlist-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z">
                            </path>
                        </svg>
                    </a>
                    @if ($puntodeventa->user_id === Auth::id())
                        <form action="{{ route('puntosdeventa.destroy', $puntodeventa->id) }}" method="POST"
                            class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5">
                                    </path>
                                </svg>
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row " id="row">
        <h>Productos de {{ $puntodeventa->nombre }}</h>
    </div>

    <table class="table table-hover" id="table">
        @foreach ($puntodeventa->productos as $producto)
            <tbody>
                <tr>
                    <td id="table-1">{{ $producto->nomprod }}</td>
                    <td id="table-2">{{ $producto->marca }}</td>
                    <td id="table-3">{{ $producto->descripcion }}</td>
                    <td id="table-4">${{ number_format($producto->precio, 2) }}</td>
                    <td id="table-5"><img src="{{ asset($producto->fotoprod) }}" alt="Descripción de la Imagen" class="img-fluid"></td>
                </tr>
            </tbody>
        @endforeach
    </table>
</body>

</html>
