<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoporteModel extends Model
{
    use HasFactory;

    protected $table = 'soporte_tecnico';

    protected $fillable = [
        'nomFicha',
        'unidOrganica',
        'fecha',
        'encargado',
        'cargo',
        'dni',
        'modalidadLab',
        'nomTecnico',
        'hardware',
        'hardware_text',
        'sistemas',
        'sistemas_text',
        'software',
        'software_text',
        'redes',
        'redes_text',
        'observacion',
    ];

    protected $casts = [
        'hardware' => 'array',
        'hardware_text' => 'array',
        'sistemas' => 'array',
        'sistemas_text' => 'array',
        'software' => 'array',
        'software_text' => 'array',
        'redes' => 'array',
        'redes_text' => 'array',
    ];

    public $timestamps = false;
}
