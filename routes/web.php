<?php

use App\Http\Controllers\Home;
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
Route::get('/', [Home::class, 'index']);
Route::get('/daftar', [Home::class, 'pendaftaran']);
Route::get('/daftar/{status}', [Home::class, 'pendaftaran_notif']);
Route::get('/cekapi', [Home::class, 'cekapi']);
Route::get('/cekapii/{id}', [Home::class, 'cekapi']);
Route::post('/get-konsentrasi', [Home::class, 'konsentrasi_jurusan']);
//Route::get('/', function () {
   // return view('index');
//});
