<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PaperFormatSeeder extends Seeder
{
    public function run()
    {
        $current_time = date('Y-m-d H:i:s');
        $data = [
            [
                'order_citation' => 'MLA',
                'created_at' => $current_time,
            ],
            [
                'order_citation' => 'APA 6',
                'created_at' => $current_time,
            ],
            [
                'order_citation' => 'APA 7',
                'created_at' => $current_time,
            ],
            [
                'order_citation' => 'Harvard',
                'created_at' => $current_time,
            ],
            [
                'order_citation' => 'Chicago',
                'created_at' => $current_time,
            ],
        ];

        $this->db->table('paper_format')->insertBatch($data);
    }
}
