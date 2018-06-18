<?php

use Illuminate\Database\Seeder;

class ObtainTrophysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('obtaintrophys')->insert([
            [
                'UserID' => 1,
                'TrophyID' => 2,
                'ObtainDate' => '2018-06-11',
            ],
        ]);
    }
}
