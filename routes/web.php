<?php

use App\Http\Controllers\DaftarController;
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
})->name('landingPage');
Route::get('/daftar', [DaftarController::class, 'daftar'])->name('daftar');
Route::get('/daftar/pdf/{id}', [DaftarController::class, 'pdf_peserta'])->name('pdf');
Route::get('/daftar/edit/{id}', [DaftarController::class, 'edit_peserta'])->name('edit');
Route::post('daftar-update/{id}', [DaftarController::class, 'update'])->name('updatePeserta');
Route::get('/daftar/delete/{id}', [DaftarController::class, 'delete_peserta'])->name('delete');
Route::resource('daftars', DaftarController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/daftar-peserta', [App\Http\Controllers\HomeController::class, 'daftar_peserta'])->name('daftarPeserta');
