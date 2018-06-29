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
                'CardIllustrationPath' => 'testimg/test_card_materials/illustration/kumamon.png',
                'CardColor' => '#000000',
                'CardDescription' => 'ボクの仕事は、身近にあるサプライズ＆ハッピーを見つけて、全国のみんなに知ってもらうこと。知事から熊本県の営業部長兼しあわせ部長に抜擢されて、ますますはりきってるんだモン。',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'ひこにゃん',
                'CardIllustrationPath' => 'testimg/test_card_materials/illustration/hikonyan.png',
                'CardColor' => '#ff0000',
                'CardDescription' => '彦根藩二代当主である井伊直孝公をお寺の門前で手招きして雷雨から救ったと伝えられる"招き猫”と、井伊軍団のシンボルとも言える赤備えの兜を合体させて生まれたキャラクター。',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'にしこくん',
                'CardIllustrationPath' =>'testimg/test_card_materials/illustration/nisikokun.png',
                'CardColor' => '#ffffff',
                'CardDescription' =>'武蔵の国・国分寺跡から発掘された“あぶみ瓦”がモチーフの、丸いグレーの顔からにょきっと出た足がチャームポイントの妖精。',
                'AttributeID' => 3,
            ],
            [
                'CardName' => '人之助',
                'CardIllustrationPath' =>'testimg/test_card_materials/illustration/ninnosuke.png',
                'CardColor' => '#0000ff',
                'CardDescription' =>'下町キング人之助！日本橋人形町のヤンチャ坊主です。ピンクの肉球を触ると、子宝・恋愛運アップ、黄色の肉球を触ると、金運アップ。',
                'AttributeID' => 3,
            ],
        ]);
    }
}
