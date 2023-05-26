<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PerangkatDesaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PendapatanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\WisataController;
use App\Models\PerangkatDesa;
use Illuminate\Contracts\Cache\Store;
use App\Http\Controllers\galeriController;
use App\Http\Controllers\galeriDashController;

use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\FormPengajuanController;
use App\Http\Controllers\SuketController;
use App\Http\Controllers\AjuanController;

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


// Route::get('/tes', function () {
//     return view('landing_page/tes');
// });
// // Route::get('/', function () {
// //     return view('landing_page/landing');
// // });
// // Route::get('/landing', function () {
// //     return view('landing_page/landing');
// // });



// // Route::get('/login', [AuthController::class, 'login'])->name('login');
// // Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// // Route::get('/landing', function () { return view('landing_page/landing'); })->name('landing');
// // Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
// // Route::post('/login_masuk', [AuthController::class, 'loginMasuk'])->name('login_masuk');
Route::get('/pengajuan', function () {return view('pengajuan/index');});
Route::get('/pengajuan2', function () {return view('pengajuan/index cadangan');});
Route::get('/form', function () {return view('pengajuan/form');})->name('form');
// Route::get('/galeri', function () {return view('galeri/index');});


// // Route::get('/auth', function () {return view('auth/login');});
// // Route::get('/auth', function () {return view('auth/login');})->name('auth');
// // Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/register',[ AuthController::class, 'register'])->name('register');                       //view untuk register
// Route::post('/simpan_register', [AuthController::class, 'registerPost'])->name('simpan_register');   //untuk menyimpan

// // Route::post('/login_masuk', [AuthController::class, 'loginMasuk'])->name('login_masuk');   //untuk menyimpan




// Route::get('/pengajuan', function () {return view('pengajuan/index');});
// Route::get('/pengajuan2', function () {return view('pengajuan/index cadangan');});
// Route::get('/form', function () {return view('pengajuan/form');})->name('form');
// Route::get('/galeri', function () {return view('galeri/index');});

// Route::get('/admin', function() {return view('admin/index');});

// Route::get('/wisata', function () {return view('wisata/index');});


// // Route::get('/forum_diskusi', function () {return view('forum_diskusi/index');});
// Route::get('/forum_diskusi2', function () {return view('forum_diskusi/index cadangan');});

// Route::get('/forum_diskusi', [PostController::class, 'index'])->name('posts.index');
// // cara panggil {{ route('posts.index') }}
// Route::get('/forum_diskusi/{id}', [PostController::class, 'show'])->name('posts.show');
// Route::post('/forum_diskusi/store', [PostController::class, 'store'])->name('posts.store');
// Route::post('/posts/komentar-store', [PostController::class, 'tambahKomentar'])->name('posts.komentar-store');
// Route::post('/toggle-love', 'PostController@toggleLove')->name('post.toggleLove');


// Route::get('/forum_diskusi', function () {return view('forum_diskusi/index');});
// Route::get('/forum_diskusi2', function () {return view('forum_diskusi/index cadangan');});
// Route::get('/admin', function() {return view('admin/index');});

// Route::get('/wisata', function () {return view('wisata/index');});


// // Route::get('/forum_diskusi', function () {return view('forum_diskusi/index');});
// Route::get('/forum_diskusi2', function () {return view('forum_diskusi/index cadangan');});

// Route::get('/forum_diskusi', [PostController::class, 'index'])->name('posts.index');
// // cara panggil {{ route('posts.index') }}
// Route::get('/forum_diskusi/{id}', [PostController::class, 'show'])->name('posts.show');
// Route::post('/forum_diskusi/store', [PostController::class, 'store'])->name('posts.store');


// // Route::get('/landingpage', function () {
// //     return view('landing_page/landing');
// // });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




// //untuk halaman admin
// Route::get('/admin', function() {return view('admin/index');});
// Route::get('/admin/charts', function () {
//     return view('admin.charts');
// })->name('charts');

// Route::get('/admin/perangkatdesa', function() {return view('admin/perangkat_desa/show');});
// Route::get('/admin/tambah/perangkat', function() {return view('admin/perangkat_desa/tambah');});
// Route::post('/submit-form', 'FormController@submit')->name('submit-form');

