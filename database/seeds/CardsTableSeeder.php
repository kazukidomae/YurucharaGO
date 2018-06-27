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
                'CardIllustration' => 'testimg/test_card_materials/illustration/kumamon.png',
                'Introduction' => 'ボクの仕事は、身近にあるサプライズ＆ハッピーを見つけて、全国のみんなに知ってもらうこと。熊本だけでなく関西や関東にも出張して、熊本のおいしいものや大自然を熱烈アピール中！知事から熊本県の営業部長兼しあわせ部長に抜擢されて、ますますはりきってるんだモン。ボクが大好きな熊本のことを、みんなにもっともっと知ってほしいから、これからもどんどん会いに行くモン！魅力いっぱいの熊本とボクのことを、これからもよろしくま！',
                'CardColor' => '#000000',
                'PRPhoto_1blob' => 'testimg/test_card_materials/PRPhoto_1/kumamon.png',
                'PRPhoto_2blob' => 'testimg/test_card_materials/PRPhoto_2/kumamon.png',
                'PRPhoto_3blob' => 'testimg/test_card_materials/PRPhoto_3/kumamon.png',
                'latitude' => 32.806186,
                'longitude' => 130.705834,
            ],
            [
                'CardName' => 'ひこにゃん',
                'PrefecturesID' => 25,
                'CardIllustration' => 'testimg/test_card_materials/illustration/hikonyan.png',
                'Introduction' => '彦根藩二代当主である井伊直孝公をお寺の門前で手招きして雷雨から救ったと伝えられる"招き猫”と、井伊軍団のシンボルとも言える赤備え（戦国時代の軍団編成の一種で、あらゆる武具を朱塗りにした部隊編成のこと）の兜（かぶと）を合体させて生まれたキャラクター。愛称の「ひこにゃん」は、全国よりお寄せいただいた1167点のなかから決定。また、巷ではひそかに「モチ」という愛称も……。',
                'CardColor' => '#ff0000',
                'PRPhoto_1blob' => 'testimg/test_card_materials/PRPhoto_1/hikonyan.png',
                'PRPhoto_2blob' => 'testimg/test_card_materials/PRPhoto_2/hikonyan.png',
                'PRPhoto_3blob' => 'testimg/test_card_materials/PRPhoto_3/hikonyan.png',
                'latitude' => 35.258945,
                'longitude' => 136.242275,
            ],
            [
                'CardName' => 'にしこくん',
                'PrefecturesID' => 13,
                'CardIllustration' =>'testimg/test_card_materials/illustration/nisikokun.png',
                'Introduction' =>'武蔵の国・国分寺跡から発掘された“あぶみ瓦”がモチーフの、丸いグレーの顔からにょきっと出た足がチャームポイントの妖精。 “ゆるい”をテーマに、SNS発信や多数のイベント出演、テレビ・CM出演、企業コラボレーション等を行い、出会う人々を愉しませている。',
                'CardColor' => '#ffffff',
                'PRPhoto_1blob' => 'testimg/test_card_materials/PRPhoto_1/nisikokun1.png',
                'PRPhoto_2blob' => 'testimg/test_card_materials/PRPhoto_2/nisikokun2.png',
                'PRPhoto_3blob' => 'testimg/test_card_materials/PRPhoto_3/nisikokun3.png',
                'latitude' => 35.6879135,
                'longitude' => 139.6965301,
            ],
            [
                'CardName' => '人之助',
                'PrefecturesID' => 13,
                'CardIllustration' =>'testimg/test_card_materials/illustration/ninnosuke.png',
                'Introduction' =>'下町キング人之助！日本橋人形町のヤンチャ坊主です。ピンクの肉球を触ると、子宝・恋愛運アップ、黄色の肉球を触ると、金運アップ。体の色の黒は、魔除け、白は福を招きます。大好物は、駄菓子です。',
                'CardColor' => '#0000ff',
                'PRPhoto_1blob' => 'testimg/test_card_materials/PRPhoto_1/ninnosuke1.png',
                'PRPhoto_2blob' => 'testimg/test_card_materials/PRPhoto_2/ninnosuke2.png',
                'PRPhoto_3blob' => 'testimg/test_card_materials/PRPhoto_3/ninnosuke.png',
                'latitude' => 35.6886803,
                'longitude' => 139.6967876,
            ],
        ]);
    }
}
