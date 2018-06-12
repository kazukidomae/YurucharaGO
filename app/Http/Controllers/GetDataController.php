<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class GetDataController extends Controller
{
    public function carddata()
    {
        // モデルのインスタンス化
        $md = new Card();
        // データ取得
        $data = $md->getData();
        // ビューを返す
        return view('cardlist', ['data' => $data]);
    }
}
