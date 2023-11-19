<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[HomeController::class, 'index']);

// Route::get('/', function () {

//     $data = [
//         'key1' => 'Home1',
//         'key2 '=> 'Home2',
//         'key3' => 'Home3',
//     ];
//     return view('home', ['data'=>$data]);
// });

// Route::get('contact', function () {
//     $data = [
//         'key1' => 'Conatct1',
//         'key2 '=> 'Conatct2',
//         'key3' => 'Conatct3',
//     ];
//     return view('contact',compact('data'));
// });

// Route::get('about', function () {

//        $data = [
//         'key1' => 'About1',
//         'key2 '=> 'About2',
//         'key3' => 'About3',
//     ];
//     return view('about', ['data'=>$data]);
   
   
// });

