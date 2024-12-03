<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CompanyProduct extends Migration
{
    
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => '100',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'cid' => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'pid' => [
                'type' => 'INT',
                'constraint' => '100',
            ],
            

    
        ]);
        $this->forge->addKey('id', true);
        
        $this->forge->addForeignKey('cid','companies','id');
        $this->forge->addForeignKey('pid','products','id');
        $this->forge->createTable('company_product',true);
    }

    public function down()
    {
        $this->forge->dropTable('company_product');
    }

}
?>