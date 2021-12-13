<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MahasiswaController;
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

// home
// Route::get('/', function () {
//     return view('welcome');
// });

// dashboard
Route::get('/', function(){
    return view('index');
});
// --CRUD mahasiswa
Route::resource('/mahasiswa', MahasiswaController::class);
// --CRUD dosen
Route::resource('/dosen', DosenController::class);
// --CRUD jadwal
Route::resource('/jadwal', JadwalController::class);
// --Login
Route::resource('/login', LoginController::class);
// Route::get('/login', LoginController::class, 'index');
Route::post('/login', LoginController::class, 'authenticate');
// --Register
Route::resource('/register', RegisterController::class);
// Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'store']);
