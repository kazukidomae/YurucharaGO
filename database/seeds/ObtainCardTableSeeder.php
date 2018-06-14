<?php

use Illuminate\Database\Seeder;

class ObtainCardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('obtaincards')->([
            [
                'UserID' => 1,
                'CardID' => 1,
                'ObtainData' => '2018-06-11',
            ],
            [
                'UserID' => 1,
                'CardID' => 2,
                'ObtainData' => '2018-06-11'
                
            ],
            
        ]);
    }
}
