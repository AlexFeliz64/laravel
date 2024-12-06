<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class GenerosController extends Controller
{
    public function index(Request $request)
    {
        $generos = Genero::all();
        $peliculas = Pelicula::all();

        if ($request->has('genero_id') && $request->genero_id != '') {
            $peliculas = $peliculas->where('genero_id', $request->genero_id);
        }

        return view('generos.index')
            ->with('peliculas', $peliculas)
            ->with('generos', $generos);
    }


}
