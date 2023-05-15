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

        for($i=0;$i<10;$i++){
            $trains = new Train();

                $trains->Azienda = $faker->word();
                $trains->Stazione_di_partenza = $faker->word();
                $trains->Stazione_di_arrivo  = $faker->word();
                $trains->orario_di_partenza  = $faker->time();
                $trains->Orario_di_arrivo  = $faker->time();
                $trains->Codice_Treno  = $faker->randomNumber(5, true);
                $trains->Numero_Carrozze  = $faker->randomDigitNot(0);
                $trains->In_orario = $faker->word();
                $trains->Cancellato = $faker->word();
                $trains->Data = $faker->dateTimeBetween('-0 day', '+0 day');
            
            $trains->save();
        }
        
    }
}
