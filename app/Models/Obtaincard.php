<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Obtaincard extends Model
{
    public $timestamps = false;

    public function userCardList()
    {
        $data = DB::table('obtaincards')
            ->join('cards', 'obtaincards.CardID', '=', 'cards.CardID')
            ->where('obtaincards.UserID', Auth::user()->id)
            ->get();
        return $data;
    }

    public function obtainCard($cardID)
    {
        DB::insert('insert into obtaincards (UserID, CardID, ObtainDate) values (?, ?, ?)', [Auth::user()->id, $cardID, NOW()]);
    }

    //　絞り込み(都道府県)
    public function obtaincardsFilter($prefecturesID)
    {
        $data = DB::table('obtaincards')
            ->join('cards', 'obtaincards.CardID', '=', 'cards.CardID')
            ->join('prs', 'cards.CardID', '=', 'prs.CardID')
            ->join('prefectures', 'prs.PrefecturesID', '=', 'prefectures.PrefecturesID')
            ->where('obtaincards.UserID', 1)
            ->where('prefectures.PrefecturesID', $prefecturesID)
            ->groupBy('cards.CardID')
            ->get();
        return $data;
    }

    // 属性
    public function attributeFilter($attributeID)
    {
        $data = DB::table('obtaincards')
            ->join('cards', 'obtaincards.CardID', '=', 'cards.CardID')
            ->join('prs', 'cards.CardID', '=', 'prs.CardID')
            ->join('prefectures', 'prs.PrefecturesID', '=', 'prefectures.PrefecturesID')
            ->join('attributes', 'cards.AttributeID', '=', 'attributes.AttributeID')
            ->where('obtaincards.UserID', 1)
            ->where('attributes.AttributeID', $attributeID)
            ->groupBy('cards.CardID')
            ->get();
        return $data;
    }

    // 地方
    public function regionFilter($regionID)
    {
        $data = DB::table('obtaincards')
            ->join('cards', 'obtaincards.CardID', '=', 'cards.CardID')
            ->join('prs', 'cards.CardID', '=', 'prs.CardID')
            ->join('prefectures', 'prs.PrefecturesID', '=', 'prefectures.PrefecturesID')
            ->join('regions', 'prefectures.RegionID', '=', 'regions.RegionID')
            ->where('obtaincards.UserID', 1)
            ->where('regions.RegionID', $regionID)
            ->groupBy('cards.CardID')
            ->get();
        return $data;

    }
}

