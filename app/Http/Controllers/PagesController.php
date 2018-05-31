<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // indexに遷移
    public function index() {
        return view('index');
    }
}
