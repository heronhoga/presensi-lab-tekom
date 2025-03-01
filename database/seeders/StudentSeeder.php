<?php

namespace Database\Seeders;
use App\Models\Student;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ['nim' => '21120121140033', 'nama' => 'Fikri Abdurrohim Ibnu Prabowo', 'angkatan' => '2021'],
        ];

        Student::insert($students);
    }

}