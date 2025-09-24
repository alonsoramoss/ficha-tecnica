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
        <main class="p-3 p-sm-5">
            @yield("content")
        </main>
        
        @stack("scripts")
    </body>
</html>
