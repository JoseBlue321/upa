<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biometrico extends Model
{
    use HasFactory;
    protected $table = 'biometrico';
    protected $fillable = [
        'CARNET',
        'template_no',
        'version',
        'template_data',
        'creado',
        'huella',
        'ID',
    ];
}
