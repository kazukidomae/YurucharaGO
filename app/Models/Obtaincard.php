<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Obtaincard extends Model
{
    public $timestamps = false;
    public function userCardList($userID){
        $data = DB::table('obtaincards')
            ->join('cards', 'obtaincards.CardID', '=', 'cards.CardID')
            ->where('obtaincards.UserID',$userID)
            ->get();
        return $data;
    }
}
