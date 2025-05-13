<?php
namespace App\Http\Controllers\Admin; // Pastikan namespace sesuai dengan folder

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaAdminController extends Controller
{
    public function index()
    {
        // Kembalikan tampilan untuk form tambah artikel
        return view('admin.beranda');
    }


}
