<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class GetDataController extends Controller
{
    public function refinePrefectures(Request $request)
    {
        // モデルのインスタンス化
        $md = new Card();
        // データ取得
        $data = $md->prefecturesCardList($request->input('Prefectures'));
        // ビューを返す
        return view('cardList', ['data' => $data]);
    }
}
