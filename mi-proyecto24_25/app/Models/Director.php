<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Director extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'directores';

    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'foto',
        'biografia',
    ];

}
