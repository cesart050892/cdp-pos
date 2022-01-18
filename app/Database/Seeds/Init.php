<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Init extends Seeder
{
	public function run()
	{
		//
		$this->call('App\Database\Seeds\Data\Configuracion');
		$this->call('App\Database\Seeds\Data\Roles');
		$this->call('App\Database\Seeds\Data\Cajas');
		$this->call('App\Database\Seeds\Data\Usuarios');
	}
}
