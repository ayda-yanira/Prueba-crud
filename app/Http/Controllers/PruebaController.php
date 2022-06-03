<?php

namespace App\Http\Controllers;

use App\Models\prueba;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pruebas = Prueba::orderBy('id', 'DESC')->get();
    return view('prueba.index')->with('pruebas', $pruebas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prueba.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pruebas = new Prueba();

        
        $pruebas->nombre = $request->get('nombre');
        $pruebas->apellido = $request->get('apellido');
        $pruebas->cargo = $request->get('cargo');
        $pruebas->direccion = $request->get('direccion');
        $pruebas->telefono = $request->get('telefono');
        $pruebas->correo = $request->get('correo');
        $pruebas->sueldo = $request->get('sueldo');
        $pruebas->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function show(prueba $prueba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function edit(prueba $prueba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prueba $prueba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function destroy(prueba $prueba)
    {
        //
    }
}
