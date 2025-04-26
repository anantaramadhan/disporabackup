<?php

namespace App\Http\Controllers\Admin; // Pastikan namespace sesuai dengan folder

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    // Menampilkan halaman tambah artikel
    public function tambah()
    {
        return view('admin.artikel.tambah');  // Mengarah ke view tambah.blade.php
    }

    public function edit()
    {
        return view('admin.artikel.edit');  // Mengarah ke view tambah.blade.php
    }

   
}
