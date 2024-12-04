<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Santricontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('salam', function () {
    return ('Assalamu alaikum,Selamat Belajar Laravel PeTIK Jombang Angkatan ke III' );
});

//routing parameter
Route::get('pegawai/{nama}/{devisi}', function ($nama,$devisi) {
    return'Nama Pegawai :'.$nama.'<br/>Departemen :'.$devisi;
});

//routing view kondisi
Route::get('kabar', function () {
    return view('kondisi');
});

//routing view Santri
Route::get('santri', [santricontroller::class,'datasantri']);

