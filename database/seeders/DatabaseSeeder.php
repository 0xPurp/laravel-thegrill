<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Role::class,
            Users::class,
            AboutSeeder::class,
            ChefsSeeder::class,
            CustomersSeeder::class
        ]);
    }
}
