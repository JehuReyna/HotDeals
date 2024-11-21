<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleventa.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ auth()->user()->user }}</title>
</head>
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
                </ul>
            </div>
        </div>
    </div>
</header>

<body>

    {{-- TABLA CATEGORIAS --}}

        <div class="tablecontainer">
            <div class="card">
                <div class="row">
                    <div class="col-9">
                        <div class="title">Agregar categorías</div>
                    </div>
                    <div class="col-3"> 
                      <a href="{{ route('categorias.create') }}" class="btn btn-success">Agregar</a>
                    </div>
                </div>
                <div class="content">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Categoría</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <th scope="row">{{ $categoria->id }}</th>
                                    <td>{{ $categoria->nombre }}</td>
                                    <td><a href="{{ route('categorias.edit', $categoria->id) }}"
                                            class="btn btn-warning">Editar</a></td>
                                    <td>
                                        <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST"
                                            class="d-inline"> @csrf @method('DELETE') <button type="submit"
                                                class="btn btn-danger">Eliminar</button> </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

</body>

</html>
