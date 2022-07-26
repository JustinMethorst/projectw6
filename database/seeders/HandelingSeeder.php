<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HandelingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('handelings')->insert([
            [
                'handeling' => 'Kleine Beurt',
                'prijs' => 1,
            ],
            [
                'handeling' => 'Grote Beurt',
                'prijs' => 2,
            ],
            [
                'handeling' => 'Reparatie',
                'prijs' => 3,
            ]
        ]);
    }
}
