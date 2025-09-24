<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield("title", "Ficha Técnica" )</title>
        <meta name="description" content="@yield("meta_description", "Sistema para automatizar y optimizar el registro, generación y gestión de fichas técnicas en el área de soporte técnico de la Municipalidad Provincial de Pisco.")">
        
        @vite("resources/css/app.css")
        @stack("styles")
    </head>
    <body>
        <nav class="navbar bg-body-tertiary border-bottom">
            <div class="container-fluid mx-0 mx-sm-3">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset("img/municipalidad-pisco.png") }}"
                    class="img-navbar" alt="Municipalidad de Pisco">
                </a>
                <ul class="nav gap-3 gap-sm-4">
                    <li class="nav-item">
                        <a href="{{ url("/") }}" class="text-navbar fw-semibold link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" aria-label="Ir a Ficha Técnica">FICHA TÉCNICA</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url("/datos") }}" class="text-navbar fw-semibold link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" aria-label="Ir a Datos">DATOS</a>
                    </li>    
                </ul>
            </div>
        </nav>
        <main class="p-3 p-sm-5">
            @yield("content")
        </main>
        
        @stack("scripts")
    </body>
</html>
