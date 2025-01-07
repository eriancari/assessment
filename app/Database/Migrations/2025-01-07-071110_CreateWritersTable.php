<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateWritersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'last_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'middle_initial' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'bio' => [
                'type' => 'TEXT',
            ],
            'ratings' => [
                'type' => 'FLOAT',
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
        $this->forge->createTable('writers');
    }

    public function down()
    {
        $this->forge->dropTable('writers');
    }
}
