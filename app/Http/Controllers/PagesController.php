<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // indexに遷移
    public function index() {
        return view('index');
    }
    public function cardlist(){
        return view('cardlist');
    }
    public function carddetail(){
        return view('carddetail');
    }
    public function obtaincardlist(){
        return view('obtaincardlist');
    }
    public function trophylist(){
        return view('trophylist');
    }
    public function trophydetail(){
        return view('trophydetail');
    }
    public function configuration(){
        return view('configuration');
    }
}
