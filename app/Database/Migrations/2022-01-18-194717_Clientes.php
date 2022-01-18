<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clientes extends Migration
{
    private $name = "clientes";

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
            'direccion'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'telefono'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'correo'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'activo' => [
                'type' => 'BOOLEAN',
                'null' => true,
            ],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->addField("fecha_alta DATETIME NULL DEFAULT NULL");
        $this->forge->addField("fecha_edit DATETIME NULL DEFAULT NULL");
        $this->forge->addField("deleted_at DATETIME NULL DEFAULT NULL");

        $this->forge->createTable($this->name);
    }

    public function down()
    {
        $this->forge->dropTable($this->name);
    }
}
