<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Feedstocks extends Migration
{

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 'PRIMARY KEY',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'product_type' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ]

    
    
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('feedstocks');
    }

    public function down()
    {
        $this->forge->dropTable('feedstocks');
    }
   
}
?>