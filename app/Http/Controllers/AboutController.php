<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() 
    {
         $data = [
        'key1' => 'Conatct1',
        'key2 '=> 'Conatct2',
        'key3' => 'Conatct3',
    ];
    return view('contact',compact('data'));
    }
}
