<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página no encontrada - 404</title>
        <meta name="description" content="Sistema web para registrar y gestionar fichas técnicas del área de soporte técnico de la Municipalidad Provincial de Pisco.">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/404.css') }}">
    </head>
    <body>
        <div class="container">
            <h1>404</h1>
            <h2>La página que estás buscando no existe</h2>
            <p>Verifica la dirección o vuelve a la <a href="{{ url('/') }}">página de inicio</a></p>
            <button class="button" onclick="window.location.href='{{ url('/') }}'">Volver a la página de inicio</button>
        </div>
    </body>
</html>
