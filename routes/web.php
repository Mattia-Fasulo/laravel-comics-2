<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $comics = config('comics');
    // dd(compact('comics'));
    $linksNavbar = config('linksNavbar');
    // dd(compact('linksNavbar'));
    $linksMenu = config('linksMenu');
    // dd(compact('linksMenu'));
    return view('home',compact('comics'),compact('linksNavbar'), compact('linksMenu'));
});
