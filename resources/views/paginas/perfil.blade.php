<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/perfil.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ auth()->user()->user }}</title>
</head>

<body>

    {{-- HEADER --}}

    {{--     <div>   
        @extends('components.header')
    </div --}}

    <header>
        <div class="px-3 py-2 border-bottom" id="header">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/"
                        class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
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
        <div class="px-3 py-2 border-bottom mb-3">
            <div class="container d-flex flex-wrap justify-content-center">
                <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <div class="text-end">
                    <a class="btn btn-light text-dark me-2">{{ auth()->user()->user }}</a>
                    <a type="button" href="{{ route('login.destroy') }}" class="btn btn-primary">Cerrar sesion</a>
                </div>
            </div>
        </div>
    </header>



    {{-- INFORMACÓN DEL PERFIL --}}

    <div class="row me-2 text-center align-items-center justify-content-center">
        <div class="col-4">

        </div>
        <div class="col-4" id="center">

        </div>
        <div class="col-4">

        </div>
    </div>


    <hr>

    {{-- PUNTOS DE VENTA PARA EL VENDEDOR Y TIENDA PARA LOS CLIENTES --}}

    <div class="row my-3 mx-3 text-center">
        <div class="card" style="background-color:ghostwhite">
            <div class="container mt-2">
                <p class="fw-bold fs-3 border-bottom border-info" style="--bs-border-opacity: .5;">
                    Categoria
                </p>
            </div>
            <div class="container" id="container-ronded">
                <div class="ronded_image">
                    <img src="{{ asset('img/venta.jpg') }}" alt="Descripción de la Imagen">
                </div>
            </div>
            <div class="container mt-1">
                <p class="lh-sm">
                    En esta tienda tenemos diferentes productos de origen vegetal, frescos y de alta calidad!
                </p>
            </div>
            <div class="container mb-1">
                <button type="button" class="btn btn-outline-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10">
                        </path>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>


    {{-- TIENDA PARA LOS VENDEDORES --}}
    <div class="row me-2">
        w
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
