<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $trains = [
            [
                "society" => "AfricanTrains",
                "departure_station" => "Casablanca",
                "arrival_station" => "Il Cairo",
                "departure_time" => "2024-01-23 13:25:55",
                "arrival_time" => "2024-01-27 16:45:55",
                "train_code" =>  "AS3854",
                "number_carriages" => 22,
                "in_time" => 1,
                "deleted" => 0,
            ],
            [
                "society" => "QatarTrains",
                "departure_station" => "Abu Dhabi",
                "arrival_station" => "Dubai",
                "departure_time" => "2024-01-23 13:25:55",
                "arrival_time" => "2024-01-24 21:45:55",
                "train_code" =>  "JK3304",
                "number_carriages" => 22,
                "in_time" => 1,
                "deleted" => 0,
            ]
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->society = $train["society"];
            $newTrain->departure_station = $train["departure_station"];
            $newTrain->arrival_station = $train["arrival_station"];
            $newTrain->departure_time = $train["departure_time"];
            $newTrain->arrival_time = $train["arrival_time"];
            $newTrain->train_code = $train["train_code"];
            $newTrain->number_carriages = $train["number_carriages"];
            $newTrain->in_time = $train["in_time"];
            $newTrain->deleted = $train["deleted"];
            $newTrain->save();
        }


        // faker
        for ($i = 0; $i < 10; $i++) {
            $newTrain->society = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeInInterval('-1 days', '+3 week');
            $newTrain->arrival_time = $faker->dateTimeInInterval('-1 days', '+3 week');
            $newTrain->train_code = $faker->bothify('??-####');
            $newTrain->number_carriages = 20;
            $newTrain->in_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}
