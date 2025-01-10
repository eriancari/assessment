<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrderWriterTable extends Migration
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
            'order_id' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'writer_id' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'created_at' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'updated_at' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'deleted_at' => [
                'type' => 'INT',
                'constraint' => 11
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('order_writer');
    }

    public function down()
    {
        $this->forge->dropTable('order_writer');
    }
}
