<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table='estudiante';
    public $timestamps=false;
    protected $fillable=[
        'idestudiante', 'nombre', 'apellido', 'carnet', 'direccion', 'telefono','genero', 'fecha'
    ];

    protected $primaryKey='idestudiante';
}
