<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function tambah()
    {
        // Kembalikan tampilan untuk form tambah artikel
        return view('artikel.tambah');
    }

    public function edit()
    {
        // Kembalikan tampilan untuk form tambah artikel
        return view('artikel.edit');
    }
}
