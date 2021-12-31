<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoEnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catego_ens')->insert([

            [
                "name" => "Salon",
                "created_at" => now()
            ],
            [
                "name" => "Dining-room",
                "created_at" => now()
            ],
            [
                "name" => "Bedroom",
                "created_at" => now()
            ],
            [
                "name" => "Baby-rooms",
                "created_at" => now()
            ],
            [
                "name" => "Kitchen",
                "created_at" => now()
            ],
            [
                "name" => "Laundry",
                "created_at" => now()
            ],
            [
                "name" => "Office",
                "created_at" => now()
            ],
            [
                "name" => "Entrance-Hall",
                "created_at" => now()
            ],
            [
                "name" => "Decoration",
                "created_at" => now()
            ],
            [
                "name" => "Carpet",
                "created_at" => now()
            ],
            [
                "name" => "Fixture",
                "created_at" => now()
            ],
            [
                "name" => "Textiel",
                "created_at" => now()
            ],
            [
                "name" => "Audio",
                "created_at" => now()
            ],
            //CAT OUTDOOR
            [
                "name" => "Terras",
                "created_at" => now()
            ],
            [
                "name" => "Garden",
                "created_at" => now()
            ],
            [
                "name" => "Decoratie-out",
                "created_at" => now()
            ],
            [
                "name" => "carpet-out",
                "created_at" => now()
            ],
            [
                "name" => "Audio-out",
                "created_at" => now()
            ],
        ]);
    }
}
