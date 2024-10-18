<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Articulos;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Log;

class ArticulosAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articulos = Articulos::all();
        //dd($articulos);
        return view('admin.articulos.index')
            ->with('articulos', $articulos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $articulos = Articulos::all();
        return view('admin.articulos.create')->with('articulos', $articulos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Articulos::create($request->all());
        }catch (Exception $e){
            log::error($e->getMessage());
        }
        return redirect()->route('admin.articulos.index');
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
