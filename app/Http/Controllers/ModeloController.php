<?php

namespace App\Http\Controllers;
use App\Models\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    public function index()
    {
        $modelos = Modelo::all();
    

        return view('modelo.index',compact('modelos'));
    }

    
    public function create()
    {
        return view ('modelo.create');
    }

   /* aqui se crea las tablas */
    public function store(Request $request)
    {
        Modelo::create([
            'nombre'=> request('nombre'),
            'imagen'=> request('imagen')
            
        ]);
        return redirect()->route('modelo');
    }

    
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
