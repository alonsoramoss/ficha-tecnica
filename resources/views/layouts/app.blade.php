<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Ficha Técnica' )</title>
        <meta name="description" content="Sistema para automatizar y optimizar el registro, generación y gestión de fichas técnicas en el área de soporte técnico de la Municipalidad Provincial de Pisco.">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preload" href="/fonts/Montserrat.woff2" as="font" type="font/woff2" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <nav class="navbar bg-body-tertiary border-bottom">
            <div class="container-fluid mx-0 mx-sm-3">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('img/municipalidad-pisco.png') }}"
                    class="img-navbar" alt="Municipalidad de Pisco">
                </a>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="fw-semibold link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" aria-label="Ir a Ficha Técnica">FICHA TÉCNICA</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a href="{{ url('/datos') }}" class="fw-semibold link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" aria-label="Ir a Datos">DATOS</a>
                    </li>    
                </ul>
            </div>
        </nav>
        <div class="p-3 p-sm-5">
            @yield('content')
        </div>
        @stack('scripts')
    </body>
</html>
