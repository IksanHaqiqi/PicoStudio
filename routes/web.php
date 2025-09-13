<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home.index');
})->name('home');

Route::get('/desain', function () {
    return view('desain.index');
})->name('desain');

Route::get('/video', function () {
    return view('video.index');
})->name('video');

Route::get('/blog', function () {
    return view('blog   .index');
})->name('blog');

