<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaperTypeTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'complexity_rating' => [
                'type' => 'DECIMAL',
                'constraint' => '3,1', // temporary
                'null' => false,
                'default' => 0.00,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('paper_type');
    }

    public function down()
    {
        $this->forge->dropTable('paper_type');
    }
}
