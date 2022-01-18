<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetalleCompra extends Migration
{
    private $name = "detalle_compra";

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
            'precio'       => [
                'type'       => 'DOUBLE',
                'constraint' => "10,2",
            ],
            'cantidad'       => [
                'type'       => 'INT',
                'constraint' => 10,
            ],
            'id_producto'       => [
                'type'       => 'INT',
                'constraint' => 10,
            ],
            'id_compra'       => [
                'type'       => 'INT',
                'constraint' => 10,
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
