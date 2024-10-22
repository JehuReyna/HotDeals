<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cuenta.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="cards-container">
        <div class="card">
            <div class="title-1">Como cliente:</div>
            <div class="content">
                Tendrás acceso a una variedad de productos y servicios ofrecidos por vendedores locales.
                Podrás descubrir nuevas ofertas, apoyar a los negocios autóctonos de tu comunidad y podrás hacer que los
                productos que tú buscas te encuenten!!
                Todo desde la comodidad de tu dispositivo.
            </div>
            <a class="btn" href="{{ route('register.index') }}">¡Iniciemos!</a>
            <div class="bar">
                <div class="emptybar"></div>
                <div class="filledbar"></div>
            </div>
        </div>
        <div class="card">
            <div class="title-1">Como vendedor:</div>
            <div class="content">
                Tendrás una plataforma para aumentar tu visibilidad y atraer a más clientes. Podrás
                listar tus productos y comunicarte directamente con tus compradores. Esta es una
                oportunidad perfecta para expandir tu negocio, mejorar tu presencia y alcanzar a una audiencia
                más amplia.
            </div>
            <a class="btn" href="{{ route('register.index') }}">¡Iniciemos!</a>
            <div class="bar">
                <div class="emptybar"></div>
                <div class="filledbar"></div>
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
