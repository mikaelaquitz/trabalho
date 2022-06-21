<?php

use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\EventoController;
use App\Http\Controllers\Cliente\ClienteController;
use App\Http\Controllers\Cliente\BilheteController;
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
    return view('Auth.login');
});
Route::prefix('admin')->group(function(){

    Route::prefix('categoria')->namespace('Admin')->name('categoria.')->group(function(){
        Route::get('/index',[CategoriaController::class,'index'])->name('index');
        Route::get('/create',[CategoriaController::class,'create'])->name('create');
        Route::post('/store',[CategoriaController::class,'store'])->name('store');
        Route::get('/{id}/edit',[CategoriaController::class,'edit'])->name('edit');
        Route::put('/{id}',[CategoriaController::class,'update'])->name('update');
        Route::delete('/{id}',[CategoriaController::class,'destroy'])->name('destroy');
    });

    Route::prefix('evento')->namespace('Admin')->name('evento.')->group(function(){
        Route::get('/index',[EventoController::class,'index'])->name('index');
        Route::get('/create',[EventoController::class,'create'])->name('create');
        Route::post('/store',[EventoController::class,'store'])->name('store');
        Route::get('/{id}/edit',[EventoController::class,'edit'])->name('edit');
        Route::put('/{id}',[EventoController::class,'update'])->name('update');
        Route::delete('/{id}',[EventoController::class,'destroy'])->name('destroy');
        Route::get('/{id}/show',[EventoController::class,'show'])->name('show');
    
    });

    
});
Route::prefix('cliente')->group(function(){
    Route::prefix('cliente')->namespace('Cliente')->name('cliente.')->group(function(){
        Route::get('/index',[ClienteController::class,'index'])->name('index');
        Route::get('/create',[ClienteController::class,'create'])->name('create');
        Route::post('/store',[ClienteController::class,'store'])->name('store');
        Route::get('/{id}/edit',[ClienteController::class,'edit'])->name('edit');
        Route::put('/{id}',[ClienteController::class,'update'])->name('update');
        Route::delete('/{id}',[ClienteController::class,'destroy'])->name('destroy');
        Route::get('/{id}/show',[ClienteController::class,'show'])->name('show');

    });
    Route::prefix('bilhete')->namespace('Bilhete')->name('bilhete.')->group(function(){
        Route::get('/index',[BilheteController::class,'index'])->name('index');
        Route::get('/{id}/create',[BilheteController::class,'create'])->name('create');
        Route::post('/store',[BilheteController::class,'store'])->name('store');
        Route::get('/{id}/edit',[BilheteController::class,'edit'])->name('edit');
        Route::put('/{id}',[BilheteController::class,'update'])->name('update');
        Route::delete('/{id}',[BilheteController::class,'destroy'])->name('destroy');
        Route::get('/{id}/show',[BilheteController::class,'show'])->name('show');

    });


});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
