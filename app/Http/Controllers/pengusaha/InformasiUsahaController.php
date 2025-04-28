<?php

namespace App\Http\Controllers\Pengusaha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformasiUsahaController extends Controller
{
    /**
     * Display the information usaha view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pengusaha.informasiusaha'); // You can return the view from the pengusaha folder
    }

    public function edit()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('pengusaha.pengusaha.edit');
    }
}
