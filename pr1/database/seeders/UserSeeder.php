<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'admin'
            ],
            [
                'name' => 'Teacher',
                'email' => 'teacher@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'teacher'
            ],
            [
                'name' => 'Student',
                'email' => 'student@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'student'
            ]
            ]);
    }
}
