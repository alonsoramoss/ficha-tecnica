<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ficha Técnica</title>
</head>
<body>
    <h1>Ficha Técnica: Mantenimiento / Soporte Técnico</h1>
    <p><strong>Unidad Orgánica:</strong> {{ $data->unidOrganica }}</p>
    <p><strong>Fecha:</strong> {{ $data->fecha }}</p>
    <p><strong>Responsable:</strong> {{ $data->encargado }}</p>
    <p><strong>Cargo:</strong> {{ $data->cargo }}</p>
    <p><strong>DNI:</strong> {{ $data->dni }}</p>
    <p><strong>Modalidad Laboral:</strong> {{ $data->modalidadLab }}</p>
    <p><strong>Nombre del Técnico:</strong> {{ $data->nomTecnico }}</p>
    <p><strong>Hardware:</strong> {{ $data->hardware }}</p>
    <p><strong>Sistemas:</strong> {{ $data->sistemas }}</p>
    <p><strong>Software:</strong> {{ $data->software }}</p>
    <p><strong>Redes:</strong> {{ $data->redes }}</p>
    <p><strong>Observación:</strong> {{ $data->observacion }}</p>
</body>
</html>
