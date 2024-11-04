<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;

    protected $table = 'viajes';

    protected $fillable = ['referencia', 'titulo', 'slug', 'precio', 'participantes', 'salida', 'llegada', 'foto', 'descripcion', 'activo', 'created_at', 'updated_at', 'deleted_at'];

}
