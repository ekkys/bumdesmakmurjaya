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
        $this->call([
            HomeSeeder::class,
            TentangSeeder::class,
            LegalitasSeeder::class,
            UnitSeeder::class,
            LayananSeeder::class,
            KlienSeeder::class,
            KontakSeeder::class,
        ]);


        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
