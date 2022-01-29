<?php

namespace Database\Seeders;

use App\Models\StudentExam;
use Illuminate\Database\Seeder;

class StudentExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentExam::factory(40)->create();
    }
}
