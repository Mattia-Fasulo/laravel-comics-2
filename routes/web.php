<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\ComicsController;
use App\Models\Comic;

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

Route::get('/', [ComicsController::class, 'index'])->name('index');


Route::resource('comics', ComicsController::class);
