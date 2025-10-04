<?php

namespace App\Http\Controllers;

use App\Models\SoporteModel;
use Illuminate\Http\Request;

class DatosController extends Controller
{
    public function index(Request $request)
    {
        $datos = SoporteModel::orderBy("id", "desc")->paginate(10);
    
        if ($request->ajax()) {
            return response()->json([
                "html" => view("datos.table-body", compact("datos"))->render(),
                "links" => $datos->links()->toHtml(),
            ]);
        }
    
        return view("datos.index", compact("datos"));
    }
    
    public function buscar(Request $request)
    {
        $buscar = $request->get("buscar");
        
        $datos = SoporteModel::orderBy("id", "desc")
            ->when($buscar, function ($query, $buscar) {
                return $query->where(function ($query) use ($buscar) {
                    $query->where("id", "like", "%$buscar%")
                        ->orWhere("nomFicha", "like", "%$buscar%")
                        ->orWhere("unidOrganica", "like", "%$buscar%")
                        ->orWhere("fecha", "like", "%$buscar%")
                        ->orWhere("encargado", "like", "%$buscar%")
                        ->orWhere("cargo", "like", "%$buscar%")
                        ->orWhere("dni", "like", "%$buscar%")
                        ->orWhere("modalidadLab", "like", "%$buscar%")
                        ->orWhere("nomTecnico", "like", "%$buscar%")
                        ->orwhereRaw("LOWER(hardware) LIKE ?", ["%" . strtolower($buscar) . "%"])
                        ->orWhereRaw("LOWER(hardware_text) LIKE ?", ["%" . strtolower($buscar) . "%"])
                        ->orWhereRaw("LOWER(sistemas) LIKE ?", ["%" . strtolower($buscar) . "%"])
                        ->orWhereRaw("LOWER(sistemas_text) LIKE ?", ["%" . strtolower($buscar) . "%"])
                        ->orWhereRaw("LOWER(software) LIKE ?", ["%" . strtolower($buscar) . "%"])
                        ->orWhereRaw("LOWER(software_text) LIKE ?", ["%" . strtolower($buscar) . "%"])
                        ->orWhereRaw("LOWER(redes) LIKE ?", ["%" . strtolower($buscar) . "%"])
                        ->orWhereRaw("LOWER(redes_text) LIKE ?", ["%" . strtolower($buscar) . "%"])
                        ->orWhere("observacion", "like", "%$buscar%");
                });
            })
            ->paginate(10);
    
        return response()->json([
            "html" => view("datos.table-body", compact("datos"))->render(),
            "links" => $datos->links()->toHtml(),
        ]);
    }
    
    public function edit($id)
    {
        $dato = SoporteModel::findOrFail($id);
        return view("datos.edit", compact("dato"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "nomFicha" => "required",
            "unidOrganica" => "required",
            "fecha" => "required|date",
            "encargado" => "required",
            "cargo" => "required",
            "dni" => "required|integer",
            "modalidadLab" => "required",
            "nomTecnico" => "required",
            "observacion" => "required",
        ]);

        $data = $request->all();

        $data["hardware"] = $request->input("hardware", []);
        $data["hardware_text"] = $request->input("hardware_text", []);
        $data["sistemas"] = $request->input("sistemas", []);
        $data["sistemas_text"] = $request->input("sistemas_text", []);
        $data["software"] = $request->input("software", []);
        $data["software_text"] = $request->input("software_text", []);
        $data["redes"] = $request->input("redes", []);
        $data["redes_text"] = $request->input("redes_text", []);

        $dato = SoporteModel::findOrFail($id);
        $dato->update($data);

        return redirect()->route("datos.index")->with("success", "Datos actualizados con éxito.");
    }
}
