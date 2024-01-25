<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function homepage()
    {
        // $a=2;
        // $b=4;
        // return $a+$b;
        return view('welcome');
    }
    public function aboutus()
    {
        return view('about-us');
    }
    public function registration()
    {
        return view('reg');
    }
}
