<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Card extends Model
{
    // 自動タイムスタンプ無し
    public $timestamps = false;

    // 都道府県ごとのカード一覧
    public function prefecturesCardList($prefectures)
    {
        $data = DB::table('cards')
            ->join('prefectures', 'cards.PrefecturesID', '=', 'prefectures.PrefecturesID')
            ->where('prefectures.PrefecturesName',$prefectures)
            ->get();
        return $data;
    }

    // カード詳細
    public function cardDetail($cardID){
        $data = DB::table('cards')
            ->join('prefectures', 'cards.PrefecturesID', '=', 'prefectures.PrefecturesID')
            ->join('regions','prefectures.RegionID', '=','regions.RegionID')
            ->where('cards.CardID',$cardID)
            ->get();
        return $data;
    }
    // ナビゲーションデータ
    public function navigationData($cardID){
        $data = DB::table('cards')
            ->where('cards.CardID',$cardID)
            ->get();
        return $data;
    }
    // 範囲検索
    public function range($lat,$lng){
        $data = DB::table('cards')
            ->whereBetween('latitude', [$lat-0.0089831601679492, $lat+0.0089831601679492])
            ->whereBetween('latitude', [$lng-0.0089831601679492, $lng+0.0089831601679492])
            ->get();
        return $data;
    }
}
