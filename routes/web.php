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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/coach', [App\Http\Controllers\CoachRequestController::class,'request'])->name('CoachLogin');
Route::post('/coach', [App\Http\Controllers\CoachRequestController::class,'validating'])->name('Validation');
Route::get('/coach/sessions', [App\Http\Controllers\CoachRequestController::class,'index'])->name('RequestedIndex');
Route::get('/logout', [App\Http\Controllers\CoachRequestController::class,'logout'])->name('SessionStop');
Route::get('/coach/sessions/create',[App\Http\Controllers\CoachRequestController::class,'create'])->name('Form');
Route::post('/coach/sessions/create',[App\Http\Controllers\CoachRequestController::class,'validation'])->name('SessionValidation');
Route::delete('/coach/sessions/{sessionId}',[App\Http\Controllers\CoachRequestController::class,'delete'])->name('SessionDestroy');
Route::get('/pending', [App\Http\Controllers\CoachRequestController::class, 'pendingIndex'])->name('pendingIndex')->middleware('auth');
Route::post('/pending/{id}', [App\Http\Controllers\CoachRequestController::class, 'pendingAccept'])->name('pendingAccept')->middleware('auth');
Route::delete('/pending/{id}', [App\Http\Controllers\CoachRequestController::class, 'pendingDelete'])->name('pendingDelete')->middleware('auth');


Route::resource('activities', 'App\Http\Controllers\ActivityController')->middleware('auth');
Route::resource('coaches', 'App\Http\Controllers\CoachController')->middleware('auth');
Route::resource('sessions', 'App\Http\Controllers\SessionController')->middleware('auth');
Route::resource('rooms', 'App\Http\Controllers\RoomController')->middleware('auth');
