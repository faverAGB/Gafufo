<?php

namespace App\Http\Controllers;

use App\proveedor;
use App\ciudad;
use App\Http\Requests\ProveedorRequest;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedor = proveedor::orderBy('razon_social', 'asc')->with('ciudad')->paginate(20);
        return view('proveedors.index', compact('proveedor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudad = ciudad::pluck('nombre_ciudad', 'id');
        return view('proveedors.create', compact('ciudad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProveedorRequest $request)
    {
        $proveedor = new proveedor();
        $proveedor->nit = $request->nit;
        $proveedor->razon_social = $request->razon_social;
        $proveedor->telefono = $request->telefono;
        $proveedor->direccion = $request->direccion;
        $proveedor->ciudad_id = $request->ciudad_id;

        $proveedor->save();
        return redirect()->route('proveedors.index', $proveedor)->with('info', 'el proveedor fue creado'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(proveedor $proveedor)
    {
        return view('proveedors.show', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(proveedor $proveedor)
    {
        $ciudad = ciudad::pluck('nombre_ciudad', 'id');
        return view('proveedors.edit', compact('proveedor', 'ciudad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(ProveedorRequest $request, proveedor $proveedor)
    {
        $proveedor->nit = $request->nit;
        $proveedor->razon_social = $request->razon_social;
        $proveedor->telefono = $request->telefono;
        $proveedor->direccion = $request->direccion;
        $proveedor->ciudad_id = $request->ciudad_id;

        $proveedor->save();
        return redirect()->route('proveedors.index', $proveedor)->with('info', 'el proveedor fue actualizado'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(proveedor $proveedor)
    {
        $proveedor->delete();
        return back()->with('info', 'el proveedor fue eliminado');
    }
}
