<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class categorias extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categorias=categoria::all();
        return view('categorias.index', ['categorias' => $categorias]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categoria = new categoria;
        $categoria->nombre = $request->input('name');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->save();

        // return view('categorias.index')->with('success', 'Categoría añadida Exitosamente!');
        return redirect()->route('categorias.index') ->with('success', 'Categoría añadida Exitosamente!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = categoria::find($id);
        return view('categorias.show', ['categoria' => $categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria = categoria::find($id);
        $categoria->nombre= $request->input('name');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->update();
        // return view('categorias,index')->with('success', 'Categoría  Exitosamente!');
        return redirect()->route('categorias.index') ->with('success', 'Categoría Editada!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria= categoria::find($id);
        $categoria->delete();
        return redirect()->back();
    }
}
