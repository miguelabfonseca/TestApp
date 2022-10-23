<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TVSeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TVSeries::create([
            'serie_id' => 1,
            'title' => 'Friends',
            'season' => 'T1',
            'episode' => 'E1',
            'channel' => "Fox Comedy",
            'gender' => 'Comedy',
        ]);

        \App\Models\TVSeries::create([
            'serie_id' => 1,
            'title' => 'Friends',
            'season' => 'T1',
            'episode' => 'E2',
            'channel' => "Fox Comedy",
            'gender' => 'Comedy',
        ]);
        \App\Models\TVSeries::create([
            'serie_id' => 1,
            'title' => 'Friends',
            'season' => 'T1',
            'episode' => 'E3',
            'channel' => "Fox Comedy",
            'gender' => 'Comedy',
        ]);
        \App\Models\TVSeries::create([
            'serie_id' => 1,
            'title' => 'Friends',
            'season' => 'T2',
            'episode' => 'E1',
            'channel' => "Fox Comedy",
            'gender' => 'Comedy',
        ]);
        \App\Models\TVSeries::create([
            'serie_id' => 1,
            'title' => 'Friends',
            'season' => 'T2',
            'episode' => 'E2',
            'channel' => "Fox Comedy",
            'gender' => 'Comedy',
        ]);


        \App\Models\TVSeries::create([
            'serie_id' => 2,
            'title' => 'CSI Miami',
            'season' => 'T1',
            'episode' => 'E1',
            'channel' => "AXN",
            'gender' => 'Crime',
        ]);

        \App\Models\TVSeries::create([
            'serie_id' => 2,
            'title' => 'CSI Miami',
            'season' => 'T1',
            'episode' => 'E2',
            'channel' => "AXN",
            'gender' => 'Crime',
        ]);
        \App\Models\TVSeries::create([
            'serie_id' => 2,
            'title' => 'CSI Miami',
            'season' => 'T1',
            'episode' => 'E3',
            'channel' => "AXN",
            'gender' => 'Crime',
        ]);
        \App\Models\TVSeries::create([
            'serie_id' => 2,
            'title' => 'CSI Miami',
            'season' => 'T1',
            'episode' => 'E4',
            'channel' => "AXN",
            'gender' => 'Crime',
        ]);
        \App\Models\TVSeries::create([
            'serie_id' => 2,
            'title' => 'CSI Miami',
            'season' => 'T1',
            'episode' => 'E5',
            'channel' => "AXN",
            'gender' => 'Crime',
        ]);

        \App\Models\TVSeries::create([
            'serie_id' => 3,
            'title' => 'Casa de Papel',
            'season' => 'T1',
            'episode' => 'E1',
            'channel' => "Life",
            'gender' => 'Drama',
        ]);
        \App\Models\TVSeries::create([
            'serie_id' => 3,
            'title' => 'Casa de Papel',
            'season' => 'T1',
            'episode' => 'E2',
            'channel' => "Life",
            'gender' => 'Drama',
        ]);
        \App\Models\TVSeries::create([
            'serie_id' => 3,
            'title' => 'Casa de Papel',
            'season' => 'T1',
            'episode' => 'E3',
            'channel' => "Life",
            'gender' => 'Drama',
        ]);
        \App\Models\TVSeries::create([
            'serie_id' => 3,
            'title' => 'Casa de Papel',
            'season' => 'T1',
            'episode' => 'E4',
            'channel' => "Life",
            'gender' => 'Drama',
        ]);
    }
}
