<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Viaje;
use Illuminate\Http\Request;
use Exception;

class ViajesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viajes = Viaje::all();
        return view('admin.viajes.index')
            ->with('viajes', $viajes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.viajes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            if (isset($data['activo'])) {
                $data['activo'] = 1;
            } else {
                $data['activo'] = 0;
            }
            Viaje::create($data);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        return to_route('admin.viajes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Viaje $viaje)
    {
        $viajes = Viaje::all();
        return view('admin.viajes.show')
            ->with('viaje', $viaje)
            ->with('viajes', $viajes);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Viaje $viaje)
    {
        $viajes = Viaje::all();
        return view('admin.viajes.edit')
            ->with('viaje', $viaje)
            ->with('viajes', $viajes);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Viaje $viaje)
    {
        try {
            $data = $request->all();
            if (isset($data['activo'])) {
                $data['activo'] = 1;
            } else {
                $data['activo'] = 0;
            }
            $viaje->update($data);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        return to_route('admin.viajes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Viaje $viaje)
    {
        $viaje->delete();
        return to_route('admin.viajes.index');
    }
}
