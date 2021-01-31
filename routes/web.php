<?php

use Illuminate\Support\Facades\Auth;
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
})->name('landingpage');

Route::get('/pplp/atlet/kejuaraan/tambah', function () {
    return view('kejuaraan.create');
})->name('pplp.kejuaraan.create');

Route::get('/pplp/atlet/kejuaraan/edit', function () {
    return view('kejuaraan.edit');
})->name('pplp.kejuaraan.edit');

Route::get('/pplpd/atlet/kejuaraan/tambah', function () {
    return view('kejuaraan.create');
})->name('pplpd.kejuaraan.create');

Route::get('/pplpd/atlet/kejuaraan/edit', function () {
    return view('kejuaraan.edit');
})->name('pplpd.kejuaraan.edit');

//pplp
Route::get('/pplp/atlet', function () {
    return view('pplp.atlet.index');
})->name('pplp.atlet.index');

Route::get('/pplp/atlet/tambah', function () {
    return view('pplp.atlet.create');
})->name('pplp.atlet.create');

Route::get('/pplp/atlet/edit', function () {
    return view('pplp.atlet.edit');
})->name('pplp.atlet.edit');

Route::get('/pplp/atlet/show', function () {
    return view('pplp.atlet.show');
})->name('pplp.atlet.show');

Route::get('/pplp/pelatih', function () {
    return view('pplp.pelatih.index');
})->name('pplp.pelatih.index');

Route::get('/pplp/pelatih/tambah', function () {
    return view('pplp.pelatih.create');
})->name('pplp.pelatih.create');

Route::get('/pplp/pelatih/edit', function () {
    return view('pplp.pelatih.edit');
})->name('pplp.pelatih.edit');

Route::get('/pplp/pelatih/show', function () {
    return view('pplp.pelatih.show');
})->name('pplp.pelatih.show');

//pplpd
Route::get('/pplpd/atlet', function () {
    return view('pplpd.atlet.index');
})->name('pplpd.atlet.index');

Route::get('/pplpd/atlet/tambah', function () {
    return view('pplpd.atlet.create');
})->name('pplpd.atlet.create');

Route::get('/pplpd/atlet/edit', function () {
    return view('pplpd.atlet.edit');
})->name('pplpd.atlet.edit');

Route::get('/pplpd/atlet/show', function () {
    return view('pplpd.atlet.show');
})->name('pplpd.atlet.show');

Route::get('/pplpd/pelatih', function () {
    return view('pplpd.pelatih.index');
})->name('pplpd.pelatih.index');

Route::get('/pplpd/pelatih/tambah', function () {
    return view('pplpd.pelatih.create');
})->name('pplpd.pelatih.create');

Route::get('/pplpd/pelatih/edit', function () {
    return view('pplpd.pelatih.edit');
})->name('pplpd.pelatih.edit');

Route::get('/pplpd/pelatih/show', function () {
    return view('pplpd.pelatih.show');
})->name('pplpd.pelatih.show');

Auth::routes(['register' => false]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
