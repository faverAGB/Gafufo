<?php

namespace App\Http\Controllers;

use App\Despacho;
use App\DetalleDespacho;
use App\Producto;
use App\Proveedor;
use App\Ciudad;
use App\Http\Request\DespachoRequest;
use Illuminate\Http\Request;

class DespachoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $despacho = Despacho::orderBy('fecha_elaboracion', 'asc')->with('DetalleDespacho', 'Proveedor', 'Ciudad')->paginate(20);
        return view('despachos.index', compact('despacho'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudad = Ciudad::pluck('nombre_ciudad', 'id');
        $proveedor = Proveedor::pluck('razon_social', 'id');
        return view('despachos.create', compact('ciudad', 'proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DespachoRequest $request)
    {
        $despacho = new Despacho();
        $despacho->codigo_producto = $request->codigo_producto;
        $despacho->descripcion = $request->descripcion;
        $despacho->proveedor_id = $request->proveedor_id;
        $despacho->clase_id = $request->clase_id;
        $despacho->precio = $request->precio;

        $despacho->save();

        $producto = $request->get('producto'):

        foreach ($Producto as $produtc) {
            $detalle = new DetalleDespacho();
            $detalle->codigo_despacho = $despa
        }

        return redirect()->route('despachos.index', $despacho)->with('info', 'el despacho fue creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Despacho $despacho)
    {
        return view('despachos.show', compact('despacho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Despacho $despacho)
    {
        $ciudad = Ciudad::pluck('nombre_ciudad', 'id');
        $proveedor = Proveedor::pluck('razon_social', 'id');
        return view('productos.edit', compact('producto', 'ciudad', 'proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(DespachoRequest $request, Despacho $despacho)
    {
        $despacho->codigo_producto = $request->codigo_producto;
        $despacho->descripcion = $request->descripcion;
        $despacho->proveedor_id = $request->proveedor_id;
        $despacho->clase_id = $request->clase_id;
        $despacho->precio = $request->precio;

        $despacho->save();
        return redirect()->route('despachos.index', $despacho)->with('info', 'el despacho fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Despacho $despacho)
    {
        $producto->delete();
        return back()->with('info', 'el producto fue eliminado');
    }
}