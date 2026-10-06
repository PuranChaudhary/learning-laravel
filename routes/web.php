<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Teams\TeamInvitationController;
use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher;


// Home Page
Route::inertia('/', 'welcome')->name('home');


// Dashboard
Route::prefix('{current_team}')
    ->middleware(['auth', 'verified', EnsureTeamMembership::class])
    ->group(function () {
        Route::get(
            'dashboard',
            DashboardController::class
        )->name('dashboard');
    });


// Invitations
Route::middleware(['auth'])->group(function () {

    Route::post(
        'invitations/{invitation}/accept',
        [TeamInvitationController::class, 'accept']
    )->name('invitations.accept');

    Route::delete(
        'invitations/{invitation}',
        [TeamInvitationController::class, 'decline']
    )->name('invitations.decline');
});


// About Page
Route::get('/about', function () {

    return view('about', [
        'name' => 'Guest',
        'users' => [
            'Raam',
            'Puran',
            'Sujan'
        ]
    ]);

});


// Contact Page
Route::get('/contact', function () {

    return view('contact');

});


// Gallery Page
Route::get('/gallery', function () {

    return view('gallery');

});


// About Page with Name
Route::get('/about/{name}', function ($name) {

    return view('about', [
        'name' => $name,
        'users' => [
            'Raam',
            'Puran',
            'Sujan'
        ]
    ]);

});


// Teacher Controller
Route::get('/teacher', [Teacher::class, 'index']);


// Display through Controller
Route::get('/display/{name}', [Teacher::class, 'display']);


// Settings
require __DIR__.'/settings.php';