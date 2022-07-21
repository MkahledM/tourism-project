<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SartController;

use App\Http\Controllers\HotelController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\BookController;





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

// Route::get('home', function () {
//     return view('welcome');
// });

Route::get('/', [SartController::class,'index']);
Route::get('start', [SartController::class,'index']);

Route::resource('hotel', HotelController::class);
Route::resource('place', PlaceController::class);
Route::resource('book', BookController::class);
Route::get('/show/{id}', [BookController::class,'show2']);
// Route::get('/search', [HotelController::class,'search2']);
Route::get('curd', [HotelController::class,'index2']);
Route::get('/search', [PlaceController::class,'search']);
Route::get('curd2', [PlaceController::class,'index2']);








