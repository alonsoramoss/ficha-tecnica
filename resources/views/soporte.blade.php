@extends("layouts.app")

@section("title", "Ficha Técnica")

@section("content")
    <div class="container">
        <form id="formFicha" name="formFicha" action="{{ route("guardar") }}" method="POST" class="p-4 p-sm-5 border shadow-lg">
            @csrf
            <div class="row mb-4">
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img src="{{ asset("img/municipalidad-pisco.png") }}" alt="Municipalidad de Pisco" class="img-fluid mb-4 mb-sm-5" style="width: 19rem;">
                </div>
                <div class="col-12 col-md-8">
                    <label for="nomFicha" class="form-label fw-semibold">FICHA TÉCNICA</label>
                    <select id="nomFicha" name="nomFicha" class="form-select" required>
                        <option value="" selected disabled>Seleccione una ficha técnica</option>
                        <option value="SOPORTE TÉCNICO">SOPORTE TÉCNICO</option>
                        <option value="MANTENIMIENTO / SOPORTE TÉCNICO">MANTENIMIENTO / SOPORTE TÉCNICO</option>
                        <option value="INSTALACIÓN DE EQUIPO DE CÓMPUTO Y/O PERIFÉRICO">INSTALACIÓN DE EQUIPO DE CÓMPUTO Y/O PERIFÉRICO</option>
                        <option value="BAJA DE EQUIPO Y/O SOPORTE TÉCNICO">BAJA DE EQUIPO Y/O SOPORTE TÉCNICO</option>
                    </select>
                </div>
            </div>

            <h5 class="fw-semibold mb-3 text-center text-sm-start">INFORMACIÓN GENERAL</h5>
            <div class="row mb-3">
                <div class="col">
                    <label for="unidOrganica" class="form-label fw-semibold">UNIDAD ORGÁNICA</label>
                    <input type="text" id="unidOrganica" name="unidOrganica" class="form-control" required>
                </div>
                <div class="col">
                    <label for="fecha" class="form-label fw-semibold">FECHA</label>
                    <input type="date" id="fecha" name="fecha" class="form-control" max="{{ date('Y-m-d') }}" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="encargado" class="form-label fw-semibold">ENCARGADO O RESPONSABLE</label>
                <input type="text" id="encargado" name="encargado" class="form-control" required>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="cargo" class="form-label fw-semibold">CARGO</label>
                    <input type="text" id="cargo" name="cargo" class="form-control" required>
                </div>
                <div class="col">
                    <label for="dni" class="form-label fw-semibold">DNI</label>
                    <input type="text" id="dni" name="dni" class="form-control" inputmode="numeric" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="modalidadLab" class="form-label fw-semibold">MODALIDAD LABORAL</label>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label class="text-decoration-underline mb-1">Empleado</label> <br>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="empleadoPermanente" name="modalidadLab" value="Empleado Permanente" class="form-check-input" required>
                            <label for="empleadoPermanente" class="form-check-label">Permanente</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="empleadoContratado" name="modalidadLab" value="Empleado Contratado" class="form-check-input" required>
                            <label for="empleadoContratado" class="form-check-label">Contratado</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="empleadoCAS" name="modalidadLab" value="Empleado CAS" class="form-check-input" required>
                            <label for="empleadoCAS" class="form-check-label">CAS</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="text-decoration-underline mb-1">Obrero</label> <br>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="obreroPermanente" name="modalidadLab" value="Obrero Permanente" class="form-check-input" required>
                            <label for="obreroPermanente" class="form-check-label">Permanente</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="obreroContratado" name="modalidadLab" value="Obrero Contratado" class="form-check-input" required>
                            <label for="obreroContratado" class="form-check-label">Contratado</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="obreroCAS" name="modalidadLab" value="Obrero CAS" class="form-check-input" required>
                            <label for="obreroCAS" class="form-check-label">CAS</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="nomTecnico" class="form-label fw-semibold">NOMBRE DEL TÉCNICO</label>
                <input type="text" id="nomTecnico" name="nomTecnico" class="form-control" required>
            </div>

            <h5 class="fw-semibold mb-3 text-center text-sm-start">CONSTANCIA DE ATENCIÓN DEL SERVICIO DE SOPORTE TÉCNICO</h5>
            <p class="text-ficha">Consta por el presente, haber realizado el Servicio Técnico de lo siguiente:</p>
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label class="form-label fw-semibold">HARDWARE</label>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">CPU y/o Laptop</span>
                            <input type="checkbox" id="hardware_cpu" name="hardware[]" value="CPU y/o Laptop" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="hardware_text_cpu" name="hardware_text[CPU y/o Laptop]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Monitor</span>
                            <input type="checkbox" id="hardware_monitor" name="hardware[]" value="Monitor" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="hardware_text_monitor" name="hardware_text[Monitor]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Teclado</span>
                            <input type="checkbox" id="hardware_teclado" name="hardware[]" value="Teclado" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="hardware_text_teclado" name="hardware_text[Teclado]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Mouse</span>
                            <input type="checkbox" id="mouse" name="hardware[]" value="Mouse" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="mouse" name="hardware_text[Mouse]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Estabilizador</span>
                            <input type="checkbox" id="hardware_estabilizador" name="hardware[]" value="Estabilizador" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="hardware_text_estabilizador" name="hardware_text[Estabilizador]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Impresora</span>
                            <input type="checkbox" id="hardware_impresora" name="hardware[]" value="Impresora" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="hardware_text_impresora" name="hardware_text[Impresora]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Supresor de Pico</span>
                            <input type="checkbox" id="hardware_supresor_pico" name="hardware[]" value="Supresor de Pico" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="hardware_text_supresor_pico" name="hardware_text[Supresor de Pico]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Otros</span>
                            <input type="checkbox" id="hardware_otros" name="hardware[]" value="Otros" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="hardware_text_otros" name="hardware_text[Otros]" class="form-control" disabled>
                    </div>
                </div>

                <div id="sistemas" name="sistemas" class="col mb-3">
                    <label for="sistemas" class="form-label fw-semibold">SISTEMAS Y/O APLICATIVOS</label>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">SIAF</span>
                            <input type="checkbox" id="sistemas_siaf" name="sistemas[]" value="SIAF" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="sistemas_text_siaf" name="sistemas_text[SIAF]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">SIGA</span>
                            <input type="checkbox" id="sistemas_siga" name="sistemas[]" value="SIGA" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="sistemas_text_siga" name="sistemas_text[SIGA]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Sistema Registro Civil</span>
                            <input type="checkbox" id="sistemas_registro_civil" name="sistemas[]" value="Sistema Registro Civil" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="sistemas_text_registro_civil" name="sistemas_text[Sistema Registro Civil]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">RUBEM</span>
                            <input type="checkbox" id="sistemas_rubem" name="sistemas[]" value="RUBEM" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="sistemas_text_rubem" name="sistemas_text[RUBEM]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">RUB PVL 20</span>
                            <input type="checkbox" id="sistemas_rub_pvl_20" name="sistemas[]" value="RUB PVL 20" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="sistemas_text_rub_pvl_20" name="sistemas_text[RUB PVL 20]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">SISPLA</span>
                            <input type="checkbox" id="sistemas_sispla" name="sistemas[]" value="SISPLA" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="sistemas_text_sispla" name="sistemas_text[SISPLA]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Supresor Vía Web</span>
                            <input type="checkbox" id="sistemas_supresor_via_web" name="sistemas[]" value="Supresor Via Web" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="sistemas_text_supresor_via_web" name="sistemas_text[Supresor Via Web]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Otros</span>
                            <input type="checkbox" id="sistemas_otros" name="sistemas[]" value="Otros" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="sistemas_text_otros" name="sistemas_text[Otros]" class="form-control" disabled>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div id="software" name="software" class="col">
                    <label for="software" class="form-label fw-semibold">SOFTWARE</label>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Sistema Operativo</span>
                            <input type="checkbox" id="software_sistema_operativo" name="software[]" value="Sistema Operativo" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="software_text_sistema_operativo" name="software_text[Sistema Operativo]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Word</span>
                            <input type="checkbox" id="software_word" name="software[]" value="Word" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="software_text_word" name="software_text[Word]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Excel</span>
                            <input type="checkbox" id="software_excel" name="software[]" value="Excel" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="software_text_excel" name="software_text[Excel]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Power Point</span>
                            <input type="checkbox" id="software_power_point" name="software[]" value="Power Point" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="software_text_power_point" name="software_text[Power Point]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Internet</span>
                            <input type="checkbox" id="software_internet" name="software[]" value="Internet" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="software_text_internet" name="software_text[Internet]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Antivirus</span>
                            <input type="checkbox" id="software_antivirus" name="software[]" value="Antivirus" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="software_text_antivirus" name="software_text[Antivirus]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Otros</span>
                            <input type="checkbox" id="software_otros" name="software[]" value="Otros" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="software_text_otros" name="software_text[Otros]" class="form-control" disabled>
                    </div>
                </div>
                
                <div id="redes" name="redes" class="col">
                    <label for="redes" class="form-label fw-semibold">REDES</label>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Internet</span>
                            <input type="checkbox" id="redes_internet" name="redes[]" value="Internet" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="redes_text_internet" name="redes_text[Internet]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Modem</span>
                            <input type="checkbox" id="redes_modem" name="redes[]" value="Modem" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="redes_text_modem" name="redes_text[Modem]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Router</span>
                            <input type="checkbox" id="redes_router" name="redes[]" value="Router" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="redes_text_router" name="redes_text[Router]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Switch</span>
                            <input type="checkbox" id="redes_switch" name="redes[]" value="Switch" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="redes_text_switch" name="redes_text[Switch]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Cableado</span>
                            <input type="checkbox" id="redes_cableado" name="redes[]" value="Cableado" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="redes_text_cableado" name="redes_text[Cableado]" class="form-control" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text d-flex align-items-center justify-content-between w-50">
                            <span class="text-truncate">Otros</span>
                            <input type="checkbox" id="redes_otros" name="redes[]" value="Otros" class="form-check-input mt-0 ms-2">
                        </div>
                        <input type="text" id="redes_text_otros" name="redes_text[Otros]" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="mb-4 mb-sm-5">
                <label for="observacion" class="form-label fw-semibold">OBSERVACIÓN</label>
                <textarea id="observacion" name="observacion" class="form-control" rows="3" required></textarea>
            </div>
            <div class="d-grid mx-auto col-8 col-md-6 col-lg-4">
                <button type="submit" class="btn btn-primary btn-lg fw-semibold">Guardar</button>  
            </div>
        </form>
    </div>
@endsection

@push("scripts")
    @vite("resources/js/pages/soporte.js")
@endpush
