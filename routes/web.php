<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenController;
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

Route::get('/live',function(){
    return view('live');
})->name('live');

Route::get('/live/healthcare',function(){
return view('live/healthcare');
});

Route::post('/record/store',[App\Http\Controllers\liveController::class,'record'])->name('record');

Route::get('/signup/{id}',[App\Http\Controllers\liveController::class,'signup'])->name('signup');

Route::get('/namelists', [App\Http\Controllers\NamelistController::class, 'index']);