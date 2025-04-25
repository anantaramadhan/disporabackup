<?php

namespace App\Http\Controllers\Admin; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsahaController extends Controller
{
    public function info()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('admin.usaha.info');
    }


}
