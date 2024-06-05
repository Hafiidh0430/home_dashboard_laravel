<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Home;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'userLogin'])->name('login.user');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/home', [Home::class, 'home'])->middleware('auth')->name('home');
Route::get('/dashboard', [Dashboard::class, 'dashboard'])->middleware('auth')->name('dashboard');
