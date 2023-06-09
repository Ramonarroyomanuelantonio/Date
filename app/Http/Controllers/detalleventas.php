<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalleventa;
use App\Models\cliente;
use App\Models\producto;

class detalleventas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalleventas = detalleventa::all();
        $cliente = cliente::all();
        $producto = producto::all();
        return view('detalleventas.index', ['detalleventas' => $detalleventas, 'clientes' => $cliente, 'productos' => $producto]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('detalleingresos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $detalleventas = new detalleventa();
        $detalleventas->cliente_id = $request->input('cliente_id');
        $detalleventas->producto_id = $request->input('producto_id');
        $detalleventas->cantidad = $request->input('cantidad');
        $detalleventas->precioventa = $request->input('precioventa');

        // $producto = Producto::find($request->input('producto_id'));
        // if ($producto) {
        //     // Asignar el valor del campo precio al campo cantidad
        //     $detalleventas->precioventa = $producto->price;
        // }

        $detalleventas->save;


        $producto = $detalleventas->producto;
        $nuevotock = $producto->stock - $detalleventas->cantidad;
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
        $detalleventas = detalleventa::find($id);
        $detalleventas->cliente_id = $request->input('cliente_id');
        $detalleventas->producto_id = $request->input('producto_id');
        $detalleventas->cantidad = $request->input('cantidad');
        $detalleventas->precioventa = $request->input('precioventa');
        $detalleventas->update();

        return redirect()->back()->with('success', 'Venta generada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detalleventas = detalleventa::find($id);
        $detalleventas->delete();
        return redirect()->back()->with('success', 'Venta Eliminada');
    }
}
