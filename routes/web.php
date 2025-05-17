<?php

use App\Http\Controllers\Admin\DataSektorController;
use App\Http\Controllers\Admin\DetailAduanController;
use App\Http\Controllers\Admin\InformasiAduanController;
use App\Http\Controllers\Pengusaha\PengaduanController;
use App\Http\Controllers\Popup\ErrorController;
use App\Http\Controllers\Popup\PopUpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LupaSandiController;
use App\Http\Controllers\Admin\BerandaAdminController;
use App\Http\Controllers\Admin\TerimaEventController;
use App\Http\Controllers\Admin\DataEventController;
use App\Http\Controllers\Admin\TerimaUsahaController;
use App\Http\Controllers\Admin\DataUsahaController;
use App\Http\Controllers\Admin\ProfilAdminController;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\LandingPage\AboutController;
use App\Http\Controllers\LandingPage\ArticelController;
use App\Http\Controllers\LandingPage\HomeEventController;
use App\Http\Controllers\LandingPage\GraphController;
use App\Http\Controllers\LandingPage\SectorController;

// Route login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


//Route daftar
Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');


//route lupa sandi 
Route::get('lupasandi', [LupaSandiController::class, 'showLoginForm'])->name('lupasandi');

//CK EDITOR
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

Route::post('/upload-image', function (Request $request) {
    // Validasi gambar
    $request->validate([
        'upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Simpan gambar
    $path = $request->file('upload')->store('images', 'public');

    // Kembalikan URL gambar yang dapat digunakan oleh CKEditor
    return response()->json([
        'url' => Storage::url($path), // Mengembalikan URL file yang diupload
    ]);
});




// Route Beranda
Route::get('admin/beranda', [BerandaAdminController::class, 'index'])->name('admin.beranda');

// Route Artikel
Route::get('admin/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('admin/artikel/tambah', [ArtikelController::class, 'tambah'])->name('artikel.tambah');
Route::get('admin/artikel/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');

// Route Terima Event
Route::get('admin/terimaevent', [TerimaEventController::class, 'index'])->name('terimaevent');
Route::get('admin/terimaevent/info', [TerimaEventController::class, 'info'])->name('event.info');

// Route Data Event
Route::get('admin/dataevent', [DataEventController::class, 'index'])->name('dataevent');
Route::get('admin/dataevent/info', [DataEventController::class, 'info'])->name('event.info');

// Route Terima Usaha
Route::get('admin/terimausaha', [TerimaUsahaController::class, 'index'])->name('terimausaha');
Route::get('admin/terimausaha/info', [TerimaUsahaController::class, 'info'])->name('usaha.info');

// Route Data Usaha
Route::get('admin/datausaha', [DataUsahaController::class, 'index'])->name('datausaha');
Route::get('admin/datausaha/info', [DataUsahaController::class, 'info'])->name('usaha.info');

// Route Data Sektor
Route::get('admin/datasektor', [DataSektorController::class, 'index'])->name('datasektor');
Route::get('admin/datasektor/tambah', [DataSektorController::class, 'tambah'])->name('sektor.tambah');
Route::get('admin/datasektor/edit', [DataSektorController::class, 'edit'])->name('sektor.edit');
Route::get('admin/datasektor/info', [DataSektorController::class, 'info'])->name('sektor.info');

//Route Informasi aduan
Route::get('admin/informasiaduan', [InformasiaduanController::class, 'index'])->name('informasiaduan');
Route::get('admin/informasiaduan/detail', [DetailaduanController::class, 'index'])->name('admin.aduan.detail');


// Route Profil
Route::get('admin/profil', [ProfilAdminController::class, 'index'])->name('admin.profil');


//Route Pop Up
Route::get('admin/error', [PopUpController::class, 'error'])->name('popup.404');






// ROUTE UNTUK PENGUSAHA
use App\Http\Controllers\Pengusaha\InformasiUsahaController;
use App\Http\Controllers\Pengusaha\EventmuController;
use App\Http\Controllers\Pengusaha\ProdukUsahaController;
use App\Http\Controllers\Pengusaha\ProfilController;
use App\Http\Controllers\Pengusaha\BerandaController;
use App\Http\Controllers\Pengusaha\AuthController;




//ROUTE AUTH
Route::get('/pengusaha/masuk', [AuthController::class, 'showmasuk'])->name('masuk');
Route::get('/pengusaha/daftar', [AuthController::class, 'showdaftar'])->name('daftar');

// ROUTE BERANDA
Route::get('/pengusaha/beranda', [BerandaController::class, 'index'])->name('beranda');


// ROUTE EVENTMU
Route::get('/pengusaha/eventmu', [EventmuController::class, 'index'])->name('eventmu');
Route::get('/pengusaha/eventmu/edit', [EventmuController::class, 'edit'])->name('eventmu.edit');
Route::get('/pengusaha/eventmu/tambah', [EventmuController::class, 'tambah'])->name('eventmu.tambah');


// ROUTE INFORMASI USAHA
Route::get('/pengusaha/informasiusaha', [InformasiUsahaController::class, 'index'])->name('informasiusaha');
Route::get('/pengusaha/informasiusaha/edit', [InformasiUsahaController::class, 'edit'])->name('pengusaha.edit');


// ROUTE PRODUK USAHA
Route::get('/pengusaha/produkusaha', [ProdukUsahaController::class, 'index'])->name('produkusaha');
Route::get('/pengusaha/produkusaha/edit', [ProdukUsahaController::class, 'edit'])->name('produk.edit');
Route::get('/pengusaha/produkusaha/tambah', [ProdukUsahaController::class, 'tambah'])->name('produk.tambah');

//ROUTE PENGADUAN
Route::get('/pengusaha/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan');


//ROUTE PROFIL
Route::get('/pengusaha/profil', [ProfilController::class, 'index'])->name('profil');




//route home landing oage
Route::get('/', [HomeController::class, 'index'])->name(name: 'home');
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
