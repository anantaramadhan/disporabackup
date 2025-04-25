<?php


use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\SektorController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\UsahaController;


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
Route::get('terimaevent/event/info', [EventController::class, 'info'])->name('event.info');





//Route Data Event
Route::get('/dataevent', [FrontendController::class, 'dataevent'])->name('dataevent');
Route::get('dataevent/event/info', [EventController::class, 'info'])->name('event.info');





//Route Terima Usaha 
Route::get('/terimausaha', [FrontendController::class, 'terimausaha'])->name('terimausaha');
Route::get('terimausaha/usaha/info', [UsahaController::class, 'info'])->name('usaha.info');





//Route Data Usaha
Route::get('/datausaha', [FrontendController::class, 'datausaha'])->name('datausaha');
Route::get('datausaha/usaha/info', [UsahaController::class, 'info'])->name('usaha.info');



//Route Data Sektor
Route::get('/datasektor', [FrontendController::class, 'datasektor'])->name('datasektor');
Route::get('/datasektor/sektor/info', [SektorController::class, 'info'])->name('sektor.info');





//Route Profil
Route::get('/profil', [FrontendController::class, 'profil'])->name('profil');



