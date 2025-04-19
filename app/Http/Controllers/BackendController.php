<?php
// app/Http/Controllers/FrontendController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index()
    {
        return view('backend.dashboard'); // Menampilkan file home.blade.php dari folder frontend
    }
}
