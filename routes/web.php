<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
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

Route::controller(AuthController::class)->group(function () {
	Route::get('register', 'register')->name('register');
	Route::post('register', 'registerSimpan')->name('register.simpan');

	Route::get('login', 'login')->name('login');
	Route::post('login', 'loginAksi')->name('login.aksi');

	Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/', function () {
	return view('welcome');
});

Route::middleware('auth')->group(function () {
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::controller(SiswaController::class)->prefix('siswa')->group(function () {
		Route::get('', 'index')->name('siswa');
		Route::get('tambah', 'tambah')->name('siswa.tambah');
		Route::post('tambah', 'simpan')->name('siswa.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('siswa.edit');
		Route::post('edit/{id}', 'update')->name('siswa.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('siswa.hapus');
	});
});
