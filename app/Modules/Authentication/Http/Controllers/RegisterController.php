<?php

namespace App\Modules\Authentication\Http\Controllers;

use App\Modules\Authentication\Actions\RegisterUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RegisterController
{
    public function registerForm(): View
    {
        return view('authentication::register');
    }

    public function register(Request $request): RedirectResponse
    {
        // Validate the incoming request
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $registerUser = new RegisterUser(
            name: $data['name'],
            email: $data['email'],
            password: $data['password'],
        );

        $registerUser->handle();

        return redirect()->route('login')->with('success', 'You have been registered successfully.');
    }
}
