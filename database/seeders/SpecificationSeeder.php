<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $jsonData = array(
            'hauteur' => '1m78',
            'largeur' => '1m',
        );
        $jsonData = json_encode($jsonData);

        DB::table('specifications')->insert([
    
            [
                "data" => $jsonData,
                "product_id" => 1,
                "created_at" => now()
            ],
            [
                "data" => $jsonData,
                "product_id" => 2,
                "created_at" => now()
            ],
            [
                "data" => $jsonData,
                "product_id" => 3,
                "created_at" => now()
            ],
            [
                "data" => $jsonData,
                "product_id" => 4,
                "created_at" => now()
            ],
            [
                "data" => $jsonData,
                "product_id" => 5,
                "created_at" => now()
            ],
        ]);
    }
}
