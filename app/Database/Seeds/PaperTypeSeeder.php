<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PaperTypeSeeder extends Seeder
{
    public function run()
    {
        $current_time = date('Y-m-d H:i:s');
        $data = [
            [
                'name' => 'Essay (Any)',
                'complexity_rating' => 1,
                'created_at' => $current_time,
            ],
            [
                'name' => 'Essay (Any Type)',
                'complexity_rating' => 1,
                'created_at' => $current_time,
            ],
            [
                'name' => 'Article (Any Type)',
                'complexity_rating' => 1,
                'created_at' => $current_time,
            ],
            [
                'name' => 'Assignment',
                'complexity_rating' => 1,
                'created_at' => $current_time,
            ],
            [
                'name' => 'Content (Any Type)',
                'complexity_rating' => 1,
                'created_at' => $current_time,
            ],
            [
                'name' => 'Essay (Admission)',
                'complexity_rating' => 1,
                'created_at' => $current_time,
            ],
            [
                'name' => 'Bibliography (Annotated)',
                'complexity_rating' => 1,
                'created_at' => $current_time,
            ],
            [
                'name' => 'Essay (Argumentative)',
                'complexity_rating' => 1,
                'created_at' => $current_time,
            ],
            [
                'name' => 'Review (Article)',
                'complexity_rating' => 1,
                'created_at' => $current_time,
            ],
            [
                'name' => 'Review (Movie/Book)',
                'complexity_rating' => 1,
                'created_at' => $current_time,
            ],
        ];

        $this->db->table('paper_type')->insertBatch($data);
    }
}
