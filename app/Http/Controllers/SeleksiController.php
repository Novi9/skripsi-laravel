<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeleksiController extends Controller
{
    public function index()
    {
        return view('pages.seleksi.index');
    }

    public function tambah()
    {
        // return view();
    }
}
