<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelicula extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'peliculas';

    protected $fillable = [
        'portada',
        'titulo',
        'genero_id',
        'fecha_lanzamiento',
        'duracion',
        'director',
        'sinopsis'
    ];

    public function usuariosQueDesean()
    {
        return $this->belongsToMany(User::class, 'deseados')->withTimestamps();
    }

    public function genero()
    {
        return $this->belongsTo(Genero::class);
    }


}
