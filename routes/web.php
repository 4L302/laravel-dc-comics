<?php

use App\Http\Controllers\Comic2Controller;
use App\Http\Controllers\ComicController;
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

Route::get('/', function(){
    return view('welcome');
})->name('welcome');

/* Route::get('/comics', [Comic2Controller::class, 'index'])->name('product.index');
Route::get('/comics/{id}', [Comic2Controller::class, 'show'])->name('product.show');
Route::get('/comics/create', [Comic2Controller::class, 'create'])->name('product.create');
Route::get('/comics/store', [Comic2Controller::class, 'store'])->name('product.store'); */

Route::resource('comics', Comic2Controller::class);