<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use Illuminate\Http\Request;
use Exception;

class ArticulosAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articulo = Articulo::all();
        return view('admin.articulos.index')
            ->with('articulos', $articulo);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articulos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Articulo::create($request->all());
        } catch (exception $e) {
            Log:error($e->getMessage());
        }
        return to_route('admin.articulos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
