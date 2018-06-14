<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obtaincard;

class GetCardDataController extends Controller
{
    public function userOwnCard(Request $request){
        $md = new Obtaincard();
        $data = $md->myCardList($request->input(''));
    }
}
