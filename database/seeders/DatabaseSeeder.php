<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\BanksSeeder as Banks;
use Database\Seeders\BanksAccountTypesSeeder;
use Database\Seeders\BusinessActivitiesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            Banks::class,
            BanksAccountTypesSeeder::class,
            BusinessActivitiesSeeder::class,
            // Add other seeders here
        ]);
    }
}
