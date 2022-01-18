<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Logs extends Migration
{
    private $name = "logs";

    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'evento'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'ip'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'detalles'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'id_usuario'       => [
                'type'       => 'INT',
                'constraint' => 10,
            ]
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->addField("fecha DATETIME NULL DEFAULT NULL");

        $this->forge->createTable($this->name);
    }

    public function down()
    {
        $this->forge->dropTable($this->name);
    }
}
