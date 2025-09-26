@extends("layouts.app")

@section("title", "Editar datos")

@section("content")
<div class="container">
    <h3>EDITAR DATOS</h3>
    <form id="formFicha" name="formFicha" action="{{ route("datos.update", $dato->id) }}" method="POST">
        @csrf
        @method("PUT")

        <div class="mb-3">
            <label for="nomFicha" class="form-label fw-semibold">FICHA TÉCNICA</label>
            <input type="text" id="nomFicha" name="nomFicha" value="{{ old("nomFicha", $dato->nomFicha) }}" class="form-control" required>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="unidOrganica" class="form-label fw-semibold">UNIDAD ORGÁNICA</label>
                <input type="text" id="unidOrganica" name="unidOrganica" value="{{ old("unidOrganica", $dato->unidOrganica) }}" class="form-control" required>
            </div>

            <div class="col">
                <label for="fecha" class="form-label fw-semibold">FECHA</label>
                <input type="date" id="fecha" name="fecha" value="{{ old("fecha", $dato->fecha) }}" class="form-control" max="{{ date('Y-m-d') }}" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="encargado" class="form-label fw-semibold">ENCARGADO O RESPONSABLE</label>
            <input type="text" id="encargado" name="encargado" value="{{ old("encargado", $dato->encargado) }}" class="form-control" required>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="cargo" class="form-label fw-semibold">CARGO</label>
                <input type="text" id="cargo" name="cargo" value="{{ old("cargo", $dato->cargo) }}" class="form-control" required>
            </div>

            <div class="col">
                <label for="dni" class="form-label fw-semibold">DNI</label>
                <input type="text" id="dni" name="dni" value="{{ old("dni", $dato->dni) }}" class="form-control" inputmode="numeric" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="modalidadLab" class="form-label fw-semibold">MODALIDAD LABORAL</label>
            <input type="text" id="modalidadLab" name="modalidadLab" value="{{ old("modalidadLab", $dato->modalidadLab) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nomTecnico" class="form-label fw-semibold">NOMBRE DEL TÉCNICO</label>
            <input type="text" id="nomTecnico" name="nomTecnico" value="{{ old("nomTecnico", $dato->nomTecnico) }}" class="form-control" required>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="hardware" class="form-label fw-semibold">HARDWARE (separado por comas)</label>
                    <input type="text" id="hardware" name="hardware" value="{{ old("hardware", implode(", ", (array) $dato->hardware)) }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="hardware_text" class="form-label fw-semibold">ESPECIFICACIÓN DEL HARDWARE (separado por comas)</label>
                    <input type="text" id="hardware_text" name="hardware_text" value="{{ old("hardware_text", implode(", ", (array) $dato->hardware_text)) }}" class="form-control">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="sistemas" class="form-label fw-semibold">SISTEMAS Y/O APLICATIVOS (separado por comas)</label>
                    <input type="text" id="sistemas" name="sistemas" value="{{ old("sistemas", implode(", ", (array) $dato->sistemas)) }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="sistemas_text" class="form-label fw-semibold">ESPECIFICACIÓN DE SISTEMAS Y/O APLICATIVOS (separado por comas)</label>
                    <input type="text" id="sistemas_text" name="sistemas_text" value="{{ old("sistemas_text", implode(", ", (array) $dato->sistemas_text)) }}" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="software" class="form-label fw-semibold">SOFTWARE (separado por comas)</label>
                    <input type="text" id="software" name="software" value="{{ old("software", implode(", ", (array) $dato->software)) }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="software_text" class="form-label fw-semibold">ESPECIFICACIÓN DE SOFTWARE (separado por comas)</label>
                    <input type="text" id="software_text" name="software_text" value="{{ old("software_text", implode(", ", (array) $dato->software_text)) }}" class="form-control">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="redes" class="form-label fw-semibold">REDES (separado por comas)</label>
                    <input type="text" id="redes" name="redes" value="{{ old("redes", implode(", ", (array) $dato->redes)) }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="redes_text" class="form-label fw-semibold">ESPECIFICACIÓN DE REDES (separado por comas)</label>
                    <input type="text" id="redes_text" name="redes_text" value="{{ old("redes_text", implode(", ", (array) $dato->redes_text)) }}" class="form-control">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="observacion" class="form-label fw-semibold">OBSERVACIÓN</label>
            <textarea id="observacion" name="observacion" class="form-control" rows="3" required>{{ old("observacion", $dato->observacion) }}</textarea>
        </div>

        <div class="d-flex justify-content-center justify-content-sm-end">
            <button type="submit" class="btn btn-success btn-md me-2">Actualizar</button>
            <a href="{{ url("/datos") }}" class="btn btn-danger btn-md">Cancelar</a>
        </div>
    </form>
</div>
@endsection

@push("scripts")
    @vite("resources/js/pages/edit_datos.js")
@endpush
