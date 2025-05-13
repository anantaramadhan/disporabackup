<?php

namespace App\Http\Controllers\Admin; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilAdminController extends Controller
{
    public function index()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('admin.profil');
    }

    public function error()
    {
        // Kembalikan tampilan untuk form info usaha
        return view('error.404');
    }


}
