<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([

            [
                "user" => "Ayhan",
                "commentaire" => "trop bien",
                'product_id' => 1,
                "date" => now(),
                "created_at" => now()

            ],

            [
                "user" => "AyhaanTEST",
                "commentaire" => "trop bien",
                'product_id' => 1,
                "date" => now(),
                "created_at" => now()

            ],

            [
                "user" => "Elias",
                "commentaire" => "trop bien",
                'product_id' => 2,
                "date" => now(),
                "created_at" => now()

            ],

            [
                "user" => "Cactus",
                "commentaire" => "trop bien",
                'product_id' => 3,
                "date" => now(),
                "created_at" => now()
            ],
            [
                "user" => "Elias",
                "commentaire" => "trop bien",
                'product_id' => 4,
                "date" => now(),
                "created_at" => now()
            ],
            [
                "user" => "Nico",
                "commentaire" => "trop bien",
                'product_id' => 5,
                "date" => now(),
                "created_at" => now()
            ],

        ]);
    }
}
