<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'shaira',
            'email' => 'shaira@gmail.com',
            'password' => bcrypt('12345'),
            // 'is_admin' => true
        ]);

        User::create([
            'name' => 'aspia',
            'email' => 'aspia@gmail.com',
            'password' => bcrypt('12345'),
            // 'is_admin' => false
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
