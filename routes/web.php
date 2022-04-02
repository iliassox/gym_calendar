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

Route::get('/', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('activities', 'App\Http\Controllers\ActivityController')->middleware('auth');
Route::resource('coaches', 'App\Http\Controllers\CoachController')->middleware('auth');
Route::resource('sessions', 'App\Http\Controllers\SessionController')->middleware('auth');
Route::resource('rooms', 'App\Http\Controllers\RoomController')->middleware('auth');
