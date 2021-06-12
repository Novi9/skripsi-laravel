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

    public function checkLogin(Request $request)
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

    public function checkRegister(Request $request)
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
        return redirect('/');
    }
}
