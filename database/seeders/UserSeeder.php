<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
            'role' => 'user',
            'status' => 'diterima',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
