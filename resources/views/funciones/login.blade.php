<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXhW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/card.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, quibusdam. Enim ipsa ullam blanditiis dignissimos id fugit sapiente consequuntur consectetur corrupti vitae, quo at itaque! Veniam voluptates vitae numquam. Deleniti..</p>

                <button class="next-btn" onclick="flipCard()">&#x27A1;</button> <!-- Flecha a la derecha -->
            </div>
            <div class="back">
                <div class="form-container">
                    <p class="title">Inicio de sesión</p>
                    <form class="form">
                        <div class="input-group">
                            <label for="username">Usuario</label>
                            <input type="text" name="username" id="username" placeholder="">
                        </div>
                        <div class="input-group">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" id="password" placeholder="">
                            <div class="forgot">
                                <a rel="noopener noreferrer" href="#">¿Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                        <div class="content-align-center">
                            <button class="sign">Iniciar</button>
                        </div>
                        
                    </form>
                    <div class="social-message">
                        <div class="line"></div>
                        <p class="message">Inicia sesión con:</p>
                        <div class="line"></div>
                    </div>
                    <div class="social-icons">
                        <button aria-label="Log in with Google" class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="w-5 h-5 fill-current">
                                <path d="M44.5 20H24v8.5h12.1C34.8 33.3 30 36.5 24 36.5c-6.6 0-12.1-4.4-14.1-10.4L6.4 29c2.7 7.6 9.8 13 17.6 13 10.5 0 19-8.6 19-19V24h-.1c0-.6-.1-1.3-.1-2z"/>
                                <path d="M9.9 24c0-1.4.2-2.7.7-3.9l-5.2-5.1C3.2 18.4 2 21.1 2 24s1.2 5.6 3.4 7.9l5.2-5C10.1 26.8 9.9 25.4 9.9 24z"/>
                                <path d="M24 9.5c3 0 5.7 1.1 7.8 3.1l5.8-5.8C33.8 3.7 29.2 2 24 2c-7.8 0-14.5 4.4-17.6 11l5.2 5.1C11.8 13.9 17 9.5 24 9.5z"/>
                                <path d="M44.5 20H24v8.5h12.1C34.8 33.3 30 36.5 24 36.5c-6.6 0-12.1-4.4-14.1-10.4L6.4 29c2.7 7.6 9.8 13 17.6 13 10.5 0 19-8.6 19-19V24h-.1c0-.6-.1-1.3-.1-2z"/>
                            </svg>
                        </button>
                        <button aria-label="Log in with Facebook" class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-5 h-5 fill-current">
                                <path d="M31.937 16C31.937 7.163 24.774 0 15.937 0S0 7.163 0 16c0 7.837 6.163 14.183 14.163 15.705v-11.09H9.847v-4.615h4.315v-3.45c0-4.3 2.627-6.652 6.494-6.652 1.862 0 3.467.139 3.934.2v4.566H21.16c-1.718 0-2.142.818-2.142 2.043v2.89h4.294l-.564 4.615h-3.73v11.01C25.805 30.136 32 23.811 32 16z"/>
                            </svg>
                        </button>
                    </div>
                    <p class="signup">¿No tienes cuenta?
                        <a rel="noopener noreferrer" href="/registro" class="">Registrarse</a>
                    </p>
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
