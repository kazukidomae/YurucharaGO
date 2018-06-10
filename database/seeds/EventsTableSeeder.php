<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'EventName' => 'くまモンスクエア',
                'CardID' => 1,
                'EventDate' => '2018-08-01',
                'EndDate' => '2018-08-01',
                'EventSiteURL' => 'http://www.kumamon-sq.jp/',
            ],
            [
                'EventName' => 'くまモンスクエア　テレビ生中継',
                'CardID' => 1,
                'EventDate' => '2018-08-02',
                'EndDate' => '2018-08-02',
                'EventSiteURL' => 'http://www.tku.co.jp/web/pgm_info/kataranne',
            ],
        ]);
    }
}
