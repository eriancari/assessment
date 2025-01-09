<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    public function run()
    {
        $current_time = date('Y-m-d H:i:s');
        $data = [
            [
                'name' => 'Astronomy',
                'complexity_rating' => '1.0',
                'created_at' => $current_time,
            ],
            [
                'name' => 'Biology',
                'complexity_rating' => '1.0',
                'created_at' => $current_time,
            ],
            [
                'name' => 'Business',
                'complexity_rating' => '1.0',
                'created_at' => $current_time,
            ],
            [
                'name' => 'Chemistry',
                'complexity_rating' => '1.2',
                'created_at' => $current_time,
            ],
            [
                'name' => 'Child Care',
                'complexity_rating' => '1.0',
                'created_at' => $current_time,
            ],
            [
                'name' => 'Computer Science',
                'complexity_rating' => '2.0',
                'created_at' => $current_time,
            ],
            [
                'name' => 'Computers',
                'complexity_rating' => '1.0',
                'created_at' => $current_time,
            ],
            [
                'name' => 'Counseling',
                'complexity_rating' => '1.0',
                'created_at' => $current_time,
            ],
            [
                'name' => 'Criminology',
                'complexity_rating' => '1.0',
                'created_at' => $current_time,
            ],
            [
                'name' => 'Economics',
                'complexity_rating' => '1.0',
                'created_at' => $current_time,
            ],
        ];

        $this->db->table('subjects')->insertBatch($data);
    }
}
