<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/perfil/intereses', function () {
    return view('intereses');
});

Route::get('/perfil/habilidades', function () {
    return view('habilidades');
});

Route::get('/perfil/metas', function () {
    return view('metas');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
