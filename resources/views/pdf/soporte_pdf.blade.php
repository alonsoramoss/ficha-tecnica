<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ficha Técnica</title>
        <meta name="description" content="Sistema para automatizar y optimizar el registro, generación y gestión de fichas técnicas en el área de soporte técnico de la Municipalidad Provincial de Pisco.">
        <style>
            .container {
                font-family: Arial, Helvetica, sans-serif;
            }

            .header {
                position: relative;
                margin-top: 10px;
                margin-bottom: 20px;
            }

            .header img {
                position: absolute;
                top: -20px;
                left: 15px;
                width: 50px;
                height: auto;
            }

            .header .title {
                text-align: center;
                margin: 0;
            }

            .data-list1 {
                margin-top: 30px;
                margin-bottom: 20px;
                border: 1px solid #000;
                padding: 5px 25px;
            }

            .data-list1 h4 {
                margin: 15px 0;
            }

            p {
                font-size: 14px;
            }

            .data-list2 {
                margin-top: 20px;
                margin-bottom: 20px;
                border: 1px solid #000;
                padding: 5px 25px;
            }

            .data-list2 h4 {
                margin: 15px 0;
            }

            .data-list2 .observacion {
                margin-top: 0;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                padding-bottom: 20px; 
            }

            table th,
            table td {
                padding: 5px;
                border: 1px solid #ddd;
                text-align: left;
                font-size: 14px;
            }

            table th {
                background-color: #f4f4f4;
                font-weight: bold;
            }

            .firma-head {
                left: 0;
                padding-bottom: 15px
            }

            .firma {
                width: 100%;
                border-collapse: collapse;
                margin: 0;
            }

            .firma td {
                width: 33.33%;
                border: none;
                padding: 60px 10px;
                vertical-align: center;
            }

            .firma p {
                text-align: center;
                font-weight: normal;
            }

            .linea-firma {
                display: block;
                margin-top: 30px auto 1px auto;
                border-top: 1px solid #000;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="header">
                <img src="{{ public_path('img/escudo-pisco.png') }}" alt="Escudo de Pisco">
                <h3 class="title"> {{ $data->nomFicha }}</h3>
            </div>

            <div class="data-list1">
                <h4>INFORMACIÓN GENERAL</h4>
                <p><strong>Unidad Orgánica:</strong> {{ $data->unidOrganica }}</p>
                <p><strong>Fecha:</strong> {{ $data->fecha }}</p>
                <p><strong>Encargado o responsable:</strong> {{ $data->encargado }}</p>
                <p><strong>Cargo:</strong> {{ $data->cargo }}</p>
                <p><strong>DNI:</strong> {{ $data->dni }}</p>
                <p><strong>Modalidad Laboral:</strong> {{ $data->modalidadLab }}</p>
                <p><strong>Nombre del Técnico:</strong> {{ $data->nomTecnico }}</p>
            </div>

            <div class="data-list2">
                <h4>CONSTANCIA DE ATENCIÓN DEL SERVICIO DE SOPORTE TÉCNICO</h4>
                <p>Consta por el presente, haber realizado el Servicio Técnico de lo siguiente:</p>

                @if(!empty($data->hardware) || !empty($data->hardware_text))
                <table>
                    <tr>
                        <th>Hardware</th>
                        <th>Especificaciones</th>
                    </tr>
                    @foreach((array) $data->hardware as $index => $item)
                    <tr>
                        <td>{{ $item }}</td>
                        <td>
                            @isset($data->hardware_text[$item])
                                {{ $data->hardware_text[$item] }}
                            @else
                                No especificado
                            @endisset
                        </td>
                    </tr>
                    @endforeach
                </table>
                @endif
                
                @if(!empty($data->sistemas) || !empty($data->sistemas_text))
                <table>
                    <tr>
                        <th>Sistemas y/o Aplicativos</th>
                        <th>Especificaciones</th>
                    </tr>
                    @foreach((array) $data->sistemas as $index => $item)
                    <tr>
                        <td>{{ $item }}</td>
                        <td>
                            @isset($data->sistemas_text[$item])
                                {{ $data->sistemas_text[$item] }}
                            @else
                                No especificado
                            @endisset
                        </td>
                    </tr>
                    @endforeach
                </table>
                @endif
                
                @if(!empty($data->software) || !empty($data->software_text))
                <table>
                    <tr>
                        <th>Software</th>
                        <th>Especificaciones</th>
                    </tr>
                    @foreach((array) $data->software as $index => $item)
                    <tr>
                        <td>{{ $item }}</td>
                        <td>
                            @isset($data->software_text[$item])
                                {{ $data->software_text[$item] }}
                            @else
                                No especificado
                            @endisset
                        </td>
                    </tr>
                    @endforeach
                </table>
                @endif
                
                @if(!empty($data->redes) || !empty($data->redes_text))
                <table>
                    <tr>
                        <th>Redes</th>
                        <th>Especificaciones</th>
                    </tr>
                    @foreach((array) $data->redes as $index => $item)
                    <tr>
                        <td>{{ $item }}</td>
                        <td>
                            @isset($data->redes_text[$item])
                                {{ $data->redes_text[$item] }}
                            @else
                                No especificado
                            @endisset
                        </td>
                    </tr>
                    @endforeach
                </table>
                @endif

                <p class="observacion"><strong>Observación:</strong> {{ $data->observacion }}</p>
            </div>

            <p class="firma-head">Firman en señal de conformidad</p>
            <table class="firma">
                <tr>
                    <td>
                        <span class="linea-firma"></span>
                        <p>Soporte Técnico</p>
                    </td>
                    <td>
                        <span class="linea-firma"></span>
                        <p>Jefe o Superior Inmediato</p>
                    </td>
                    <td>
                        <span class="linea-firma"></span>
                        <p>Encargado o Responsable del Área</p>
                    </td>
                </tr>
            </table>        
        </div>
    </body>
</html>
