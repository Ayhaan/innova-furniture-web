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
                "name" => "Baby",
                "created_at" => now()
            ],
            [
                "name" => "Kantoor",
                "created_at" => now()
            ],
            [
                "name" => "slaapkamer",
                "created_at" => now()
            ],
            [
                "name" => "Decore",
                "created_at" => now()
            ],
            [
                "name" => "Dressing",
                "created_at" => now()
            ],
            [
                "name" => "Hal",
                "created_at" => now()
            ],
            [
                "name" => "Lelies",
                "created_at" => now()
            ],
            [
                "name" => "Matrassen",
                "created_at" => now()
            ],
            [
                "name" => "Eetkamer",
                "created_at" => now()
            ],
            [
                "name" => "Tapijten",
                "created_at" => now()
            ],
            [
                "name" => "woonkamer",
                "created_at" => now()
            ],
        ]);
    }
}
