<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(VetarstsSeeder::class);
        $this->call(BaribaSeeder::class);
        $this->call(IepircejsSeeder::class);
        $this->call(PardevejsSeeder::class);
        $this->call(RotallietaSeeder::class);
        $this->call(KakisSeeder::class);

        $this->call(KakisRotallietaSeeder::class);
        $this->call(KakisBaribaSeeder::class);
        $this->call(KakisIepircejsSeeder::class);
        $this->call(KakisPardevejsSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
