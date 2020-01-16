<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    //
    protected $guarded = [];
    protected $fillable = ['tipoOrden','precioActividad', 'estadoOrden', 'idTrabajador'];
}
