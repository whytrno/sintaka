<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destination;
use Faker\Factory as Faker;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 20; $i++){
            Destination::create([
                'destination_type_id' => $faker->numberBetween(1, 7),
                'destination_name' => $faker->name,
                'destination_profil' => $faker->text,
                'destination_facility' => $faker->text,
                'destination_ticket_price' => $faker->text,
                'destination_address' => $faker->text,
            ]);
        }
    }
}
