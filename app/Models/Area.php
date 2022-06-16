<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable=[
        'event_id',
        'ubicacion_id',
        'nombre',
        'precio',
        'capacidad',
        'referencia'
    ];
}
