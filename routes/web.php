<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CollegeStudentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\DaffirController;
use App\Http\Controllers\PelaksanaanPrakController;
use App\Http\Controllers\PelaksanaanUjianController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendaftaranAdminController;
use App\Http\Controllers\PraktikumController;

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
    return view('mahasiswa.index');
})->name('/');

Auth::routes();

Route::get('/mahasiswa/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mahasiswa/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'index'])->name('pendaftaran');
Route::get('/mahasiswa/daftar-hadir', [App\Http\Controllers\DafdirController::class, 'index'])->name('daftar-hadir');
Route::get('/mahasiswa/pelaksanaan-praktikum', [App\Http\Controllers\PelaksanaanPrakController::class, 'index'])->name('pelaksanaan');
Route::get('/mahasiswa/pelaksanaan-ujian', [App\Http\Controllers\PelaksanaanUjianController::class, 'index'])->name('ujian');
Route::get('/mahasiswa/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('data-pribadi');
Route::get('/admin/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/admin/pendaftaran', [App\Http\Controllers\PendaftaranAdminController::class, 'index'])->name('pendaftaran-admin');
Route::get('/admin/praktikum', [App\Http\Controllers\PraktikumController::class, 'index'])->name('praktikum-admin');

Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('collegestudents', CollegeStudentController::class);
});