// Route::get('/admin/wisata', function() {return view('admin/wisata_desa/daftarwisata');});
// Route::get('/admin/tambah/wisata', function() {return view('admin/wisata_desa/tambahwisata');});
// // Route::post('/submit-form', 'FormController@submit')->name('submit-form');

// Route::get('/navbar', function() {return view('admin/layouts/navbar');});
// Route::get('/navbar2', function() {return view('newadmin/layouts/navsidebar');});
// Route::get('/test', function() {return view('newadmin/layouts/tes');});
// Route::get('/newadmin', function() {return view('newadmin/index');});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// //CRUD Perangkat Desa
// Route::get('/perangkat-desa/create-multiple', 'PerangkatDesaController@createMultiple')->name('perangkat-desa.create-multiple');
// Route::post('/perangkat-desa/store-multiple', 'PerangkatDesaController@storeMultiple')->name('perangkat-desa.store-multiple');

// Route::post('/admin/perangkatdesa', [PerangkatDesaController::class, 'store'])->name('perangkatdesa.store');



// ROUTE YANG SUDAH TERATUR

//route yang semua user bisa akses  termasuk tamu tanpa akun login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/', function () { return view('landing_page/landing'); })->name('landing');
Route::get('/warga', function () { return view('warga/dashboard'); })->name('warga');
Route::get('/newlanding', function () { return view('landing_page/newlanding'); })->name('newlanding');
Route::post('/login_masuk', [AuthController::class, 'loginMasuk'])->name('login_masuk');
Route::get('/register',[ AuthController::class, 'register'])->name('register');                       //view untuk register
Route::post('/simpan_register', [AuthController::class, 'registerPost'])->name('simpan_register'); 
Route::get('/umkm', [UmkmController::class, 'create'])->name('umkm');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
//Route halaman galeri
Route::get('/galeri_dash', [galeriDashController::class, 'index'])->name('galeri_dash');

