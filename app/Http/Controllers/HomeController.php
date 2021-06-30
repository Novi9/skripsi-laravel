<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard.index');
    }

    public function home()
    {
        return view('pages.home.index');
    }

    public function metode()
    {
        return view('pages.home.metode');
    }

    public function tentang()
    {
        return view('pages.home.tentang');
    }
}
