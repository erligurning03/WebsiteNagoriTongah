<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
    return view('welcome');
});

Route::get('/tes', function () {
    return view('landing_page/tes');
});
// Route::get('/', function () {
//     return view('landing_page/landing');
// });
Route::get('/landing', function () {
    return view('landing_page/landing');
});

Route::get('/auth', function () {return view('auth/login');});
Route::get('/belanja', function () {
    return view('landing_page/belanja');
});

Route::get('/pengajuan', function () {return view('pengajuan/index');});
Route::get('/form', function () {return view('pengajuan/form');})->name('form');
Route::get('/galeri', function () {return view('galeri/index');});
Route::get('/forum_diskusi', function () {return view('forum_diskusi/index');});
Route::get('/forum_diskusi2', function () {return view('forum_diskusi/index cadangan');});

Route::get('/wisata', function () {return view('wisata/index');});

// Route::get('/landingpage', function () {
//     return view('landing_page/landing');
// });

//untuk halaman admin
Route::get('/admin', function() {return view('admin/index');});
Route::get('/admin/charts', function () {
    return view('admin.charts');
})->name('charts');

Route::get('/admin/perangkatdesa', function() {return view('admin/perangkat_desa/show');});
Route::get('/admin/tambah/perangkat', function() {return view('admin/perangkat_desa/tambah');});
Route::post('/submit-form', 'FormController@submit')->name('submit-form');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
