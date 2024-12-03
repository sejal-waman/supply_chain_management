<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Supplierregister extends Migration
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
            'supplier_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'repeat_password' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
    
    
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('supplierregister',true);
    }

    public function down()
    {
        $this->forge->dropTable('supplierregister');
    }
}
