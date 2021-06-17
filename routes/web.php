<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


//Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'checkRole:admin,waiter,cashier,owner']], function () {
    
        //Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/print/transaksi', [PrintController::class, 'printtransaksi'])->name('print.transaksi');


        //Menu
        Route::get('/menu', [MenuController::class, 'index'])->name('menu');
        Route::post('/menu/tambah', [MenuController::class, 'create'])->name('menu.tambah');
        Route::get('/menu/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
        Route::post('/menu/update/{id}', [MenuController::class, 'update'])->name('menu.update');
        Route::get('/menu/hapus/{id}', [MenuController::class, 'destroy'])->name('menu.hapus');
    

});

Route::group(['middleware' => ['auth', 'checkRole:waiter']], function () {
            
        //Pesanan
    Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');
    Route::get('/pesanan/selesai', [PesananController::class, 'show'])->name('pesanan.selesai');
    Route::get('/pesanan/tambah', [PesananController::class, 'create'])->name('tambah.pesanan');
    Route::post('/pesanan/tambah/store', [PesananController::class, 'store'])->name('tambah.store.pesanan');
});    

Route::group(['middleware' => ['auth', 'checkRole:cashier']], function () {

    //cashier
    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
    Route::get('/transaksi/selesai', [TransaksiController::class, 'show'])->name('transaksi.selesai');
    Route::get('/transaksi/bayar/{id}', [TransaksiController::class, 'edit'])->name('transaksi.edit');
    Route::post('/transaksi/update/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');
});  

Route::group(['middleware' => ['auth', 'checkRole:admin,owner']], function () {
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::post('/users/tambah', [UserController::class, 'create'])->name('tambah.user');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('edit.user');
    Route::post('/users/update/{id}', [UserController::class, 'update'])->name('update.user');
    Route::get('/users/hapus/{id}', [UserController::class, 'destroy'])->name('hapus.user');
});