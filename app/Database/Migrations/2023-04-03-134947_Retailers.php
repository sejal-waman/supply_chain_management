<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Retailers extends Migration
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
            'retailer_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'contactno' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'null' => true,
            ],

            'password' => [
                'type' => 'VARCHAR',
                'null' => true,

            ],


            'address' => [
                'type' => 'VARCHAR',
                'null' => true,

            ],
            'product_name' => [
                'type' => 'VARCHAR',
                'null' => true,

            ],
            'quantity' => [
                'type' => 'INT',
                'null' => true,

            ]


    
    
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('retailers');
    }

    public function down()
    {
        $this->forge->dropTable('retailers');
    } 
}
?>