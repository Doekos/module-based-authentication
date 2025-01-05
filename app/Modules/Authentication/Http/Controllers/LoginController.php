<?php

namespace App\Modules\Authentication\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController
{
    public function loginForm(): View
    {
        return view('authentication::login');
    }

    public function login(Request $request): RedirectResponse
    {
        // Validate the incoming request
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
//dd(!auth()->attempt($data));
        // Attempt to authenticate the user
        if (!auth()->attempt($data)) {
            return back()->with('error', 'Invalid credentials.');
        }


        return redirect()->route('core.dashboard')->with('success', 'You have been logged in successfully.');
    }
}
