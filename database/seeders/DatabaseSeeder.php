<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'reza',
            'NIK' => '123124',
            'role' => 'admin',
            'email' => 'reza@gmail.com',
            'password' => Hash::make('123456'),
            'foto' => '123123.jpg',
        ]);
    }
}
