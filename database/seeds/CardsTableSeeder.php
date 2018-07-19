<?php

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            [
                'CardName' => 'くまモン',
                'PrefecturesID' => 43,
                'CardIllustrationPath' => 'testimg/test_card_materials/illustration/kumamon.png',
                'CardDescription' => 'ボクの仕事は、身近にあるサプライズ＆ハッピーを見つけて、全国のみんなに知ってもらうこと。知事から熊本県の営業部長兼しあわせ部長に抜擢されて、ますますはりきってるんだモン。',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'ひこにゃん',
                'PrefecturesID' => 25,
                'CardIllustrationPath' => 'testimg/test_card_materials/illustration/hikonyan.png',
                'CardDescription' => '彦根藩二代当主である井伊直孝公をお寺の門前で手招きして雷雨から救ったと伝えられる"招き猫”と、井伊軍団のシンボルとも言える赤備えの兜を合体させて生まれたキャラクター。',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'にしこくん',
                'PrefecturesID' => 13,
                'CardIllustrationPath' =>'testimg/test_card_materials/illustration/nisikokun.png',
                'CardDescription' =>'武蔵の国・国分寺跡から発掘された“あぶみ瓦”がモチーフの、丸いグレーの顔からにょきっと出た足がチャームポイントの妖精。',
                'AttributeID' => 3,

            ],
            [
                'CardName' => '人之助',
                'PrefecturesID' => 13,
                'CardIllustrationPath' =>'testimg/test_card_materials/illustration/ninnosuke.png',
                'CardDescription' =>'下町キング人之助！日本橋人形町のヤンチャ坊主です。ピンクの肉球を触ると、子宝・恋愛運アップ、黄色の肉球を触ると、金運アップ。',
                'AttributeID' => 3,
            ],
        ]);
    }
}
