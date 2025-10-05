@extends("layouts.app")

@section("title", "Editar datos")

@section("content")
<div class="container">
    <h3>EDITAR DATOS</h3>
    <form id="formFicha" name="formFicha" action="{{ route("datos.update", $dato->id) }}" method="POST" class="p-4 p-md-5 border shadow-lg">
        @csrf
        @method("PUT")

        <div class="mb-4">
            <label for="nomFicha" class="form-label fw-semibold">FICHA TÉCNICA</label>
            <select id="nomFicha" name="nomFicha" class="form-select" required>
                <option value="" disabled>Seleccione una ficha técnica</option>
                <option value="SOPORTE TÉCNICO" {{ old("nomFicha", $dato->nomFicha) == "SOPORTE TÉCNICO" ? "selected" : "" }}>SOPORTE TÉCNICO</option>
                <option value="MANTENIMIENTO / SOPORTE TÉCNICO" {{ old("nomFicha", $dato->nomFicha) == "MANTENIMIENTO / SOPORTE TÉCNICO" ? "selected" : "" }}>MANTENIMIENTO / SOPORTE TÉCNICO</option>
                <option value="INSTALACIÓN DE EQUIPO DE CÓMPUTO Y/O PERIFÉRICO" {{ old("nomFicha", $dato->nomFicha) == "INSTALACIÓN DE EQUIPO DE CÓMPUTO Y/O PERIFÉRICO" ? "selected" : "" }}>INSTALACIÓN DE EQUIPO DE CÓMPUTO Y/O PERIFÉRICO</option>
                <option value="BAJA DE EQUIPO Y/O SOPORTE TÉCNICO" {{ old("nomFicha", $dato->nomFicha) == "BAJA DE EQUIPO Y/O SOPORTE TÉCNICO" ? "selected" : "" }}>BAJA DE EQUIPO Y/O SOPORTE TÉCNICO</option>
            </select>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-12 col-md">
                <label for="unidOrganica" class="form-label fw-semibold">UNIDAD ORGÁNICA</label>
                <input type="text" id="unidOrganica" name="unidOrganica" value="{{ old("unidOrganica", $dato->unidOrganica) }}" class="form-control" required>
            </div>

            <div class="col-12 col-md">
                <label for="fecha" class="form-label fw-semibold">FECHA</label>
                <input type="date" id="fecha" name="fecha" value="{{ old("fecha", $dato->fecha) }}" class="form-control" max="{{ date('Y-m-d') }}" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="encargado" class="form-label fw-semibold">ENCARGADO O RESPONSABLE</label>
            <input type="text" id="encargado" name="encargado" value="{{ old("encargado", $dato->encargado) }}" class="form-control" required>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-12 col-md">
                <label for="cargo" class="form-label fw-semibold">CARGO</label>
                <input type="text" id="cargo" name="cargo" value="{{ old("cargo", $dato->cargo) }}" class="form-control" required>
            </div>

            <div class="col-12 col-md">
                <label for="dni" class="form-label fw-semibold">DNI</label>
                <input type="text" id="dni" name="dni" value="{{ old("dni", $dato->dni) }}" class="form-control" inputmode="numeric" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="modalidadLab" class="form-label fw-semibold">MODALIDAD LABORAL</label>
            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <label class="text-decoration-underline mb-2">Empleado</label><br>
                    <div class="form-check d-block d-sm-inline-block me-3">
                        <input type="radio" id="empleadoPermanente" name="modalidadLab" value="Empleado Permanente" class="form-check-input"
                            {{ old("modalidadLab", $dato->modalidadLab) == "Empleado Permanente" ? "checked" : "" }}>
                        <label for="empleadoPermanente" class="form-check-label">Permanente</label>
                    </div>
                    <div class="form-check d-block d-sm-inline-block me-3">
                        <input type="radio" id="empleadoContratado" name="modalidadLab" value="Empleado Contratado" class="form-check-input"
                            {{ old("modalidadLab", $dato->modalidadLab) == "Empleado Contratado" ? "checked" : "" }}>
                        <label for="empleadoContratado" class="form-check-label">Contratado</label>
                    </div>
                    <div class="form-check d-block d-sm-inline-block me-3">
                        <input type="radio" id="empleadoCAS" name="modalidadLab" value="Empleado CAS" class="form-check-input"
                            {{ old("modalidadLab", $dato->modalidadLab) == "Empleado CAS" ? "checked" : "" }}>
                        <label for="empleadoCAS" class="form-check-label">CAS</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <label class="text-decoration-underline mb-2">Obrero</label><br>
                    <div class="form-check d-block d-sm-inline-block me-3">
                        <input type="radio" id="obreroPermanente" name="modalidadLab" value="Obrero Permanente" class="form-check-input"
                            {{ old("modalidadLab", $dato->modalidadLab) == "Obrero Permanente" ? "checked" : "" }}>
                        <label for="obreroPermanente" class="form-check-label">Permanente</label>
                    </div>
                    <div class="form-check d-block d-sm-inline-block me-3">
                        <input type="radio" id="obreroContratado" name="modalidadLab" value="Obrero Contratado" class="form-check-input"
                            {{ old("modalidadLab", $dato->modalidadLab) == "Obrero Contratado" ? "checked" : "" }}>
                        <label for="obreroContratado" class="form-check-label">Contratado</label>
                    </div>
                    <div class="form-check d-block d-sm-inline-block me-3">
                        <input type="radio" id="obreroCAS" name="modalidadLab" value="Obrero CAS" class="form-check-input"
                            {{ old("modalidadLab", $dato->modalidadLab) == "Obrero CAS" ? "checked" : "" }}>
                        <label for="obreroCAS" class="form-check-label">CAS</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4">
            <label for="nomTecnico" class="form-label fw-semibold">NOMBRE DEL TÉCNICO</label>
            <input type="text" id="nomTecnico" name="nomTecnico" value="{{ old("nomTecnico", $dato->nomTecnico) }}" class="form-control" required>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6">
                <label class="form-label fw-semibold">HARDWARE</label>

                @php
                    $hardwareItems = [
                        "CPU y/o Laptop",
                        "Monitor",
                        "Teclado",
                        "Mouse",
                        "Estabilizador",
                        "Impresora",
                        "Supresor de Pico",
                        "Otros",
                    ];
                @endphp

                @foreach ($hardwareItems as $item)
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">{{ $item }}</span>
                            <input type="checkbox"
                                id="hardware_{{ Str::slug($item, '_') }}"
                                name="hardware[]"
                                value="{{ $item }}"
                                class="form-check-input mt-0 ms-2"
                                {{ in_array($item, (array) old("hardware", $dato->hardware)) ? "checked" : "" }}>
                        </div>
                        <input type="text"
                            id="hardware_text_{{ Str::slug($item, '_') }}"
                            name="hardware_text[{{ $item }}]"
                            value="{{ old("hardware_text.$item", $dato->hardware_text[$item] ?? '') }}"
                            class="form-control"
                            {{ in_array($item, (array) old("hardware", $dato->hardware)) ? "" : "disabled" }}>
                    </div>
                @endforeach
            </div>

            <div class="col-12 col-lg-6">
                <label class="form-label fw-semibold">SISTEMAS Y/O APLICATIVOS</label>

                @php
                    $sistemasItems = [
                        "SIAF",
                        "SIGA",
                        "Sistema Registro Civil",
                        "RUBEM",
                        "RUB PVL 20",
                        "SISPLA",
                        "Supresor Via Web",
                        "Otros",
                    ];
                @endphp

                @foreach ($sistemasItems as $item)
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">{{ $item }}</span>
                            <input type="checkbox"
                                id="sistemas_{{ Str::slug($item, '_') }}"
                                name="sistemas[]"
                                value="{{ $item }}"
                                class="form-check-input mt-0 ms-2"
                                {{ in_array($item, (array) old("sistemas", $dato->sistemas)) ? "checked" : "" }}>
                        </div>
                        <input type="text"
                            id="sistemas_text_{{ Str::slug($item, '_') }}"
                            name="sistemas_text[{{ $item }}]"
                            value="{{ old("sistemas_text.$item", $dato->sistemas_text[$item] ?? '') }}"
                            class="form-control"
                            {{ in_array($item, (array) old("sistemas", $dato->sistemas)) ? "" : "disabled" }}>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <label class="form-label fw-semibold">SOFTWARE</label>

                @php
                    $softwareItems = [
                        "Sistema Operativo",
                        "Word",
                        "Excel",
                        "Power Point",
                        "Internet",
                        "Antivirus",
                        "Otros",
                    ];
                @endphp

                @foreach ($softwareItems as $item)
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">{{ $item }}</span>
                            <input type="checkbox"
                                id="software_{{ Str::slug($item, '_') }}"
                                name="software[]"
                                value="{{ $item }}"
                                class="form-check-input mt-0 ms-2"
                                {{ in_array($item, (array) old("software", $dato->software)) ? "checked" : "" }}>
                        </div>
                        <input type="text"
                            id="software_text_{{ Str::slug($item, '_') }}"
                            name="software_text[{{ $item }}]"
                            value="{{ old("software_text.$item", $dato->software_text[$item] ?? '') }}"
                            class="form-control"
                            {{ in_array($item, (array) old("software", $dato->software)) ? "" : "disabled" }}>
                    </div>
                @endforeach
            </div>

            <div class="col-12 col-lg-6">
                <label class="form-label fw-semibold">REDES</label>

                @php
                    $redesItems = [
                        "Internet",
                        "Modem",
                        "Router",
                        "Switch",
                        "Cableado",
                        "Otros",
                    ];
                @endphp

                @foreach ($redesItems as $item)
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">{{ $item }}</span>
                            <input type="checkbox"
                                id="redes_{{ Str::slug($item, '_') }}"
                                name="redes[]"
                                value="{{ $item }}"
                                class="form-check-input mt-0 ms-2"
                                {{ in_array($item, (array) old("redes", $dato->redes)) ? "checked" : "" }}>
                        </div>
                        <input type="text"
                            id="redes_text_{{ Str::slug($item, '_') }}"
                            name="redes_text[{{ $item }}]"
                            value="{{ old("redes_text.$item", $dato->redes_text[$item] ?? '') }}"
                            class="form-control"
                            {{ in_array($item, (array) old("redes", $dato->redes)) ? "" : "disabled" }}>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-1 mb-4">
            <label for="observacion" class="form-label fw-semibold">OBSERVACIÓN</label>
            <textarea id="observacion" name="observacion" class="form-control" rows="3" required>{{ old("observacion", $dato->observacion) }}</textarea>
        </div>

        <div class="d-flex justify-content-center justify-content-sm-end">
            <button type="submit" class="btn btn-success btn-md me-3">Actualizar</button>
            <a href="{{ url("/datos") }}" class="btn btn-danger btn-md">Cancelar</a>
        </div>
    </form>
</div>
@endsection

@push("scripts")
    @vite("resources/js/pages/edit_datos.js")
@endpush
