<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([

            [
                "name" => "Sofa",
                "created_at" => now()
            ],
            [
                "name" => "Table",
                "created_at" => now()
            ],
            [
                "name" => "Bed",
                "created_at" => now()
            ],
            [
                "name" => "Decore",
                "created_at" => now()
            ],

        ]);
    }
}
