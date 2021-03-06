<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\IndexController;
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

// Route::get('/{offset?}', 'IndexController@index')->name('index')->where('offset', '[0-9]+');
// Route::get('/search/{name?}', 'IndexController@search')->name('search')->where('name', '[A-Za-z]+');
// Route::get('/character/{id}', 'IndexController@character')->name('character');
// Route::get('/comics/{url}', 'IndexController@comics')->name('comics');


Route::get('/{offset?}',[IndexController::class,'index'])->name('index')->where('offset', '[0-9]+');
Route::get('/search/{name?}', [IndexController::class,'search'])->name('search')->where('name', '[A-Za-z]+');
Route::get('/character/{id}', [IndexController::class,'character'])->name('character');
Route::get('/comics/{url}', [IndexController::class,'comics'])->name('comics');
