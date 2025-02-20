<?php

namespace Database\Seeders;

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
        for ($i = 0; $i < 10; $i++) {
            DB::table('students')->insert([
                'nim' => str_pad(mt_rand(1, 9) . mt_rand(0, 9999999999999), 14, '0', STR_PAD_RIGHT),
                'nama' => Str::random(10),
                'angkatan' => '2021',
            ]);
        }
    }
    
}
