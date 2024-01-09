<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adatokcontroller;
use App\Http\Controllers\Alkatreszcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('adatok',[Adatokcontroller::class,'index']);
Route::get('alkat',[Alkatreszcontroller::class,'index']);
Route::post('ujauto',[Adatokcontroller::class,'store'])->name('ujauto')->
