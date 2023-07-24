<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('edomlogin');
    }

    public function login1(Request $x)
    {
        $cek = $x->validate([
            'email'=>'required',
            'password'=>'required'
            
        ]);

        if(Auth::attempt($cek))
        {
            $x->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('loginError','Maaf! anda Gagal login.');
    }

    public function logout1(Request $x)
    {
        Auth::logout();
        $x->session()->invalidate();
        $x->session()->regenerateToken();
        return redirect('/welcome');
    }
}
