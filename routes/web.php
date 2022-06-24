<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


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
Route::get('/login', 'App\Http\Controllers\DashboardController@login');


// Route::get('/admin', 'App\Http\Controllers\AdminController@index');
// Route::get('/admin/admin_bantuan', 'App\Http\Controllers\AdminController@bantuan');
// Route::get('/admin/admin_artikel', 'App\Http\Controllers\AdminController@artikel');
// Route::get('/admin/admin_bantuan/tambah', 'App\Http\Controllers\AdminController@tambah_bantuan');
Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/admin_bantuan', [AdminController::class, 'bantuan']);
Route::get('/admin/admin_bantuan/klik', [AdminController::class, 'button_tambah_bantuan']);
Route::post('/admin/admin_bantuan/tambah', [AdminController::class, 'tambah_bantuan']);
Route::get('/admin/admin_bantuan/hapus/{id}', [AdminController::class, 'hapus_bantuan']);
Route::get('/admin/admin_bantuan/ubah/{id}', [AdminController::class, 'ubah_bantuan']);
Route::post('/admin/admin_bantuan/update/{id}', [AdminController::class, 'update_bantuan']);

Route::get('/admin/admin_artikel', [AdminController::class, 'artikel']);
Route::get('/admin/admin_artikel/klik', [AdminController::class, 'button_tambah_artikel']);
Route::post('/admin/admin_artikel/tambah', [AdminController::class, 'tambah_artikel']);
Route::get('/admin/admin_artikel/hapus/{id}', [AdminController::class, 'hapus_artikel']);
Route::get('/admin/admin_artikel/ubah/{id}', [AdminController::class, 'ubah_artikel']);
Route::post('/admin/admin_artikel/update/{id}', [AdminController::class, 'update_artikel']);







