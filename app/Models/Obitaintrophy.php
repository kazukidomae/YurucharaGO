<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Obitaintrophy extends Model
{
    public $timestamps = false;

    // 地方カード総数(入手)
    public function regionCardObtain(){
        $data = DB::table('obtaincards')
            ->join('cards','obtaincards.CardID','=','cards.CardID')
            ->join('prefectures','cards.PrefecturesID','=','prefectures.PrefecturesID')
            ->join('regions','prefectures.RegionID','=','regions.RegionID')
            ->select(DB::raw('regions.RegionName,count(regions.RegionID) as RegionCount'))
            ->where('UserID',Auth::user()->id)
            ->groupBy('regions.RegionID')
            ->get()->keyBy('RegionName');
        return $data;
    }
    // 地方カード総数(マスター)
    public function regionCardMaster(){
        $data = DB::table('cards')
            ->join('prefectures','cards.PrefecturesID','=','prefectures.PrefecturesID')
            ->join('regions','prefectures.RegionID','=','regions.RegionID')
            ->select(DB::raw('regions.RegionName,count(regions.RegionID) as RegionCount'))
            ->groupBy('regions.RegionID')
            ->get()->keyBy('RegionName');
        return $data;
    }
    // 属性カード数(入手)
    public function attributeCardObtain(){
        $data = DB::table('obtaincards')
            ->join('cards','obtaincards.CardID','=','cards.CardID')
            ->join('attributes','cards.AttributeID','=','attributes.AttributeID')
            ->select(DB::raw('attributes.AttributeName,count(cards.AttributeID) as AttributeCount'))
            ->where('UserID',Auth::user()->id)
            ->groupBy('cards.AttributeID')
            ->get()->keyBy('AttributeName');
        return $data;
    }
    // 属性カード数(マスター)
    public function attributeCardMaster(){
        $data = DB::table('cards')
            ->join('attributes','cards.AttributeID','=','attributes.AttributeID')
            ->select(DB::raw('attributes.AttributeName,count(cards.AttributeID) as AttributeCount'))
            ->groupBy('cards.AttributeID')
            ->get()->keyBy('AttributeName');
        return $data;
    }
}
