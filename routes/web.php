<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\UsahaController;
use App\Http\Controllers\Admin\SektorController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\LandingPage\AboutController;
use App\Http\Controllers\LandingPage\ArticelController;
use App\Http\Controllers\LandingPage\HomeEventController;
use App\Http\Controllers\LandingPage\GraphController;
use App\Http\Controllers\LandingPage\SectorController;



//Route login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


// Route dashboard
Route::get('/home', [FrontendController::class, 'index'])->name('home');



Route::get('/', [FrontendController::class, 'index'])->name('home');

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


// Route landing Page
//route home landing oage
Route::get('/landingPage', [HomeController::class, 'index'])->name(name: 'home');
//Route about landing page
Route::get('/landingPage/tentang', [AboutController::class, 'index'])->name('about');
//Route sector landing page
Route::get('/landingPage/sektor', [SectorController::class, 'index'])->name('sector');
//Route articel landing page
Route::get('/landingPage/artikel', [ArticelController::class, 'index'])->name('articel');
//Route event landing page
Route::get('/landingPage/event', action: [HomeEventController::class, 'index'])->name('event');
//Route infografis landing page
Route::get('/landingPage/infografis', action: [GraphController::class, 'index'])->name('graph');
