<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Obitaintrophy extends Model
{
    public $timestamps = false;
    
    public function userTrophyList(){
        $data = DB::table('obtaintrophys')
            ->where('obtaintrophys.userid',Auth::id())
            ->get();
        
        return $data;
    }
}
