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
}
