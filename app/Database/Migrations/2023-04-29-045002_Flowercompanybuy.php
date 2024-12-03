<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Flowercompanybuy extends Migration
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
            'company_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'mobile_no' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'flower_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'quantity' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],


        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('flowercompanybuy',true);
    
    }

    public function down()
    {
        $this->forge->dropTable('flowercompanybuy');
    }
}
