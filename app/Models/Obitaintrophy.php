<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Obitaintrophy extends Model
{
    public $timestamps = false;
    
    public function userTrophyList($obtainTrophys){
        $data = DB::table('obtainTrophys')
            ->where('obtainTrophys.userid',Auth::id())
            ->get();
        
        return $data;
    }
}
