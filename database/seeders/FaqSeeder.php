<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            [
                'ask' => "Wat is de levertermijn van mijn meubels?",
                "reponse" => "Bel ons op +32 468 04 02 37 of stuur een e-mail via ons mailsysteem onderaan de pagina om de leverdatum te kennen van jouw meubels.",
                "created_at" => now()
            ],
            [
                'ask' => "Kan ik mijn nieuwe meubels afhalen?",
                "reponse" => "Ja, je haalt je meubels ook zelf af, in het depot van Innova furniture, vlak achter de woonwinkel. Laat ons weten wanneer je komt via +32 468 04 02 37. Dan zetten wij je meubels klaar en helpen we bij het inladen.",
                "created_at" => now()
            ],
            [
                'ask' => "Hoe zit het met mijn garantie op meubels?",
                "reponse" => "Bij Innova furniture hanteren we de testaankoopgarantie tenzij de leverancier deze nog overtreft. Je vindt meer details bij je factuur. Merk je een fout of schade aan je meubels? Neem dan meteen contact met ons op via +32 468 04 02 37 of info@innovafurniture.be. Ook na de garantieperiode helpen we je graag verder.",
                "created_at" => now()
            ]
        ]);
        
    }
}
