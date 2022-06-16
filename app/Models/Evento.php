<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'idUser',
        'titulo',
        'tipo',
        'rest_edad',
        'descripcion',
        'categoria',
        'file',
        'link_video'
    ];
}
