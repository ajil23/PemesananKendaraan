<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ManagerController;
use Dotenv\Validator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::group(['middleware' => ['logincheck:admin']], function() {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['logincheck:manager']], function() {
        Route::resource('manager', ManagerController::class);
    });
    Route::group(['middleware' => ['logincheck:director']], function() {
        Route::resource('director', DirectorController::class);
    });
});

// Pemesanan
Route::get('pemesanan', [PemesananController::class, 'index'])->name('pemesanan.view');
Route::get('addpemesanan', [PemesananController::class, 'add'])->name('pemesanan.add');
Route::post('storepemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');
Route::get('editpemesanan/{id}', [PemesananController::class, 'edit'])->name('pemesanan.edit');
Route::post('updatepemesanan/{id}', [PemesananController::class, 'update'])->name('pemesanan.update');
Route::get('deletepemesanan/{id}', [PemesananController::class, 'delete'])->name('pemesanan.delete');

// Driver
Route::get('driver', [DriverController::class, 'index'])->name('driver.view');
Route::get('adddriver', [DriverController::class, 'add'])->name('driver.add');
Route::post('storedriver', [DriverController::class, 'store'])->name('driver.store');
Route::get('editdriver/{id}', [DriverController::class, 'edit'])->name('driver.edit');
Route::post('updatedriver/{id}', [DriverController::class, 'update'])->name('driver.update');
Route::get('deletedriver/{id}', [DriverController::class, 'delete'])->name('driver.delete');

// Kendaraan
Route::get('kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.view');
Route::get('addkendaraan', [KendaraanController::class, 'add'])->name('kendaraan.add');
Route::post('storekendaraan', [KendaraanController::class, 'store'])->name('kendaraan.store');
Route::get('editkendaraan/{id}', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
Route::post('updatekendaraan/{id}', [KendaraanController::class, 'update'])->name('kendaraan.update');
Route::get('deletekendaraan/{id}', [KendaraanController::class, 'delete'])->name('kendaraan.delete');

// manager
Route::get('pemesanan-manager', [ManagerController::class, 'pemesanan'])->name('managerpemesanan.view');
Route::get('editpemesanan/manager/{id}', [ManagerController::class, 'editpesanan'])->name('managerpemesanan.edit');
Route::post('updatepemesanan/manager/{id}', [ManagerController::class, 'updatepesanan'])->name('managerpemesanan.update');

// director
Route::get('pemesanan-director', [DirectorController::class, 'pemesanan'])->name('directporpemesanan.view');
Route::get('editpemesanan/director/{id}', [DirectorController::class, 'editpesanan'])->name('directporpemesanan.edit');
Route::post('updatepemesanan/director/{id}', [DirectorController::class, 'updatepesanan'])->name('directporpemesanan.update');





