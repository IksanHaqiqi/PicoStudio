<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

});

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');


// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');


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
    return view('blog.index');
})->name('blog');

