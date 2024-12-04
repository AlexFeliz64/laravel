<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genero extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'generos';

    protected $fillable = [
        'tipo_genero',
    ];

    public function peliculaConGenero()
    {
        return $this->hasMany(Pelicula::class);
    }

}
