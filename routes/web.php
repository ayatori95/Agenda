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

Route::get('/', [\App\Http\Controllers\CalendarController::class,'index']);
Route::get('/load-events', [\App\Http\Controllers\EventController::class,'loadEvents'])->name('routeLoadEvents');
Route::put('/event-update', [\App\Http\Controllers\EventController::class,'update'])->name('routeEventUpdate');
Route::post('/event-store', [\App\Http\Controllers\EventController::class,'store'])->name('routeEventStore');
Route::delete('/event-destroy', [\App\Http\Controllers\EventController::class,'destroy'])->name('routeEventDelete');
//Route::get('/load-events', 'EventController@loadEvents')->name('routeLoadEvents');