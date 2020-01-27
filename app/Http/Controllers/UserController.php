<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
require_once( __DIR__ . "/HomeController.php");

class UserController extends Controller
{
    public function index ()
    {
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        $hc = new HomeController();

        return view('index', compact('hello', 'hello_array'));
    }
}
