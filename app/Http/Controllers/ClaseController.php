<?php

namespace App\Http\Controllers;

use App\clase;
use App\Http\Requests\ClaseRequest;
use Illuminate\Http\Request;

class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $clase = clase::orderBy('nombre_clase', 'asc')->paginate(20);
        return view('clases.index', compact('clase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clases.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClaseRequest $request)
    {
        $clase = new clase();
        $clase->codigo_clase = $request->codigo_clase;
        $clase->nombre_clase = $request->nombre_clase;

        $clase->save();
        return redirect()->route('clases.index', $clase)->with('info', 'la clase gue creada'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function show(clase $clase)
    {
        return view('clases.show', compact('clase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function edit(clase $clase)
    {
        return view('clases.edit', compact('clase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function update(ClaseRequest $request, clase $clase)
    {
        $clase->codigo_clase = $request->codigo_clase;
        $clase->nombre_clase = $request->nombre_clase;

        $clase->save();
        return redirect()->route('clases.index', $clase)->with('info', 'la clase fue actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function destroy(clase $clase)
    {
        $clase->delete();
        return back()->with('info', 'la clase fue eliminada');
    }
}
