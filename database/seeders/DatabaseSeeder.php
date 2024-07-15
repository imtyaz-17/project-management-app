<?php

namespace Database\Seeders;

use App\Models\Project;
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
            'name' => 'Imtyaz',
            'email' => 'test@example.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ]);

        Project::factory()->count(10)->hasTasks(10)->create();
    }
}
