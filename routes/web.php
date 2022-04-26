<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
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
Route::group(['middleware'=>['auth','İsAdmin'],'prefix'=>'admin'],function(){

    Route::get('uyeler/{id}', [UserController::class, 'destory'])->whereNumber('id')->name('uyeler.destroy');
    Route::resource('uyeler', components\admin\UserController::class);

});
