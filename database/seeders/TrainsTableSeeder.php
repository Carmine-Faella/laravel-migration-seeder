<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $train = new Train();

            $train->Azienda = $faker->words();
            $train->Stazione_di_partenza= $faker->words();
            $train->Stazione_di_arrivo= $faker->words();
            $train->Orario_di_partenza= $faker->time();
            $train->Orario_di_arrivo= $faker->time();
            $train->Codice_Treno= $faker->randomNumber();
            $train->Numero_Carrozze= $faker->randomDigit();
            $train->In_orario= 'si';
            $train->Cancellato= 'no';
            $train->created_at = '';
            $train->updated_at = '';
        
        $train->save();
    }
}
