<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Ficha Técnica' )</title>
        <meta name="description" content="Sistema web para registrar y gestionar fichas técnicas del área de soporte técnico de la Municipalidad Provincial de Pisco.">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <nav class="navbar bg-body-tertiary border-bottom">
            <div class="container-fluid mx-0 mx-sm-3">
                <a class="navbar-brand" href="/">
                    <img src="{{ url('img/muniPisco_logo.webp') }}"
                    class="img-navbar" alt="MunicipalidadPisco">
                </a>
                <p class="mb-0 text-navbar">
                    <a class="fw-semibold link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" aria-current="fichaTecnica" href="{{ url('/') }}">FICHA TÉCNICA</a>
                    <a class="fw-semibold ms-3 link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" aria-current="datos" href="{{ url('/datos') }}">DATOS</a>
                </p>
            </div>
        </nav>
        <div class="p-3 p-sm-5">
            @yield('content')
        </div>
        @stack('scripts')
    </body>
</html>
