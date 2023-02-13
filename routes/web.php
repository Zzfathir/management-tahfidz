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

Route::get('/login', [TahfidzController::class, 'login'])->name('login');
Route::get('/register', [TahfidzController::class, 'register'])->name('register');

Route::get('/tahfidz', [TahfidzController::class, 'index']);
Route::get('/tahfidz/create', [TahfidzController::class, 'create']);
Route::post('/tahfidz', [TahfidzController::class, 'store']);
Route::delete('/tahfidz/{id}', [TahfidzController::class, 'delete']);

