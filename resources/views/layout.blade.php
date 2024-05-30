<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titulo')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            /* Estilo adicional para asegurar que no haya contenido extra */
            .text-reset {
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <!-- <h1>Home</h1> -->
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="nosotros">Nosotros</a></li>
                <li><a href="servicios">Servicios</a></li>
                <li><a href="contacto">Contacto</a></li>
            </
        </nav>        
        
        @yield('content')


        {{-- @include('partials.navbar')
        <div class="container">
            @yield('content')
        </div>
        @include('partials.footer') --}}

    </body>
</html>