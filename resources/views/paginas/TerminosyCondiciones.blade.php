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
    <header>
        <div class="px-3 py-2 border-bottom" id="header">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="#"
                        class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                        Terminos y condiciones
                    </a>

                    {{-- Vista disponible para todos los tipos de usuarios que manda al mapa del inicio --}}

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

                        {{-- Vista disponible para todos los tipos de usuarios que manda a la información referente a nosotros--}}

                        <li>
                            <a href="/informacion" class="nav-link text-white mx-2" id="tipografia">
                                <div class="row">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white"
                                        class="bi bi-person-heart" viewBox="0 0 16 16">
                                        <path
                                            d="M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="row">
                                    Acerca de nosotros
                                </div>
                            </a>
                        </li>

                        {{-- Vista disponible para todos los tipos de usuarios que muestra las politicas de privacidad --}}

                        <li>
                            <a href="/PoliticasPrivacidad" class="nav-link text-white mx-2" id="tipografia">
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
                                    Politicas de privacidad
                                </div>
                            </a>
                        </li>

                         {{-- Vista disponible para todos los tipos de usuarios que muestra los terminos y condiciones--}}

                         <li>
                            <a href="/TerminosyCondiciones" class="nav-link text-white mx-2" id="tipografia">
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
                                    Terminos y condiciones
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>



    {{-- INFORMACÓN DEL PERFIL --}}



    {{-- PUNTOS DE VENTA PARA EL VENDEDOR Y TIENDA PARA LOS CLIENTES --}}




    {{-- TIENDA PARA LOS VENDEDORES --}}
    <div class="row me-2">
        w
    </div>

</body>

</html>
