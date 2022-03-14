<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CollegeStudentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
<<<<<<< HEAD
use App\Http\Controllers\LoginController;
=======
>>>>>>> 076bf8cae2c9edb498a16eb68947049348053cb3

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
<<<<<<< HEAD
    return view('mahasiswa.index');
})->name('/');

Auth::routes();

Route::get('/mahasiswa/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 076bf8cae2c9edb498a16eb68947049348053cb3

Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('collegestudents', CollegeStudentController::class);
});
<<<<<<< HEAD

=======
>>>>>>> 076bf8cae2c9edb498a16eb68947049348053cb3
