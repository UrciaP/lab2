<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titulo')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
        <style>
            /* Asegúrate de que solo los enlaces dentro de elementos con la clase 'activo' tengan los estilos aplicados */
            .activo > a {
                color: red;
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <!-- <h1>Home</h1> -->
        <nav>
            {{-- dump(request()->routeIs('servicios')) --}}
            <table class="table">
                @include('partials.navbar')
            </table>
        </nav>        
        
        @yield('content')
    </body>
</html>
