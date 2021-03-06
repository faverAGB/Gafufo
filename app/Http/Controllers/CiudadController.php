<?php

namespace App\Http\Controllers;

use App\Ciudad;
use App\Http\Requests\CiudadRequest;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudad = Ciudad::orderBy('nombre_ciudad', 'asc')->paginate(20);
        return view('ciudads.index', compact('ciudad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ciudads.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CiudadRequest $request)
    {
        $ciudad = new Ciudad();
        $ciudad->codigo_postal = $request->codigo_postal;
        $ciudad->nombre_ciudad = $request->nombre_ciudad;

        $ciudad->save();
        return redirect()->route('ciudads.index', $ciudad)->with('info', 'la ciudad fue creada'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function show(Ciudad $ciudad)
    {
        return view('ciudads.show', compact('ciudad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciudad $ciudad)
    {
        return view('ciudads.edit', compact('ciudad'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function update(CiudadRequest $request, Ciudad $ciudad)
    {
        $ciudad->codigo_postal = $request->codigo_postal;
        $ciudad->nombre_ciudad = $request->nombre_ciudad;

        $ciudad->save();
        return redirect()->route('ciudads.index', $ciudad)->with('info', 'la ciudad fue actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();
        return back()->with('info', 'la ciudad fue eliminada');
    }
}
