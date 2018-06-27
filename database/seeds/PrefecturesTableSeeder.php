<?php

use Illuminate\Database\Seeder;

class PrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefectures')->insert([

            // Hokkaido
            [
                'RegionID' => 1,
                'PrefecturesName' => 'Hokkaido',
                'PrefecturesIcon' => '',
            ],

            // Tohoku
            [
                'RegionID' => 2,
                'PrefecturesName' => 'Aomori',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 2,
                'PrefecturesName' => 'Iwate',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 2,
                'PrefecturesName' => 'Miyagi',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 2,
                'PrefecturesName' => 'Akita',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 2,
                'PrefecturesName' => 'Yamagata',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 2,
                'PrefecturesName' => 'Fukushima',
                'PrefecturesIcon' => '',
            ],

            // Kanto
            [
                'RegionID' => 3,
                'PrefecturesName' => 'Ibaraki',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 3,
                'PrefecturesName' => 'Tochigi',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 3,
                'PrefecturesName' => 'Gunma',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 3,
                'PrefecturesName' => 'Saitama',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 3,
                'PrefecturesName' => 'Chiba',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 3,
                'PrefecturesName' => 'Tokyo',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 3,
                'PrefecturesName' => 'Kanagawa',
                'PrefecturesIcon' => '',
            ],

            // Chubu
            [
                'RegionID' => 4,
                'PrefecturesName' => 'Niigata',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 4,
                'PrefecturesName' => 'Toyama',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 4,
                'PrefecturesName' => 'Ishikawa',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 4,
                'PrefecturesName' => 'Fukui',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 4,
                'PrefecturesName' => 'Yamanashi',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 4,
                'PrefecturesName' => 'Nagano',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 4,
                'PrefecturesName' => 'Gifu',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 4,
                'PrefecturesName' => 'Shizuoka',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 4,
                'PrefecturesName' => 'Aichi',
                'PrefecturesIcon' => '',
            ],

            // Kansai
            [
                'RegionID' => 5,
                'PrefecturesName' => 'Mie',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 5,
                'PrefecturesName' => 'Shiga',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 5,
                'PrefecturesName' => 'Kyoto',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 5,
                'PrefecturesName' => 'Osaka',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 5,
                'PrefecturesName' => 'Hyogo',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 5,
                'PrefecturesName' => 'Nara',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 5,
                'PrefecturesName' => 'Wakayama',
                'PrefecturesIcon' => '',
            ],

            // Chugoku
            [
                'RegionID' => 6,
                'PrefecturesName' => 'Tottori',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 6,
                'PrefecturesName' => 'Shimane',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 6,
                'PrefecturesName' => 'Okayama',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 6,
                'PrefecturesName' => 'Hiroshima',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 6,
                'PrefecturesName' => 'Yamaguchi',
                'PrefecturesIcon' => '',
            ],

            // Shikoku
            [
                'RegionID' => 7,
                'PrefecturesName' => 'Tokushima',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 7,
                'PrefecturesName' => 'Kagawa',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 7,
                'PrefecturesName' => 'Ehime',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 7,
                'PrefecturesName' => 'Kochi',
                'PrefecturesIcon' => '',
            ],

            // Kyushu
            [
                'RegionID' => 8,
                'PrefecturesName' => 'Fukuoka',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 8,
                'PrefecturesName' => 'Saga',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 8,
                'PrefecturesName' => 'Nagasaki',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 8,
                'PrefecturesName' => 'Kumamoto',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 8,
                'PrefecturesName' => 'Oita',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 8,
                'PrefecturesName' => 'Miyazaki',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 8,
                'PrefecturesName' => 'Kagoshima',
                'PrefecturesIcon' => '',
            ],
            [
                'RegionID' => 8,
                'PrefecturesName' => 'Okinawa',
                'PrefecturesIcon' => '',
            ],
        ]);
    }
}
