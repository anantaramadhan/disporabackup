<?php

namespace App\Http\Controllers\Admin; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataSektorController extends Controller
{
    public function index()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('admin.datasektor');
    }

    public function tambah()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('admin.sektor.tambah');
    }

     public function edit()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('admin.sektor.edit');
    }

    public function info()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('admin.sektor.info');
    }


}
