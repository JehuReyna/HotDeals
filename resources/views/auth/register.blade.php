<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleregister.css') }}">
    <title>Registro</title>
    @if (session('error_console'))
        <script>
            console.error('Error: {{ session('error_console') }}');
        </script>
    @endif
</head>

<body>
    <div class="row" id="row">
        <div class="col-4">
            <div class="container-1">
                <h2>¡BIENVENIDO A HOTDEALS!</h2>
                <div class="logo-container">
                    <div class="logo">
                        <img src="{{ asset('img/logo2.png') }}" alt="Descripción de la Imagen">
                    </div>
                </div>
                <p style="margin-top:20px">Estamos encantados de que te unas a nuestra comunidad en HotDeals. Como
                    usuario registrado,
                    tendrás
                    acceso a increíbles ofertas y oportunidades para descubrir y apoyar negocios locales.
                </p>
            </div>
        </div>
        <div class="col-4">
            <div class="container-2">
                <div class="flip-card-back">
                    <p class="title">Registro</p>
                    <form class="form" method="POST" action="{{ route('register.store') }}">
                        @csrf
                        {{-- Correo --}}
                        <div class="input-group">
                            <label for="email">Correo</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        {{-- Nombre --}}
                        <div class="input-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        {{-- Apellido --}}
                        <div class="input-group">
                            <label for="last_name">Apellido</label>
                            <input type="text" name="last_name" id="last_name" required>
                        </div>
                        {{-- Nombre de usuario --}}
                        <div class="input-group">
                            <label for="user">Usuario</label>
                            <input type="text" name="user" id="user" required>
                        </div>
                        {{-- Contraseña --}}
                        <div class="input-group">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" id="password" required>
                        </div>
                        {{-- Confirmar contraseña --}}
                        <div class="input-group">
                            <label for="confirm_password">Confirmar contraseña</label>
                            <input type="password" name="password_confirmation" id="confirm_password" required>
                        </div>

                        <input type="hidden" name="role" value="{{ $role }}">

                        {{-- Botón iniciar --}}
                        <div class="content-align-center">
                            <button class="submit">Iniciar</button>
                        </div>
                    </form>
                    {{-- Botones para iniciar sesion con redes sociales --}}

                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="container-3">
                <h2>¡Registrate con tus redes sociales!</h2>
                <div class="row">
                    <div class="col-6">
                        <p style="margin-top:20px">
                            Unete con facebook para que puedas compartir tu ubicación y tengas un mayor alcance en redes
                            sociales!
                        </p>
                        <div>

                        </div>
                    </div>
                    <div class="col-6">
                        <p style="margin-top:20px">
                            Unete con facebook para que puedas compartir tu ubicación y tengas un mayor alcance en redes
                            sociales!
                        </p>
                        <div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-4">
            <a href="/">
                volver
            </a>
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
