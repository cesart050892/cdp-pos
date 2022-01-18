<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TemporalCompra extends Migration
{
    private $name = "temporal_compra";

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
            'codigo'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
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
            'subtotal'       => [
                'type'       => 'DOUBLE',
                'constraint' => "10,2",
            ],
            'id_producto'       => [
                'type'       => 'INT',
                'constraint' => 10,
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable($this->name);
    }

    public function down()
    {
        $this->forge->dropTable($this->name);
    }
}
