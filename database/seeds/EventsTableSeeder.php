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
            [
                'EventName' => '第68回社会を明るくする運動・青少年健全育成彦根市大会',
                'CardID' => 2,
                'EventDate' => '2018-07-01',
                'EndDate' => '2018-07-01',
                'EventSiteURL' => 'http://www.hikoneshi.com/jp/event/articles/c/yukata-matsuri',
            ],
            [
                'EventName' => '第2回彦根城眺遠的大会',
                'CardID' => 2,
                'EventDate' => '2018-09-09',
                'EndDate' => '2018-09-09',
                'EventSiteURL' => 'http://hikone-hikonyan.jp/news/articles/824',
            ],
            [
                'EventName' => '高円寺フェス',
                'CardID' => 3,
                'EventDate' => '2018-08-02',
                'EndDate' => '2018-08-02',
                'EventSiteURL' => 'http://koenjifes.jp/2014/event/yuruchara/',
            ],
            [
                'EventName' => '高円寺フェス',
                'CardID' => 4,
                'EventDate' => '2018-08-02',
                'EndDate' => '2018-08-02',
                'EventSiteURL' => 'http://koenjifes.jp/2014/event/yuruchara/',
            ],
        ]);
    }
}
