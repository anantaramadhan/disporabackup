<?php

namespace App\Http\Controllers\Admin; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataUsahaController extends Controller
{
    public function index()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('admin.datausaha');
    }

    public function info()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('admin.usaha.info');
    }


}
