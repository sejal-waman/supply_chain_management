<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FarmerFeedstock extends Migration
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
            'fid' => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'feedid' => [
                'type' => 'INT',
                'constraint' => '100',
            ],
            

    
        ]);
        
        $this->forge->addKey('id', true);
        
        $this->forge->addForeignKey('fid','farmers','id');

        $this->forge->addForeignKey('feedid','feedstocks','id');

        $this->forge->createTable('farmer_feedstock',true);
    }

    public function down()
    {
        $this->forge->dropTable('farmer_feedstock');
    }
}
?>