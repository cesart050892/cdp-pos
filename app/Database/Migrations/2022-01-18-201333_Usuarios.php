<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    private $name = "usuarios";

    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'usuario'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'password'       => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'nombre'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'id_rol'       => [
                'type'       => 'INT',
                'constraint' => 10,
            ],
            'id_caja' => [
                'type' => 'INT',
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
        $this->forge->addField("fecha_edit DATETIME NULL DEFAULT NULL");
        $this->forge->addField("deleted_at DATETIME NULL DEFAULT NULL");

        $this->forge->createTable($this->name);
    }

    public function down()
    {
        $this->forge->dropTable($this->name);
    }
}
