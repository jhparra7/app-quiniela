<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstadio;
use Illuminate\Http\Request;
use App\Models\Estadio;

class EstadioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadios = Estadio::orderBy('name')->get();

        return view('estadios.index', compact('estadios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estadios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstadio $request)
    {
        
       /*  $estadio = new Estadio();
        $estadio->name = $request->name;
        $estadio->descripcion = $request->descripcion;
        $estadio->save(); */

        $estadio = Estadio::create($request->all());
        
        return redirect()->route('estadios.show',compact('estadio'));

        //return redirect()->route('estadios.show', $estadio);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Estadio $estadio)
    {
        return view('estadios.show', compact('estadio')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estadio $estadio)
    {
        return view('estadios.edit',compact('estadio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEstadio $request, Estadio $estadio)
    {
        $estadio->update($request->all());
        
        return redirect()->route('estadios.show',compact('estadio'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estadio $estadio)
    {
        $estadio->delete();

        return redirect()->route('estadios.index');
    }
}
