<?php

namespace App\Http\Controllers;

use App\Models\SoporteModel;
use Illuminate\Http\Request;

class DatosController extends Controller
{
    public function index()
    {
        $datos = SoporteModel::all();
        return view('datos.index', compact('datos'));
    }

    public function edit($id)
    {
        $dato = SoporteModel::findOrFail($id);
        return view('datos.edit', compact('dato'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nomFicha' => 'required',
            'unidOrganica' => 'required',
            'fecha' => 'required|date',
            'encargado' => 'required',
            'cargo' => 'required',
            'dni' => 'required|integer',
            'modalidadLab' => 'required',
            'nomTecnico' => 'required',
            'observacion' => 'required',
        ]);

        $data = $request->all();

        $data['hardware'] = isset($data['hardware']) ? explode(',', $data['hardware']) : [];
        $data['hardware_text'] = isset($data['hardware_text']) ? explode(',', $data['hardware_text']) : [];
        $data['sistemas'] = isset($data['sistemas']) ? explode(',', $data['sistemas']) : [];
        $data['sistemas_text'] = isset($data['sistemas_text']) ? explode(',', $data['sistemas_text']) : [];
        $data['software'] = isset($data['software']) ? explode(',', $data['software']) : [];
        $data['software_text'] = isset($data['software_text']) ? explode(',', $data['software_text']) : [];
        $data['redes'] = isset($data['redes']) ? explode(',', $data['redes']) : [];
        $data['redes_text'] = isset($data['redes_text']) ? explode(',', $data['redes_text']) : [];

        $dato = SoporteModel::findOrFail($id);
        $dato->update($data);

        return redirect()->route('datos.index')->with('success', 'Datos actualizados con éxito.');
    }
}
