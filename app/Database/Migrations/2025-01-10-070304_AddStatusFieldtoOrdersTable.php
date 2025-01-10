<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddStatusFieldtoOrdersTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('orders', [
            'status' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 0,
                'null' => false,
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users','status');
    }
}
