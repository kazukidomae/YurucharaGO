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
                'PrefecturesID' => 43,
                'PRName' => '熊本城1',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/kumamotojyo1.png',
                'PRDescription' => '熊本城の説明1',
                'latitude' => 32.806186,
                'longitude' => 130.705834,
            ],
            [
                'CardID' => 1,
                'PrefecturesID' => 43,
                'PRName' => '熊本城2',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/kumamotojyo2.png',
                'PRDescription' => '熊本城の説明2',
                'latitude' => 32.806186,
                'longitude' => 130.699911,
            ],
            [
                'CardID' => 1,
                'PrefecturesID' => 43,
                'PRName' => '熊本城3',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/kumamotojyo3.png',
                'PRDescription' => '熊本城の説明3',
                'latitude' => 32.809079,
                'longitude' => 130.699825,
            ],
            [
                'CardID' => 2,
                'PrefecturesID' => 25,
                'PRName' => '彦根城1',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/hikonejyo1.png',
                'PRDescription' => '彦根城の説明1',
                'latitude' => 35.276452,
                'longitude' => 136.251846,
            ],
            [
                'CardID' => 2,
                'PrefecturesID' => 25,
                'PRName' => '彦根城2',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/hikonejyo2.png',
                'PRDescription' => '彦根城の説明2',
                'latitude' => 35.27463,
                'longitude' => 136.253048,
            ],
            [
                'CardID' => 2,
                'PrefecturesID' => 25,
                'PRName' => '彦根城3',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/hikonejyo3.png',
                'PRDescription' => '彦根城の説明3',
                'latitude' => 35.281917,
                'longitude' => 136.256567,
            ],
            [
                'CardID' => 3,
                'PrefecturesID' => 13,
                'PRName' => '国分寺駅1',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/kokubunji1.png',
                'PRDescription' => '国分寺駅の説明1',
                'latitude' => 35.68939,
                'longitude' => 139.691602,
            ],
            [
                'CardID' => 3,
                'PrefecturesID' => 13,
                'PRName' => '国分寺駅2',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/kokubunji2.png',
                'PRDescription' => '国分寺駅の説明2',
                'latitude' => 35.689516,
                'longitude' => 139.69297,
            ],
            [
                'CardID' => 3,
                'PrefecturesID' => 13,
                'PRName' => '国分寺駅3',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/kokubunji3.png',
                'PRDescription' => '国分寺駅の説明3',
                'latitude' => 35.690401,
                'longitude' => 139.692519,
            ],
            [
                'CardID' => 4,
                'PrefecturesID' => 13,
                'PRName' => '人形町1',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/ningyotyo1.png',
                'PRDescription' => '人形町の説明1',
                'latitude' => 35.690296,
                'longitude' => 139.691763,
            ],
            [
                'CardID' => 4,
                'PrefecturesID' => 13,
                'PRName' => '人形町2',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/ningyotyo2.png',
                'PRDescription' => '人形町の説明2',
                'latitude' => 35.691215,
                'longitude' => 139.69275,
            ],
            [
                'CardID' => 4,
                'PrefecturesID' => 13,
                'PRName' => '人形町3',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/ningyotyo3.png',
                'PRDescription' => '人形町の説明3',
                'latitude' => 35.691743,
                'longitude' => 139.693619,
            ],
        ]);
    }
}
