<?php

namespace App\Database\Seeds\Data;

use CodeIgniter\Database\Seeder;

class Usuarios extends Seeder
{
    public function run()
    {
        //
        $model = model('App\Models\UsuariosModel');

        $data = [
            [
                'nombre'      => 'administrator',
                'usuario'      => 'admin',
                'password'      => password_hash("admin", PASSWORD_DEFAULT),
                'id_caja'      => '1',
                'id_rol'      => '1',
                'activo'      => 1,
            ],
        ];

        foreach ($data as $result) {
            $model->insert($result);
        }
    }
}
