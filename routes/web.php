<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
    return redirect('home');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/dashboardAdmin', [App\Http\Controllers\adminController::class, 'index'])->name('dashboardAdmin');
Route::get('/logout', function () {
    auth()->logout();
    return Redirect::to('/login');
})->name('/logout');

Route::middleware(['auth'])->group(function () {
    //pendaftaran
    Route::get('/pendaftaran', [App\Http\Controllers\pendaftaranController::class, 'index'])->name('pendaftaran.index');
    Route::get('/pendaftaran-create', [App\Http\Controllers\pendaftaranController::class, 'create'])->name('pendaftaran.create');
    Route::post('/pendaftaran-input', [App\Http\Controllers\pendaftaranController::class, 'store'])->name('pendaftaran.store');
    Route::get('/pendaftaran/delete/{idpendaftaran}', [App\Http\Controllers\pendaftaranController::class, 'destroy'])->name('pendaftaran.destroy');
    Route::get('/pendaftaran/edit/{idpendaftaran}', [App\Http\Controllers\pendaftaranController::class, 'edit'])->name('pendaftaran.edit');
    Route::post('/pendaftaran/update', [App\Http\Controllers\pendaftaranController::class, 'update'])->name('pendaftaran.update');


    //jadwal
    Route::get('/jadwal', [App\Http\Controllers\jadwalController::class, 'index'])->name('jadwal.index');
    Route::get('/jadwal-create', [App\Http\Controllers\jadwalController::class, 'create'])->name('jadwal.create');
    Route::post('/jadwal-input', [App\Http\Controllers\jadwalController::class, 'store'])->name('jadwal.store');
    Route::get('/jadwal/delete/{idjadwal}', [App\Http\Controllers\jadwalController::class, 'destroy'])->name('jadwal.destroy');
    Route::get('/jadwal/edit/{idjadwal}', [App\Http\Controllers\jadwalController::class, 'edit'])->name('jadwal.edit');
    Route::post('/jadwal/update', [App\Http\Controllers\jadwalController::class, 'update'])->name('jadwal.update');


    //sponsor
    Route::get('/sponsor', [App\Http\Controllers\sponsorController::class, 'index'])->name('sponsor.index');
    Route::get('/sponsor-create', [App\Http\Controllers\sponsorController::class, 'create'])->name('sponsor.create');
    Route::post('/sponsor-input', [App\Http\Controllers\sponsorController::class, 'store'])->name('sponsor.store');
    Route::get('/sponsor/delete/{idsponsor}', [App\Http\Controllers\sponsorController::class, 'destroy'])->name('sponsor.destroy');
    Route::get('/sponsor/edit/{idsponsor}', [App\Http\Controllers\sponsorController::class, 'edit'])->name('sponsor.edit');
    Route::post('/sponsor/update', [App\Http\Controllers\sponsorController::class, 'update'])->name('sponsor.update');

    //laporan
    Route::get('/laporan', [App\Http\Controllers\laporanController::class, 'index'])->name('laporan.index');

});

Route::get('/daftaruser', [App\Http\Controllers\userController::class, 'create'])->name('userdaftar.create');
Route::post('/daftar/input', [App\Http\Controllers\userController::class, 'store'])->name('userdaftar.store');
