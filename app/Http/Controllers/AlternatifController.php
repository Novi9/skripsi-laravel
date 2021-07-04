<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

class AlternatifController extends Controller
{
    public function index()
    {
        $dataAlternatif = User::where('jabatan', 'pelamar')->get();
        // dd($dataAlternatif->toArray());
        return view('pages.alternatif.index', compact('dataAlternatif'));
    }

    public function detail()
    {
        return view('pages.alternatif.detail');
    }

    public function biodata()
    {
        return view('pages.alternatif.biodata');
    }
}
