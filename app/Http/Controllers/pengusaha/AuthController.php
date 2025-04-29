<?php

namespace App\Http\Controllers\Pengusaha;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showmasuk()
    {
        return view('pengusaha.auth.masuk');  // Mengarah ke view masuk.blade.php
    }

    public function showdaftar()
    {
        return view('pengusaha.auth.daftar');  // Mengarah ke view masuk.blade.php
    }
}

