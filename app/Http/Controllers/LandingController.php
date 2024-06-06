<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //

   

    public function loginApp()
    {
        return view('app');
    }

    public function kategori()
    {
        return view('content.main-page');
    }

    public function drama()
    {
        return view('content.drama');
    }

    public function love()
    {
        return view('content.love');
    }

    public function knowledge()
    {
        return view('content.knowledge');
    }

    public function fantasy()
    {
        return view('content.fantasy');
    }
}
