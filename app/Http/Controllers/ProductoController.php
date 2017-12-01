<?php

namespace App\Http\Controllers;

use App\producto;
use App\clase;
use App\proveedor;
use App\Http\Requests\ProductoRequest;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = producto::orderBy('descripcion', 'asc')->with('clase', 'proveedor')->paginate(20);
        return view('productos.index', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clase = clase::pluck('nombre_clase', 'id');
        $proveedor = proveedor::pluck('razon_social', 'id');
        return view('productos.create', compact('clase', 'proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoRequest $request)
    {
        $producto = new producto();
        $producto->codigo_producto = $request->codigo_producto;
        $producto->descripcion = $request->descripcion;
        $producto->proveedor_id = $request->proveedor_id;
        $producto->clase_id = $request->clase_id;
        $producto->precio = $request->precio;

        $producto->save();
        return redirect()->route('productos.index', $producto)->with('info', 'el producto fue creado'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        $clase = clase::pluck('nombre_clase', 'id');
        $proveedor = proveedor::pluck('razon_social', 'id');
        return view('productos.edit', compact('producto', 'clase', 'proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoRequest $request, producto $producto)
    {
        $producto->codigo_producto = $request->codigo_producto;
        $producto->descripcion = $request->descripcion;
        $producto->proveedor_id = $request->proveedor_id;
        $producto->clase_id = $request->clase_id;
        $producto->precio = $request->precio;

        $producto->save();
        return redirect()->route('productos.index', $producto)->with('info', 'el producto fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        $producto->delete();
        return back()->with('info', 'el producto fue eliminado');
    }
}
