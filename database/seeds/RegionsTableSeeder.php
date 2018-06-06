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
                'RegionName' => 'Hokkaido/Tohoku',
                'PrefectureNumber' => 7,
            ],
            [
                'RegionName' => 'Kanto',
                'PrefectureNumber' => 7,
            ],
            [
                'RegionName' => 'Koshinetsu/Hokuriku',
                'PrefectureNumber' => 6,
            ],
            [
                'RegionName' => 'Tokai',
                'PrefectureNumber' => 4,
            ],
            [
                'RegionName' => 'Kinki',
                'PrefectureNumber' => 6,
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
                'RegionName' => 'Kyushu/Okinawa',
                'PrefectureNumber' => 8,
            ],
        ]);
    }
}
