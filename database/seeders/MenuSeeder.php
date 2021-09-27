<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                "titremenu" => "BROWSE THE MENU",
                "sous_titre" => "your tastebuds will thank you.",
                "titrerow1" => "FRESH PIZZA",
                "titreitem1" => "LOREM IPSUM",
                "prixitem1" => "$8.95",
                "descriptionitem1" => "No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.",
                "titrerow2" => "FAMILITY FAVOURITES",
                "titreitem2" => "LOREM IPSUM",
                "prixitem2" => "$8.95",
                "descriptionitem2" => "No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.",
                "titrerow3" => "CATCH OF THE DAY",
                "titreitem3" => "LOREM IPSUM",
                "prixitem3" => "$8.95",
                "descriptionitem3" => "No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.",
                "titrebigrow1" => "STARTERS",
                "photoitem1" => "assets/img/food/meal4.jpg",
                "titrebigitem1" => "LOREM IPSUM",
                "prixbigrow1" => "$8.95",
                "descriptionbigrow1" => "No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.",
                "titrebigrow2" => "MAIN COURSE",
                "photoitem2" => "assets/img/food/meal1.jpg",
                "titrebigitem2" => "LOREM IPSUM",
                "prixbigrow2" => "$8.95",
                "descriptionbigrow2" => "No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.",
                "photoitem3" => "assets/img/food/mael3.jpg",
                "titrebigitem3" => "LOREM IPSUM",
                "prixbigrow3" => "$8.95",
                "descriptionbigrow3" => "No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.",
                "photoitem4" => "assets/img/food/mael3.jpg",
                "titrebigitem4" => "LOREM IPSUM",
                "prixbigrow4" => "$8.95",
                "descriptionbigrow4" => "No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.",
                
                "photoitem5" => "assets/img/food/meal5.jpg",
                "titrebigitem5" => "LOREM IPSUM",
                "prixbigrow5" => "$8.95",
                "descriptionbigrow5" => "No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.",
                "photoitem6" => "assets/img/food/meal6.jpg",
                "titrebigitem6" => "LOREM IPSUM",
                "prixbigrow6" => "$8.95",
                "descriptionbigrow6" => "No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.",
                "photoitem7" => "assets/img/food/meal7.jpg",
                "titrebigitem7" => "LOREM IPSUM",
                "prixbigrow7" => "$8.95",
                "descriptionbigrow7" => "No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be.",
                "photoitem8" => "assets/img/food/mael7.jpg",
                "titrebigitem8" => "LOREM IPSUM",
                "prixbigrow8" => "$8.95",
                "descriptionbigrow8" => "No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be."
            ]
            ]);
    }
}
