<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login () {
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
        session()->flush();
        session()->forget(['laravel_session']);
    }
}
