<?php

namespace App\Imports;

use App;

use App\Trabajador;

use Maatwebsite\Excel\Concerns\{Importable, ToModel, WithHeadingRow};

class TrabajadorsImport implements ToModel, WithHeadingRow
{

	use Importable;
    /**
    * @param Collection $collection
    */
 public function model(array $row)
    {
        return new Trabajador([
            //
           // 'id'     => $row['id'],

            'nombreTrabajador'     => $row['nombretrabajador'],

            'apellidoTrabajador'    => $row['apellidotrabajador'], 

            'profesionTrabajador'     => $row['profesiontrabajador'],

        ]);
    }
}
