<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FarmerCompany extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint' =>'100',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'fid' => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'cid' => [
                'type' => 'INT',
                'constraint' => '100',

            ],
           
    
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('fid','farmers','id');
        $this->forge->addForeignKey('cid','companies','id');
        $this->forge->createTable('farmer_company',true);
    }

    public function down()
    {
        $this->forge->dropTable('farmer_company');
    }  
}
?>
