<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylelogin.css') }}">
    <title>Login</title>

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '579116511453046', // Reemplaza con tu App ID de Facebook
                cookie: true,
                xfbml: true,
                version: 'v15.0'
            });
            FB.AppEvents.logPageView();
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        function checkLoginState() {
            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });
        }

        function statusChangeCallback(response) {
            if (response.status === 'connected') {
                // Llamada a la API de Facebook para obtener la información del usuario
                FB.api('/me', {
                    fields: 'name,email,picture,gender,location,birthday'
                }, function(response) {
                    console.log('Bienvenido, ' + response.name + '.');
                    console.log('Email: ' + response.email);
                    console.log('Picture: ' + response.picture.data.url);
                    console.log('Gender: ' + response.gender);
                    console.log('Location: ' + response.location.name);
                    console.log('Birthday: ' + response.birthday);

                    // Aquí puedes manejar los datos del usuario y enviarlos a tu backend
                    // Por ejemplo, podrías hacer una petición AJAX para registrar/iniciar sesión al usuario en tu sistema
                });
            } else {
                console.log('No está autenticado.');
            }
        }
    </script>

</head>

<body>
    <div class="form-container" id="formContainer"></div>

    <script>
        window.onload = function() {
            function adjustForm() {
                const formContainer = document.getElementById('formContainer');
                if (window.innerWidth > 1440) {
                    formContainer.innerHTML = `
                    <div class="row" id="row">
        <div class="col-6">
            <div class="container-1">
                <!-- Contenido de la vista frontal -->
                <h1>BIENVENIDO A HOTDEALS!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, quibusdam. Enim ipsa ullam blanditiis
                    dignissimos id fugit sapiente consequuntur consectetur corrupti vitae, quo at itaque! Veniam
                    voluptates
                    vitae numquam. Deleniti..</p>
            </div>
            <div class="logo-container">
                <div class="logo">
                    <img src="{{ asset('img/logoblanco.png') }}" alt="Descripción de la Imagen" textprimary="white">
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="container-2">
                <p class="title">Inicio de sesión</p>
                <form class="form" method="POST" action="">
                    @csrf
                    {{-- Usuario --}}
                    <div class="input-group">
                        <label for="user">Usuario</label>
                        <input type="text" name="user" id="user" placeholder="">
                    </div>
                    {{-- Contraseña --}}
                    <div class="input-group">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" id="password" placeholder="">
                        <br>

                        {{-- Botón iniciar --}}
                        <div class="content-align-center">
                            <button class="submit">Iniciar</button>
                        </div>
                        <div class="forgot">
                            <a rel="noopener noreferrer" href="#">¿Olvidaste tu contraseña?</a>
                        </div>
                        <hr>
                    </div>

                </form>
                {{-- Botones para iniciar sesion con redes sociales --}}
                <div class="mt-3">
                    <h6>O inicia sesión con tus redes sociales</h6>
                    <button class="btn btn-outline-primary w-100 mb-2" onclick="checkLoginState();">Iniciar sesión con
                        Facebook</button>
                    <button class="btn btn-outline-danger w-100">Iniciar sesión con Google</button>
                </div>


                <br>
                <br>
                <br>
                <hr>
                <p class="signup">¿No tienes cuenta?
                    <a rel="noopener noreferrer" href="/cuenta" class="">Registrarse</a>
                </p>
                @error('message')
                    <p class="--bs-danger-border-subtle --bs-danger-text-emphasis">
                        Error al iniciar sesion.
                    </p>
                @enderror
            </div>
        </div>
    </div>
                    `;

                } else {
                    formContainer.innerHTML = `
                    <div class="row" id="row">
    <div class="col">
        <div class="container-1">
            <!-- Contenido de la vista frontal -->
            <h1 class="h1">BIENVENIDO A HOTDEALS!</h1>
            <div class="logo-container">
                <div class="logo">
                    <img src="{{ asset('img/logoblanco.png') }}" alt="Descripción de la Imagen" textprimary="white">
                </div>
            </div>
        </div>
        
        <div class="container-2">
            <form class="form" method="POST" action="">
                @csrf
                {{-- Usuario --}}
                <div class="input-group" id="text">
                    <label for="user">Usuario</label>
                    <input type="text" name="user" id="user" placeholder="">
                </div>
                {{-- Contraseña --}}
                <div class="input-group" id="text">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" placeholder="">
                    <br>

                    {{-- Botón iniciar --}}
                    <div class="content-align-center">
                        <button class="submit">Iniciar</button>
                    </div>
                    <div class="forgot mt-2">
                        <a rel="noopener noreferrer" href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                    <br>
                    <hr>
                    <br>
                </div>

            </form>
            {{-- Botones para iniciar sesion con redes sociales --}}
            <div class="mt-3">
                <h6 id="text-1">Inicia sesión con tus redes sociales</h6>
                <br>
                <br>
                <button class="btn btn-outline-primary w-100 mb-2" onclick="checkLoginState();" id="text">
                    Iniciar sesión con Facebook
                </button>
                    <br>
                    <br>
                <button class="btn btn-outline-danger w-100" id="text">
                    Iniciar sesión con Google
                </button>
            </div>
            
            <br>
            <hr>
            <br>

            <p class="signup" id="text">¿No tienes cuenta?
                <a rel="noopener noreferrer" href="/cuenta" class="">Registrarse</a>
            </p>
            <br>
            <div class="container-3" id="text">
                <a href="/" id="a">
                    volver
                </a>
            </div>
            <br>
            <br>
            <br>
            @error('message')
                <p class="--bs-danger-border-subtle --bs-danger-text-emphasis" id="text">
                    Error al iniciar sesion.
                </p>
            @enderror
        </div>
    </div>
</div>
                    `;
                }

            }

            adjustForm();

            window.addEventListener('resize', adjustForm);
        }
    </script>




    <script src="{{ asset('js/fbauth.js') }}"></script>
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
