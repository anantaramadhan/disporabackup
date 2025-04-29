<?php

namespace App\Http\Controllers\Pengusaha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display the information usaha view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pengusaha.beranda'); // You can return the view from the pengusaha folder
    }

}
