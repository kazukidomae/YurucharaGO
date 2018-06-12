<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Card extends Model
{
    // テーブル名
    protected $table = 'cards';

    // 主キーのセット
    //protected $guarded = array('CardID');

    // 自動タイムスタンプ無し
    public $timestamps = false;

    public function getData()
    {
        $data = DB::table($this->table)->where('PrefecturesID',25)->get();

        return $data;
    }
}
