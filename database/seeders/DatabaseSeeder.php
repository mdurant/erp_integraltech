<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\BanksSeeder as Banks;
use Database\Seeders\BanksAccountTypesSeeder;
use Database\Seeders\BusinessActivitiesSeeder;
use Database\Seeders\CitiesSeeder;
use Database\Seeders\CommunesSeeder;
use Database\Seeders\JobsTitlesSeeder;
use Database\Seeders\AccountingAccountsSeeder;
use Database\Seeders\PriceListsSeeder;
use Database\Seeders\PaymentConditionsSeeder;
use Database\Seeders\PurchaseConcepsSeeder;
use Database\Seeders\BusinessunitsSeeder;
use Database\Seeders\CustomerProvidersSeeder;
use Database\Seeders\UsersSeeder;

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
            CitiesSeeder::class,
            CommunesSeeder::class,
            JobsTitlesSeeder::class,
            AccountingAccountsSeeder::class,
            PriceListsSeeder::class,
            PaymentConditionsSeeder::class,
            PurchaseConcepsSeeder::class,
            BusinessunitsSeeder::class,
            CustomerProvidersSeeder::class,
            UsersSeeder::class,
            // Add other seeders here
        ]);
    }
}
