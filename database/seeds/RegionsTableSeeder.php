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
            ],
            [
                'RegionName' => 'Tohoku',
            ],
            [
                'RegionName' => 'Kanto',
            ],
            [
                'RegionName' => 'Chubu',
            ],
            [
                'RegionName' => 'Kansai',
            ],
            [
                'RegionName' => 'Chugoku',
            ],
            [
                'RegionName' => 'Shikoku',
            ],
            [
                'RegionName' => 'Kyushu',
            ],
        ]);
    }
}
