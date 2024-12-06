<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeseadosStoreRequest;
use App\Models\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeseadosController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $peliculas = $user->peliculasDeseadas()->orderBy('fecha_lanzamiento', 'desc')->paginate(10);

        return view('deseados.index')
            ->with('peliculas', $peliculas);
    }


    public function store(DeseadosStoreRequest $request)
    {
        $requestData = $request->validated();
        try {

            DB::beginTransaction();
            $user = auth()->user();

            $user->peliculasDeseadas()->syncWithoutDetaching([$request->pelicula_id]);

            DB::commit();

            return to_route('peliculas')
                ->with('alertSuccess', __('La película se ha añadido a tu lista de deseados.'));
        } catch (\Exception $e) {
            return to_route('peliculas')
                ->with('alertError', __('Error: No se pudo añadir la película a la lista de deseados.'));
        }
    }

    public function destroy(Pelicula $pelicula)
    {
        try {
            $user = auth()->user();

            // Eliminar la relación del ID en lugar de desvincularla
            $user->peliculasDeseadas()->where('pelicula_id', $pelicula->id)->detach();

            return to_route('lista-deseados')
                ->with('alertSuccess', __('La película se ha eliminado de tu lista de deseados.'));
        } catch (\Exception $e) {
            return to_route('lista-deseados')
                ->with('alertError', __('Error: No se pudo eliminar la película.'));
        }
    }



}
