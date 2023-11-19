<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       
            $data = post::all();
    return view('home', compact('data'));
    }
}
