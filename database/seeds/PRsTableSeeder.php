<?php

use Illuminate\Database\Seeder;

class PRsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prs')->insert([
            [
                'CardID' => 1,
                'PRName' => 'HAL東京',
                'PRPhotoPath' => 'Test/Ebata/ebata1.png',
                'PRDescription' => '様々な独自カリキュラムを行っているが共通として挙げられている目標としては「プロ」育成である。',
                'latitude' => 35.6897657,
                'longitude' => 139.6945417,
            ],
            [
                'CardID' => 1,
                'PRName' => 'HAL東京',
                'PRPhotoPath' => 'Test/Ebata/ebata2.png',
                'PRDescription' => '専門学校としては珍しく、資格専攻ではなく技術講義を優先しており、即戦力になる人材育成を心がけている。',
                'latitude' => 35.6904628,
                'longitude' => 139.6932542,
            ],
            [
                'CardID' => 2,
                'PRName' => '国分寺駅',
                'PRPhotoPath' => 'Kanto/Tokyo/PRPhoto/sensouji.png',
                'PRDescription' => '浅草寺',
                'latitude' => 35.6927068,
                'longitude' => 139.7014212,
            ],
            [
                'CardID' => 2,
                'PRName' => '国分寺',
                'PRPhotoPath' => 'Kanto/Tokyo/PRPhoto/sensouji.png',
                'PRDescription' => '浅草寺',
                'latitude' => 35.690296,
                'longitude' => 139.691763,
            ],
            [
                'CardID' => 3,
                'PRName' => '熊本城',
                'PRPhotoPath' => 'Kyusyu/Kumamoto/kumamotojyo.png',
                'PRDescription' => '熊本城',
                'latitude' => 35.6915626,
                'longitude' => 139.6963599,
            ],
            [
                'CardID' => 3,
                'PRName' => '熊本城',
                'PRPhotoPath' => 'Kyusyu/Kumamoto/kumamotojyo.png',
                'PRDescription' => '熊本城',
                'latitude' => 35.6920244,
                'longitude' => 35.6920244,
            ],
        ]);
    }
}
