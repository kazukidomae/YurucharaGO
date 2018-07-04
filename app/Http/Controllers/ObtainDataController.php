<?php

namespace App\Http\Controllers;

use App\Models\Obitaintrophy;
use Illuminate\Http\Request;
use App\Models\Obtaincard;

class ObtainDataController extends Controller
{
    // 入手カード
    public function cardGet(Request $request)
    {
        $md = new Obtaincard();
        $data = $md->obtainCard($request->input('cardID'));
        return response()->json(['data'=>$data]);
    }

    // 入手トロフィー
    public function trophyGet(){
        $md = new Obitaintrophy();
        // 地方カード(入手)
        $obtainRegion = $md->regionCardObtain();
        // 地方カード(マスター)
        $masterRegion = $md->regionCardMaster();
        // 属性カード(入手)
        $obtainAttribute = $md->attributeCardObtain();
        // 属性カード(マスター)
        $masterAttribute = $md->attributeCardMaster();
        return view('trophylist',['oRegion'=>$obtainRegion,'mRegion'=>$masterRegion,'oAttribute'=>$obtainAttribute,'mAttribute'=>$masterAttribute]);
    }
}
