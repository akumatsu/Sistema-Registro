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
Route::get('/vacaciones', function () {
    return view('registro.vacaciones');
});
Route::get('/view', function () {
    return view('registro.view');
});
Route::get('/update', function () {
    return view('registro.update');
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/vaciones',[App\Http\Controllers\VacacionesController::class, 'add']);
Route::get('/view',[App\Http\Controllers\VacacionesController::class, 'view']);
Route::get('/delete/{id}',[App\Http\Controllers\VacacionesController::class, 'delete']);
Route::get('/update/{id}',[App\Http\Controllers\VacacionesController::class, 'update']);
Route::get('/consulta/{id}',[App\Http\Controllers\VacacionesController::class, 'consulta']);
