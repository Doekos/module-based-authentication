<?php

namespace App\Modules\Core\Http\Controllers;

use App\Modules\Core\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('core::dashboard', [
            'totalUsers' => User::count(),
            'completedTasks' => 0,
        ]);
    }
}
