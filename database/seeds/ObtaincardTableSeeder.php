<?php

use Illuminate\Database\Seeder;

class ObtaincardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('obtaincards')->insert([
            [
                'UserID' => 1,
                'CardID' => 1,
                'ObtainDate' => '2018-06-11',
            ],
            [
                'UserID' => 2,
                'CardID' => 45,
                'ObtainDate' => '2018-07-26',
            ],
            [
                'UserID' => 2,
                'CardID' => 50,
                'ObtainDate' => '2018-07-26',
            ],
            [
                'UserID' => 2,
                'CardID' => 53,
                'ObtainDate' => '2018-07-26',
            ],
            [
                'UserID' => 2,
                'CardID' => 23,
                'ObtainDate' => '2018-07-26',
            ],
            [
                'UserID' => 3,
                'CardID' => 18,
                'ObtainDate' => '2018-07-26',
            ],
            [
                'UserID' => 3,
                'CardID' => 51,
                'ObtainDate' => '2018-07-26',
            ],
            [
                'UserID' => 3,
                'CardID' => 4,
                'ObtainDate' => '2018-07-26',
            ],
            [
                'UserID' => 3,
                'CardID' => 12,
                'ObtainDate' => '2018-07-26',
            ],
            [
                'UserID' => 4,
                'CardID' => 6,
                'ObtainDate' => '2018-07-26',
            ],
            [
                'UserID' => 4,
                'CardID' => 25,
                'ObtainDate' => '2018-07-26',
            ],
            [
                'UserID' => 4,
                'CardID' => 52,
                'ObtainDate' => '2018-07-26',
            ],
        ]);
    }
}
