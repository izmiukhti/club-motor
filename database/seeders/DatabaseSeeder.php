<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'nama' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
            'status' => 'Active',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::factory()->create([
            'nama' => 'izmi',
            'email' => 'izmi@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'member',
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Post::factory()->create([
        //     ''
        // ])
    }
}
