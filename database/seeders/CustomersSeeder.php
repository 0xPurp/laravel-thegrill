<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                "titre" => "OUR HAPPY CUSTOMERS",
                "sous-titre" => "satisfaction, everytime.",
                "photocommentaire1" => "assets/img/team/small1.jpg",
                "nomcommentaire1" => "CHARLES DAVIES",
                "commentaire1" => "Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.",
                "photocommentaire2" => "assets/img/team/small1.jpg",
                "nomcommentaire2" => "CHARLES DAVIES",
                "commentaire2" => "Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements."
            ]
            ]);
    }
}
