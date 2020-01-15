<?php

namespace App\Http\Controllers;

use App\Orden;
use Illuminate\Http\Request;
use App;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
                $ordenes =App\Orden::paginate(4);

        return view('orden', compact('ordenes'));
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
        $agregarOrden= new Orden;

        $request->validate([
            'tipoOrden'=>'required',
            'precioActividad'=>'required',
            'estadoOrden'=>'required',
            'idTrabajador'=>'required'

        ]);



        $agregarOrden->tipoOrden=$request->tipoOrden;
        $agregarOrden->precioActividad=$request->precioActividad;
        $agregarOrden->estadoOrden=$request->estadoOrden;
        $agregarOrden->idTrabajador=$request->idTrabajador;
        $agregarOrden->save();

        return back()->with('agregarOrden','Orden agregada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function show(Orden $orden)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $ordenActualizar = App\Orden::findOrFail($id);
        return view('editarOrden',compact('ordenActualizar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

                $ordenUpdate=App\Orden::findOrFail($id);
        $ordenUpdate->tipoOrden =$request->tipoOrden;
        $ordenUpdate->precioActividad =$request->precioActividad;
        $ordenUpdate->estadoOrden =$request->estadoOrden;
        $ordenUpdate->idTrabajador =$request->idTrabajador;

        $ordenUpdate->save();

               return back()->with('updateOrden','Orden actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

                $ordenEliminar =App\Orden::findOrFail($id);
        $ordenEliminar->delete();
          return back()->with('eliminarOrden','Orden ha sido eliminada correctamente');
    }
}
