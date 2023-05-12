<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    
    public function run(Faker $faker)
    {
        for ($i=0; $i<10; $i++) {

            $train = new Train();

            $train->Azienda = $faker->words();
            $train->Stazione_di_partenza= $faker->words();
            $train->Stazione_di_arrivo= $faker->words();
            $train->Orario_di_partenza= $faker->time();
            $train->Orario_di_arrivo= $faker->time();
            $train->Codice_Treno= $faker->randomNumber(3, false);
            $train->Numero_Carrozze= $faker->randomDigit();
            $train->In_orario= 'si';
            $train->Cancellato= 'no';
            
            $train->save();

        }
    }
}
