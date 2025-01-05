<?php

namespace App\Modules\Authentication\Http\Controllers;

use Illuminate\Routing\Controller;

class LogoutController extends Controller
{
    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
