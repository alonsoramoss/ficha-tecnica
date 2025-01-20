<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoporteModel;
use Barryvdh\DomPDF\PDF;

class SoporteController extends Controller
{
    public function index()
    {
        return view('soporte');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nomFicha' => 'required',
            'unidOrganica' => 'required',
            'fecha' => 'required|date',
            'encargado' => 'required',
            'cargo' => 'required',
            'dni' => 'required|integer',
            'modalidadLab' => 'required',
            'nomTecnico' => 'required',
            'hardware' => 'nullable|array',
            'hardware_text' => 'nullable|array',
            'sistemas' => 'nullable|array',
            'sistemas_text' => 'nullable|array',
            'software' => 'nullable|array',
            'software_text' => 'nullable|array',
            'redes' => 'nullable|array',
            'redes_text' => 'nullable|array',
            'observacion' => 'required',
        ]);

        // // Aseguramos que los campos de tipo array no sean nulos si no se pasan
        // $data['hardware'] = $data['hardware'] ?? [];
        // $data['hardware_text'] = $data['hardware_text'] ?? [];
        // $data['sistemas'] = $data['sistemas'] ?? [];
        // $data['sistemas_text'] = $data['sistemas_text'] ?? [];
        // $data['software'] = $data['software'] ?? [];
        // $data['software_text'] = $data['software_text'] ?? [];
        // $data['redes'] = $data['redes'] ?? [];
        // $data['redes_text'] = $data['redes_text'] ?? [];

        // Filtrar ..._text y asignar NULL si está vacío
        $filtrarHardware = array_filter($request->input('hardware_text', []), function($value) {
            return !empty($value);
        });
        $data['hardware_text'] = empty($filtrarHardware) ? null : $filtrarHardware;

        $filtrarSistemas = array_filter($request->input('sistemas_text', []), function($value) {
            return !empty($value);
        });
        $data['sistemas_text'] = empty($filtrarSistemas) ? null : $filtrarSistemas;

        $filtrarSoftware = array_filter($request->input('software_text', []), function($value) {
            return !empty($value);
        });
        $data['software_text'] = empty($filtrarSoftware) ? null : $filtrarSoftware;

        $filtrarRedes = array_filter($request->input('redes_text', []), function($value) {
            return !empty($value);
        });
        $data['redes_text'] = empty($filtrarRedes) ? null : $filtrarRedes;

        $registro = SoporteModel::create($data);

        $nombrePDF = 'ficha_tecnica_' . $registro->id . '_' . now()->format('Ymd_His') . '.pdf';

        $pdf = app(PDF::class)->loadView('pdf.soporte', ['data' => $registro]);

        return $pdf->download($nombrePDF);
    }
}
