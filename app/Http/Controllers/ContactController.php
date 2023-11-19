<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
    $data = [
            'key1' => 'About1',
            'key2 '=> 'About2',
            'key3' => 'About3',
        ];
        return view('about', ['data'=>$data]);
        }
}
