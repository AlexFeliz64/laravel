<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::orderBy('fecha_publicacion', 'desc')->paginate(10);
        return view('peliculas')
            ->with('peliculas', $peliculas);
    }

    public function show(Pelicula $pelicula)
    {
        $peliculas = Pelicula::orderBy('fecha_publicacion', 'desc')->paginate(10);
        return view('admin.peliculas.show')
            ->with('pelicula', $pelicula)
            ->with('peliculas', $peliculas);
    }
}
