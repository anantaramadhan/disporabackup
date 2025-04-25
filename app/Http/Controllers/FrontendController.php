<?php
// app/Http/Controllers/FrontendController.php

namespace App\Http\Controllers;

// use view;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home'); // Menampilkan file home.blade.php dari folder frontend
    }


    // Artikel Page
    public function artikel()
    {
        // Return view untuk artikel
        return view('frontend.artikel');
    }


    // Artikel terima event
   public function terimaevent  ()
    {
        // Return view untuk artikel
        return view('frontend.terimaevent');
    }

    // Artikel terima event
   public function dataevent()
   {
       // Return view untuk artikel
       return view('frontend.dataevent');
   }

   public function terimaUsaha()
    {

        return view('frontend.terimausaha');
    }

    public function dataUsaha()
    {

        return view('frontend.datausaha');
    }

    public function profil()
    {

        return view('frontend.profil');
    }


}