//route setelah login
Route::middleware(['auth'])->group(function () {

    Route::group(['middleware' => 'role:admin,operator'], function () {
        // Route yang hanya dapat diakses oleh admin
        Route::get('/dashboard-admin', function () { return view('admin.index'); })->name('dashboard-admin');

        // Route halaman CRUD pendapatan
        Route::get('/admin/pendapatan', [PendapatanController::class, 'index'])->name('admin.pendapatan.anggaran');
        Route::get('/admin/pendapatan/filter', [PendapatanController::class, 'filter'])->name('pendapatan.filter');
        Route::delete('/admin/pendapatan/{id}', [PendapatanController::class, 'destroy'])->name('pendapatan.destroy');
        Route::put('/admin/pendapatan/{id}', [PendapatanController::class, 'update'])->name('pendapatan.update');
        Route::get('/admin/pendapatan', [PendapatanController::class, 'index'])->name('pendapatan.per-tahun');
        Route::get('/admin/pendapatan/add', [PendapatanController::class, 'create'])->name('admin.tambahpendapatan.anggaran');
        Route::post('/admin/pendapatan', [PendapatanController::class, 'store'])->name('pendapatan.store');

        // Route halaman CRUD pengeluaran
        Route::get('/admin/pengeluaran', [PengeluaranController::class, 'index'])->name('admin.pengeluaran.anggaran');
        Route::get('/admin/pengeluaran/filter', [PengeluaranController::class, 'filter'])->name('pengeluaran.filter');
        Route::delete('/admin/pengeluaran/{id}', [PengeluaranController::class, 'destroy'])->name('pengeluaran.destroy');
        Route::put('/admin/pengeluaran/{id}', [PengeluaranController::class, 'update'])->name('pengeluaran.update');
        Route::get('/admin/pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluaran.per-tahun');
        Route::get('/admin/pengeluaran/add', [PengeluaranController::class, 'create'])->name('admin.tambahpengeluaran.anggaran');
        Route::post('/admin/pengeluaran', [PengeluaranController::class, 'store'])->name('pengeluaran.store');

        //route halaman CRUD galeri oleh admin
        Route::get('/galeri_adm', [galeriController::class, 'index'])->name('galeri_adm'); //membaca data didatabase. jadi ini untuk penamaan letak file diviewsnya jadi gausah lagi kasih tau letak file manual tapi kalau ada rout ini aja pake untuk menggil viewnya
        Route::get('/galeri_admin/create_galeri', [galeriController::class, 'create']);//Route::get('/indexgaleri', function() {return view('galeri_admin.index');});          //untuk name ini biasanya nama view.functionnya, jadi sebenarnya bisa aja agak lain nanmanya
        Route::post('/galeri_admi', [galeriController::class, 'store'])->name('galeri_admin.store');//menyimpan kedatabase
        Route::delete('galeri_admin/{id}',[galeriController::class,'destroy']);
        
         // Route halaman CRUD Surat Keterangan
         Route::get('/admin/suket', [SuketController::class, 'index'])->name('admin.suket.pengajuan');
         Route::delete('/admin/suket/{id}', [SuketController::class, 'destroy'])->name('suket.destroy');
         Route::put('/admin/suket/{id}', [SuketController::class, 'update'])->name('suket.update');
         Route::get('/admin/suket/add', [SuketController::class, 'create'])->name('admin.tambahsuket.pengajuan');
         Route::post('/admin/suket', [SuketController::class, 'store'])->name('suket.store');
         Route::get('/admin/berkas', [AjuanController::class, 'index'])->name('berkas.ajuan');
         Route::put('/admin/berkas/{pengajuan}', [AjuanController::class, 'konfirmasi'])->name('pengajuan.konfirmasi');
         Route::put('/admin/berkas/{pengajuan}/penolakan', [AjuanController::class, 'penolakan'])->name('pengajuan.penolakan');         



    });

    Route::group(['middleware' => 'role:warga'], function () {
        // Route yang hanya dapat diakses oleh warga
        Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

        //Route halaman chart anggaran
        Route::get('/belanja', function () {return view('landing_page/belanja');});
        Route::get('/chart', [ChartController::class, 'index']);
        Route::get('/chart/data', [ChartController::class, 'getData']);
        Route::get('/chart/dataa', [ChartController::class, 'getDataa']);

        //Route halaman forum diskusi
        Route::get('/forum_diskusi', [PostController::class, 'index'])->name('posts.index'); // cara panggil {{ route('posts.index') }}
        Route::get('/forum_diskusi/{id}', [PostController::class, 'show'])->name('posts.show');
        Route::post('/forum_diskusi/store', [PostController::class, 'store'])->name('posts.store');
        Route::get('/post-anda', [PostController::class, 'postAnda'])->name('post-anda');
        Route::get('/post-simpan', [PostController::class, 'postSimpan'])->name('post-simpan');
        Route::get('/post-suka', [PostController::class, 'postSuka'])->name('post-suka');
        Route::get('/post-komentar', [PostController::class, 'postKomentar'])->name('post-komentar');
        Route::get('/like/{postId}', [PostController::class, 'toggleLike'])->name('toggle.like');
        Route::post('/comment/add', [PostController::class, 'addComment'])->name('add.comment');
        Route::delete('/comment/delete/{id}', [PostController::class, 'deleteComment'])->name('delete.comment');
        Route::delete('/post/{id}', [PostController::class, 'deletePost'])->name('post.delete');
        Route::post('/laporan/add', [PostController::class, 'addLaporan'])->name('add.laporan');

        
    });

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//erli route visi misi
//erli controller galeri
//Route::get('/galeriadmin', function() {return view('galeri_admin.crud_galeri');});
//Route::get('/readgaleri', [galeriController::class, 'index'])->name('readgaleri'); //namafungsinya
//route index


//         Route::post('/toggle-love', 'PostController@toggleLove')->name('post.toggleLove');

//         //Route halaman pengajuan
//         Route::get('/pengajuan', [PengajuanController::class, 'index'])->name('pengajuan');
//         Route::get('/form/{id}', [FormPengajuanController::class, 'show'])->name('form');
//         Route::post('/submit}', [PengajuanController::class, 'submit'])->name('submitform');
//         Route::get('/pengajuan/history', [PengajuanController::class, 'history'])->name('history');
//     });

// });
        
