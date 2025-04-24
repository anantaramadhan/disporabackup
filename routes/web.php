<?php


use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ArtikelController;


//Route login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


// Route dashboard
Route::get('/home', [FrontendController::class, 'index'])->name('home');


//Route Artikel
Route::get('/artikel', [FrontendController::class, 'artikel'])->name('artikel');
Route::get('/artikel/tambah', [ArtikelController::class, 'tambah'])->name('artikel.tambah');
Route::get('/artikel/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');

//Route Terima Event
Route::get('/terimaevent', [FrontendController::class, 'terimaevent'])->name('terimaevent');


//Route Data Event
Route::get('/dataevent', [FrontendController::class, 'dataevent'])->name('dataevent');


//Route Terima Usaha 
Route::get('/terimausaha', [FrontendController::class, 'terimausaha'])->name('terimausaha');


//Route Data Usaha
Route::get('/datausaha', [FrontendController::class, 'datausaha'])->name('datausaha');


//Route Profil
Route::get('/profil', [FrontendController::class, 'profil'])->name('profil');








Route::get('/dashboard', [BackendController::class, 'index'])->name('dashboard');
