<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Exception;

class ProveedoresAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('admin.proveedores.index')
            ->with('proveedores', $proveedores);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.proveedores.create');
    }

    public function show(Proveedor $proveedor)
    {
        $proveedores = Proveedor::all();
        return view('admin.proveedores.show')
            ->with('proveedor', $proveedor)
            ->with('proveedores', $proveedores);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataValidated = $request->validate([

        ]);

        $validated = $request->validate([
            'nif' => 'required | unique:proveedores | min: 8 | max: 12',
            'nombre' => 'min: 3 | max: 20',
            'apellido1' => 'min: 3 | max: 20',
            'apellido2' => 'min: 3 | max: 20',
            'direccion' => 'required',
            'telefono' => 'required',
            'autonomo',
            'observaciones'=>'',
        ],[
            'nif.required' => 'El nif es requerido',
            'nif.unique' => 'El nif ya existe',
            'nif.min' => 'El nif tiene que tener minimo 8 caracteres',
            'nif.max' => 'El nif tiene que tener maximo 12 caracteres',
        ]);
        try{
            $data = $request->all();
            if (isset($data['autonomo'])) {
                $data['autonomo'] = 1;
            } else {
                $data['autonomo'] = 0;
            }
            Proveedor::create($request->all());

        }catch(Exception $e){
            dd($e);
            log::error($e->getMessage());
        }
        return to_route('admin.proveedores.index');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedor $proveedor)
    {
        $proveedores = Proveedor::all();
        return view('admin.proveedores.edit')
            ->with('proveedor', $proveedor)
            ->with('proveedores', $proveedores);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Proveedor $proveedor)
    {
        try{
            $data = $request->all();
            if (isset($data['autonomo'])) {
                $data['autonomo'] = 1;
            } else {
                $data['autonomo'] = 0;
            }
            $proveedor->update($data);

        }catch(Exception $e){
            dd($e);
            log::error($e->getMessage());
        }
        return to_route('admin.proveedores.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();

        return to_route('admin.proveedores.index');
    }
}
