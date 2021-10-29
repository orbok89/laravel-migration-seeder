<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;
class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker)
    {
        for($i=0; $i<20;$i++){
            $new_trip= new Trip();
            $new_trip->destination=  $faker->city();
            $new_trip->prezzo= $faker->numberBetween(50, 3000);
            $new_trip->star_hotel= $faker->numberBetween(1, 5);
            $new_trip->notti= $faker->numberBetween(1, 30);
            $new_trip->save();
        }
        
    }
}
