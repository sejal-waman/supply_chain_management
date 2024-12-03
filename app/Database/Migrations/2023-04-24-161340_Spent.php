<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Grains extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'spent_grain_supplier_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Address' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'contact_number' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'spent_grain_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'quantity' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'Price' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('spent',true);
    }

    public function down()
    {
        $this->forge->dropTable('spent');
    }
}
