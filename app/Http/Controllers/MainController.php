<?php

namespace App\Http\Controllers;
use App\Models\frameworks;
require_once(__DIR__ . "/../../Models/frameworks.php");

//use Illuminate\Http\Request;
use Request;

class MainController extends Controller
{
    public function write1(Request $moji)
    {
        $fw = new frameworks;
        $fw->up();
        $data1 = $moji::all();
        return view('testform',compact('data1'));
    }
}
