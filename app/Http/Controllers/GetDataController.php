<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class GetDataController extends Controller
{
    // カード一覧へ遷移
    public function refinePrefectures(Request $request)
    {
        // モデルのインスタンス化
        $md = new Card();
        // データ取得
        $data = $md->prefecturesCardList($request->input('Prefectures'));
        // ビューを返す
        return view('cardList', ['data' => $data]);
    }
    // カード詳細へ遷移
    public function getDetail(Request $request)
    {
        // モデルのインスタンス化
        $md = new Card();
        // データ取得
        $data = $md->cardDetail($request->input('CardID'));
        // ビューを返す
        return view('cardDetail', ['data' => $data]);
    }
    // ナビゲーションへ遷移
    public function getNavigationData(Request $request){
        // モデルのインスタンス化
        $md = new Card();
        // データ取得
        $data = $md->navigationData($request->input('CardID'));
        // ビューを返す
        return view('characterNavigation', ['data' => $data]);
    }
}
