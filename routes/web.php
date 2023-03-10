<?php

use App\Http\Controllers\TahfidzController;
use App\Models\Tahfidz;
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
    return view('welcome');
});


Route::get('/dashboard', [TahfidzController::class, 'dashboard'])->middleware('auth');
Route::get('/admin', [TahfidzController::class, 'admin']);

Route::get('/tahfidz', [TahfidzController::class, 'index'])->middleware('auth');


Route::get('/tahfidz/create', [TahfidzController::class, 'create'])->middleware('is_admin');
Route::post('/tahfidz', [TahfidzController::class, 'store'])->middleware('is_admin');
Route::delete('/tahfidz/{id}', [TahfidzController::class, 'delete'])->middleware('is_admin');
Route::get('/tahfidz/{id}/edit', [TahfidzController::class, 'edit'])->middleware('is_admin');
Route::patch('/tahfidz/{id}', [TahfidzController::class, 'update'])->middleware('is_admin');

