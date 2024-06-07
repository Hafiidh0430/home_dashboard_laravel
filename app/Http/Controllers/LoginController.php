<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class LoginController extends Controller
{
    public function login () {
        
        if (Auth::check()) {
            return back(); 
        }
        
        return view('auth.login');
    }
    public function userLogin(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->to('home');
        }
        return redirect()->to('/login', 302);
    }

    public function logout () {
        Auth::logout();
        FacadesSession::flush();
        return redirect()->route('login');
    }
}
