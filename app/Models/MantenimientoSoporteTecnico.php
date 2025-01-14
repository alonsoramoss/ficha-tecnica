<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MantenimientoSoporteTecnico extends Model
{
    use HasFactory;

    // El nombre de la tabla en la base de datos
    protected $table = 'mantenimiento_soporte_tecnico';

    // Las columnas que pueden ser asignadas en masa
    protected $fillable = [
        'unidOrganica',
        'fecha',
        'encargado',
        'cargo',
        'dni',
        'modalidadLab',
        'nomTecnico',
        'hardware',
        'sistemas',
        'software',
        'redes',
        'observacion',
    ];

    // Si no tienes los campos de created_at y updated_at en la base de datos, puedes desactivarlos
    public $timestamps = true;  // Si no tienes los campos created_at y updated_at, pon esto en false

    // Aquí puedes agregar cualquier lógica o relación si fuera necesario
}
