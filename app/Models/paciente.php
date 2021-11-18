<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    use HasFactory;
    protected $filable = [
        'nombres',
        'apellidos',
        'edad',
        'sexo',
        'ci',
        'tipo_sangre',
        'correo',
        'telefono',
        'direccion',
    ];
}
