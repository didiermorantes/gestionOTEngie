<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    //
    protected $guarded = [];
    protected $fillable = ['nombreTrabajador','apellidoTrabajador', 'profesionTrabajador'];
}
