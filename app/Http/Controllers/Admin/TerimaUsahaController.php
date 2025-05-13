<?php

namespace App\Http\Controllers\Admin; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TerimaUsahaController extends Controller
{
    public function index()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('admin.terimausaha');
    }

    public function info()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('admin.usaha.info');
    }


}
