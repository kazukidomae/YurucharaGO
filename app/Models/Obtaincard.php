<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Obtaincard extends Model
{
    // テーブル名
    protected $table = 'obtaincards';

    // 主キーのセット
    //protected $guarded = array('id');

    // 自動タイムスタンプ無し
    public $timestamps = false;

    public function getData()
    {
        $data = DB::table($this->table)->get();

        return $data;
    }
}
