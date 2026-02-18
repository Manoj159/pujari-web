<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'product_type' => [
                'type'       => 'TEXT',
            ],
            'name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'slug'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'category_id'       => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'sub_category'      => [
                'type'      => 'INT',
                'constraint' => 11
            ],
            'description' => [
                'type'       => 'TEXT',
            ],
            'selling_price' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'mrp_price' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'stock' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'kit_details' => [
                'type'       => 'TEXT',
            ],
            'kit_count' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'product_image' => [
                'type'       => 'text',
            ],
            'status' => [
                'type'       => 'enum',
                'constraint' => ['published', 'draft'],
                'default'    => 'draft',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('slug');
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}