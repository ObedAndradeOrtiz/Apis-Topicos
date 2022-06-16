<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_area',
        'id_user',
        'id_event',
        'name_area',
        'name_event',
        'estado',
    ];
}
