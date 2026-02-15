<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePanditsTable extends Migration
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
            'specialization' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'experience_years' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'profile_image' => [
                'type'       => 'text',
            ],
            'bio' => [
                'type'       => 'TEXT',
            ],
            'rating' => [
                'type'       => 'FLOAT',
            ],
            'rate_by' => [
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
        $this->forge->createTable('pandits');
    }

    public function down()
    {
       $this->forge->dropTable('pandits');
    }
}
