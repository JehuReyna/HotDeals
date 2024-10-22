<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXhW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/card.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <script>
        function flipCard() {
            var card = document.querySelector('.card');
            card.classList.toggle('flipped');
        }
    </script>
</head>

<body>
    <div class="card-container">
        <div class="card">
            <div class="front">
                <!-- Contenido de la vista frontal -->
                <h2>BIENVENIDO A HOTDEALS!</h2>
                <p>Estamos encantados de que te unas a nuestra comunidad en HotDeals. Como usuario registrado, tendrás
                    acceso a increíbles ofertas y oportunidades para descubrir y apoyar negocios locales.</p>

                <button class="next-btn" onclick="flipCard()">Vamos! &#x27A1;</button> <!-- Flecha a la derecha -->
            </div>
            <div class="back">
                <div class="form-container">
                    <p class="title">Registro</p>
                    <form class="form" method="POST" action="">
                        @csrf
                        {{-- Correo --}}
                        <div class="input-group">
                            <label for="email">Correo</label>
                            <input type="email" name="email" id="email" placeholder="">
                        </div>
                        {{-- Nombre --}}
                        <div class="input-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" placeholder="">
                        </div>
                        {{-- Apellido --}}
                        <div class="input-group">
                            <label for="last_name">Apellido</label>
                            <input type="text" name="last_name" id="last_name" placeholder="">
                        </div>
                        {{-- Nombre de usuario --}}
                        <div class="input-group">
                            <label for="user">Usuario</label>
                            <input type="text" name="user" id="user" placeholder="">
                        </div>
                        {{-- Contraseña --}}
                        <div class="input-group">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" id="password" placeholder="">
                        </div>
                        {{-- Confirmar contraseña --}}
                        <div class="input-group">
                            <label for="confirm_password">Confirmar contraseña</label>
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="">
                        </div>
                        <br>
                        {{-- Botón iniciar --}}
                        <div class="content-align-center">
                            <button class="submit">Iniciar</button>
                        </div>
                    </form>
                    {{-- Botones para iniciar sesion con redes sociales --}}
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vQH+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
