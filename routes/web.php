<?php

use App\Http\Controllers\PaketController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Models\Paket;
use App\Models\Transaksi;
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
    // $pakets = Paket::all();
    // $transaksis = Transaksi::where('status', '!=', 'selesai')->limit(5);
    $pakets = Paket::paginate(4);
    return view('welcome', compact('pakets'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('paket', PaketController::class)->middleware('auth');
Route::resource('transaksi', TransaksiController::class)->middleware('auth');
Route::get('/transaksi/detail/{id}', [TransaksiController::class, 'edit'])->name('transaksi.detail')->middleware('auth');
Route::resource('user', UserController::class)->middleware('auth');
