<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            [
                'RegionName' => 'Hokkaido',
                'PrefectureNumber' => 1,
            ],
            [
                'RegionName' => 'Tohoku',
                'PrefectureNumber' => 6,
            ],
            [
                'RegionName' => 'Kanto',
                'PrefectureNumber' => 7,
            ],
            [
                'RegionName' => 'Chubu',
                'PrefectureNumber' => 9,
            ],
            [
                'RegionName' => 'Kansai',
                'PrefectureNumber' => 7,
            ],
            [
                'RegionName' => 'Chugoku',
                'PrefectureNumber' => 5,
            ],
            [
                'RegionName' => 'Shikoku',
                'PrefectureNumber' => 4,
            ],
            [
                'RegionName' => 'Kyushu',
                'PrefectureNumber' => 8,
            ],
        ]);
    }
}
