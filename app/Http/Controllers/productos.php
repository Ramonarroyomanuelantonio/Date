<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use App\Models\categoria;

class productos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producto= producto::all();
        $categoria= categoria::all();
        return view('productos.index',  ['productos' => $producto, 'categorias' => $categoria]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $producto= new Producto();
        $producto->codigo= $request->input('codigo');
        $producto->nombre= $request->input('nombre');
        $producto->stock= $request->input('stock');
        $producto->category_id= $request->input('category_id');
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destinationPath = 'IMG';
            $filename = time() . '-'.$file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destinationPath, $filename);
            $producto->imagen =  $filename;

        }
        $producto->save();

        return redirect()->route('productos.index')->with('success', 'Producto añadido exitosamente');

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
        $producto= Producto::find($id);
        $producto->codigo= $request->input('codigo');
        $producto->nombre= $request->input('nombre');
        $producto->stock= $request->input('stock');
        $producto->imagen= $request->input('imagen');
        $producto->category_id= $request->input('category_id');
        $producto->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $producto= Producto::find($id);
        $producto->delete();
        return redirect()->back()->with('success','Producto eliminado!');
    }
}
