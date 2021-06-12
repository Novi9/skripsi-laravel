<?php

namespace App\Http\Controllers;

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
}
