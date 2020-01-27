<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class frameworks extends Model
{
    function serch(){
        $users = DB::select("select * FROM users");
        var_dump($users);
    }

    function dp(){
        var_dump("aaaaaa");
    }
}
