<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/home', [BukuController::class, 'index']);
Route::post('/home', [BukuController::class, 'store']);
Route::get('/create', [BukuController::class, 'create']);
Route::get('/edit/{id}', [BukuController::class, 'edit']);
Route::post('/edit/{id}', [BukuController::class, 'update']);
Route::get('/delete/{id}', [BukuController::class, 'destroy']);
