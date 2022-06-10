<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FunctieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('functies')->insert([
            [
//                'id' => 0,
                'functie_naam' => 'Administrator',
                'functie_nummer' => 1,
            ],
            [
//                'id' => 1,
                'functie_naam' => 'Medewerker',
                'functie_nummer' => 2,
            ],
            [
//                'id' => 2,
                'functie_naam' => 'Klant',
                'functie_nummer' => 3,
            ],
            [
//                'id' => 3,
                'functie_naam' => 'Monteur',
                'functie_nummer' => 4,
            ]
            ]);
    }
}
