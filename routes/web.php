<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    $title = 'Home';
    return view('welcome')->with('title',$title);
});
Route::get('about',function (){
    $title = 'About';
    return view('about')->with('title',$title);
  });
Route::get('contact', function (){
    $title = 'Contact';
    return view('contact')->with('title',$title);
  });

  Route::resource('/posts', 'App\Http\Controllers\PostController');