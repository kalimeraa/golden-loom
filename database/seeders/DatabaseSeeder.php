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
        $this->call([
            BlackoutFabricSeeder::class,
            SheerFabricSeeder::class,
            LinenFabricSeeder::class,
            VelvetFabricSeeder::class,
            WoolFabricSeeder::class,
            SateenFabricSeeder::class,
        ]);
    }
}
