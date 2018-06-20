<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obtaincard;

class ObtainDataController extends Controller
{
    //
    public function cardGet(Request $request)
    {
        $md = new Obtaincard();
        $data = $md->obtainCard($request->input('cardID'));
        return response()->json(['data'=>$data]);
    }
}
