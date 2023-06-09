<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;

class clientes extends Controller
{
    //
    public function index()
    {
        //
        $clientes=cliente::all();
        return view('clientes.index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $cliente= new Cliente;
        $cliente->asesor=$request->input('asesor');
        $cliente->empresa=$request->input('empresa');
        $cliente->correo=$request->input('correo');
        $cliente->ruc=$request->input('ruc');
        $cliente->direccion=$request->input('direccion');
        $cliente->telefono=$request->input('telefono');
        $cliente->save();

        return redirect()->route('clientes.index')->with('success', 'Cliente añadido exitosamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $cliente=cliente::find($id);
        return view('clientes.show', ['cliente'=>$cliente]);
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
        $cliente= Cliente::find($id);
        $cliente->asesor=$request->input('asesor');
        $cliente->empresa=$request->input('empresa');
        $cliente->correo=$request->input('correo');
        $cliente->ruc=$request->input('ruc');
        $cliente->direccion=$request->input('direccion');
        $cliente->telefono=$request->input('telefono');
        $cliente->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $cliente= cliente::find($id);
        $cliente->delete();
        return redirect()->back()->with('success','Cliente eliminado!');
    }
}
