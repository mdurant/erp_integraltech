<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanksAccountTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bankAccountTypes = [
            ['name' => 'Cuenta Corriente'],
            ['name' => 'Cuenta Vista/RUT'],
            ['name' => 'Cuenta de Ahorro'],
            ['name' => 'Cuenta de Ahorro a Plazo Fijo'],
        ];
        DB::table('bank_account_types')->insert($bankAccountTypes);
    }
}
