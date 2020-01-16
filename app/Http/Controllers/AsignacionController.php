<?php

namespace App\Http\Controllers;

use App\Orden;

use Illuminate\Http\Request;

use App;

class AsignacionController extends Controller
{
    //
     public function index()
    {
        //
               
    	//$asignacion =App\Orden::paginate(4);
    	 //$asignacion =App\Orden::all()->where('estadoOrden', '=', 'sinAsignar')->get();;
    	  $asignacion =App\Orden::where('estadoOrden', '=', 'pendiente')->paginate(4);

        return view('asignacion', compact('asignacion'));
    }

        public function edit($id)
    {
        //

        $ordenActualizarAsignacion = App\Orden::findOrFail($id);
        return view('editarOrdenAsignacion',compact('ordenActualizarAsignacion'));
    }

    public function update(Request $request, $id)
    {
        //

        $ordenUpdateAsignacion=App\Orden::findOrFail($id);
        $ordenUpdateAsignacion->tipoOrden =$request->tipoOrden;
        $ordenUpdateAsignacion->precioActividad =$request->precioActividad;
        $ordenUpdateAsignacion->estadoOrden =$request->estadoOrden;
        $ordenUpdateAsignacion->idTrabajador =$request->idTrabajador;

        $ordenUpdateAsignacion->save();

               return back()->with('updateOrdenAsignacion','Orden actualizada correctamente');
    }

}
