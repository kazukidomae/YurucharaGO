<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Card extends Model
{
    // 自動タイムスタンプ無し
    public $timestamps = false;

    // 都道府県ごとのカード一覧
    public function prefecturesCardList($prefectures){
        $userID = Auth::user()->id;

        $data = DB::select(DB::raw("SELECT 
        cards.CardID,
        cards.CardName,
        cards.CardIllustrationPath,
        cards.CardDescription,
        cards.AttributeID,
        cards.PrefecturesID,
        attributes.AttributeName,
        attributes.AttributeIconPath,
        attributes.CardDesignPath,
        obtaincards.UserID
        FROM cards
        JOIN attributes ON cards.AttributeID = attributes.AttributeID
        LEFT JOIN (select * from obtaincards where UserID = {$userID}) AS obtaincards ON cards.CardID = obtaincards.CardID
        WHERE cards.PrefecturesID = {$prefectures}
        GROUP BY cards.CardID
        "));
        return $data;
    }

    // カード詳細
    public function cardDetail($cardID){
        $data = DB::table('cards')
            ->join('prs', 'cards.CardID', '=', 'prs.CardID')
            ->join('events','cards.CardID', '=','events.CardID')
            ->join('attributes','cards.AttributeID','=','attributes.AttributeID')
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
        $userID = Auth::user()->id;

        $data = DB::select(DB::raw("SELECT 
        cards.CardID,
        cards.CardName,
        cards.CardIllustrationPath,
        obtaincards.UserID,
        prs.latitude,
        prs.longitude
        FROM cards
        JOIN prs ON cards.CardID = prs.CardID
        JOIN attributes ON cards.AttributeID = attributes.AttributeID
        LEFT JOIN (select * from obtaincards where UserID = $userID) AS obtaincards ON cards.CardID = obtaincards.CardID
        WHERE prs.latitude BETWEEN {$lat}-0.0089831601679492 AND {$lat}+0.0089831601679492
        AND
        prs.longitude BETWEEN {$lng}-0.0089831601679492 AND {$lng}+0.0089831601679492
        GROUP BY prs.PRID
        "));
        return $data;
    }
}
