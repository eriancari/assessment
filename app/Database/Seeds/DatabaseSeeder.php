<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(AcademicLevelSeeder::class);
        $this->call(PaperFormatSeeder::class);
        $this->call(PaperTypeSeeder::class);
        $this->call(SubjectsSeeder::class);
        $this->call(WriterCategorySeeder::class);
    }
}
