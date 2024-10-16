<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromptController;
use App\Http\Controllers\SocialiteLoginController;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/submit', [PromptController::class, 'submit'])->name('submit.prompt');
Route::post('/submit/query', [PromptController::class, 'submitQuery'])->name('submit.query');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/check-email', function () {
    $email = request('email');
    $emailExists = User::where('email', $email)->exists();
    return response()->json(['emailExists' => $emailExists]);
})->name('check-email');


Route::get('/auth/google/redirect', [SocialiteLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/auth/google/callback', [SocialiteLoginController::class, 'handleGoogleCallback'])->name('google.callback');

require __DIR__ . '/auth.php';
