<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                "name" => "mySalon",
                "type" => "indoor",
                // "img" => "img/innovaImg/salon-1.jfif",
                "popular" => true,
                // "like" => true,
                "price" => 1050,
                // "categories" => 'Sofa',
                "description" => 'lorem lorem lorem lorem lorem lorem lorem ayh nates teaj lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ayh nates teaj lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ayh nates teaj lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ayh nates teaj lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ayh nates teaj lorem lorem lorem lorem lorem lorem lorem lorem ayh nates teaj lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ayh nates teaj lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ayh nates teaj lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ayh nates teaj lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ayh nates teaj lorem lorem lorem',
                "created_at" => now()
            ],
            [
                "name" => "myChambre",
                "type" => "indoor",
                // "img" => "img/innovaImg/chambre-1.jfif",
                "popular" => true,
                // "like" => true,
                "price" => 350,
                // "categories" => 'Bed',
                "description" => 'lorem lorem lorem lorem lorem lorem lorem ayh nates teaj lorem lorem lorem',
                "created_at" => now()
            ],
            [
                "name" => "myChambre2",
                "type" => "indoor",
                // "img" => "img/innovaImg/chambre-1.jfif",
                "popular" => true,
                // "like" => true,
                "price" => 50,
                // "categories" => 'Bed',
                "description" => 'lorem lorem lorem lorem lorem lorem lorem ayh nates teaj lorem lorem lorem',
                "created_at" => now()
            ],
            [
                "name" => "myDecore",
                "type" => "outdoor",
                // "img" => "img/innovaImg/tapis.jfif",
                "popular" => true,
                // "like" => false,
                "price" => 750,
                // "categories" => 'Decore',
                "description" => 'lorem lorem lorem lorem lorem lorem lorem ayh nates teaj lorem lorem lorem',
                "created_at" => now()
            ],
            [
                "name" => "myTable",
                "type" => "outdoor",
                // "img" => "img/innovaImg/table.jfif",
                "popular" => false,
                // "like" => false,
                "price" => 350,
                // "categories" => 'Table',
                "description" => 'lorem lorem lorem lorem lorem lorem lorem ayh nates teaj lorem lorem lorem',
                "created_at" => now()
            ],
        ]);
    }
}
