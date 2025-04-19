<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan Form Login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses Login
    public function login(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Proses autentikasi
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            // Jika login berhasil, redirect ke halaman utama atau dashboard
            return redirect()->route('dashboard');
        }

        // Jika login gagal
        return back()->withErrors(['username' => 'Username atau password salah']);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
