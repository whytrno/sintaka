<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Faker\Factory as Faker;

class EventSeeder extends Seeder
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
            Event::create([
                'event_name' => $faker->name,
                'event_desc' => $faker->text,
                'event_place' => $faker->address,
                'event_date_start' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'event_date_end' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'event_image' => $faker->name,
            ]);
        }
    }
}
