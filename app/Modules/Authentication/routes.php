<?php

/** @Web */

Route::get('login', [App\Modules\Authentication\Http\Controllers\LoginController::class, 'loginForm'])->name('login');
Route::post('login', [App\Modules\Authentication\Http\Controllers\LoginController::class, 'login']);

// Registration routes
Route::get('register', [App\Modules\Authentication\Http\Controllers\RegisterController::class, 'registerForm'])->name('register');
Route::post('register', [App\Modules\Authentication\Http\Controllers\RegisterController::class, 'register']);

// Logout route
Route::post('logout', [App\Modules\Authentication\Http\Controllers\LogoutController::class, 'logout'])->name('logout');
