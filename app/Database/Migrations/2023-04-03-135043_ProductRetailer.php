<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductRetailer extends Migration
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
            'pid' => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'rid' => [
                'type' => 'INT',
                'constraint' => '100',

            ],
           
    
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('pid','products','id');
        $this->forge->addForeignKey('rid','retailers','id');
        $this->forge->createTable('product_retailer',true);
    }

    public function down()
    {
        $this->forge->dropTable('product_retailer');
    }
}
?>