<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrdersTable extends Migration
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
            'paper_type_id' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'academic_level_id' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'subject_id' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'instructions' => [
                'type' => 'TEXT',
                'constraint' => 255,
            ],
            'file_path' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'paper_format_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'num_of_space' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'order_spacing' => [
                'type' => 'INT',  // SHOULD BE TINYINT BUT IT IS IMPLEMENTED IN A DIFF WAY
                'constraint' => 1,
                'default' => 1,
                'comment' => '1 - Double Space, 2 - Single Space',
            ],
            'order_currency' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 1,
                'comment' => '1 - USD, 0.77 - GBP, 0.89 - EUR, 1.4 - AUD',
            ],
            'num_of_sources' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'num_of_ppt_slides' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'num_of_charts' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'deadline_date' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'writer_category_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'order_upsells' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'comment' => 'array containing selected upsells',
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
        $this->forge->createTable('orders');
    }

    public function down()
    {
        $this->forge->dropTable('orders');
    }
}
