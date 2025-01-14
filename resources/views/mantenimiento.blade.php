<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Técnica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Ficha Técnica: Mantenimiento / Soporte Técnico</h1>
        <form method="POST" action="{{ route('guardar') }}">
            @csrf
            <div class="mb-3">
                <label for="unidOrganica" class="form-label">Unidad Orgánica</label>
                <input type="text" class="form-control" id="unidOrganica" name="unidOrganica" required>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="mb-3">
                <label for="encargado" class="form-label">Responsable</label>
                <input type="text" class="form-control" id="encargado" name="encargado" required>
            </div>
            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" class="form-control" id="cargo" name="cargo" required>
            </div>
            <div class="mb-3">
                <label for="dni" class="form-label">DNI</label>
                <input type="number" class="form-control" id="dni" name="dni" required>
            </div>
            <div class="mb-3">
                <label for="modalidadLab" class="form-label">Modalidad Laboral</label>
                <input type="text" class="form-control" id="modalidadLab" name="modalidadLab" required>
            </div>
            <div class="mb-3">
                <label for="nomTecnico" class="form-label">Nombre del Técnico</label>
                <input type="text" class="form-control" id="nomTecnico" name="nomTecnico" required>
            </div>
            <div class="mb-3">
                <label for="hardware" class="form-label">Hardware</label>
                <input type="text" class="form-control" id="hardware" name="hardware">
            </div>
            <div class="mb-3">
                <label for="sistemas" class="form-label">Sistemas</label>
                <input type="text" class="form-control" id="sistemas" name="sistemas">
            </div>
            <div class="mb-3">
                <label for="software" class="form-label">Software</label>
                <input type="text" class="form-control" id="software" name="software">
            </div>
            <div class="mb-3">
                <label for="redes" class="form-label">Redes</label>
                <input type="text" class="form-control" id="redes" name="redes">
            </div>
            <div class="mb-3">
                <label for="observacion" class="form-label">Observación</label>
                <textarea class="form-control" id="observacion" name="observacion" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Generar PDF</button>
        </form>
    </div>
</body>
</html>
