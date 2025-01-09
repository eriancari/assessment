<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class WriterCategorySeeder extends Seeder
{
    public function run()
    {
        $current_time = date('Y-m-d H:i:s');
        $data = [
            [
                'name' => 'Standard',
                'description' => 'Standard Writers',
                'complexity_rating' => '1.10',
                'created_at' => $current_time,
            ],
            [
                'name' => 'Premium',
                'description' => 'High-rank writer, proficient in the requested field of study',
                'complexity_rating' => '1.15',
                'created_at' => $current_time,
            ],
            [
                'name' => 'Platinum',
                'description' => 'English as a native language writer (Native Writers)',
                'complexity_rating' => '1.25',
                'created_at' => $current_time,
            ],
        ];

        $this->db->table('writer_category')->insertBatch($data);
    }
}
