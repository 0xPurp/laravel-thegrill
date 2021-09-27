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
                "photo_chef" => "{{asset('assets/img/team/1.jpg')}}",
                "nom_chef" => "JOHN DOE"
            ],
               
            [
                "titre" => "OUR ACCLAIMED CHEFS",
                "sous-titre" => "dedicated to excellence.",
                "photo_chef" => "{{asset('assets/img/team/2.jpg')}}",
                "nom_chef" => "BARRY SCOTT"
            ],
                
            [
                "titre" => "OUR ACCLAIMED CHEFS",
                "sous-titre" => "dedicated to excellence.",
                "photo_chef" =>"{{asset('assets/img/team/3.jpg')}}",
                "nom_chef" => "TOM SMOOTH"
            ],
                
            [
                "titre" => "OUR ACCLAIMED CHEFS",
                "sous-titre" => "dedicated to excellence.",
                "photo_chef" => "{{asset('assets/img/team/4.jpg')}}",
                "nom_chef" => "HARVEY WALLACE"
            ]
            
            ]);
    }
}
