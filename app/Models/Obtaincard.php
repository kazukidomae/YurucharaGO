<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Obtaincard extends Model
{
    public $timestamps = false;
    public function userCardList(){
        $data = DB::table('obtaincards')
            ->where('obtaincards.userid',Auth::user()->id)
            ->get();
        return $data;
    }
    public function obtainCard($cardID){
        DB::insert('insert into obtaincards (UserID, CardID, ObtainDate) values (?, ?, ?)', [Auth::user()->id, $cardID, NOW()]);
    }
}
