<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

// // Dashboard
// Route::get('/', [DashboardController::class, 'index'])->middleware('guest');
// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('guest');

 // Admin
// Route::get('/admin', [AdminController::class, 'admin']);

Route::get('/', 'App\Http\Controllers\DashboardController@index');
//Route::get('/artikel/{id}','App\Http\Controllers\ArtikelController@index');
Route::get('/bantuan/{id}','App\Http\Controllers\BantuanController@publik_index');
Route::get('/artikel/{id}','App\Http\Controllers\ArtikelController@publik_index');

Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/admin/bantuan_admin', 'App\Http\Controllers\AdminController@bantuan');
Route::get('/admin/artikel', 'App\Http\Controllers\AdminController@artikel');
Route::get('/admin/tambah_bantuan', 'App\Http\Controllers\AdminController@tambah');




