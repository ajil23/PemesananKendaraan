<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        	'name' => 'Admin',
        	'email' => 'admin@email.com',
        	'level' => 'admin',
        	'password' => bcrypt('admin123')
        ]);

        DB::table('users')->insert([
        	'name' => 'Manager',
        	'email' => 'manager@email.com',
        	'level' => 'manager',
        	'password' => bcrypt('manager123')
        ]);

        DB::table('users')->insert([
        	'name' => 'Director',
        	'email' => 'director@email.com',
        	'level' => 'director',
        	'password' => bcrypt('director123')
        ]);
    }
}
