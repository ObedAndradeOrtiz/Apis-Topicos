<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicaciones extends Model
{
    use HasFactory;
    protected $fillable=[
             'event_id',
             'nombre',
             'ubicacion',
             'direccion',
             'telefono',
             'ciudad',
             'pais',
             'fecha_hora',
    ];
}
