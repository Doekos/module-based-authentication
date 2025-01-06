<?php

use App\Modules\Core\Http\Controllers\DashboardController;

Route::prefix('core')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('core.dashboard');
});
