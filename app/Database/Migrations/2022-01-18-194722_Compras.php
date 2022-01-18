<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Compras extends Migration
{
    private $name = "compras";

    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'folio'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'total'       => [
                'type'       => 'DOUBLE',
                'constraint' => "10,2",
            ],
            'id_usuario'       => [
                'type'       => 'INT',
                'constraint' => 10,
            ],
            'activo' => [
                'type' => 'INT',
                'constraint' => 10,
                'default'   => 1
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addField("fecha_alta DATETIME NULL DEFAULT NULL");

        $this->forge->createTable($this->name);
    }

    public function down()
    {
        $this->forge->dropTable($this->name);
    }
}
