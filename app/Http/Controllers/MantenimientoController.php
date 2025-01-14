<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MantenimientoSoporteTecnico;
use PDF;

class MantenimientoController extends Controller
{
    public function index()
    {
        return view('mantenimiento');
    }

    public function store(Request $request)
    {
        // Guardar en la base de datos
        $data = $request->validate([
            'unidOrganica' => 'required',
            'fecha' => 'required|date',
            'encargado' => 'required',
            'cargo' => 'required',
            'dni' => 'required|integer',
            'modalidadLab' => 'required',
            'nomTecnico' => 'required',
            'hardware' => 'nullable',
            'sistemas' => 'nullable',
            'software' => 'nullable',
            'redes' => 'nullable',
            'observacion' => 'required',
        ]);

        $registro = MantenimientoSoporteTecnico::create($data);

        // Generar PDF
        $pdf = PDF::loadView('pdf.mantenimiento', ['data' => $registro]);

        // Descargar PDF
        return $pdf->download('ficha_tecnica.pdf');
    }
}
