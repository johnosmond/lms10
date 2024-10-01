<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // Admin
            [
                'name' => 'Site Admin',
                'username' => 'siteadmin',
                'email' => 'admin@example.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Instructor
            [
                'name' => 'First Instructor',
                'username' => 'instructor1',
                'email' => 'instructor1@example.com',
                'password' => Hash::make('111'),
                'role' => 'instructor',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // User
            [
                'name' => 'First User',
                'username' => 'user1',
                'email' => 'user1@example.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
