<?php

use App\Http\Controllers\AbsensiController;
use Illuminate\Support\Facades\Route;
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


// Route::get('/', function () {
//     return view('test');
// });

Route::resource('/absensi', AbsensiController::class);
Route::resource('/mahasiswa', MahasiswaController::class);

Route::get('/',[AbsensiController::class,'index']);
Route::get('/mahasiswa/{nama}',[AbsensiController::class,'show']);