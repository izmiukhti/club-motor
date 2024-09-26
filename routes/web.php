<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use App\Models\Artikel;
use App\Models\Profil;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users.dashboard');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



    Route::get('/users/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified', UserMiddleware::class])->name('users.dashboard');

    Route::get('/users/navbar/profil', [ProfileController::class, 'index'])->name('users.navbar.profil');
    Route::get('/users/navbar/visimisi', [UserController::class, 'visimisi'])->name('users.navbar.visimisi');
    Route::get('/users/navbar/produk/index', [ProdukController::class, 'index'])->name('users.navbar.produk.index');
    Route::get('/users/navbar/kontak', [UserController::class, 'kontak'])->name('users.navbar.kontak');
    Route::get('/users/navbar/about', [UserController::class, 'about'])->name('users.navbar.about');

    Route::get('/users/sidebar/artikel/index', [ArtikelController::class, 'index'])->name('users.sidebar.artikel.index');
    Route::get('/users/sidebar/event/index', [EventController::class, 'index'])->name('users.sidebar.event.index');
    Route::get('/users/sidebar/galeri/index', [GaleriController::class, 'index'])->name('users.sidebar.galeri.index');

    Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->middleware(['auth', 'verified', AdminMiddleware::class])->name('admin.dashboard');

    Route::get('/admin/navbar/profil', [ProfileController::class, 'admin'])->name('admin.navbar.profil');
    Route::get('/admin/navbar/visimisi', [UserController::class, 'vimi'])->name('admin.navbar.visimisi');
    Route::get('/admin/navbar/produk/index', [ProdukController::class, 'admin'])->name('admin.navbar.produk.index');
    Route::get('/admin/navbar/kontak', [UserController::class, 'contact'])->name('admin.navbar.kontak');
    Route::get('/admin/navbar/about', [UserController::class, 'tentang'])->name('admin.navbar.about');

    Route::get('/admin/sidebar/artikel/index', [ArtikelController::class, 'admin'])->name('admin.sidebar.artikel.index');
    Route::get('/admin/sidebar/event/index', [EventController::class, 'admin'])->name('admin.sidebar.event.index');
    Route::get('/admin/sidebar/galeri/index', [GaleriController::class, 'admin'])->name('admin.sidebar.galeri.index');
    Route::get('/admin/sidebar/klien/index', [KlienController::class, 'index'])->name('admin.sidebar.klien.index');

    
require __DIR__.'/auth.php';
