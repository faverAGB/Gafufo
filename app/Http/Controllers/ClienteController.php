<?php

namespace App\Http\Controllers;

use App\cliente;
use App\ciudad;
use App\Http\Requests\ClienteRequest;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = cliente::orderBy('razon_social', 'asc')->with('ciudad')->paginate(20);
        return view('clientes.index', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudad = ciudad::pluck('nombre_ciudad', 'id');
        return view('clientes.create', compact('ciudad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        $cliente = new cliente();
        $cliente->nit = $request->nit;
        $cliente->razon_social = $request->razon_social;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->ciudad_id = $request->ciudad_id;

        $cliente->save();
        return redirect()->route('clientes.index', $cliente)->with('info', 'El cliente fue creado'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $cliente)
    {
        $ciudad = ciudad::pluck('nombre_ciudad', 'id');
        return view('clientes.edit', compact('cliente', 'ciudad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, cliente $cliente)
    {
        $cliente->nit = $request->nit;
        $cliente->razon_social = $request->razon_social;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->ciudad_id = $request->ciudad_id;

        $cliente->save();
        return redirect()->route('clientes.index', $cliente)->with('info', 'el cliente fue actualizado'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        $cliente->delete();
        return back()->with('info', 'El cliente fue eliminado');
    }
}
