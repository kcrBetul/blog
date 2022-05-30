<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Admin\UserController;
use  App\Http\Controllers\Admin\UserUpdateRequest;
use  App\Http\Controllers\Admin\LabelController;
use  App\Http\Controllers\Admin\LabelCreateRequest;
use  App\Http\Controllers\Admin\LabelUpdateRequest;
use  App\Http\Controllers\Admin\TopicController;
use  App\Http\Controllers\Admin\LoginController;
use  App\Http\Controllers\Admin\AdminLoginController;



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

Route::get('deneme', function () {
    return view('layouts.index');
});

Route::get('/anasayfa', function () {
    return view('homepage');
    })->name('admin.index');

Route::get('üyeol', function(){
    return view('components.admin.kayit');
    })->name('admin.uyeol');

Route::get('login/giris', function(){
     return view('components.admin.login');
})->name('admin.kayit');

      #Login İşlemleri#
Route::get('/', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('login/giris', [AdminLoginController::class, 'loginForm'])->name('admin.login.submit');
Route::post('logout', [LoginController::class, 'logout'])->name('admin.logouth');
Route::get('logout', [LoginController::class, 'logout'])->name('admin.logouth');


Route::group(['middleware'=>['IsAdmin'],'prefix'=>'admin'],function(){

        #Users Rotaları#
    Route::get('uyeler', [UserController::class, 'index'])->name('uyeler.index');
    Route::get('uyeler/yeni', [UserController::class, 'create'])->name("uyeler.create");
    Route::get('uyeler/kayit', [UserController::class, 'store'])->name('uyeler.store');
    Route::post('uyeler/kayit', [UserController::class, 'store'])->name('uyeler.store');
    Route::get('uyeler/{id}/edit', [UserController::class, 'edit'])->name('uyeler.edit');
    Route::put('uyeler/güncelle{id}',[UserController::class, 'update'])->name('uyeler.update');
    Route::get('uyeler/sil{id}', [UserController::class, 'destroy'])->whereNumber('id')->name('uyeler.destroy');

       #Labels Rotaları#
    Route::get('etiketler', [LabelController::class,'index'])->name('etiketler.index');
    Route::get('etiketler/yeni',[LabelController::class,'create'])->name('etiketler.create');
    Route::get('etiketler/ekle',[LabelController::class,'store'])->name('etiketler.store');
    Route::post('etiketler/ekle',[LabelController::class,'store'])->name('etiketler.store');
    Route::get('etiketler/{id}/edit',[LabelController::class,'edit'])->name('etiketler.edit');
    Route::put('etiketler/güncel{id}',[LabelController::class,'update'])->name('etiketler.update');
    Route::get('etiketler/sil{id}', [LabelController::class,'destroy'])->whereNumber('id')->name('etiketler.destroy');

       #Topics Rotaları#
    Route::get('konular',[TopicController::class,'index'])->name('konular.index');
    Route::get('konular/yeni',[TopicController::class,'create'])->name('konular.create');
    Route::get('konular/ekle',[TopicController::class,'store'])->name('konular.store');
    Route::post('konular/ekle',[TopicController::class,'store'])->name('konular.store');
    Route::get('konular/{id}/edit',[TopicController::class,'edit'])->name('konular.edit');
    Route::put('konular/güncel{id}',[TopicController::class,'update'])->name('konular.update');
    Route::get('konular/sil{id}',[TopicController::class,'destroy'])->whereNumber('id')->name('konular.destroy');




});



