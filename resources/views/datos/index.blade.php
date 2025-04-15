@extends('layouts.app')

@section('title', 'Datos')

@section('content')
<div>
    <h3>LISTA DE DATOS</h3>
    @if (session('success'))
        <div id="alerta-datos" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form id="form-buscar">
        <div class="form-group">
            <input type="text" name="buscar" id="buscar" placeholder="Buscar..." class="form-control">
        </div>
    </form>
    
    <div class="table-container">
        <table class="table table-bordered table-hover mt-3 align-middle" id="tabla-datos">
            <thead class="table-dark text-center align-middle">
                <tr>
                    <th>#</th>
                    <th>Ficha Técnica</th>
                    <th>Unidad Orgánica</th>
                    <th>Fecha</th>
                    <th>Encargado</th>
                    <th>Cargo</th>
                    <th>DNI</th>
                    <th>Modalidad Laboral</th>
                    <th>Nombre del Técnico</th>
                    <th>Hardware</th>
                    <th>Especificación de Hardware</th>
                    <th>Sistemas y/o Aplicativos</th>
                    <th>Especificación de Sistemas y/o Aplicativos</th>
                    <th>Software</th>
                    <th>Especificación de Software</th>
                    <th>Redes</th>
                    <th>Especificación de Redes</th>
                    <th>Observación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $dato)
                    <tr>
                        <td>{{ $dato->id }}</td>
                        <td>{{ $dato->nomFicha }}</td>
                        <td>{{ $dato->unidOrganica }}</td>
                        <td class="text-center" style="min-width: 100px">{{ $dato->fecha }}</td>
                        <td>{{ $dato->encargado }}</td>
                        <td>{{ $dato->cargo }}</td>
                        <td class="text-center">{{ $dato->dni }}</td>
                        <td>{{ $dato->modalidadLab }}</td>
                        <td>{{ $dato->nomTecnico }}</td>
                        <td>{{ is_array($dato->hardware) ? implode(', ', $dato->hardware) : $dato->hardware }}</td>
                        <td>{{ is_array($dato->hardware_text) ? implode(', ', $dato->hardware_text) : $dato->hardware_text }}</td>
                        <td>{{ is_array($dato->sistemas) ? implode(', ', $dato->sistemas) : $dato->sistemas }}</td>
                        <td>{{ is_array($dato->sistemas_text) ? implode(', ', $dato->sistemas_text) : $dato->sistemas_text }}</td>
                        <td>{{ is_array($dato->software) ? implode(', ', $dato->software) : $dato->software }}</td>
                        <td>{{ is_array($dato->software_text) ? implode(', ', $dato->software_text) : $dato->software_text }}</td>
                        <td>{{ is_array($dato->redes) ? implode(', ', $dato->redes) : $dato->redes }}</td>
                        <td>{{ is_array($dato->redes_text) ? implode(', ', $dato->redes_text) : $dato->redes_text }}</td>
                        <td>{{ $dato->observacion }}</td>
                        <td class="text-center">
                            <a href="{{ route('datos.edit', $dato->id) }}" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $datos->links() }}
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/tabla.js')}}" defer></script>
@endpush
