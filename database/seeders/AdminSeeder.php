<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'       => 'Admin User',
            'email'      => 'admin@example.com',
            'password'   => Hash::make('password'),
            'role_id'    => 1, // Role ID 1 = Admin
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
