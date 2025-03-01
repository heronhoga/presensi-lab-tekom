<?php
namespace Database\Seeders;

use App\Models\Lab;
use Illuminate\Database\Seeder;

class LabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $labs = [
            ["id" => 1, "nama" => "rpl"],
            ["id" => 2, "nama" => "jaringan"],
            ["id" => 3, "nama" => "embedded"],
            ["id" => 4, "nama" => "multimedia"],
        ];

        Lab::insert($labs);
    }
}
