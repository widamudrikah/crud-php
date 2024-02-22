<?php

use App\Http\Controllers\BuahController;
use App\Http\Controllers\SayurController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth')->controller(SayurController::class)->group(function(){
    Route::get('/sayur', 'index')->name('sayur.index');
    Route::get('/sayur/tambah', 'tambah')->name('sayur.tambah');
    Route::post('/sayur/tambah/store', 'store')->name('sayur.store');
    Route::get('/sayur/tambah/{id}','show')->name('sayur.show');
    Route::get('/sayur/delete/{id}','destroy')->name('sayur.destroy');
    Route::get('/sayur/edit/{id}','edit')->name('sayur.edit');
    Route::put('/sayur/update/{id}','wida')->name('sayur.wida');

});

Route::middleware('auth')->controller(BuahController::class)->group(function(){
    Route::get('/buah','index')->name('buah.index');
    Route::get('/buah/tambah','create')->name('buah.tambah');
    Route::post('/buah/tambah/store','store')->name('buah.store');
    Route::get('/buah/tambah/{id}','show')->name('buah.show');
    Route::get('/buah/delete/{id}','destroy')->name('buah.destroy');
    Route::get('/buah/edit/{id}','edit')->name('buah.edit');
    Route::put('/buah/update/{id}','update')->name('buah.update');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
