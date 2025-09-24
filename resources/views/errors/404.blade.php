@extends("layouts.simple")

@section("title", "Página no encontrada - 404")
@section("meta_description", "La página que buscas no existe. Vuelve al inicio para continuar navegando en el sistema para automatizar y optimizar el registro, generación y gestión de fichas técnicas en el área de soporte técnico de la Municipalidad Provincial de Pisco.")

@section("content")
    <div class="container">
        <h1>404</h1>
        <h2>La página que estás buscando no existe</h2>
        <p>Verifica la dirección o vuelve al inicio</p>
        <button class="button" onclick="window.location.href='{{ url('/') }}'">Volver al inicio</button>
    </div>
@endsection

@push("styles")
    @vite("resources/css/error.css")
@endpush
