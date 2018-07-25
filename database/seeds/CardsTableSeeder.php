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
                'CardName' => 'Meronguma',
                'PrefecturesID' => 1,
                'CardIllustrationPath' => 'Hokkaido/Hokkaido/meronguma.png',
                'CardDescription' => 'A fruit animal transformed by devouring Yubari's delicious melon.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'Kokoru',
                'PrefecturesID' => 2,
                'CardIllustrationPath' => 'Tohoku/Aomori/kokoru.png',
                'CardDescription' => 'It is a dolphin longing for raccoon dogs, a little spoiled personality. Shell harvest is a hobby.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'Sobacchi',
                'PrefecturesID' => 3,
                'CardIllustrationPath' =>'Tohoku/Iwate/sobatti.png',
                'CardDescription' =>'One of the "Wanko siblings". A main character with a wankosoba as a motif.',
                'AttributeID' => 2,

            ],
            [
                'CardName' => 'Musubimaru',
                'PrefecturesID' => 4,
                'CardIllustrationPath' =>'Tohoku/Miyagi/musubimaru.png',
                'CardDescription' =>'I like to have photos taken with children. I am not good at hotness.',
                'AttributeID' => 4,
            ],
            [
                'CardName' => 'Yakippi',
                'PrefecturesID' => 5,
                'CardIllustrationPath' => 'Tohoku/Akita/yakippi.png',
                'CardDescription' => 'I like to have photos taken with children. I am not good at hotness.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Cherin',
                'PrefecturesID' => 6,
                'CardIllustrationPath' => 'Tohoku/Yamagata/cherin.png',
                'CardDescription' => 'It is a cherry fairy and has a cherry on the head.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Atamagahukushimachan',
                'PrefecturesID' => 7,
                'CardIllustrationPath' =>'Tohoku/Hukushima/atamagafukushima.png',
                'CardDescription' =>'A hobby is a walk, a girl who loves to play with everyone.',
                'AttributeID' => 1,

            ],
            [
                'CardName' => 'Kouchan',
                'PrefecturesID' => 8,
                'CardIllustrationPath' =>'Kanto/Ibaraki/koutyan.png',
                'CardDescription' =>'Bright and exciting Noko will make everyone is heart calm.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Tochisuke',
                'PrefecturesID' => 9,
                'CardIllustrationPath' => 'Kanto/Tochigi/totisuke.png',
                'CardDescription' => 'Born in the Tochigi city, Kura is fairy was born in Tochigi.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'Gunmachan',
                'PrefecturesID' => 10,
                'CardIllustrationPath' => 'Kanto/gunma/gunmatyan.png',
                'CardDescription' => 'World cultural heritage, Tomioka Silk industry and Silk industrial heritage group, and Gunma prefecture advertising department manager.',
                'AttributeID' => 4,
            ],
            [
                'CardName' => 'Miinachan',
                'PrefecturesID' => 11,
                'CardIllustrationPath' =>'Kanto/Saitama/mi-natyan.png',
                'CardDescription' =>'The mountain of beauty in Minano Town, clear stream, cherry blossoms are included in the hat and it stands as the initial M letter.',
                'AttributeID' => 4,

            ],
            [
                'CardName' => 'Chi-bakun',
                'PrefecturesID' => 12,
                'CardIllustrationPath' =>'Kanto/Chiba/ti-bakun.png',
                'CardDescription' =>'The figure is colored red, and when viewed from the side it has the shape of Chiba prefecture.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'Nisikokun',
                'PrefecturesID' => 13,
                'CardIllustrationPath' => 'Kanto/Tokyo/nisikokun.png',
                'CardDescription' => 'The feet of a charm point that crawls out from a round gray face is a fairy.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'Ebinasan',
                'PrefecturesID' => 14,
                'CardIllustrationPath' => 'Kanto/Kanagawa/ebinasan.png',
                'CardDescription' => 'Ebina village secretly existed for the purpose of preventing invasion from Sagamihara Town.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'Reruhisan',
                'PrefecturesID' => 15,
                'CardIllustrationPath' =>'Chubu/Niigata/reruhisan.png',
                'CardDescription' =>'Mr. Rehi, the real great man came back to Niigata beyond 100 years.',
                'AttributeID' => 1,

            ],
            [
                'CardName' => 'Miratan',
                'PrefecturesID' => 16,
                'CardIllustrationPath' =>'Chubu/Toyama/miratan.png',
                'CardDescription' =>'Temperature and calm. I am always boarding.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'Wakutamakun',
                'PrefecturesID' => 17,
                'CardIllustrationPath' => 'Chubu/Ishikawa/wakutamakun.png',
                'CardDescription' => 'An egg brought on by a white birch who is said to have found Wakura Onsen.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Heshikochan',
                'PrefecturesID' => 18,
                'CardIllustrationPath' => 'Chubu/Hukui/hesikotyan.png',
                'CardDescription' => 'With the head of the mackerel jumped out of the barrel, there is a ribbon on the head.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'RyoumaruTakeda',
                'PrefecturesID' => 19,
                'CardIllustrationPath' =>'Chubu/Yamanashi/takedaryoumaru.png',
                'CardDescription' =>'Brave and brain-riddled, gentle to everyone. It is strong against heat and cold in winter.',
                'AttributeID' => 4,

            ],
            [
                'CardName' => 'Arukuma',
                'PrefecturesID' => 20,
                'CardIllustrationPath' =>'Chubu/Nagano/arukuma.png',
                'CardDescription' =>'Coldly, always on my head, I like traveling, always backpack on my back.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Gunjyorara',
                'PrefecturesID' => 21,
                'CardIllustrationPath' => 'Chubu/Gihu/gunjourara.png',
                'CardDescription' => 'Summer dance, winter sports, nature rich Gujo top.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'Unagiinu',
                'PrefecturesID' => 22,
                'CardIllustrationPath' => 'Chubu/Shizuoka/unagiimo.png',
                'CardDescription' => 'Eel is also born from a field, also as a king of a kingdom cafe everyday.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Morizo Kikkoro',
                'PrefecturesID' => 23,
                'CardIllustrationPath' =>'Chubu/Aichi/morizo-kikkoro.png',
                'CardDescription' =>'Morizo is a grandpa in the forest. Kikkoro is a forest child.',
                'AttributeID' => 4,

            ],
            [
                'CardName' => 'Meihime',
                'PrefecturesID' => 24,
                'CardIllustrationPath' =>'Kinki/Mie/meihime.png',
                'CardDescription' =>'As he kept longing for him, his thoughts became the appearance of Princess Princess.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'Kyaffi',
                'PrefecturesID' => 25,
                'CardIllustrationPath' => 'Kinki/Shiga/kyaffi.png',
                'CardDescription' => 'Specific species of Biwa Lake Biwa Cooper.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'Kinukakesan',
                'PrefecturesID' => 26,
                'CardIllustrationPath' => 'Kinki/Kyoto/kinukakesan.png',
                'CardDescription' => 'Kinkaku-ji, Ryoanji, Ninna-ji Temple, youkai of the way he walked around the three world heritage.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'yumemarukun',
                'PrefecturesID' => 27,
                'CardIllustrationPath' =>'Kinki/Osaka/yumemarukun.png',
                'CardDescription' =>'Mascot character in History · Culture · Commercial town, Osaka city Chuo Ward.',
                'AttributeID' => 4,

            ],
            [
                'CardName' => 'Habatan',
                'PrefecturesID' => 28,
                'CardIllustrationPath' =>'Kinki/Hyogo/habatan.png',
                'CardDescription' =>'He is a spiritual cheerleader and has a strong spirit of challenge.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'Shikamoro',
                'PrefecturesID' => 29,
                'CardIllustrationPath' => 'Kinki/Nara/shikamaro.png',
                'CardDescription' => 'A gentle boy with a relaxed personality. Mamoru eyebrow and smiley eyes are characterized.',
                'AttributeID' => 4,
            ],
            [
                'CardName' => 'Hashibou',
                'PrefecturesID' => 30,
                'CardIllustrationPath' => 'Kinki/Wakayama/hashibou.png',
                'CardDescription' => 'If you touch the stomach of fluffy pork, you may feel happy.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Misasaradon',
                'PrefecturesID' => 31,
                'CardIllustrationPath' =>'Chugoku/Tottori/misasaradou.png',
                'CardDescription' =>'Happy encounters with everyone, hot water of stomach is Pokkapoka, excited every day.',
                'AttributeID' => 3,

            ],
            [
                'CardName' => 'Simanekko',
                'PrefecturesID' => 32,
                'CardIllustrationPath' =>'Chugoku/Shimane/shimanekko.png',
                'CardDescription' =>'You can get better at once with anyone, so please call out when you see it.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'Hesoppi',
                'PrefecturesID' => 33,
                'CardIllustrationPath' => 'Chugoku/Okayama/hesoppi.png',
                'CardDescription' => 'I am modeling a bird that made a colorful blue feather called Buposau.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'KaguyaPanda',
                'PrefecturesID' => 34,
                'CardIllustrationPath' => 'Chugoku/Hiroshima/kaguyapanda.png',
                'CardDescription' => 'I am helping you to have a fan for cheering and a bamboo shop with business prosperity to live with peace of mind.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Choruru',
                'PrefecturesID' => 35,
                'CardIllustrationPath' =>'Chugoku/Yamaguchi/choruru.png',
                'CardDescription' =>'A little shy and dirty.',
                'AttributeID' => 3,

            ],
            [
                'CardName' => 'Matsushigekakarichou',
                'PrefecturesID' => 36,
                'CardIllustrationPath' =>'Shikoku/Tokushima/matsushigekakaricho.png',
                'CardDescription' =>'The moon rabbit is in Matsushige-cho as a matter of concern about Matsushige-cho.',
                'AttributeID' => 4,
            ],
            [
                'CardName' => 'Sanudon',
                'PrefecturesID' => 37,
                'CardIllustrationPath' => 'Shikoku/Kagawa/sanudou.png',
                'CardDescription' => 'She plays a pride bowl pocket on her back, aiming at a udon noodle kamiyama.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Mikyan',
                'PrefecturesID' => 38,
                'CardIllustrationPath' => 'Shikoku/Ehime/mikyan.png',
                'CardDescription' => 'I was born in the citrus kingdom Ehime. I value chess with everyone.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Bunchan',
                'PrefecturesID' => 39,
                'CardIllustrationPath' =>'Shikoku/Kochi/buntyan.png',
                'CardDescription' =>'A lovely round form and a smile is a trademark.',
                'AttributeID' => 4,

            ],
            [
                'CardName' => 'Kuruppa',
                'PrefecturesID' => 40,
                'CardIllustrationPath' =>'Kyushu/Fukuoka/kuruppa.png',
                'CardDescription' =>'I like going for a walk, I am leaving for various places.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'Koihime',
                'PrefecturesID' => 41,
                'CardIllustrationPath' => 'Kyushu/Saga/kohime.png',
                'CardDescription' => 'I love playing water at Shimizu waterfall. I have a secret feeling to the princess.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'Omuranchan',
                'PrefecturesID' => 42,
                'CardIllustrationPath' => 'Kyushu/Nagasaki/omuranchan.png',
                'CardDescription' => 'Run cheerfully with roughly mottled roses (run) Cherry fairies.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'Kumamon',
                'PrefecturesID' => 43,
                'CardIllustrationPath' =>'Kyushu/Kumamoto/kumamon.png',
                'CardDescription' =>'I ate too much of Kumamoto is delicious food and it became the current fat mass.',
                'AttributeID' => 1,

            ],
            [
                'CardName' => 'Mejiron',
                'PrefecturesID' => 44,
                'CardIllustrationPath' =>'Kyushu/Oita/mejiron.png',
                'CardDescription' =>'The prefecture bird of Oita prefecture, Mejiro is a motif.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Otsuruchan',
                'PrefecturesID' => 45,
                'CardIllustrationPath' => 'Kyushu/Miyazaki/otsuruchan.png',
                'CardDescription' => 'Shiiba Village Hair decoration with rhododendrons, cheerfully pretty girls.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'Ochaurai',
                'PrefecturesID' => 46,
                'CardIllustrationPath' => 'Kyushu/Kagoshima/ochamurai.png',
                'CardDescription' => 'The tea cup and the sunflower belt, on the back there is a family crest of Fudo.',
                'AttributeID' => 4,
            ],
            [
                'CardName' => 'Agomagochan',
                'PrefecturesID' => 47,
                'CardIllustrationPath' =>'Kyushu/Okinawa/agomagochan.png',
                'CardDescription' =>'I love fruits and I am a little worried about having a long ago.',
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
