<?php

declare(strict_types=1);

use App\Http\Controllers\{DashboardController, ProgrammeController, TeamController};
use Stancl\Tenancy\Middleware\{InitializeTenancyBySubdomain, PreventAccessFromCentralDomains};
use Illuminate\Support\Facades\Route;

Route::middleware([
    'web',
    'auth',
    InitializeTenancyBySubdomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::resource('programme', ProgrammeController::class);
    Route::resource('team', TeamController::class);
});
