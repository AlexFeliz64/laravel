<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::orderBy('fecha_publicacion', 'desc')->paginate(100);
        return view('peliculas.index')
            ->with('peliculas', $peliculas);
    }
}
