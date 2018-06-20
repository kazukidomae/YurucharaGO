<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obtaincard;

class CollectionController extends Controller
{
    // カード入手
    public function cardGet()
    {
        $md = new Obtaincard();
        $data = $md->userCardList();
        return view('obtaincardlist', ['data' => $data]);
    }
}
