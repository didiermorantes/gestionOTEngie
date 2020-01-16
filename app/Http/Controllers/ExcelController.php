<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\OrdensImport;

use App\Imports\TrabajadorsImport;

use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    //

        public function index()
    {

        return view('formCargarOrdenes');
    }

            public function trabajadores()
    {

        return view('formCargarTrabajadores');
    }


       public function importOrdenes(Request $request)
    {

        Excel::import(new OrdensImport,request()->file('file'));

           

        return back()->with('cargarOrdenMasiva','Orden masiva cargada correctamente');;


    }
           public function importTrabajadores(Request $request)
    {

        Excel::import(new TrabajadorsImport,request()->file('file'));

           

        return back()->with('cargarTrabajadorMasiva','Trabajador masiva cargada correctamente');;


    }
}
