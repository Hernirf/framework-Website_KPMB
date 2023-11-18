<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(1)->create([
            'role' => 1
        ]);

        // * MANAGER
        User::factory()->count(2)->create([
            'role' => 2
        ]);

        User::factory()->create([
            'name'  => 'Admin',
            'email' => 'admin@gmail.com',
            'role'  => 1
        ]);

        User::factory()->create([
            'name'  => 'User',
            'email' => 'user@gmail.com',
            'role'  => 2
        ]);
    }
}
