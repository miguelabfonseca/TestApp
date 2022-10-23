<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class TVSeriesIntervalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach (\App\Models\tvSeries::all() as $serie) {
            $date = $faker->dateTimeBetween('-1 day', 'now +5 day');
            \App\Models\TvSeriesIntervals::create([
                'id_tv_series' => $serie->id,
                'week_day' => $date,
                'show_time' => $date,
            ]);

            $date = $faker->dateTimeBetween('-1 day', 'now +5 day');
            \App\Models\TvSeriesIntervals::create([
                'id_tv_series' => $serie->serie_id,
                'week_day' => $date,
                'show_time' => $date,
            ]);
        }
    }
}
