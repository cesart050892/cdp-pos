<?php

namespace App\Database\Seeds\Data;

use CodeIgniter\Database\Seeder;

class Configuracion extends Seeder
{
    public function run()
    {
        //
        $model = model('App\Models\ConfiguracionModel');

        $data = [
            [
                'nombre'      => "tienda_nombre",
                'valor'      => 'POS-CDP',
            ],
            [
                'nombre'      => "tienda_ruc",
                'valor'      => 'JRUC00110023',
            ],
            [
                'nombre'      => "tienda_telefono",
                'valor'      => '22334455',
            ],
            [
                'nombre'      => "tienda_email",
                'valor'      => 'tienda-pos@email.com',
            ],
            [
                'nombre'      => "tienda_direccion",
                'valor'      => 'Direccion, Lugar',
            ],
            [
                'nombre'      => "ticket_leyenda",
                'valor'      => 'Las tres B',
            ],
        ];

        foreach ($data as $result) {
            $model->insert($result);
        }
    }
}
