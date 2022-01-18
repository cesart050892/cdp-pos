<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Productos extends Migration
{
    private $name = "productos";

    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'codigo'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'nombre'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'precio_venta'       => [
                'type'       => 'DOUBLE',
                'constraint' => "10,2",
            ],
            'precio_compra'       => [
                'type'       => 'DOUBLE',
                'constraint' => "10,2",
            ],
            'existencia'       => [
                'type'       => 'INT',
                'constraint' => 10,
            ],
            'stock_minimo'       => [
                'type'       => 'INT',
                'constraint' => 10,
            ],
            'inventariable'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'id_unidad'       => [
                'type'       => 'INT',
                'constraint' => 10,
            ],
            'id_categoria'       => [
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
        $this->forge->addField("delete_at DATETIME NULL DEFAULT NULL");

        $this->forge->createTable($this->name);
    }

    public function down()
    {
        $this->forge->dropTable($this->name);
    }
}
