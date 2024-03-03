<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TambahbukuController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use App\Models\Kategori;
use App\Models\Buku;

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
    return view('quest.dashboard');
});


Route::get('/login', function () {
    return view('/quest/login');
});

Route::get('/dashboard', function () {
    return view('quest.dashboard');
});

// Route::middleware(['auth','verified'])->prefix('dashboard')->group(function ()){
// }
Route::middleware(['auth', 'CekLevel'])->group(function () {
    // Route::get('/user', function () {
    //     return view('user');
    // });
    Route::get('/user', [UserController::class, 'user'])->name('user');
    Route::delete('/user/{id}', [UserController::class, 'delete'])->name('delete');
    Route::get('/kategori', [KategoriController::class, 'index'])->name('index');
    Route::get('/tambahkategori', [KategoriController::class, 'create'])->name('create');
    Route::post('/tambahkategori', [KategoriController::class, 'create'])->name('create');
    Route::delete('/kategori/{id}', [KategoriController::class, 'delete'])->name('delete');
    Route::get('/tambahbuku', [TambahbukuController::class, 'index'])->name('index');
    Route::post('/tambahbuku', [TambahbukuController::class, 'create'])->name('create');
    Route::delete('/tambahbuku/{id}', [TambahbukuController::class, 'delete'])->name('delete');
    Route::get('/buku', [TambahbukuController::class, 'index'])->name('index');

    // Route::get('/kategori', function () {
    //     return view('kategori');
    // });
    // Route::get('/buku', function () {
    //     return view('buku');
    // });

    Route::get('/detailpeminjaman', function () {
        return view('detailpeminjaman');
    });
    Route::get('/laporan', function () {
        return view('laporan');
    });
    Route::get('/tambahbukubaru', function () {
        return view('tambahbukubaru');
    });
    Route::get('/profile', function () {
        return view('profile');
    });
    Route::get('/koleksi', function () {
        return view('koleksi');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/laporan', [App\Http\Controllers\HomeController::class, 'laporan'])->name('laporan');
Route::get('/detailpeminjaman', [App\Http\Controllers\HomeController::class, 'detailpeminjaman'])->name('laporan');
Route::get('/koleksi', [App\Http\Controllers\HomeController::class, 'koleksi'])->name('koleksi');
Route::get('/koleksi', [App\Http\Controllers\HomeController::class, 'koleksi'])->name('koleksi');
// Route::get('/koleksi', [App\Http\Controllers\HomeController::class, 'koleksi'])->name('koleksi');


// Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
// Route::get('/kategori', [App\Http\Controllers\HomeController::class, ''])->name('kategori');
