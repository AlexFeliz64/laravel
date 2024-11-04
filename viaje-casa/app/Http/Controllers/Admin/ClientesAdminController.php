<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Exception;

class ClientesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente = Cliente::all();
        return view('admin.clientes.index')
            ->with('clientes', $cliente);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clientes.create');
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
            Cliente::create($request->all());
        } catch (exception $e) {
            dd($e->getMessage());
        }
        return to_route('admin.clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        $clientes = Cliente::all();
        return view('admin.clientes.show')
            ->with('cliente', $cliente)
            ->with('clientes', $clientes);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        $clientes = Cliente::all();
        return view('admin.clientes.edit')
            ->with('cliente', $cliente)
            ->with('clientes', $clientes);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        try {
            $data = $request->all();
            if (isset($data['activo'])) {
                $data['activo'] = 1;
            } else {
                $data['activo'] = 0;
            }
            $cliente->update($data);

        } catch (exception $e) {
            dd($e->getMessage());
        }
        return to_route('admin.clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return to_route('admin.clientes.index');
    }
}
