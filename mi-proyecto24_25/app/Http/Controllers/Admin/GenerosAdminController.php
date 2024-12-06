<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GeneroStoreRequest;
use App\Models\Genero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenerosAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generos = Genero::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.generos.index')
            ->with('generos', $generos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.generos.create')
            ->with('genero', new Genero());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GeneroStoreRequest $request)
    {
        $requestData = $request->validated();

        try {
            DB::beginTransaction();
            Genero::create($requestData);
            DB::commit();

            return to_route('admin.generos.index')
                ->with('alertSuccess', __('El género ha sido creado correctamente.'));
        } catch (\Exception $e) {
            DB::rollBack();

            return to_route('admin.generos.index')
                ->with('alertError', __('Error: El género no se ha creado.'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genero $genero)
    {
        return view('admin.generos.edit')
            ->with('genero', $genero);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GeneroStoreRequest $request, Genero $genero)
    {
        $requestData = $request->validated();
        try {
            DB::beginTransaction();
            $genero->update($requestData);
            DB::commit();

            return to_route('admin.generos.index')
                ->with('alertSuccess', __('El género ha sido actualizado correctamente.'));
        } catch (\Exception $e) {
            DB::rollBack();

            return to_route('admin.generos.index')
                ->with('alertError', __('Error: El género no se ha actualizado.'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genero $genero)
    {
        try {
            $genero->delete();
            return to_route('admin.generos.index')
                ->with('alertSuccess', __('El género ha sido eliminado correctamente.'));
        } catch (\Exception $e) {
            return to_route('admin.generos.index')
                ->with('alertError', __('Error: El género no se ha eliminado.'));
        }
    }
}
