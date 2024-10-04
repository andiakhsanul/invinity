<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrator Invinity 2024',
            'email' => 'admininvinity@gmail.com',
            'password' => 'infinity2024',
            'role' => 1
        ]);
    }
}
