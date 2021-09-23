<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "Lil Moulaga",
                "email" => "0xPurp@nasa.gov",
                "role_id" => 1,
                "password" => bcrypt("a")
            ]
            ]);
    }
}
