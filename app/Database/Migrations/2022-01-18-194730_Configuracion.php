<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Configuracion extends Migration
{
    private $name = "configuracion";

    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'valor'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable($this->name);
    }

    public function down()
    {
        $this->forge->dropTable($this->name);
    }
}
