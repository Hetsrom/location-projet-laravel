<?php

use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;


Route::get('/', [homecontroller::class, 'home']

)->name('app_home');

Route::get('/show', [homecontroller::class, 'show']
)->name('app_show');

Route::match(['get', 'post'], '/dashboard', [homecontroller::class, 'dashboard']
)->name('dashboard');


Fortify::loginView(function () {
    return view('auth.login');
});

Fortify::registerView(function () {
    return view('auth.register');
});

