<?php

use App\Models\Projects;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::get('/', function () {
    $workProjects = Projects::where('type', 'work')->get();
    $personalProjects = Projects::where('type', 'personal')->get();
    $writing = Projects::where('type', 'writing')->get();

    $page_info = [
        'workProjects' => $workProjects,
        'personalProjects' => $personalProjects,
        'writings' => $writing,
    ];

    return view('welcome', $page_info);
});

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

require __DIR__.'/auth.php';
