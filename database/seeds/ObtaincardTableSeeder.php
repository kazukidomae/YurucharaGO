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
        ]);
    }
}
