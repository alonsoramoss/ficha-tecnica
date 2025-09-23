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
            <td>{{ is_array($dato->hardware) ? implode(", ", $dato->hardware) : $dato->hardware }}</td>
            <td>{{ is_array($dato->hardware_text) ? implode(", ", $dato->hardware_text) : $dato->hardware_text }}</td>
            <td>{{ is_array($dato->sistemas) ? implode(", ", $dato->sistemas) : $dato->sistemas }}</td>
            <td>{{ is_array($dato->sistemas_text) ? implode(", ", $dato->sistemas_text) : $dato->sistemas_text }}</td>
            <td>{{ is_array($dato->software) ? implode(", ", $dato->software) : $dato->software }}</td>
            <td>{{ is_array($dato->software_text) ? implode(", ", $dato->software_text) : $dato->software_text }}</td>
            <td>{{ is_array($dato->redes) ? implode(", ", $dato->redes) : $dato->redes }}</td>
            <td>{{ is_array($dato->redes_text) ? implode(", ", $dato->redes_text) : $dato->redes_text }}</td>
            <td>{{ $dato->observacion }}</td>
            <td class="text-center">
                <a href="{{ route("datos.edit", $dato->id) }}" class="btn btn-warning">Editar</a>
            </td>
        </tr>
    @endforeach
</tbody>
