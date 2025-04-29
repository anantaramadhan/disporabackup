<?php

namespace App\Http\Controllers\Pengusaha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukUsahaController extends Controller
{
    /**
     * Display the information usaha view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pengusaha.produkusaha'); // You can return the view from the pengusaha folder
    }


    public function tambah()
    {
        return view('pengusaha.produk.tambah'); // You can return the view from the pengusaha folder
    }


    public function edit()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('pengusaha.produk.edit');
    }
}
