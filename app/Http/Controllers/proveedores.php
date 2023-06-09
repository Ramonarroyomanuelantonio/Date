<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proveedor;

class proveedores extends Controller
{
    //
    public function index()
    {
        //
        $proveedor=proveedor::all();
        return view('proveedores.index', ['proveedores' => $proveedor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $proveedor = new proveedor;
        $proveedor->empresa=$request->empresa;
        $proveedor->correo=$request->correo;
        $proveedor->ruc=$request->ruc;
        $proveedor->direccion=$request->direccion;
        $proveedor->telefono=$request->telefono;
        $proveedor->save();

        return redirect()->route('proveedores.index')->with('success','Proveedor añadido exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $proveedor = proveedor::find($id);
        return view('proveedores.show', ['proveedor' => $proveedor]);
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
        $proveedor = proveedor::find($id);
        $proveedor->empresa=$request->empresa;
        $proveedor->correo=$request->correo;
        $proveedor->ruc=$request->ruc;
        $proveedor->direccion=$request->direccion;
        $proveedor->telefono=$request->telefono;
        $proveedor->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $proveedor = proveedor::find($id);
        $proveedor->delete();
        return redirect()->back();
    }
}
