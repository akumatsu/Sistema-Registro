<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacaciones extends Model
{
    use HasFactory;

    protected $table = "Vacaciones";
    protected $fillable = [
        'numero',
        'gerencia',
        'codigo_empleado',
        'nombres',
        'apellidos',
        'disfrutado',
        'desde',
        'hasta'
    ];

}


