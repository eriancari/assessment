<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AcademicLevelSeeder extends Seeder
{
    public function run()
    {
        $current_time = date('Y-m-d H:i:s');
        $data = [
            [
                'name' => 'Undergraduate',
                'created_at' => $current_time,
            ],
            [
                'name' => 'Masters',
                'created_at' => $current_time,
            ],
            [
                'name' => 'PhD',
                'created_at' => $current_time,
            ]
        ];

        $this->db->table('academic_level')->insertBatch($data);
    }
}
