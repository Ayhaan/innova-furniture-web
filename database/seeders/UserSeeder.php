<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "Uslu",
                'firstname' => "Emilie Ecem",
                'age' => 23,
                'postalcode' => 1785,
                'role_id' => 1,
                'city' => "merchtem",
                'email' => "innova@gmail.com",
                'password' => Hash::make('testtest'),
                "created_at" => now()
            ],
            [
                'name' => "Caliskan",
                'firstname' => "Ayhan",
                'age' => 24,
                'postalcode' => 1070,
                'role_id' => 2,
                'city' => "anderlecht",
                'email' => "test@gmail.com",
                'password' => Hash::make('testtest'),
                "created_at" => now()
            ],
        ]);
    }
}
