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
                'CardName' => 'メロン熊',
                'PrefecturesID' => 1,
                'CardIllustrationPath' => 'Hokkaido/Hokkaido/meronguma.png',
                'CardDescription' => '夕張のおいしいメロンを食い荒らして変貌したフルーツアニマル。',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'ここる',
                'PrefecturesID' => 2,
                'CardIllustrationPath' => 'Tohoku/Aomori/kokoru.png',
                'CardDescription' => 'タヌキに憧れるイルカで,ちょっぴり甘えん坊な性格。貝殻集めが趣味。',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'そばっち',
                'PrefecturesID' => 3,
                'CardIllustrationPath' =>'Tohoku/Iwate/sobatti.png',
                'CardDescription' =>'「わんこきょうだい」のひとり。 わんこそばをモチーフにしたメインキャラ。',
                'AttributeID' => 2,

            ],
            [
                'CardName' => 'むすび丸',
                'PrefecturesID' => 4,
                'CardIllustrationPath' =>'Tohoku/Miyagi/musubimaru.png',
                'CardDescription' =>'子供たちと一緒に写真に撮ってもらうのが好き。暑いのが苦手。',
                'AttributeID' => 4,
            ],
            [
                'CardName' => 'やきっぴ',
                'PrefecturesID' => 5,
                'CardIllustrationPath' => 'Tohoku/Akita/yakippi.png',
                'CardDescription' => '横手やきそばキャラクターやきっピ、横手やきそば研究会会員。',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'チェリン',
                'PrefecturesID' => 6,
                'CardIllustrationPath' => 'Tohoku/Yamagata/cherin.png',
                'CardDescription' => 'さくらんぼの妖精であり、頭にさくらんぼを付けている。',
                'AttributeID' => 2,
            ],
            [
                'CardName' => '頭が福島ちゃん',
                'PrefecturesID' => 7,
                'CardIllustrationPath' =>'Tohoku/Hukushima/atamagafukushima.png',
                'CardDescription' =>'趣味はお散歩、みんなで遊ぶことが大好きな女の子。',
                'AttributeID' => 1,

            ],
            [
                'CardName' => 'こうちゃん',
                'PrefecturesID' => 8,
                'CardIllustrationPath' =>'Kanto/Ibaraki/koutyan.png',
                'CardDescription' =>'明るく、ひょうきんなこうちゃんは皆の心を和ませてくれます。',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'とち介',
                'PrefecturesID' => 9,
                'CardIllustrationPath' => 'Kanto/Tochigi/totisuke.png',
                'CardDescription' => '蔵の街栃木市で生まれた、蔵の妖精。',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'ぐんまちゃん',
                'PrefecturesID' => 10,
                'CardIllustrationPath' => 'Kanto/gunma/gunmatyan.png',
                'CardDescription' => '世界文化遺産、富岡製糸場と絹産業遺産群をはじめ、群馬県宣伝部長をしている。',
                'AttributeID' => 4,
            ],
            [
                'CardName' => 'みーなちゃん',
                'PrefecturesID' => 11,
                'CardIllustrationPath' =>'Kanto/Saitama/mi-natyan.png',
                'CardDescription' =>'皆野町の美の山、清流、桜の花を帽子に盛り込み頭文字Mに見立てている。',
                'AttributeID' => 4,

            ],
            [
                'CardName' => 'チーバくん',
                'PrefecturesID' => 12,
                'CardIllustrationPath' =>'Kanto/Chiba/ti-bakun.png',
                'CardDescription' =>'姿は色が真っ赤で、横から見ると千葉県の形をしている。',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'にしこくん',
                'PrefecturesID' => 13,
                'CardIllustrationPath' => 'Kanto/Tokyo/nisikokun.png',
                'CardDescription' => '丸いグレーの顔からにょきっと出た足がチャームポイントの妖精。',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'えびなさん',
                'PrefecturesID' => 14,
                'CardIllustrationPath' => 'Kanto/Kanagawa/ebinasan.png',
                'CardDescription' => '海老名村が相模原町からの侵略を防ぐ事を目的に、存在を密かにしていた。',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'レルヒさん',
                'PrefecturesID' => 15,
                'CardIllustrationPath' =>'Chubu/Niigata/reruhisan.png',
                'CardDescription' =>'実在の偉人レルヒさんが100年の時を超えて新潟に帰ってきた。',
                'AttributeID' => 1,

            ],
            [
                'CardName' => 'みらたん',
                'PrefecturesID' => 16,
                'CardIllustrationPath' =>'Chubu/Toyama/miratan.png',
                'CardDescription' =>'温厚で穏やか。普段はボーっとしてる。',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'わくたまくん',
                'PrefecturesID' => 17,
                'CardIllustrationPath' => 'Chubu/Ishikawa/wakutamakun.png',
                'CardDescription' => '和倉温泉を発見したとされるシラサギが産んだタマゴ。',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'へしこちゃん',
                'PrefecturesID' => 18,
                'CardIllustrationPath' => 'Chubu/Hukui/hesikotyan.png',
                'CardDescription' => '糠漬けになったサバの頭が樽から飛び出した状態で、頭にリボンが付いている。',
                'AttributeID' => 2,
            ],
            [
                'CardName' => '武田菱丸',
                'PrefecturesID' => 19,
                'CardIllustrationPath' =>'Chubu/Yamanashi/takedaryoumaru.png',
                'CardDescription' =>'勇敢で頭脳明晰、みんなに優しい。暑さや冬の寒さにめっぽう強い。',
                'AttributeID' => 4,

            ],
            [
                'CardName' => 'あるくま',
                'PrefecturesID' => 20,
                'CardIllustrationPath' =>'Chubu/Nagano/arukuma.png',
                'CardDescription' =>'寒がりで、いつも頭にかぶりもの、旅好きで、いつも背中にリュックサック。',
                'AttributeID' => 2,
            ],
            [
                'CardName' => '郡上らら',
                'PrefecturesID' => 21,
                'CardIllustrationPath' => 'Chubu/Gihu/gunjourara.png',
                'CardDescription' => '夏のおどりや、ウィンタースポーツ、自然豊かな郡上が大好きらら。',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'うなぎいも',
                'PrefecturesID' => 22,
                'CardIllustrationPath' => 'Chubu/Shizuoka/unagiimo.png',
                'CardDescription' => 'うなぎいは畑から生まれた、王国カフェの国王として毎日なもなもしている。',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'モリゾーキッコロ',
                'PrefecturesID' => 23,
                'CardIllustrationPath' =>'Chubu/Aichi/morizo-kikkoro.png',
                'CardDescription' =>'モリゾーは、森のおじいちゃん。キッコロは、森のこども。',
                'AttributeID' => 4,

            ],
            [
                'CardName' => 'めい姫',
                'PrefecturesID' => 24,
                'CardIllustrationPath' =>'Kinki/Mie/meihime.png',
                'CardDescription' =>'斎王にあこがれ続けるうち、その思いがめい姫の姿になった。',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'キャッフィ',
                'PrefecturesID' => 25,
                'CardIllustrationPath' => 'Kinki/Shiga/kyaffi.png',
                'CardDescription' => '琵琶湖の固有種ビワコオオナマズ。',
                'AttributeID' => 1,
            ],
            [
                'CardName' => '絹かけさん',
                'PrefecturesID' => 26,
                'CardIllustrationPath' => 'Kinki/Kyoto/kinukakesan.png',
                'CardDescription' => '金閣寺・龍安寺・仁和寺、三つの世界遺産を巡るきぬかけの路の妖怪。',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'ゆめまるくん',
                'PrefecturesID' => 27,
                'CardIllustrationPath' =>'Kinki/Osaka/yumemarukun.png',
                'CardDescription' =>'歴史・文化・商いの町、大阪市中央区のマスコットキャラクター。',
                'AttributeID' => 4,

            ],
            [
                'CardName' => 'はばたん',
                'PrefecturesID' => 28,
                'CardIllustrationPath' =>'Kinki/Hyogo/habatan.png',
                'CardDescription' =>'根っからの元気者で、チャレンジ精神旺盛。',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'しかまろ',
                'PrefecturesID' => 29,
                'CardIllustrationPath' => 'Kinki/Nara/shikamaro.png',
                'CardDescription' => 'のんびりした性格の心やさしい男の子。まろ眉と微笑み目が特徴。',
                'AttributeID' => 4,
            ],
            [
                'CardName' => 'はしぼう',
                'PrefecturesID' => 30,
                'CardIllustrationPath' => 'Kinki/Wakayama/hashibou.png',
                'CardDescription' => 'ふわふわのぽっこりお腹に触ればあなたも幸せ気分になれるかも。',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'みささらどん',
                'PrefecturesID' => 31,
                'CardIllustrationPath' =>'Chugoku/Tottori/misasaradou.png',
                'CardDescription' =>'みんなとの出会いが嬉しくてお腹のお湯がポッカポカ、毎日わくわく。',
                'AttributeID' => 3,

            ],
            [
                'CardName' => 'しまねっこ',
                'PrefecturesID' => 32,
                'CardIllustrationPath' =>'Chugoku/Shimane/shimanekko.png',
                'CardDescription' =>'誰とでもすぐになかよくなれるから、見かけたら声をかけてにゃ。',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'へそっぴ',
                'PrefecturesID' => 33,
                'CardIllustrationPath' => 'Chugoku/Okayama/hesoppi.png',
                'CardDescription' => 'ブッポウソウという色鮮やかな青い羽根をした鳥をモデルにしています。',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'かぐやぱんだ',
                'PrefecturesID' => 34,
                'CardIllustrationPath' => 'Chugoku/Hiroshima/kaguyapanda.png',
                'CardDescription' => '応援用の扇子と商売繁盛の笹を持って安心して暮らせるように、お手伝いしてる。',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'ちょるる',
                'PrefecturesID' => 35,
                'CardIllustrationPath' =>'Chugoku/Yamaguchi/choruru.png',
                'CardDescription' =>'ちょっと恥ずかしがりやでおっちょこちょい。',
                'AttributeID' => 3,

            ],
            [
                'CardName' => '松重係長',
                'PrefecturesID' => 36,
                'CardIllustrationPath' =>'Shikoku/Tokushima/matsushigekakaricho.png',
                'CardDescription' =>'松茂町のことが気になるあまり、月のうさぎが松茂町一色に。',
                'AttributeID' => 4,
            ],
            [
                'CardName' => 'さんうどん',
                'PrefecturesID' => 37,
                'CardIllustrationPath' => 'Shikoku/Kagawa/sanudou.png',
                'CardDescription' => '背中にご自慢のどんぶりポケットを背負い、うどんのカミチャマ目指して修行中。',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'みきゃん',
                'PrefecturesID' => 38,
                'CardIllustrationPath' => 'Shikoku/Ehime/mikyan.png',
                'CardDescription' => '柑橘王国えひめ生まれなんよ～。みんなとのふれあいを大切にしている。',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'ぶんちゃん',
                'PrefecturesID' => 39,
                'CardIllustrationPath' =>'Shikoku/Kochi/buntyan.png',
                'CardDescription' =>'愛らしい丸いフォルムとニッコリ笑顔がトレードマーク。',
                'AttributeID' => 4,

            ],
            [
                'CardName' => 'くるっぱ',
                'PrefecturesID' => 40,
                'CardIllustrationPath' =>'Kyushu/Fukuoka/kuruppa.png',
                'CardDescription' =>'散歩が好きやけん、色んな場所に出かけてるばい。',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'こい姫',
                'PrefecturesID' => 41,
                'CardIllustrationPath' => 'Kyushu/Saga/kohime.png',
                'CardDescription' => '清水の滝での水遊びが大好き。姫にひそかに想いを寄せている。',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'おむらんちゃん',
                'PrefecturesID' => 42,
                'CardIllustrationPath' => 'Kyushu/Nagasaki/omuranchan.png',
                'CardDescription' => 'おおむらざくらをモチーフにした元気に走る(ラン)桜の妖精。',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'くまもん',
                'PrefecturesID' => 43,
                'CardIllustrationPath' =>'Kyushu/Kumamoto/kumamon.png',
                'CardDescription' =>'熊本の美味しいものを食べ過ぎて、現在の太った体型になった。',
                'AttributeID' => 1,

            ],
            [
                'CardName' => 'めじろん',
                'PrefecturesID' => 44,
                'CardIllustrationPath' =>'Kyushu/Oita/mejiron.png',
                'CardDescription' =>'大分県の県鳥であるメジロがモチーフとなっている。',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'おつるちゃん',
                'PrefecturesID' => 45,
                'CardIllustrationPath' => 'Kyushu/Miyazaki/otsuruchan.png',
                'CardDescription' => '椎葉村花シャクナゲを髪飾りにして、元気に可愛らしい女の子。',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'おちゃむらい',
                'PrefecturesID' => 46,
                'CardIllustrationPath' => 'Kyushu/Kagoshima/ochamurai.png',
                'CardDescription' => 'お茶のちょんまげと、ひまわりのベルト、背中には不動明王の家紋があります。',
                'AttributeID' => 4,
            ],
            [
                'CardName' => 'あごまごちゃん',
                'PrefecturesID' => 47,
                'CardIllustrationPath' =>'Kyushu/Okinawa/agomagochan.png',
                'CardDescription' =>'フルーツが大好きで、ちょっぴりアゴが長いのが悩み。',
                'AttributeID' => 2,

            ],
            [
                 'CardName' => '江畑幸一',
                 'PrefecturesID' => 13,
                 'CardIllustrationPath' => 'Test/Ebata/ebata.png',
                 'CardDescription' => '情報工学・情報処理分野の教育に携わりながら、プログラミング技術の専門家としても活躍。IT企業の社員研修を個人で請け負うなど、第一線で活躍を続けてきたIT教育のプロフェッショナル。',
                 'AttributeID' => 5,   
            ],
            [
                 'CardName' => 'そらからちゃん',
                 'PrefecturesID' => 13,
                 'CardIllustrationPath' => 'Kanto/Tokyo/sorakarachan.png',
                 'CardDescription' => '東京スカイツリー公式キャラクター「ソラカラちゃん」「テッペンペン」「スコブルブル」',
                'AttributeID' => 3,   
            ],
            [
                'CardName' => 'ぴーぽー君',
                'PrefecturesID' => 13,
                'CardIllustrationPath' => 'Kanto/Tokyo/pi-bokun.png',
                'CardDescription' => '警察けいさつの「ポリス」の頭文字かしらもじをとり、都民とみんと警視庁けいしちょうのかけ橋はしになることを願ねがって「ピーポくん」と名なづけられました。',
                'AttributeID' => 5,
            ],
        ]);
    }
}
