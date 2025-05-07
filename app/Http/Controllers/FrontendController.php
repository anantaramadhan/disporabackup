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
        return view('admin.beranda'); // Menampilkan file home.blade.php dari folder frontend
    }


    // Artikel Page
    public function artikel()
    {
        // Return view untuk artikel
        return view('admin.artikel');
    }


    // Artikel terima event
   public function terimaevent  ()
    {
        // Return view untuk artikel
        return view('admin.terimaevent');
    }

    // Artikel terima event
   public function dataevent()
   {
       // Return view untuk artikel
       return view('admin.dataevent');
   }

   public function terimaUsaha()
    {

        return view('admin.terimausaha');
    }

    public function dataUsaha()
    {

        return view('admin.datausaha');
    }


    public function datasektor()
    {

        return view('admin.datasektor');
    }


    public function profil()
    {

        return view('admin.profil');
    }


}



