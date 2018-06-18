<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // トップに遷移
    public function index() {
        return view('index');
    }
    // 取得カード一覧に遷移
    public function obtaincardlist(){
        return view('obtaincardlist');
    }
    // 取得トロフィー一覧に遷移
    public function trophylist(){
        return view('trophylist');
    }

    public function trophydetail(){
        return view('trophydetail');
    }
    // 設定に遷移
    public function configuration(){
        return view('configuration');
    }
}
