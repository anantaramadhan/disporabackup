<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // Menampilkan Form Login
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    
}
