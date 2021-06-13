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
        // dd(Auth::user()->toArray());
        return view('pages.home.index');
    }
}
