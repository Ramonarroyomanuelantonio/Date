<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalleingreso;
use App\Models\proveedor;
use App\Models\producto;

class detalleingresos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalleingresos=detalleingreso::all();
        $proveedor=proveedor::all();
        $producto=producto::all();
        return view('detalleingresos.index', ['detalleingresos'=>$detalleingresos, 'proveedores'=>$proveedor, 'productos'=>$producto]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('detalleingresos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $detalleingresos =new detalleingreso();



        $detalleingresos->proveedor_id=$request->input('proveedor_id');
        $detalleingresos->producto_id=$request->input('producto_id');
        $detalleingresos->cantidad=$request->input('cantidad');
        $detalleingresos->preciocompra=$request->input('preciocompra');
        $detalleingresos->precioventa=$request->input('precioventa');
        $detalleingresos->save();

        $producto=$detalleingresos->producto;
        $nuevotock=$producto->stock + $detalleingresos->cantidad;
        $producto->stock = $nuevotock;
        $producto->save();

        return redirect()->back()->with('success', 'Reporte generado correctamente');

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
        $detalleingresos = detalleingreso::find($id);
        $detalleingresos->proveedor_id=$request->input('proveedor_id');
        $detalleingresos->producto_id=$request->input('producto_id');
        $detalleingresos->cantidad=$request->input('cantidad');
        $detalleingresos->preciocompra=$request->input('preciocompra');
        $detalleingresos->precioventa=$request->input('precioventa');
        $detalleingresos->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $detalleingresos= detalleingreso::find($id);
        $detalleingresos->delete();
        return redirect()->back()->with('success', 'Reporte Eliminado');
    }
}
