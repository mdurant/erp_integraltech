<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create data with table users
        //  $table->id();
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();
        $customerProviders = [
            // Example user 1
            [
                'name' => 'DEMO 1 - IntegralTech',
                'email' => 'demo1@integraltech.cl',
                'email_verified_at' => now(),
                'password' => bcrypt('demo1234'), // Use bcrypt for password hashing
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Example user 2
            [
                'name' => 'DEMO 2 - IntegralTech',
                'email' => 'demo2@integraltech.cl',
                'email_verified_at' => now(),
                'password' => bcrypt('demo1234'), // Use bcrypt for password hashing
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        // Insert the user data into the users table
        \DB::table('users')->insert($customerProviders);
        $this->command->info('Users table seeded successfully.');
        // You can add more users as needed


    }
}
