<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
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
            'product_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'product_categories' => [
                'type' => 'VARCHAR',
                'null' => true,
            ],
            'description' => [
                'type' => 'VARCHAR',
                'null' => true,
            ],

            'price' => [
                'type' => 'TEXT',
                'null' => true,

            ],


            'stock' => [
                'type' => 'VARCHAR',
                'null' => true,

            ],
            'feedstock' => [
                'type' => 'TEXT',
                'null' => true,

            ]


    
    
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    } 
}
?>