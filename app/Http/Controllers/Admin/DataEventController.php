<?php

namespace App\Http\Controllers\Admin; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataEventController extends Controller
{
    public function index()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('admin.dataevent');
    }

    public function info()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('admin.event.info');
    }

    public function hapus()
    {
        
    }


}
