<?php

namespace App\Http\Controllers\Popup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PopUpController extends Controller
{
    /**
     * Display the information usaha view.
     *
     * @return \Illuminate\View\View
     */
    public function error()
    {
        return view('popup.404'); // You can return the view from the pengusaha folder
    }

}
