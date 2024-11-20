<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeliculaStoreRequest;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculasAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Pelicula::orderBy('fecha_publicacion', 'desc')->paginate(10);
        return view('admin.peliculas.index')
            ->with('peliculas', $peliculas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peliculas = Pelicula::orderBy('fecha_publicacion', 'desc')->paginate(10);
        return view('admin.peliculas.create')
            ->with('pelicula', new Pelicula())
            ->with('peliculas', $peliculas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PeliculaStoreRequest $request)
    {
        $requestData = $request->validated();

        try {
            $fullpath = null;

        } catch (\Exception $e){

    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        $peliculas = Pelicula::orderBy('fecha_publicacion', 'desc')->paginate(10);
        return view('admin.peliculas.show')
            ->with('pelicula', $pelicula)
            ->with('peliculas', $peliculas);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelicula $pelicula)
    {
        $peliculas = Pelicula::orderBy('fecha_publicacion', 'desc')->paginate(10);
        return view('admin.peliculas.edit')
            ->with('pelicula', $pelicula)
            ->with('peliculas', $peliculas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->validated();

        try {
            $fullpath = null;

        } catch (\Exception $e){

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelicula $pelicula)
    {
        try {
            $pelicula->delete();
            return to_route('admin.peliculas.index')
                ->with('alertSuccess', __('La pelicula se ha eliminado correctamente.'));

        } catch (\Exception $e) {

            to_route('admin.peliculas.index')
                ->with('alertError', __('Error: La pelicula no se ha eliminado.'));
        }
    }
}
