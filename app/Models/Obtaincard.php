<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Obtaincard extends Model
{
    public $timestamps = false;
    public function userCardList(){
        $data = DB::table('obtaincards')
            ->where('obtaincards.userid',Auth::id())
            ->get();
        
        return $data;
    }
}
