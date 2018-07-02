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
            ->join('attributes','cards.AttributeID','=','attributes.AttributeID')
            ->join('prs', 'cards.CardID', '=', 'prs.CardID')
            ->join('prefectures','prs.PrefecturesID','=','prefectures.PrefecturesID')
            ->where('prs.PrefecturesID',$prefectures)
            ->groupBy('cards.CardID')
            ->get();
        return $data;
    }

    // カード詳細
    public function cardDetail($cardID){
        $data = DB::table('cards')
            ->join('prs', 'cards.CardID', '=', 'prs.CardID')
            ->join('events','cards.CardID', '=','events.CardID')
            ->join('attributes','cards.AttributeID','=','attributes.AttributeID')
            ->join('prefectures','prs.PrefecturesID','=','prefectures.PrefecturesID')
            ->where('cards.CardID',$cardID)
            ->get();
        return $data;
    }
    // ナビゲーションデータ
    public function navigationData($cardID){
        $data = DB::table('cards')
            ->join('prs', 'cards.CardID', '=', 'prs.CardID')
            ->where('cards.CardID',$cardID)
            ->get();
        return $data;
    }
    // 範囲検索
    public function rangeData($lat,$lng){
        $data = DB::table('cards')
            ->join('prs', 'cards.CardID', '=', 'prs.CardID')
            ->whereBetween('latitude', [$lat-0.0089831601679492, $lat+0.0089831601679492])
            ->whereBetween('longitude', [$lng-0.0089831601679492, $lng+0.0089831601679492])
            ->get();
        return $data;
    }
}
