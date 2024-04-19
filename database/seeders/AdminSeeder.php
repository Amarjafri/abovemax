<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'id' => '70ef2faa-9011-11ed-a869-c8d9d2d4870e',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
    }
}
