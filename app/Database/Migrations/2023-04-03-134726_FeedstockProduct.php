<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FeedstockProduct extends Migration
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
            'feedid' => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'pid' => [
                'type' => 'INT',
                'constraint' => '100',

            ],
           
    
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('feedid','farmers','id');
        $this->forge->addForeignKey('pid','products','id');
        $this->forge->createTable('feedstock_product',true);
    }

    public function down()
    {
        $this->forge->dropTable('feedstock_product');
    }  
}
?>
