<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePoojaTable extends Migration
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
            'name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'slug'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'inclusions' => [
                'type'       => 'TEXT',
            ],
            'pooja_type' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'languages' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'samagri_included' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 0,
            ],
            'samagri_list' => [
                'type'       => 'TEXT',
            ],
            'samagri_price' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'market_price' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'pooja_description' => [
                'type'       => 'TEXT',
            ],
            'significance' => [
                'type'       => 'TEXT',
            ],
            'full_desc' => [
                'type'       => 'TEXT',
            ],
            'meta_title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'meta_description' => [
                'type'       => 'TEXT',
            ],
            'meta_keywords' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'best_time' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'image' => [
                'type'       => 'TEXT',
            ],
            'best_for' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'description' => [
                'type'       => 'TEXT',
            ],
            'price' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'duration_minutes' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'status' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 1,
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
        $this->forge->createTable('pooja');
    }

    public function down()
    {
       $this->forge->dropTable('pooja');
    }
}
