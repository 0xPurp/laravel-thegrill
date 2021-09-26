<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChefsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chefs')->insert([
            [
                "titre" => "OUR ACCLAIMED CHEFS",
                "sous-titre" => "dedicated to excellence.",
                "photochef1" => "assets/img/team/1.jpg",
                "namechef1" => "JOHN DOE",
                "photochef2" => "assets/img/team/2.jpg",
                "namechef2" => "BARRY SCOTT",
                "photochef3" => "assets/img/team/3.jpg",
                "namechef3" => "TOM SMOOTH",
                "photochef4" => "assets/img/team/4.jpg",
                "namechef4" => "HARVEY WALLACE"
            ]
            ]);
    }
}
