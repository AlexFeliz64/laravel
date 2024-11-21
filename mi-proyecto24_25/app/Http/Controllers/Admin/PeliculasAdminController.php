<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeliculaStoreRequest;
use App\Http\Requests\PeliculaUpdateRequest;
use App\Models\Cliente;
use App\Models\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
            $fullPath = null;
            DB::beginTransaction();
            if ($request->hasFile('portada')) {
                $file = $request->file('portada');
                $uuid = \Ramsey\Uuid\Uuid::uuid4()->toString();
                $fileName = $uuid . '.' . $requestData['titulo'] . '.'
                    . $file->getClientOriginalExtension();
                $destino = env('UPLOAD_PELICULAS_PORTADAS');
                $fullPath = $file->storeAs($destino, $fileName);
                $requestData['portada'] = $fileName;
            }

            Pelicula::create($requestData);
            DB::commit();
            return to_route('admin.peliculas.index')
                ->with('alertSuccess', __('La pelicula ha sido guardado correctamente.'));
        } catch (\Exception $e) {
            DB::rollBack();
            if ($fullPath!=null) {
                Storage::delete($fullPath);
            }

            return to_route('admin.clientes.index')
                ->with('alertError', __('Error: La pelicula no se ha guardado'));
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
    public function update(PeliculaUpdateRequest $request, Pelicula $pelicula)
    {
        $requestData = $request->validated();

        try {
            $fullPath = null;
            DB::beginTransaction();
            if ($request->hasFile('portada')) {
                $file = $request->file('portada');

                if($pelicula->portada){
                    $fullPath = $pelicula->portada;
                } else {
                    $uuid = \Ramsey\Uuid\Uuid::uuid4()->toString();
                    $fileName = $uuid . '.' . $requestData['titulo'] . '.'
                        . $file->getClientOriginalExtension();
                }
                $destino = env('UPLOAD_PELICULAS_PORTADAS');
                $fullPath = $file->storeAs($destino, $fileName);
                $requestData['portada'] = $fileName;
            }

            Pelicula::create($requestData);
            DB::commit();
            return to_route('admin.peliculas.index')
                ->with('alertSuccess', __('La pelicula ha sido actualizada correctamente.'));
        } catch (\Exception $e) {
            DB::rollBack();
            if ($fullPath!=null) {
                Storage::delete($fullPath);
            }

            return to_route('admin.clientes.index')
                ->with('alertError', __('Error: La pelicula no se ha actualizado'));
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
