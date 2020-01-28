<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class frameworks extends Model
{
    function usersSerch(){
        return $users = DB::select("select * FROM users");
    }

    function dp(){
        var_dump("aaaaaa");
    }
}
