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
                'CardName' => '江畑幸一',
                'PrefecturesID' => 13,
                'CardIllustrationPath' => 'Test/Ebata/ebata.png',
                'CardDescription' => '情報工学・情報処理分野の教育に携わりながら、プログラミング技術の専門家としても活躍。IT企業の社員研修を個人で請け負うなど、第一線で活躍を続けてきたIT教育のプロフェッショナル。',
                'AttributeID' => 5,
            ],
            [
                'CardName' => 'にしこくん',
                'PrefecturesID' => 13,
                'CardIllustrationPath' => 'Kanto/Tokyo/nisikokun.png',
                'CardDescription' => '武蔵の国・国分寺跡から発掘された“あぶみ瓦”がモチーフの、丸いグレーの顔からにょきっと出た足がチャームポイントの妖精。',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'くまもん',
                'PrefecturesID' => 43,
                'CardIllustrationPath' => 'Kyushu/Kumamoto/kumamon.png',
                'CardDescription' => 'ボクの仕事は、身近にあるサプライズ＆ハッピーを見つけて、全国のみんなに知ってもらうこと。',
                'AttributeID' => 4,
            ],
        ]);
    }
}
