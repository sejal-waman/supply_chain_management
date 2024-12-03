<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Farmers extends Migration
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
            'farmer_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'null' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'null' => true,
            ],

            'mobileno' => [
                'type' => 'TEXT',
                'null' => true,

            ],


            'address' => [
                'type' => 'VARCHAR',
                'null' => true,

            ]


    
    
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('farmers');
    }

    public function down()
    {
        $this->forge->dropTable('farmers');
    }
}

?>