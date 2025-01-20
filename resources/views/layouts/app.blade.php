<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ficha Técnica' )</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar bg-body-tertiary border-bottom">
        <div class="container-fluid mx-3">
            <a class="navbar-brand" href="/">
                <img src="https://s3.amazonaws.com/documentos.api.gob.pe/nly7xd7anwwu30oi20ad6g49umzt?response-content-disposition=inline%3B%20filename%3D%22LOGO%20MPP%20JUNTOS%20HAREMOS%20HISTORIA.png%22%3B%20filename%2A%3DUTF-8%27%27LOGO%2520MPP%2520JUNTOS%2520HAREMOS%2520HISTORIA.png&response-content-type=image%2Fpng&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJREKOSPKMJFYJDAQ%2F20250114%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20250114T152252Z&X-Amz-Expires=300&X-Amz-SignedHeaders=host&X-Amz-Signature=60d74ad6455b4877c5a8194e38cb9bde96cae0ae58ded447c413f4a4c27c438d" 
                class="img-fluid" alt="MunicipalidadPisco">
            </a>
            <p class="mb-0">
                <a class="fw-semibold link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" aria-current="fichaTecnica" href="{{ url('/') }}">FICHA TÉCNICA</a>
                <a class="fw-semibold ms-3 link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" aria-current="datos" href="{{ url('/datos') }}">DATOS</a>
            </p>
        </div>
    </nav>
    <div class="p-5">
        @yield('content')
    </div>
    @stack('scripts')
</body>
</html>
