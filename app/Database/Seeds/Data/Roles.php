<?php

namespace App\Database\Seeds\Data;

use CodeIgniter\Database\Seeder;

class Roles extends Seeder
{
    public function run()
    {
        //
        $model = model('App\Models\RolesModel');

        $data = [
            [
                'nombre'      => 'administrator',
                'activo'      => 1,
            ],
        ];

        foreach ($data as $result) {
            $model->insert($result);
        }
    }
}
