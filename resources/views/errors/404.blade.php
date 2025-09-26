@extends("layouts.simple")

@section("title", "Página no encontrada - Ficha Técnica")
@section("meta_description", "La página que buscas no existe. Vuelve al inicio para continuar registrando, generando y gestionando fichas técnicas de manera automatizada y optimizada.")

@section("content")
    <div class="container">
        <h1>404</h1>
        <h2>Página no encontrada</h2>
        <p>Verifica la dirección URL o vuelve al inicio.</p>
        <button class="button" onclick="window.location.href='{{ url('/') }}'">Volver al inicio</button>
    </div>
@endsection

@push("styles")
    @vite("resources/css/error.css")
@endpush
