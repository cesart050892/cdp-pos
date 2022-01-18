<?php

namespace App\Database\Seeds\Data;

use CodeIgniter\Database\Seeder;

class Cajas extends Seeder
{
    public function run()
    {
        //
        $model = model('App\Models\CajasModel');

        $data = [
            [
                'numero_caja'      => 1,
                'nombre'      => 'aux',
                'folio'      => 'id_aux_1',
                'activo'      => 1,
            ],
        ];

        foreach ($data as $result) {
            $model->insert($result);
        }
    }
}
