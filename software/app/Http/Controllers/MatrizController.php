<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatrizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('matriz.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matriz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Matriz = new Matriz;
        $Matriz->nombres = $request->nombres;
        $Matriz->apellidos = $request->apellidos;
        $Matriz->telefono = $request->telefono;
        $Matriz->celular = $request->celular;
        $Matriz->sexo = $request->sexo;
        $Matriz->email = $request->email;
        $Matriz->posicion = $request->posicion;
        $Matriz->departamento = $request->departamento;
        $Matriz->salario = $request->salario;
        $Matriz->fechadenacimiento = $request->fechadenacimiento;
        $Matriz->save();
        return redirect()->route('matriz.index')->with('datos','Registro guardado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
