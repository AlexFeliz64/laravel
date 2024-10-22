<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proveedores extends Model
{
    use HasFactory;
    protected $table = 'proveedores';
    protected $fillable = ['nif', 'razon_social', 'nombre', 'apellido1', 'apellido2', 'autonomo', 'direccion', 'telefono', 'observaciones'];

    public function articulos() : HasMany{
        return $this->hasMany(Articulos::class);
    }
}
