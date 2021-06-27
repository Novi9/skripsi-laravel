<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function loginLogic(Request $request)
    {
        // dd(Auth::attempt($request->only('username', 'password')));
        if(Auth::attempt($request->only('username', 'password'))) {
            if (Auth::user()->jabatan == 'spg' || Auth::user()->jabatan == 'mr' || Auth::user()->jabatan == 'pp') {
                return redirect('/input-pengajuan');
            } else if (Auth::user()->jabatan  == 'pic') {
                return redirect()->intended('/permintaan');
            } else {
                // dd($request->toArray());
                return redirect()->intended('/dashboard');
            }
        }
        return redirect('/login')->with('alert','Password atau Username, Salah!');;
    }

    public function registerLogic(Request $request)
    {
        if(Auth::attempt($request->only('username', 'password'))) {
            if (Auth::user()->role == 'spg' || Auth::user()->role == 'mr' || Auth::user()->role == 'pp') {
                return redirect('/input-pengajuan');
            } else if (Auth::user()->role  == 'pic') {
                return redirect()->intended('/permintaan');
            } else {
                return redirect()->intended('/dashboard');
            }
        }
        return redirect('/')->with('alert','Password atau Username, Salah!');;
    }

    public function logout()
    {
        Auth::logout();
        // dd(Auth::check());
        return redirect()->route('auth-login');
    }
}
