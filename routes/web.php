<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Email verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


require __DIR__.'/auth.php';

Route::resource('posts', PostController::class)->middleware('auth');


// Display all posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Show create a post
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Store created post
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Display a specific post
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

// Show edit a specific post
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Update a specific post
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

// Delete a specific post
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

