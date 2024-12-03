<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Items extends Migration
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
           
            'item_name' => [
                'type' => 'VARCHAR',
                'null' => true,
            ],
           

            'preservation' => [
                'type' => 'VARCHAR',
                'null' => true,

            ],


            'quantity' => [
                'type' => 'VARCHAR',
                'null' => true,

            ],
            'price' => [
                'type' =>'DECIMAL',
                'null' => true,

            ],
            'feedid' => [
                'type' =>'INT',
                'constraint' => '100',

            ]

    
    
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('feedid','feedstocks','id');
        $this->forge->createTable('items');
    }

    public function down()
    {
        $this->forge->dropTable('items');
    }
}
?>