<?php

namespace App\Http\Controllers;

use App\Orden;
use Illuminate\Http\Request;
use App;

class ReporteController extends Controller
{
    //
    public function index()
    {
        	  $reporte =App\Orden::where('estadoOrden', '=', 'completa')->paginate(4);

        return view('reporte', compact('reporte'));
    }
}
