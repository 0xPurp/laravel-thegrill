<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            [
                "titre" => "BOOK YOUR TABLE",
                "sous-titre" => "satisfaction, everytime.",
                "titreadress" => "ADDRESS",
                "nombatiment" => "Florence Building",
                "adresse" => "Kings Square London, LDN1 23",
                "phone" => "+448754 658 048",
                "titreouverture" => "OPENING TIMES",
                "lundi" => "Monday",
                "mardi" => "Tuesday",
                "mercredi" => "Wednesday",
                "jeudi" => "Thursday",
                "vendredi" => "Friday",
                "samedi" => "Saturday",
                "dimanche" => "Sunday",
                "heureslundi" => "11:00 AM - 11:00 PM",
                "heuresmardi" => "11:00 AM - 11:00 PM",
                "heuresmercredi" => "11:00 AM - 11:00 PM",
                "heuresjeudi" => "11:00 AM - 11:00 PM",
                "heuresvendredi" => "11:00 AM - 1:00 AM",
                "heuressamedi" => "11:00 AM - 1:00 AM",
                "heuresdimanche" => "11:00 AM - 1:00 AM",
                "copyright" => "Copyright 2019. Designed by DISTINCTIVE THEMES"
            ]
        ]);
    }
}
