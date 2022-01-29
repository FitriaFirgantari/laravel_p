<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TambahDataBarang;
use App\Http\Controllers\TidakHabisPakai;
use App\Http\Controllers\HabisPakaiController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\AuthController;

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
    return redirect('login');
});

use App\Http\Controllers\DashboardController;
use App\Models\habispakai;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/userlogin', [AuthController::class, 'user_login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/user_register', [AuthController::class, 'user_register']);


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);

    // Route::get('/DataBarang', [DashboardController::class, 'dbarang']);
    // Route::get('/DataInventaris', [DashboardController::class, 'dinven']);
    // Route::get('/DataPeminjaman', [DashboardController::class, 'dpeminjaman']);
    // Route::get('/DataPengadaan', [DashboardController::class, 'dpengadaan']);
    // Route::get('/laporan', [DashboardController::class, 'laporan']);
    // Route::get('/tbhdbrg', [DashboardController::class, 'tbhdbrg']);
    // Route::get('/BarangHabisPakai', [DashboardController::class, 'habispakai']);
    // Route::get('/BarangTidakHabisPakai', [DashboardController::class, 'thabispakai']);



    Route::group(['middleware' => 'cekrole:admin'], function () {

        Route::get('/dbarang', [TambahDataBarang::class, 'viewtambahbarang'])->name('tambahbarang');
        Route::get('/tambah_data_barang', [TambahDataBarang::class, 'tambahBarang']);
        Route::post('/simpan_data_barang', [TambahDataBarang::class, 'simpanBarang']);
        Route::get('/ubah_data_barang/{id}', [TambahDataBarang::class, 'ubahBarang']);
        Route::post('/update_data_barang', [TambahDataBarang::class, 'updateBarang']);
        Route::post('/delete_data_barang/{id}', [TambahDataBarang::class, 'deleteBarang']);

        Route::get('/cetak-barang', [TambahDataBarang::class, 'cetakBarang']);
        //cetak barang
        Route::get('/cetak-form', [TidakHabisPakai::class, 'cetakForm']);
        Route::get('/cetak-perbulan/{tgawal}/{tgakhir}', [TidakHabisPakai::class, 'cetakPerbulan']);

        Route::get('/cariBarang', [TambahDataBarang::class, 'cariBarang']);
        Route::get('/cariHabis', [HabisPakaiController::class, 'cariHabis']);
        Route::get('/cariTidak', [TidakHabisPakai::class, 'cariTidak']);
        Route::get('/cariPinjam', [PinjamController::class, 'cariPinjam']);

        Route::get('/BarangTidakHabisPakai', [TidakHabisPakai::class, 'viewInventaris'])->name('tambahinventaris');
        Route::get('/tambah_data_th', [TidakHabisPakai::class, 'tambah']);
        Route::post('/simpan_data_th', [TidakHabisPakai::class, 'simpan']);
        Route::get('/ubah_data_th/{id}', [TidakHabisPakai::class, 'ubah']);
        Route::post('/update_data_th', [TidakHabisPakai::class, 'update']);
        Route::post('/delete_data_th/{id}', [TidakHabisPakai::class, 'delete']);



        Route::get('/BarangHabisPakai', [HabisPakaiController::class, 'viewhabispakai'])->name('habispakai');
        Route::get('/tambah_h', [HabisPakaiController::class, 'tambah_h']);
        Route::post('/simpan_h', [HabisPakaiController::class, 'simpan_h']);
        Route::get('/ubah_h/{id}', [HabisPakaiController::class, 'ubah_h']);
        Route::post('/update_h', [HabisPakaiController::class, 'update_h']);
        Route::post('/delete_h/{id}', [HabisPakaiController::class, 'delete_h']);
    });







    Route::get('/DataPeminjaman', [PinjamController::class, 'viewPinjam'])->name('peminjaman');
    Route::get('/tambah_pinjam', [PinjamController::class, 'tambah_pinjam']);
    Route::post('/simpan_pinjam', [PinjamController::class, 'simpan_pinjam']);
    Route::get('/ubah_pinjam/{id}', [PinjamController::class, 'ubah_pinjam']);
    Route::post('/update_pinjam', [PinjamController::class, 'update_pinjam']);
    Route::post('/delete_pinjam/{id}', [PinjamController::class, 'delete_pinjam']);
});
