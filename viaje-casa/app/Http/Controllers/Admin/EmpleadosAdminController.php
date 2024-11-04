<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Exception;

class EmpleadosAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('admin.empleados.index')
            ->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.empleados.create');
    }

    public function show(Empleado $empleado)
    {
        $empleados = Empleado::all();
        return view('admin.empleados.show')
            ->with('empleado', $empleado)
            ->with('empleados', $empleados);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $data = $request->all();
            if (isset($data['activo'])) {
                $data['activo'] = 1;
            } else {
                $data['activo'] = 0;
            }
            Empleado::create($request->all());

        }catch(Exception $e){
            dd($e);
            log::error($e->getMessage());
        }
        return to_route('admin.empleados.index');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        $empleados = Empleado::all();
        return view('admin.empleados.edit')
            ->with('empleado', $empleado)
            ->with('empleados', $empleados);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Empleado $empleado, Request $request)
    {
        try{
            $data = $request->all();
            if (isset($data['activo'])) {
                $data['activo'] = 1;
            } else {
                $data['activo'] = 0;
            }
            $empleado->update($data);

        }catch(Exception $e){
            dd($e);
            log::error($e->getMessage());
        }
        return to_route('admin.empleados.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return to_route('admin.empleados.index');
    }
}
