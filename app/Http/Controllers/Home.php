<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class Home extends Controller
{
    public function home()
    { 
        // var_dump(auth()->check());
       
        return view('pages.home');
    }
}
