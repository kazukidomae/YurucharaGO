<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Obitaintrophy extends Model
{
    public $timestamps = false;
    
    public function userTrophyList($userID){
        $data = DB::table('obtaintrophys')
            ->join('trophys', 'obtaintrophys.TrophyID', '=', 'trophys.TrophyID')
            ->where('obtaintrophys.UserID',$userID)
            ->get();
        return $data;
    }
}
