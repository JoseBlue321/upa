<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    use HasFactory;
    protected $table = 'postulantes';
    protected $fillable = [
        'CARNET',
        'PATERNO',
        'MATERNO',
        'NOMBRE',
        'GENERO',
        'FECHA_NACIMIENTO',
        'DIRECCION',
        'CORREO',
        'TELEFONO',
        'FECHA_PAGO',
        'CARRERA_1',
        'CARRERA_2',
        'BLOQUE',
        'PISO',
        'AULA',
    ];
}
