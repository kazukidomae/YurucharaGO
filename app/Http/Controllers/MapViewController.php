<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapViewController extends Controller
{
    // カード検索
    public function search() {
        return view('searchCard');
    }
    // ナビゲーション
    public function navigation() {
        return view('characterNavigation');
    }
}
