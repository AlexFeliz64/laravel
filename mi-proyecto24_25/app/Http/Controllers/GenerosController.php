<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class GenerosController extends Controller
{
    public function index(Request $request)
    {
        $generos = Genero::all(); // Obtener todos los géneros
        $peliculas = Pelicula::all(); // O agregar tu lógica para obtener las películas

        // Si se aplica un filtro de género, agregar la condición de filtro
        if ($request->has('genero_id') && $request->genero_id != '') {
            $peliculas = $peliculas->where('genero_id', $request->genero_id);
        }

        return view('peliculas.index', compact('peliculas', 'generos'));
    }


}
