<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Admin\UserController;
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
    return view('layouts.index');
});

Route::get('/anasayfa', function () {
    return view('homepage');
});
Route::group(['middleware'=>['IsAdmin'],'prefix'=>'admin'],function(){

    Route::get('uyeler/{id}', [UserController::class, 'destory'])->whereNumber('id')->name('uyeler.destroy');
    Route::get('uyeler', [UserController::class, 'index']);
    Route::get('uyeler/yeni', [UserController::class, 'create'])->name("uyeler.create");


});
