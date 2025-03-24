@extends('layouts.app')

@section('title', 'Ficha Técnica')

@section('content')
    <div class="container">
        <form class="p-4 p-sm-5 border shadow-lg" action="{{ route('guardar') }}" method="POST" id="formFicha">
        @csrf
            <div class="row mb-4">
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img src="{{ url('img/muniPisco_logo.webp') }}"
                    class="img-fluid mb-4 mb-sm-5" style="width: 19rem;" alt="MunicipalidadPisco">
                </div>
                <div class="col-12 col-md-8">
                    <label for="nomFicha" class="form-label fw-semibold">FICHA TÉCNICA</label>
                    <select class="form-select" name="nomFicha" id="nomFicha" required>
                        <option disabled selected>Seleccione una opción</option>
                        <option value="SOPORTE TÉCNICO">SOPORTE TÉCNICO</option>
                        <option value="MANTENIMIENTO / SOPORTE TÉCNICO">MANTENIMIENTO / SOPORTE TÉCNICO</option>
                        <option value="INSTALACION DE EQUIPO DE COMPUTO Y/O PERIFÉRICO">INSTALACIÓN DE EQUIPO DE CÓMPUTO Y/O PERIFÉRICO</option>
                        <option value="BAJA DE EQUIPO Y/O SOPORTE TÉCNICO">BAJA DE EQUIPO Y/O SOPORTE TÉCNICO</option>
                    </select>
                </div>
            </div>

            <h5 class="fw-semibold mb-3 text-center text-sm-start">INFORMACIÓN GENERAL</h5>
            <div class="row mb-3">
                <div class="col">
                    <label for="unidOrganica" class="form-label fw-semibold">UNIDAD ORGÁNICA</label>
                    <input type="text" class="form-control" id="unidOrganica" name="unidOrganica" required>
                </div>
                <div class="col">
                    <label for="fecha" class="form-label fw-semibold">FECHA</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="encargado" class="form-label fw-semibold">ENCARGADO O RESPONSABLE</label>
                <input type="text" class="form-control" id="encargado" name="encargado" required>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="cargo" class="form-label fw-semibold">CARGO</label>
                    <input type="text" class="form-control" id="cargo" name="cargo" required>
                </div>
                <div class="col">
                    <label for="dni" class="form-label fw-semibold">DNI</label>
                    <input type="number" class="form-control" id="dni" name="dni" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="modalidadLab" class="form-label fw-semibold">MODALIDAD LABORAL</label>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label class="text-decoration-underline mb-1">Empleado</label> <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="modalidadLab" id="empleadoPermanente" value="Empleado Permanente" required>
                            <label class="form-check-label" for="empleadoPermanente">Permanente</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="modalidadLab" id="empleadoContratado" value="Empleado Contratado" required>
                            <label class="form-check-label" for="empleadoContratado">Contratado</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="modalidadLab" id="empleadoCAS" value="Empleado CAS" required>
                            <label class="form-check-label" for="empleadoCAS">CAS</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="text-decoration-underline mb-1">Obrero</label> <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="modalidadLab" id="obreroPermanente" value="Obrero Permanente" required>
                            <label class="form-check-label" for="obreroPermanente">Permanente</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="modalidadLab" id="obreroContratado" value="Obrero Contratado" required>
                            <label class="form-check-label" for="obreroContratado">Contratado</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="modalidadLab" id="obreroCAS" value="Obrero CAS" required>
                            <label class="form-check-label" for="obreroCAS">CAS</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="nomTecnico" class="form-label fw-semibold">NOMBRE DEL TÉCNICO</label>
                <input type="text" class="form-control" id="nomTecnico" name="nomTecnico" required>
            </div>

            <h5 class="fw-semibold mb-3 text-center text-sm-start">CONSTANCIA DE ATENCIÓN DEL SERVICIO DE SOPORTE TÉCNICO</h5>
            <p class="text-ficha">Consta por el presente, haber realizado el Servicio Técnico de lo siguiente:</p>
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label class="form-label fw-semibold">HARDWARE</label>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            CPU y/o Laptop
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="hardware[]" id="hardware_cpu" value="CPU y/o Laptop">
                        </div>
                        <input type="text" class="form-control" id="hardware_text_cpu" name="hardware_text[CPU y/o Laptop]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Monitor
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="hardware[]" id="hardware_monitor" value="Monitor">
                        </div>
                        <input type="text" class="form-control" id="hardware_text_monitor" name="hardware_text[Monitor]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Teclado
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="hardware[]" id="hardware_teclado" value="Teclado">
                        </div>
                        <input type="text" class="form-control" id="hardware_text_teclado" name="hardware_text[Teclado]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Mouse
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="hardware[]" id="mouse" value="Mouse">
                        </div>
                        <input type="text" class="form-control" id="mouse" name="hardware_text[Mouse]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Estabilizador
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="hardware[]" id="hardware_estabilizador" value="Estabilizador">
                        </div>
                        <input type="text" class="form-control" id="hardware_text_estabilizador" name="hardware_text[Estabilizador]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Impresora
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="hardware[]" id="hardware_impresora" value="Impresora">
                        </div>
                        <input type="text" class="form-control" id="hardware_text_impresora" name="hardware_text[Impresora]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Supresor de Pico
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="hardware[]" id="hardware_supresor_pico" value="Supresor de Pico">
                        </div>
                        <input type="text" class="form-control" id="hardware_text_supresor_pico" name="hardware_text[Supresor de Pico]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Otros
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="hardware[]" id="hardware_otros" value="Otros">
                        </div>
                        <input type="text" class="form-control" id="hardware_text_otros" name="hardware_text[Otros]" disabled>
                    </div>
                </div>

                
                <div id="sistemas" name="sistemas" class="col mb-3">
                    <label for="sistemas" class="form-label fw-semibold">SISTEMAS Y/O APLICATIVOS</label>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            SIAF
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="sistemas[]" id="sistemas_siaf" value="SIAF">
                        </div>
                        <input type="text" class="form-control" id="sistemas_text_siaf" name="sistemas_text[SIAF]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            SIGA
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="sistemas[]" id="sistemas_siga" value="SIGA">
                        </div>
                        <input type="text" class="form-control" id="sistemas_text_siga" name="sistemas_text[SIGA]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Sistema Registro Civil
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="sistemas[]" id="sistemas_registro_civil" value="Sistema Registro Civil">
                        </div>
                        <input type="text" class="form-control" id="sistemas_text_registro_civil" name="sistemas_text[Sistema Registro Civil]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            RUBEM
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="sistemas[]" id="sistemas_rubem" value="RUBEM">
                        </div>
                        <input type="text" class="form-control" id="sistemas_text_rubem" name="sistemas_text[RUBEM]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            RUB PVL 20
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="sistemas[]" id="sistemas_rub_pvl_20" value="RUB PVL 20">
                        </div>
                        <input type="text" class="form-control" id="sistemas_text_rub_pvl_20" name="sistemas_text[RUB PVL 20]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            SISPLA
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="sistemas[]" id="sistemas_sispla" value="SISPLA">
                        </div>
                        <input type="text" class="form-control" id="sistemas_text_sispla" name="sistemas_text[SISPLA]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Supresor Vía Web
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="sistemas[]" id="sistemas_supresor_via_web" value="Supresor Via Web">
                        </div>
                        <input type="text" class="form-control" id="sistemas_text_supresor_via_web" name="sistemas_text[Supresor Via Web]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Otros
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="sistemas[]" id="sistemas_otros" value="Otros">
                        </div>
                        <input type="text" class="form-control" id="sistemas_text_otros" name="sistemas_text[Otros]" disabled>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div id="software" name="software" class="col">
                    <label for="software" class="form-label fw-semibold">SOFTWARE</label>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Sistema Operativo
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="software[]" id="software_sistema_operativo" value="Sistema Operativo">
                        </div>
                        <input type="text" class="form-control" id="software_text_sistema_operativo" name="software_text[Sistema Operativo]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Word
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="software[]" id="software_word" value="Word">
                        </div>
                        <input type="text" class="form-control" id="software_text_word" name="software_text[Word]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Excel
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="software[]" id="software_excel" value="Excel">
                        </div>
                        <input type="text" class="form-control" id="software_text_excel" name="software_text[Excel]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Power Point
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="software[]" id="software_power_point" value="Power Point">
                        </div>
                        <input type="text" class="form-control" id="software_text_power_point" name="software_text[Power Point]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Internet
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="software[]" id="software_internet" value="Internet">
                        </div>
                        <input type="text" class="form-control" id="software_text_internet" name="software_text[Internet]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Antivirus
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="software[]" id="software_antivirus" value="Antivirus">
                        </div>
                        <input type="text" class="form-control" id="software_text_antivirus" name="software_text[Antivirus]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Otros
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="software[]" id="software_otros" value="Otros">
                        </div>
                        <input type="text" class="form-control" id="software_text_otros" name="software_text[Otros]" disabled>
                    </div>
                </div>
                
                <div id="redes" name="redes" class="col">
                    <label for="redes" class="form-label fw-semibold">REDES</label>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Internet
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="redes[]" id="redes_internet" value="Internet">
                        </div>
                        <input type="text" class="form-control" id="redes_text_internet" name="redes_text[Internet]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Modem
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="redes[]" id="redes_modem" value="Modem">
                        </div>
                        <input type="text" class="form-control" id="redes_text_modem" name="redes_text[Modem]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Router
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="redes[]" id="redes_router" value="Router">
                        </div>
                        <input type="text" class="form-control" id="redes_text_router" name="redes_text[Router]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Switch
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="redes[]" id="redes_switch" value="Switch">
                        </div>
                        <input type="text" class="form-control" id="redes_text_switch" name="redes_text[Switch]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Cableado
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="redes[]" id="redes_cableado" value="Cableado">
                        </div>
                        <input type="text" class="form-control" id="redes_text_cableado" name="redes_text[Cableado]" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            Otros
                            <input class="form-check-input mt-0 ms-2" type="checkbox" name="redes[]" id="redes_otros" value="Otros">
                        </div>
                        <input type="text" class="form-control" id="redes_text_otros" name="redes_text[Otros]" disabled>
                    </div>
                </div>
            </div>
            <div class="mb-4 mb-sm-5">
                <label for="observacion" class="form-label fw-semibold">OBSERVACIÓN</label>
                <textarea class="form-control" id="observacion" name="observacion" rows="3" required></textarea>
            </div>
            <div class="d-grid mx-auto col-8 col-md-6 col-lg-4">
                <button type="submit" class="btn btn-primary btn-lg fw-semibold">Guardar</button>  
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/dni.js') }}" defer></script>
    <script src="{{ asset('js/checkbox.js') }}" defer></script>
    <script src="{{ asset('js/reset.js') }}" defer></script>
@endpush
