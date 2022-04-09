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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// 勤務開始


// Route::group(['middleware' => 'auth'], function() {
    Route::post('/start', [App\Http\Controllers\HomeController::class,'start'])->name('start');


//　日付一覧
Route::get('/confilm', [ConfilmController::class, 'index']);