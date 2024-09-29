<?php

namespace Database\Seeders;

use App\Models\Admin;
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
        // User::factory(10)->create();
        $this->call([
            AboutUsSeeder::class,
            GoalSeeder::class,
            SocialSeeder::class,
            ServiceSeeder::class
        ]);
        Admin::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
        ]);
    }
}
