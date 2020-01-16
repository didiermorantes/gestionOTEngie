<?php

namespace App\Imports;

use App;

use App\Orden;
//use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\{Importable, ToModel, WithHeadingRow};

class OrdensImport implements ToModel, WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Orden([
            //
           // 'id'     => $row['id'],

            'tipoOrden'     => $row['tipoorden'],

            'precioActividad'    => $row['precioactividad'], 

            'estadoOrden'     => $row['estadoorden'],

            'idTrabajador'    => $row['idtrabajador'],

        ]);
    }
}
