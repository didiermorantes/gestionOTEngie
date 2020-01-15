<?php

namespace App\Http\Controllers;

use App\Trabajador;
use Illuminate\Http\Request;
use App;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trabajadores =App\Trabajador::paginate(4);

        return view('trabajador', compact('trabajadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $agregarTrabajador= new Trabajador;

        $request->validate([
            'nombreTrabajador'=>'required',
            'apellidoTrabajador'=>'required',
            'profesionTrabajador'=>'required'

        ]);



        $agregarTrabajador->nombreTrabajador=$request->nombreTrabajador;
        $agregarTrabajador->apellidoTrabajador=$request->apellidoTrabajador;
        $agregarTrabajador->profesionTrabajador=$request->profesionTrabajador;
        $agregarTrabajador->save();

        return back()->with('agregar','Trabajador agregado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function show(Trabajador $trabajador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $trabajadorActualizar = App\Trabajador::findOrFail($id);
        return view('editar',compact('trabajadorActualizar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $trabajadorUpdate=App\Trabajador::findOrFail($id);
        $trabajadorUpdate->nombreTrabajador =$request->nombreTrabajador;
        $trabajadorUpdate->apellidoTrabajador =$request->apellidoTrabajador;
        $trabajadorUpdate->profesionTrabajador =$request->profesionTrabajador;

        $trabajadorUpdate->save();

               return back()->with('update','Trabajador actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $trabajadorEliminar =App\Trabajador::findOrFail($id);
        $trabajadorEliminar->delete();
          return back()->with('eliminar','Trabajador ha sido eliminado correctamente');

    }
}
